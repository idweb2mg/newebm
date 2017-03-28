<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

use App\MATRICE;
use App\FRMATRICE;

use App\FRPARTENARIAT;
use App\FRACTIVITESCLES;
use App\FRCANAUX;
use App\FRPROPOSITIONDEVALEUR;
use App\FRRELATIONCLIENT;
use App\FRRESSOURCESCLES;
use App\FRSEGMENTSCLIENTS;
use App\FRSOURCESDEREVENUS;
use App\FRSTRUCTUREDECOUTS;
use App\frhelp;


//$TYPEPARTENARIAT= Input::get('TYPEPARTENARIAT');
//$ID_PARTENARIAT= Input::get('ID_PARTENARIAT');
//$TYPEPARTENARIAT= Input::get('TYPEPARTENARIAT');
//$TYPEPARTENARIAT= Input::get('TYPEPARTENARIAT');

$MATRICES				= \DB::table('FRMATRICE')->get();
$FRPARTENAIRES			= \DB::table('FRPARTENARIAT')->get();
$FRACTIVITESCLES		= \DB::table('FRACTIVITESCLES')->get();
$FRCANALS				= \DB::table('FRCANAUX')->get();
$FRPROPOSITIONDEVALEURS	= \DB::table('FRPROPOSITIONDEVALEUR')->get();
$FRRELATIONCLIENTS		= \DB::table('FRRELATIONCLIENT')->get();
$FRRESSOURCESCLES		= \DB::table('FRRESSOURCESCLES')->get();
$FRSEGMENTSCLIENTS		= \DB::table('FRSEGMENTSCLIENTS')->get();
$FRSOURCESDEREVENUS		= \DB::table('FRSOURCESDEREVENUS')->get();
$FRSTRUCTUREDECOUTS		= \DB::table('FRSTRUCTUREDECOUTS')->get();

// --- Aide en ligne pour le projet, la matrice et les 9 blocs
$HelpProjet				= \DB::table('frhelp')->where('ID_HELP', 1)->get();
$HelpMatrice			= \DB::table('frhelp')->where('ID_HELP', 2)->get();
$HelpPartenariats		= \DB::table('frhelp')->where('ID_HELP', 3)->get();
$HelpActivites			= \DB::table('frhelp')->where('ID_HELP', 4)->get();
$HelpRessources			= \DB::table('frhelp')->where('ID_HELP', 5)->get();
$HelpStructure			= \DB::table('frhelp')->where('ID_HELP', 6)->get();
$HelpProposition		= \DB::table('frhelp')->where('ID_HELP', 7)->get();
$HelpRelation			= \DB::table('frhelp')->where('ID_HELP', 8)->get();
$HelpCanaux				= \DB::table('frhelp')->where('ID_HELP', 9)->get();
$HelpSegment			= \DB::table('frhelp')->where('ID_HELP', 10)->get();
$HelpSources			= \DB::table('frhelp')->where('ID_HELP', 11)->get();


//$ID_PARTENARIAT = (null!==$ID_PARTENARIAT) ? $ID_PARTENARIAT : '';

?>


@extends('layouts.app')
@section('css')
<link rel="stylesheet" href="{{ asset('mycss/matrice.css') }}" >

@endsection
@section('content')

<div class="row ">

  <div class="col-md-2 borderblue"  >
<!-- PARTENARIAT -->
  @foreach($HelpPartenariats as $HelpPartenariat)
  <button type="button" class="btn btn-default col-md-12"  data-container="body" data-toggle="popover" data-placement="bottom" data-content="{{$HelpPartenariat->CONTENU}}">  <strong id="insertion1"> Partenaires Clés</strong> </button>
  @endforeach
  <button type="button" class="btn btn-primary btn-lg col-md-12 button"  data-toggle="modal" data-target="#partenaires" >
      MODIFIER
    </button>
  @if(!$FRPARTENAIRES->isEmpty())


    <div class="modal fade" id="partenaires" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">Partenaires clés</h4>
          </div>
          <div class="modal-body">
            <form method="post" id="edit_partenaires">
              <input type="hidden" name="_token" value="{{ Session::token() }}">
              <div class="form-group row">
                <label for="TITREPARTENARIAT" class="col-2 col-form-label">TITRE</label>
                <div class="col-10">

                  @foreach($FRPARTENAIRES as $PARTENAIRE)
                  <input class="form-control" type="text" name="TITREPARTENARIAT" id="TITRE"  value ="{{$PARTENAIRE->TITREPARTENARIAT}}">

                </div>
              </div>
              <div class="form-group row">
                <label for="TYPEPARTENARIAT">TYPE</label>
                <select  class=" form-control" id="inlineFormCustomSelect" value =""  name="TYPEPARTENARIAT">

                  @if($PARTENAIRE->TYPEPARTENARIAT==1)
                  <option value="1" selected> Optimisation et économies d'échelle</option>

                  <option value="2">Réduction du risque et de l'incertitude</option>

                  <option value="3">Acquisition certaines ressources et activités</option>

                  @elseif($PARTENAIRE->TYPEPARTENARIAT==2)
                  <option value="1" > Optimisation et économies d'échelle</option>

                  <option value="2" selected>Réduction du risque et de l'incertitude</option>

                  <option value="3">Acquisition certaines ressources et activités</option>

                  @elseif($PARTENAIRE->TYPEPARTENARIAT==3)
                  <option value="1" > Optimisation et économies d'échelle</option>

                  <option value="2" >Réduction du risque et de l'incertitude</option>

                  <option value="3" selected>Acquisition certaines ressources et activités</option>
                    @endif

                </select>


              </div>
              <div class="form-group row">
                <label for="CONTENUPARTENARIAT" class="col-2 col-form-label">CONTENU</label>
                <div class="col-10">
                  <input class="form-control" type="text" name="CONTENUPARTENARIAT" value ="{{$PARTENAIRE->CONTENUPARTENARIAT}}" id="CONTENUPARTENARIAT">
                </div>
              </div>
              @endforeach

              @foreach($MATRICES as $MATRICE)
              <input type="hidden" name="ID_MATRICE" value="{{$MATRICE->ID_MATRICE}}">
              @endforeach
              <input type="hidden" name="ID_HELP" value="1">
                @foreach($FRPARTENAIRES as $PARTENAIRE)
              <input type="hidden" name="ID_PARTENARIAT" value="{{$PARTENAIRE->ID_PARTENARIAT}}">
                  @endforeach

      @else


