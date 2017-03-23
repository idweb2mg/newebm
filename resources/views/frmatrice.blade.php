@extends('layout')

@section('main')

<div class="row ">
  <div class="col-md-2 borderblue" >
    <h2> Partenaires Clés </h2>
    <button type="button" class="btn btn-primary btn-lg col-md-12" data-toggle="modal" data-target="#partenaires">
      MODIFIER
    </button>
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
                  <input class="form-control" type="text" name="TITREPARTENARIAT" id="TITRE">
                </div>
              </div>
              <div class="form-group row">
                <label for="TYPEPARTENARIAT">TYPE</label>
                <select  class=" form-control" id="inlineFormCustomSelect"  name="TYPEPARTENARIAT">
                  <option value="1">Optimisation et économies d'échelle</option>
                  <option value="2">Réduction du risque et de l'incertitude</option>
                  <option value="3">Acquisition certaines ressources et activités</option>

                </select>
              </div>
              <div class="form-group row">
                <label for="CONTENUPARTENARIAT" class="col-2 col-form-label">CONTENU</label>
                <div class="col-10">
                  <input class="form-control" type="text" name="CONTENUPARTENARIAT" id="CONTENUPARTENARIAT">
                </div>
              </div>
              <input type="hidden" name="ID_PARTENAIRE" value=""></label>
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
        <h2> Activités Clés </h2>
        <button type="button" class="btn btn-primary btn-lg col-md-12" data-toggle="modal" data-target="#activite">
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
                  <label for="ID_ACTIVITE" class="col-2 col-form-label hidden" name="ID_ACTIVITE"></label>
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
        <h2> Ressources Clés </h2>
        <button type="button" class="btn btn-primary btn-lg col-md-12" data-toggle="modal" data-target="#ressource">
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
    <h2> Proposition de Valeur </h2>
    <button type="button" class="btn btn-primary btn-lg col-md-12" data-toggle="modal" data-target="#proposition">
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
          <h2> Relation Client </h2>
          <button type="button" class="btn btn-primary btn-lg col-md-12" data-toggle="modal" data-target="#relation">
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
          <h2> Canaux de distributions </h2>
          <button type="button" class="btn btn-primary btn-lg col-md-12" data-toggle="modal" data-target="#canaux">
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
    <h2> Segments Clients </h2>
    <button type="button" class="btn btn-primary btn-lg col-md-12" data-toggle="modal" data-target="#segments">
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
    <h2> Structure de Coûts </h2>
    <button type="button" class="btn btn-primary btn-lg col-md-12" data-toggle="modal" data-target="#structure">
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
    <h2> Sources de Revenus </h2>
    <button type="button" class="btn btn-primary btn-lg col-md-12" data-toggle="modal" data-target="#source">
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
                  <option value="1">Prix du cataologue</option>
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

@section('scripts')


<!-- Include all compiled plugins (below), or include individual files as needed -->



<script>
$('form#edit_partenaires').on('submit', function(event){
  event.preventDefault();
  

  $.post(
    '{{ route('edit_partenaires') }}',
    $(this).serialize(),
    function (response) {
      console.log(response);
      if (response.status == 'success') {
        // on ferme la popin & on replie la box partenaires
        $('#partenaires').modal('hide')
      } else {
        // on affiche les messages d'erreur dans la popin
        $('<div class="alert alert-warning"><strong>Warning!</strong> Tous les champs doivent êtres remplis </div>').appendTo("#edit_partenaires");
      }
    }
  );
})

</script>
@endsection