<div class="modal fade" id="partenaires" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">Partenaires clés</h4>
          </div>
          <div class="modal-body">
            <form method="post" id="edit_partenaires">
              <input type="hidden" name="_token" value="{{ Session::token() }}">
              <div class="form-group row">
                <label for="TITREPARTENARIAT" class="col-2 col-form-label">TITRE</label>
                <div class="col-10">

                  <input class="form-control" type="text" name="TITREPARTENARIAT" id="TITRE"  value ="">

                </div>
              </div>
              <div class="form-group row">
                <label for="TYPEPARTENARIAT">TYPE</label>
                <select  class=" form-control" id="inlineFormCustomSelect" value =""  name="TYPEPARTENARIAT">

                  <option value="1" selected> Optimisation et économies d'échelle</option>

                  <option value="2">Réduction du risque et de l'incertitude</option>

                  <option value="3">Acquisition certaines ressources et activités</option>

                </select>


              </div>
              <div class="form-group row">
                <label for="CONTENUPARTENARIAT" class="col-2 col-form-label">CONTENU</label>
                <div class="col-10">
                  <input class="form-control" type="text" name="CONTENUPARTENARIAT" value ="" id="CONTENUPARTENARIAT">
                </div>
              </div>

              @foreach($MATRICES as $MATRICE)
              <input type="hidden" name="ID_MATRICE" value="{{$MATRICE->ID_MATRICE}}">
              @endforeach

  @endif




              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">FERMER</button>
                <button type="submit" name="action" value="sauvegarder" class="btn btn-primary">SAUVEGARDER</button>
              </div>
            </form>
          </div>

        </div>
      </div>
    </div>
  </div>




  <div class="col-md-2">
    <div class="row">
      <div class="col-md-12 bordergreen">
<!-- ACTIVITESCLES -->
        <strong id="insertion2"> Activités Clés </strong>
        <button type="button" class="btn btn-primary btn-lg col-md-12 button" data-toggle="modal" data-target="#activite">
        MODIFIER
        </button>
        <div class="modal fade" id="activite" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Activités Clés</h4>
              </div>
              <div class="modal-body">
                <form method="post" id="edit_activite">
                  <input type="hidden" name="_token" value="{{ Session::token() }}">
                  <div class="form-group row">
                    <label for="TITRE" class="col-2 col-form-label">TITRE</label>
                    <div class="col-10">
                      <input class="form-control" type="text" name="TITREACTIVITESCLES" id="TITRE">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="TYPE">TYPE</label>
                    <select  class="form-control" id="TYPE" name="TYPEACTIVITESCLES">
                      <option value="1">Production</option>
                      <option value="2">Résolution de problèmes</option>
                      <option value="3">Platforme/Réseau</option>

                    </select>
                  </div>
                  <div class="form-group row">
                    <label for="CONTENU" class="col-2 col-form-label">CONTENU</label>
                    <div class="col-10">
                      <input class="form-control" type="text" name="CONTENUACTIVITESCLES" id="CONTENU">
                    </div>
                  </div>

                  @foreach($MATRICES as $MATRICE)
                  <input type="hidden" name="ID_MATRICE" value="{{$MATRICE->ID_MATRICE}}">
                  @endforeach
                  <input type="hidden" name="ID_HELP" value="1">
                    @foreach($FRACTIVITESCLES as $ACTIVITE)
                  <input type="hidden" name="ID_ACTIVITESCLES" value="{{$ACTIVITE->ID_ACTIVITESCLES}}">
                  @endforeach

                  <label for="ID_ACTIVITESCLES" class="col-2 col-form-label hidden" name="ID_ACTIVITESCLES"></label>
                  <button type="button" class="btn btn-default" data-dismiss="modal">FERMER</button>
                  <button type="submit" name="action" value="sauvegarder" class="btn btn-primary">SAUVEGARDER</button>
                </form>
              </div>
              <div class="modal-footer">

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-md-12 borderyellow">
<!-- RESSOURCESCLES -->
        <strong id="insertion3"> Ressources Clés </strong>
        <button type="button" class="btn btn-primary btn-lg col-md-12 button" data-toggle="modal" data-target="#ressource">
        MODIFIER
        </button>
        <div class="modal fade" id="ressource" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Ressources Clés</h4>
              </div>
              <div class="modal-body">
                <form method="post" id="edit_ressources">
                  <input type="hidden" name="_token" value="{{ Session::token() }}">
                  <div class="form-group row">
                    <label for="TITRE" class="col-2 col-form-label">TITRE</label>
                    <div class="col-10">
                      <input class="form-control" type="text" name="TITRERESSOURCESCLES" id="TITRE">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="TYPEPHYSIQUES" class="col-2 col-form-label">TYPE PHYSIQUE</label>
                    <div class="col-10">
                      <input class="form-control" type="text" name="TYPEPHYSIQUES" id="TYPEPHYSIQUES">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="TYPEINTELLECTUELLES" class="col-2 col-form-label">TYPE INTELLECTUEL</label>
                    <div class="col-10">
                      <input class="form-control" type="text" name="TYPEINTELLECTUELLES" id="TYPEINTELLECTUELLES">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="TYPEHUMAINES" class="col-2 col-form-label">TYPE HUMAINE</label>
                    <div class="col-10">
                      <input class="form-control" type="text" name="TYPEHUMAINES" id="TYPEHUMAINES">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="TYPEFINANCIERES" class="col-2 col-form-label">TYPE FINANCIERES</label>
                    <div class="col-10">
                      <input class="form-control" type="text" name="TYPEFINANCIERES" id="TYPEFINANCIERES">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="CONTENURESSOURCESCLES" class="col-2 col-form-label">CONTENU</label>
                    <div class="col-10">
                      <input class="form-control" type="text" name="CONTENURESSOURCESCLES" id="CONTENURESSOURCESCLES">
                    </div>
                  </div>


                  @foreach($MATRICES as $MATRICE)
                  <input type="hidden" name="ID_MATRICE" value="{{$MATRICE->ID_MATRICE}}">
                  @endforeach
                  <input type="hidden" name="ID_HELP" value="1">
                    @foreach($FRRESSOURCESCLES as $RESSOURCE)
                  <input type="hidden" name="ID_RESSOURCESCLES" value="{{$RESSOURCE->ID_RESSOURCESCLES}}">
                  @endforeach


                  <label for="ID_RESSOURCESCLES" class="col-2 col-form-label hidden" name="ID_RESSOURCESCLES"></label>
                  <button type="button" class="btn btn-default" data-dismiss="modal">FERMER</button>
                  <button type="submit" name="action" value="sauvegarder" class="btn btn-primary">SAUVEGARDER</button>
                </form>
              </div>
              <div class="modal-footer">

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="col-md-2 borderblue">
<!-- PROPOSITIONDEVALEUR -->
    <strong id="insertion4"> Proposition de Valeur </strong>
    <button type="button" class="btn btn-primary btn-lg col-md-12 button" data-toggle="modal" data-target="#proposition">
      MODIFIER
    </button>
    <div class="modal fade" id="proposition" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">Proposition de Valeur</h4>
          </div>
          <div class="modal-body">
            <form method="post" id="edit_propositions">
              <input type="hidden" name="_token" value="{{ Session::token() }}">
              <div class="form-group row">
                <label for="TITREPROPOSITIONSDEVALEUR" class="col-2 col-form-label">TITRE</label>
                <div class="col-10">
                  <input class="form-control" type="text" name="TITREPROPOSITIONSDEVALEUR" id="TITREPROPOSITIONSDEVALEUR">
                </div>
              </div>
              <div class="form-group row">
                <label for="TYPE">TYPE</label>
                <select  class="form-control" id="TYPE" name="TYPEPROPOSITIONSDEVALEUR">
                  <option value="1">Nouveauté</option>
                  <option value="2"> Performance</option>
                  <option value="3">Personnalisation</option>
                  <option value="4">"Accompagner"</option>
                  <option value="5">Design</option>
                  <option value="6">Marque/Statut</option>
                  <option value="7">Prix</option>
                  <option value="8">Réduction des coûts</option>
                  <option value="9">Réduction des risques</option>
                  <option value="10">Accessibilité</option>
                  <option value="11">Commodité/ergonomie</option>

                </select>
              </div>
              <div class="form-group row">
                <label for="CONTENUPROPOSITIONSDEVALEUR" class="col-2 col-form-label">CONTENU</label>
                <div class="col-10">
                  <input class="form-control" type="text" name="CONTENUPROPOSITIONSDEVALEUR" id="CONTENUPROPOSITIONSDEVALEUR">
                </div>
              </div>


              @foreach($MATRICES as $MATRICE)
              <input type="hidden" name="ID_MATRICE" value="{{$MATRICE->ID_MATRICE}}">
              @endforeach
              <input type="hidden" name="ID_HELP" value="1">
                @foreach($FRPROPOSITIONDEVALEURS as $PROPOSITION)
              <input type="hidden" name="ID_PROPOSITIONDEVALEUR" value="{{$PROPOSITION->ID_PROPOSITIONDEVALEUR}}">
              @endforeach


              <label for="ID_PROPOSITIONDEVALEUR" class="col-2 col-form-label hidden" name="ID_PROPOSITIONDEVALEUR"></label>
              <button type="button" class="btn btn-default" data-dismiss="modal">FERMER</button>
              <button type="submit" name="action" value="sauvegarder" class="btn btn-primary">SAUVEGARDER</button>
            </form>
          </div>
          <div class="modal-footer">

          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="col-md-2">
      <div class="row">
        <div class="col-md-12 bordergreen">
<!-- RELATIONCLIENT -->
          <strong id="insertion5"> Relation Client </strong>
          <button type="button" class="btn btn-primary btn-lg col-md-12 button" data-toggle="modal" data-target="#relation">
            MODIFIER
          </button>
          <div class="modal fade" id="relation" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title" id="myModalLabel">Relation Client</h4>
                </div>
                <div class="modal-body">
                  <form method="post" id="edit_relation">
                    <input type="hidden" name="_token" value="{{ Session::token() }}">
                    <div class="form-group row">
                      <label for="TITRERELATIONCLIENT" class="col-2 col-form-label">TITRE</label>
                      <div class="col-10">
                        <input class="form-control" type="text" name="TITRERELATIONCLIENT" id="TITRERELATIONCLIENT">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="TYPE">TYPE</label>
                      <select  class="form-control" id="TYPE" name="TYPERELATIONCLIENT">
                        <option value="1">Assistance personnelle</option>
                        <option value="2">Assistance personnelle dédiée</option>
                        <option value="3">Self-service</option>
                        <option value="4">"Services automatisés"</option>
                        <option value="5">Communautés</option>
                        <option value="6">Co-création</option>

                      </select>
                    </div>
                    <div class="form-group row">
                      <label for="CONTENU" class="col-2 col-form-label">CONTENU</label>
                      <div class="col-10">
                        <input class="form-control" type="text" name="CONTENURELATIONCLIENT" id="CONTENU">
                      </div>
                    </div>

                    @foreach($MATRICES as $MATRICE)
                    <input type="hidden" name="ID_MATRICE" value="{{$MATRICE->ID_MATRICE}}">
                    @endforeach
                    <input type="hidden" name="ID_HELP" value="1">
                      @foreach($FRRELATIONCLIENTS as $RELATION)
                    <input type="hidden" name="ID_RELATIONCLIENT" value="{{$RELATION->ID_RELATIONCLIENT}}">
                    @endforeach

                    <label for="ID_RELATION" class="col-2 col-form-label hidden" name="ID_RELATION"></label>
                    <button type="button" class="btn btn-default" data-dismiss="modal">FERMER</button>
                    <button type="submit" name="action" value="sauvegarder" class="btn btn-primary">SAUVEGARDER</button>
                  </form>
                </div>
                <div class="modal-footer">

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-12 borderyellow">
<!-- CANAUX -->
          <strong id="insertion6"> Canaux de distributions </strong>
          <button type="button" class="btn btn-primary btn-lg col-md-12 button" data-toggle="modal" data-target="#canaux">
            MODIFIER
          </button>
          <div class="modal fade" id="canaux" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title" id="myModalLabel">Canaux de distributions</h4>
                </div>
                <div class="modal-body">
                  <form method="post" id="edit_canaux">
                    <input type="hidden" name="_token" value="{{ Session::token() }}">
                    <div class="form-group row">
                      <label for="TITRECANAUX" class="col-2 col-form-label">TITRE</label>
                      <div class="col-10">
                        <input class="form-control" type="text" name="TITRECANAUX" id="TITRECANAUX">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="TYPECANAUX">TYPE</label>
                      <select  class="form-control" id="TYPECANAUX" name="TYPECANAUX">
                        <option value="1">Force de vente</option>
                        <option value="2">Ventes en ligne</option>
                        <option value="3">Magasins en propre</option>
                        <option value="4">"Magasins des partenaires"</option>
                        <option value="5">Grossiste</option>
                      </select>
                    </div>
                    <div class="form-group row">
                      <label for="RECONNAISSANCE" class="col-2 col-form-label">RECONNAISSANCE</label>
                      <div class="col-10">
                        <input class="form-control" type="text" name="RECONNAISSANCE" id="RECONNAISSANCE">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="EVALUATION" class="col-2 col-form-label">EVALUATION</label>
                      <div class="col-10">
                        <input class="form-control" type="text" name="EVALUATION" id="EVALUATION">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="ACHAT" class="col-2 col-form-label">ACHAT</label>
                      <div class="col-10">
                        <input class="form-control" type="text" name="ACHAT" id="ACHAT">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="PRESTATION" class="col-2 col-form-label">PRESTATIONS</label>
                      <div class="col-10">
                        <input class="form-control" type="text" name="PRESTATION" id="PRESTATION">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="VENTE" class="col-2 col-form-label">VENTE</label>
                      <div class="col-10">
                        <input class="form-control" type="text" name="VENTE" id="VENTE">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="CONTENUCANAUX" class="col-2 col-form-label">CONTENU</label>
                      <div class="col-10">
                        <input class="form-control" type="text" name="CONTENUCANAUX" id="CONTENU">
                      </div>
                    </div>

                    @foreach($MATRICES as $MATRICE)
                    <input type="hidden" name="ID_MATRICE" value="{{$MATRICE->ID_MATRICE}}">
                    @endforeach
                    <input type="hidden" name="ID_HELP" value="1">
                      @foreach($FRCANALS as $CANAL)
                    <input type="hidden" name="ID_CANAUX" value="{{$CANAL->ID_CANAUX}}">
                    @endforeach

                    <label for="ID_CANAUX" class="col-2 col-form-label hidden" name="ID_CANAUX"></label>
                    <button type="button" class="btn btn-default" data-dismiss="modal">FERMER</button>
                    <button type="submit" name="action" value="sauvegarder" class="btn btn-primary">SAUVEGARDER</button>
                  </form>
                </div>
                <div class="modal-footer">

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
  </div>

  <div class="col-md-2 borderblue">
<!-- SEGMENTSCLIENTS -->
  <strong id="insertion7"> Segments Clients </strong>
    <button type="button" class="btn btn-primary btn-lg col-md-12 button" data-toggle="modal" data-target="#segments">
      MODIFIER
    </button>
    <div class="modal fade" id="segments" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">Segments Clients</h4>
          </div>
          <div class="modal-body">
            <form method="post" id="edit_segments">
              <input type="hidden" name="_token" value="{{ Session::token() }}">
              <div class="form-group row">
                <label for="TITRESEGMENTS" class="col-2 col-form-label">TITRE</label>
                <div class="col-10">
                  <input class="form-control" type="text" name="TITRESEGMENTS" id="TITRESEGMENTS">
                </div>
              </div>
              <div class="form-group">
                <label for="TYPE">TYPE</label>
                <select  class="form-control" id="TYPE" name="TYPESEGMENTS">
                  <option value="1">Marché de masse</option>
                  <option value="2">Marché de niche</option>
                  <option value="3">Marché segmenté</option>
                  <option value="4">Marché diversifié</option>
                  <option value="5">Marchés multilatéraux</option>
                </select>
              </div>
              <div class="form-group row">
                <label for="CONTENU" class="col-2 col-form-label">CONTENU</label>
                <div class="col-10">
                  <input class="form-control" type="text" name="CONTENUSEGMENTS" id="CONTENU">
                </div>
              </div>


              @foreach($MATRICES as $MATRICE)
              <input type="hidden" name="ID_MATRICE" value="{{$MATRICE->ID_MATRICE}}">
              @endforeach
              <input type="hidden" name="ID_HELP" value="1">
                @foreach($FRSEGMENTSCLIENTS as $SEGMENT)
              <input type="hidden" name="ID_SEGMENTSCLIENTS" value="{{$SEGMENT->ID_SEGMENTSCLIENTS}}">
              @endforeach


              <label for="ID_SEGMENTS" class="col-2 col-form-label hidden" name="ID_SEGMENTS"></label>
              <button type="button" class="btn btn-default" data-dismiss="modal">FERMER</button>
              <button type="submit" name="action" value="sauvegarder" class="btn btn-primary">SAUVEGARDER</button>
            </form>
          </div>
          <div class="modal-footer">

          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-md-5 bordergrey">
<!-- STRUCTUREDECOUTS -->
    <strong id="insertion8"> Structure de Coûts </strong>
    <button type="button" class="btn btn-primary btn-lg col-md-12 button" data-toggle="modal" data-target="#structure">
      MODIFIER
    </button>
    <div class="modal fade" id="structure" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">Structure de coûts</h4>
          </div>
          <div class="modal-body">
            <form method="post" id="edit_structures">
              <input type="hidden" name="_token" value="{{ Session::token() }}">
              <label for="TITRE" class="col-2 col-form-label">TITRE</label>
              <div class="col-10">
                <input class="form-control" type="text" name="TITRESTRUCTUREDECOUTS" id="TITRE">
              </div>
            </div>
            <div class="form-group">
              <label for="TYPE">TYPE</label>
              <select  class="form-control" id="TYPE" name="TYPESTRUCTUREDECOUTS">
                <option value="1">Marché de masse</option>
                <option value="2">Marché de niche</option>
              </select>
            </div>
            <div class="form-group row">
              <label for="COUTSFIXES" class="col-2 col-form-label">COUTS FIXES</label>
              <div class="col-10">
                <input class="form-control" type="text" name="COUTSFIXES" id="COUTSFIXES">
              </div>
            </div>
            <div class="form-group row">
              <label for="COUTSVARIABLES" class="col-2 col-form-label">COUTS VARIABLES</label>
              <div class="col-10">
                <input class="form-control" type="text" name="COUTSVARIABLES" id="COUTSVARIABLES">
              </div>
            </div>
            <div class="form-group row">
              <label for="ECONOMIESDECHELLES" class="col-2 col-form-label">ECONOMIES DECHELLES</label>
              <div class="col-10">
                <input class="form-control" type="text" name="ECONOMIESDECHELLES" id="ECONOMIESDECHELLES">
              </div>
            </div>
            <div class="form-group row">
              <label for="ECONOMIESENVERGURE" class="col-2 col-form-label">ECONOMIES ENVERGURE</label>
              <div class="col-10">
                <input class="form-control" type="text" name="ECONOMIESENVERGURE" id="ECONOMIESENVERGURE">
              </div>
            </div>

            @foreach($MATRICES as $MATRICE)
            <input type="hidden" name="ID_MATRICE" value="{{$MATRICE->ID_MATRICE}}">
            @endforeach
            <input type="hidden" name="ID_HELP" value="1">
              @foreach($FRSTRUCTUREDECOUTS as $STRUCTURE)
            <input type="hidden" name="ID_STRUCTUREDECOUTS" value="{{$STRUCTURE->ID_STRUCTUREDECOUTS}}">
            @endforeach



            <label for="ID_STRUCTUREDECOUTS" class="col-2 col-form-label hidden" name="ID_STRUCTUREDECOUTS"></label>
            <button type="button" class="btn btn-default" data-dismiss="modal">FERMER</button>
            <button type="submit" name="action" value="sauvegarder" class="btn btn-primary">SAUVEGARDER</button>
            </form>
          </div>
          <div class="modal-footer">

          </div>
        </div>
      </div>
    </div>

  <div class="col-md-5 borderorange">
 <!-- SOURCESDEREVENUS -->
    <strong id="insertion9"> Sources de Revenus </strong>
    <button type="button" class="btn btn-primary btn-lg col-md-12 button" data-toggle="modal" data-target="#source">
      MODIFIER
    </button>
    <div class="modal fade" id="source" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">Sources de Revenus</h4>
          </div>
          <div class="modal-body">
            <form method="post" id="edit_sources">
              <input type="hidden" name="_token" value="{{ Session::token() }}">
              <div class="form-group row">
                <label for="TITRE" class="col-2 col-form-label">TITRE</label>
                <div class="col-10">
                  <input class="form-control" type="text" name="TITRESOURCESDEREVENUS" id="TITRE">
                </div>
              </div>
              <div class="form-group row">
                <label for="TYPE">TYPE</label>
                <select  class="form-control" id="TYPE" name="TYPESOURCESDEREVENU">
                  <option value="1">Vente de biens</option>
                  <option value="2">Droit d'usage</option>
                  <option value="3">Abonnements</option>
                  <option value="4">Location/Prêt</option>
                  <option value="5">Licensing</option>
                </select>
              </div>
              <div class="form-group row">
                <label for="PRIXFIXE">PRIXFIXE</label>
                <select  class="form-control" id="PRIXFIXE" name="PRIXFIXE">
                  <option value="1">Prix du catalogue</option>
                  <option value="2">Caractéristiques du prix</option>
                  <option value="3">Segment de clientèle</option>
                  <option value="4">Volume</option>
                </select>
              </div>
              <div class="form-group row">
                <label for="PRIXVARIABLE">PRIXVARIABLE</label>
                <select  class="form-control" id="PRIXVARIABLE" name="PRIXVARIABLE">

                  <option value="1">Négociation</option>
                  <option value="2">Yield management</option>
                  <option value="3">Marché en temps réel</option>
                  <option value="4"> Enchères</option>
                </select>
              </div>
              <div class="form-group row">
                <label for="CONTENU" class="col-2 col-form-label">CONTENU</label>
                <div class="col-10">
                  <input class="form-control" type="text" name="CONTENUSOURCESDEREVENUS" id="CONTENU">
                </div>
              </div>


              @foreach($MATRICES as $MATRICE)
              <input type="hidden" name="ID_MATRICE" value="{{$MATRICE->ID_MATRICE}}">
              @endforeach
              <input type="hidden" name="ID_HELP" value="1">
                @foreach($FRSOURCESDEREVENUS as $SOURCE)
              <input type="hidden" name="ID_SOURCESDEREVENUS" value="{{$SOURCE->ID_SOURCESDEREVENUS}}">
              @endforeach



              <label for="ID_SOURCE" class="col-2 col-form-label hidden" name="ID_SOURCE"></label>
              <button type="button" class="btn btn-default" data-dismiss="modal">FERMER</button>
              <button type="submit" name="action" value="sauvegarder" class="btn btn-primary">SAUVEGARDER</button>
            </form>
          </div>
          <div class="modal-footer">

          </div>
        </div>
      </div>
    </div>
  </div>
</div>


@endsection

@section('script')


<!-- Include all compiled plugins (below), or include individual files as needed -->



<script>
//
// =================== edit_partenaires ===================================
//
$('form#edit_partenaires').on('submit', function(event){
  event.preventDefault();


  $.post(
    '{{ route('edit_partenaires') }}',
    $(this).serialize(),
    function (response) {
      console.log(response);
      if (response.status == 'success') {
        // on ferme la popin & on replie la box partenaires
        $('#partenaires').modal('hide');



       $('@foreach($FRPARTENAIRES as $PARTENAIRE)<div id="refresh" ><p class="navbar-text">{{$PARTENAIRE->TITREPARTENARIAT}}</p><br/><p class="navbar-text">{{$PARTENAIRE->TYPEPARTENARIAT}}</p><br/><p class="navbar-text">{{$PARTENAIRE->CONTENUPARTENARIAT}}</p></div>@endforeach').insertAfter("#insertion1");
        //$("#refresh").load('/newebm/public/MATRICE/1');
      /* function refresh() {
       $.ajax({
           url: '/newebm/public/MATRICE/1', // Ton fichier ou se trouve ton chat
           success:
               function(retour){
               $('#refresh').html(retour); // rafraichi toute ta DIV "bien sur il lui faut un id "
           }
       });

     }*/

//setInterval("refresh()", 1000)
      } else {
        // on affiche les messages d'erreur dans la popin
        $('<div class="alert alert-warning"><strong>Warning!</strong> Tous les champs doivent êtres remplis </div>').appendTo("#edit_partenaires");
      }
    }
  );
})


//
// =================== edit_activite ===================================
//
$('form#edit_activite').on('submit', function(event){
  event.preventDefault();


  $.post(
    '{{ route('edit_activite') }}',
    $(this).serialize(),
    function (response) {
      console.log(response);
      if (response.status == 'success') {
        // on ferme la popin & on replie la box activite
        $('#activite').modal('hide');



       $('@foreach($FRACTIVITESCLES as $ACTIVITE)<div id="refresh" ><p class="navbar-text">{{$ACTIVITE->TITREACTIVITESCLES}}</p><br/><p class="navbar-text">{{$ACTIVITE->TYPEACTIVITESCLES}}</p><br/><p class="navbar-text">{{$ACTIVITE->CONTENUACTIVITESCLES}}</p></div>@endforeach').insertAfter("#insertion2");
        //$("#refresh").load('/newebm/public/MATRICE/1');
      /* function refresh() {
       $.ajax({
           url: '/newebm/public/MATRICE/1', // Ton fichier ou se trouve ton chat
           success:
               function(retour){
               $('#refresh').html(retour); // rafraichi toute ta DIV "bien sur il lui faut un id "
           }
       });

     }*/

//setInterval("refresh()", 1000)
      } else {
        // on affiche les messages d'erreur dans la popin
        $('<div class="alert alert-warning"><strong>Warning!</strong> Tous les champs doivent êtres remplis </div>').appendTo("#edit_activite");
      }
    }
  );
})


//
// =================== edit_ressources===================================
//
$('form#edit_ressources').on('submit', function(event){
  event.preventDefault();


  $.post(
    '{{ route('edit_ressources') }}',
    $(this).serialize(),
    function (response) {
      console.log(response);
      if (response.status == 'success') {
        // on ferme la popin & on replie la box ressources
        $('#ressources').modal('hide');

       //$('@foreach($FRRESSOURCESCLES as $RESSOURCE)<div id="refresh" ><p class="navbar-text">{{$RESSOURCE->TITRERESSOURCESCLES}}</p><br/><p class="navbar-text">{{$RESSOURCE->TYPEPHYSIQUES}}</p><br/><p class="navbar-text">{{$RESSOURCE->TYPEINTELLECTUELLES}}</p><br/><p class="navbar-text">{{$RESSOURCE->TYPEHUMAINES}}</p><br/><p class="navbar-text">{{$RESSOURCE->TYPEFINANCIERES}}</p><br/><p class="navbar-text">{{$RESSOURCE->CONTENURESSOURCESCLES}}</p></div>@endforeach').insertAfter("#insertion3");
       $('@foreach($FRRESSOURCESCLES as $RESSOURCE)<div id="refresh" ><p class="navbar-text">{{$RESSOURCE->TYPEPHYSIQUES}}</p><br/><p class="navbar-text">{{$RESSOURCE->TYPEINTELLECTUELLES}}</p><br/><p class="navbar-text">{{$RESSOURCE->TYPEHUMAINES}}</p><br/><p class="navbar-text">{{$RESSOURCE->TYPEFINANCIERES}}</p><br/><p class="navbar-text">{{$RESSOURCE->CONTENURESSOURCESCLES}}</p><p class="navbar-text">{{$RESSOURCE->TITRERESSOURCESCLES}}</p><br/></div>@endforeach').insertAfter("#insertion3");

        //$("#refresh").load('/newebm/public/MATRICE/1');
      /* function refresh() {
       $.ajax({
           url: '/newebm/public/MATRICE/1', // Ton fichier ou se trouve ton chat
           success:
               function(retour){
               $('#refresh').html(retour); // rafraichi toute ta DIV "bien sur il lui faut un id "
           }
       });

     }*/

//setInterval("refresh()", 1000)
      } else {
        // on affiche les messages d'erreur dans la popin
        $('<div class="alert alert-warning"><strong>Warning!</strong> Tous les champs doivent êtres remplis </div>').appendTo("#edit_ressources");
      }
    }
  );
})


//
// =================== edit_propositions===================================
//
$('form#edit_propositions').on('submit', function(event){
  event.preventDefault();


  $.post(
    '{{ route('edit_propositions') }}',
    $(this).serialize(),
    function (response) {
      console.log(response);
      if (response.status == 'success') {
        // on ferme la popin & on replie la box propositions
        $('#propositions').modal('hide');

       $('@foreach($FRPROPOSITIONDEVALEURS as $PROPOSITION)<div id="refresh" ><p class="navbar-text">{{$PROPOSITION->TITREPROPOSITIONDEVALEUR}}</p><br/><p class="navbar-text">{{$PROPOSITION->TYPEPROPOSITIONDEVALEUR}}</p><br/><p class="navbar-text">{{$PROPOSITION->CONTENUPROPOSITIONDEVALEUR}}</p></div>@endforeach').insertAfter("#insertion4");
        //$("#refresh").load('/newebm/public/MATRICE/1');

      /* function refresh() {
       $.ajax({
           url: '/newebm/public/MATRICE/1', // Ton fichier ou se trouve ton chat
           success:
               function(retour){
               $('#refresh').html(retour); // rafraichi toute ta DIV "bien sur il lui faut un id "
           }
       });

     }*/

//setInterval("refresh()", 1000)
      } else {
        // on affiche les messages d'erreur dans la popin
        $('<div class="alert alert-warning"><strong>Warning!</strong> Tous les champs doivent êtres remplis </div>').appendTo("#edit_propositions");
      }
    }
  );
})



//
// =================== edit_relation ===================================
//
$('form#edit_relation').on('submit', function(event){
  event.preventDefault();


  $.post(
    '{{ route('edit_relation') }}',
    $(this).serialize(),
    function (response) {
      console.log(response);
      if (response.status == 'success') {
        // on ferme la popin & on replie la box propositions
        $('#relation').modal('hide');

       $('@foreach($FRRELATIONCLIENTS as $RELATION)<div id="refresh" ><p class="navbar-text">{{$RELATION->TITRERELATIONCLIENT}}</p><br/><p class="navbar-text">{{$RELATION->TYPERELATIONCLIENT}}</p><br/><p class="navbar-text">{{$RELATION->CONTENURELATIONCLIENT}}</p></div>@endforeach').insertAfter("#insertion5");
        //$("#refresh").load('/newebm/public/MATRICE/1');
      /* function refresh() {
       $.ajax({
           url: '/newebm/public/MATRICE/1', // Ton fichier ou se trouve ton chat
           success:
               function(retour){
               $('#refresh').html(retour); // rafraichi toute ta DIV "bien sur il lui faut un id "
           }
       });

     }*/

//setInterval("refresh()", 1000)
      } else {
        // on affiche les messages d'erreur dans la popin
        $('<div class="alert alert-warning"><strong>Warning!</strong> Tous les champs doivent êtres remplis </div>').appendTo("#edit_relation");
      }
    }
  );
})


//
// =================== edit_canaux ===================================
//
$('form#edit_canaux').on('submit', function(event){
  event.preventDefault();


  $.post(
    '{{ route('edit_canaux') }}',
    $(this).serialize(),
    function (response) {
      console.log(response);
      if (response.status == 'success') {
        // on ferme la popin & on replie la box propositions
        $('#canaux').modal('hide');

       $('@foreach($FRCANALS as $CANAL)<div id="refresh" ><p class="navbar-text">{{$CANAL->TITRECANAUX}}</p><br/><p class="navbar-text">{{$CANAL->RECONNAISSANCE}}</p><br/><p class="navbar-text">{{$CANAL->EVALUATION}}</p><br/><p class="navbar-text">{{$CANAL->ACHAT}}</p><br/><p class="navbar-text">{{$CANAL->PRESTATION}}</p><br/><p class="navbar-text">{{$CANAL->VENTE}}</p><br/><p class="navbar-text">{{$CANAL->TYPECANAUX}}</p><br/><p class="navbar-text">{{$CANAL->CONTENUCANAUX}}</p></div>@endforeach').insertAfter("#insertion6");
        //$("#refresh").load('/newebm/public/MATRICE/1');
      /* function refresh() {
       $.ajax({
           url: '/newebm/public/MATRICE/1', // Ton fichier ou se trouve ton chat
           success:
               function(retour){
               $('#refresh').html(retour); // rafraichi toute ta DIV "bien sur il lui faut un id "
           }
       });

     }*/

//setInterval("refresh()", 1000)
      } else {
        // on affiche les messages d'erreur dans la popin
        $('<div class="alert alert-warning"><strong>Warning!</strong> Tous les champs doivent êtres remplis </div>').appendTo("#edit_canaux");
      }
    }
  );
})


//
// =================== edit_segments ===================================
//
$('form#edit_segments').on('submit', function(event){
  event.preventDefault();


  $.post(
    '{{ route('edit_segments') }}',
    $(this).serialize(),
    function (response) {
      console.log(response);
      if (response.status == 'success') {
        // on ferme la popin & on replie la box propositions
        $('#canaux').modal('hide');

       $('@foreach($FRSEGMENTSCLIENTS as $SEGMENT)<div id="refresh" ><p class="navbar-text">{{$SEGMENT->TITRESEGMENTSCLIENTS}}</p><br/><p class="navbar-text">{{$SEGMENT->TYPESEGMENTSCLIENTS}}</p><br/><p class="navbar-text">{{$SEGMENT->CONTENUSEGMENTSCLIENTS}}</p></div>@endforeach').insertAfter("#insertion7");
        //$("#refresh").load('/newebm/public/MATRICE/1');
      /* function refresh() {
       $.ajax({
           url: '/newebm/public/MATRICE/1', // Ton fichier ou se trouve ton chat
           success:
               function(retour){
               $('#refresh').html(retour); // rafraichi toute ta DIV "bien sur il lui faut un id "
           }
       });

     }*/

//setInterval("refresh()", 1000)
      } else {
        // on affiche les messages d'erreur dans la popin
        $('<div class="alert alert-warning"><strong>Warning!</strong> Tous les champs doivent êtres remplis </div>').appendTo("#edit_segments");
      }
    }
  );
})


//
// =================== edit_structures ===================================
//
$('form#edit_structures').on('submit', function(event){
  event.preventDefault();


  $.post(
    '{{ route('edit_structures') }}',
    $(this).serialize(),
    function (response) {
      console.log(response);
      if (response.status == 'success') {
        // on ferme la popin & on replie la box propositions
        $('#canaux').modal('hide');

       $('@foreach($FRSTRUCTUREDECOUTS as $STRUCTURE)<div id="refresh" ><p class="navbar-text">{{$STRUCTURE->TITRESTRUCTUREDECOUTS}}</p><br/><p class="navbar-text">{{$STRUCTURE->TYPESTRUCTUREDECOUTS}}</p><br/><p class="navbar-text">{{$STRUCTURE->COUTSFIXES}}</p><br/><p class="navbar-text">{{$STRUCTURE->COUTSVARIABLES}}</p><br/><p class="navbar-text">{{$STRUCTURE->ECONOMIESDECHELLES}}</p><br/><p class="navbar-text">{{$STRUCTURE->ECONOMIESENVERGURE}}</p><br/><p class="navbar-text">{{$STRUCTURE->CONTENUSTRUCTUREDECOUTS}}</p></div>@endforeach').insertAfter("#insertion8");
        //$("#refresh").load('/newebm/public/MATRICE/1');
      /* function refresh() {
       $.ajax({
           url: '/newebm/public/MATRICE/1', // Ton fichier ou se trouve ton chat
           success:
               function(retour){
               $('#refresh').html(retour); // rafraichi toute ta DIV "bien sur il lui faut un id "
           }
       });

     }*/

//setInterval("refresh()", 1000)
      } else {
        // on affiche les messages d'erreur dans la popin
        $('<div class="alert alert-warning"><strong>Warning!</strong> Tous les champs doivent êtres remplis </div>').appendTo("#edit_structures");
      }
    }
  );
})


//
// =================== edit_sources ===================================
//
$('form#edit_sources').on('submit', function(event){
  event.preventDefault();


  $.post(
    '{{ route('edit_sources') }}',
    $(this).serialize(),
    function (response) {
      console.log(response);
      if (response.status == 'success') {
        // on ferme la popin & on replie la box propositions
        $('#canaux').modal('hide');

       $('@foreach($FRSOURCESDEREVENUS as $SOURCE)<div id="refresh" ><p class="navbar-text">{{$SOURCE->TITRESOURCESDEREVENUS}}</p><br/><p class="navbar-text">{{$SOURCE->TYPESOURCESDEREVENU}}</p><br/><p class="navbar-text">{{$SOURCE->PRIXFIXE}}</p><br/><p class="navbar-text">{{$SOURCE->PRIXVARIABLE}}</p><br/>p class="navbar-text">{{$SOURCE->CONTENUSOURCESDEREVENUS}}</p></div>@endforeach').insertAfter("#insertion9");
        //$("#refresh").load('/newebm/public/MATRICE/1');
      /* function refresh() {
       $.ajax({
           url: '/newebm/public/MATRICE/1', // Ton fichier ou se trouve ton chat
           success:
               function(retour){
               $('#refresh').html(retour); // rafraichi toute ta DIV "bien sur il lui faut un id "
           }
       });

     }*/

//setInterval("refresh()", 1000)
      } else {
        // on affiche les messages d'erreur dans la popin
        $('<div class="alert alert-warning"><strong>Warning!</strong> Tous les champs doivent êtres remplis </div>').appendTo("#edit_sources");
      }
    }
  );
});

$(function () {
  $('[data-toggle="popover"]').popover();
});


</script>
@endsection
