<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

use App\User;
use App\FRPROJET;

$users= \DB::table('users')->count();
$projets= \DB::table('frprojet')->count();


$FRPROJETS = \DB::table('FRPROJET')->where('ID_USERS', '4')->get();
$HelpProjet = \DB::table('frhelp')->where('ID_HELP', '1')->get();
?>

@extends('layouts.app')


@if (\Auth::guest())
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@else
@if (Auth::user()->ID_ROLES==1)
@section('css')

<link href="{{asset('css/sb-admin.css')}}" rel="stylesheet">

<!-- Morris Charts CSS -->
<link href="{{asset('css/plugins/morris.css')}}" rel="stylesheet">
<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
@endsection
@section('content')
<div class="container">
  <div class="col-lg-3 col-md-6">
      <div class="panel panel-green">
          <div class="panel-heading">
              <div class="row">
                  <div class="col-xs-3">
                      <i class="fa fa-user fa-5x"></i>
                  </div>
                  <div class="col-xs-9 text-right">

                      <div class="huge">{{ $users  }}</div>

                      <div>Nombres utilisateurs</div>
                  </div>
              </div>
          </div>
          <a href="{{route('admin')}}">
              <div class="panel-footer">
                  <span class="pull-left">Détails d'utilisateurs</span>
                  <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                  <div class="clearfix"></div>
              </div>
          </a>
      </div>
  </div>
  <div class="col-lg-3 col-md-6">
      <div class="panel panel-primary">
          <div class="panel-heading">
              <div class="row">
                  <div class="col-xs-3">
                      <i class="fa fa-file-text fa-5x"></i>
                  </div>
                  <div class="col-xs-9 text-right">

                      <div class="huge">{{ $projets  }}</div>

                      <div>Nombres Projets</div>
                  </div>
              </div>
          </div>
          <a href="{{route('admin')}}">
              <div class="panel-footer">
                  <span class="pull-left">Détails de projets</span>
                  <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                  <div class="clearfix"></div>
              </div>
          </a>
      </div>
  </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title"><i class="fa fa-bar-chart-o fa-fw"></i> Inscription Utilisateur</h3>
            </div>
            <div class="panel-body">
                <div id="morris-area-chart"></div>
            </div>
        </div>
    </div>
</div>


@endsection
@section('script')
<!-- Morris Charts JavaScript -->
<script>
  var edithomeRoute = '{{ route('edithome') }}' + '/';
</script>
 <script src="{{asset('js/raphael.min.js')}}"></script>
 <script src="{{asset('js/morris.min.js')}}"></script>
<script src="{{asset('js/morris-data.js')}}"></script>

@endsection
@elseif(Auth::user()->ID_ROLES==2)



<!--  PARTIE  MODERATEUR  -- >

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">TABLEAU DE BORD PROJET</div>

                    <div class="panel-body">
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#newprojet">Créer un nouveau projet</button>


                    <div class="modal fade" id="newprojet" tabindex="-1" role="dialog" >

                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="exampleModalLabel">Nouveau projet</h4>
                          </div>
                          <form id="new_projet">
                            <div class="modal-body">

                                <div class="form-group">
                                <input type="hidden" name="_token" value="{{ Session::token() }}">

                                  <label for="LIBELLEPROJET" class="control-label">Nom du projet:</label>
                                  <input type="text" id="LIBELLEPROJET" name="LIBELLEPROJET" required placeholder="projet, raison sociale" class="form-control" />
                                </div>

                                <div class="form-group">
                                  <label for="categorie" class="control-label">Catégorie d'activité:</label>

                                  <select class="form-control" id="TYPEPROJET" name="TYPEPROJET" required>
                                          <option value="null" selected disabled>Choisir...</option>
                                          <option value="1">Business to Consumer</option>
                                          <option value="2">Business to Business</option>
                                          <option value="3">Business to Business to Consumer</option>
                                          <option value="4">Business to Gov</option>
                                      </select>
                                  <input type="hidden" name="ID_LANGUE" value="1">
                                  <input type="hidden" name="ID_HELP" value="1">
                                  <input type="hidden" name="ID_USERS" value="4">
                                </div>

                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
                              <button type="submit" class="btn btn-primary" name="action" value="enregistrer">Enregistrer</button>
                            </div>
                        </form>
                        </div>
                      </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


            <div class="row">
                <div class="col-md-12 ">
                    <div class="panel panel-default">
                        <div class="panel-heading"><h3>Liste de projets</h3></div>



@if(!$FRPROJETS->isEmpty())

                    <table class="table table-striped">
                        <tr>

                            <th>LIBELLE PROJET</th>
                            <th>TYPE PROJET</th>
                            <th>DATE CREATION</th>
                            <th>DATE ENREGISTREMENT</th>
                            <th colspan="2" style="text-align: center;">ACTIONS</th>
                        </tr>
                        @foreach($FRPROJETS as $PROJET)
                        <tr>

                            <td>{{$PROJET->LIBELLEPROJET}}</td>

                            <td>
                            @if($PROJET->TYPEPROJET == 1) Business to Consumer
                            @elseif($PROJET->TYPEPROJET == 2) Business to Business
                            @elseif($PROJET->TYPEPROJET == 3) Business to Business to Consumer
                            @elseif($PROJET->TYPEPROJET == 4) Business to Gov
                            @endif

                            </td>
                            <td>{{$PROJET->DATECREATION}}</td>
                            <td>{{$PROJET->DATEENREGISTREMENT}}</td>

                            <td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modifprojet">Modifier</button></td>
                            <td><a href="/newebm_integration/public/MATRICE/1" target="_blank" class="btn btn-primary btn-sm active" role="button">Busness model</a></td>
                            @endforeach
                        </tr>
                    </table>

   <div class="modal fade" id="modifprojet" tabindex="-1" role="dialog" >

                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="exampleModalLabel">Nouveau projet</h4>
                          </div>
                          <div class="modal-body">

                            <form id="edit_projet">

                              <div class="form-group">
                               <input type="hidden" name="_token" value="{{ Session::token() }}">
                                <label for="LIBELLEPROJET" class="control-label">Nom du projet:</label>
                                <input type="text" id="LIBELLEPROJET" name="LIBELLEPROJET" required placeholder="projet, raison sociale" class="form-control" value="{{$PROJET->LIBELLEPROJET}}" />
                              </div>

                              <div class="form-group">
                                <label for="categorie" class="control-label">Catégorie d'activité:</label>

                                <select class="form-control" id="TYPEPROJET" name="TYPEPROJET" value="">
                                        @if($PROJET->TYPEPROJET==1)
                                        <option value="null" >Choisir...</option>
                                        <option value="1" selected>Business to Consumer</option>
                                        <option value="2">Business to Business</option>
                                        <option value="3">Business to Business to Consumer</option>
                                        <option value="4">Business to Gov</option>
                                        @elseif($PROJET->TYPEPROJET==2)
                                        <option value="null" >Choisir...</option>
                                        <option value="1">Business to Consumer</option>
                                        <option value="2" selected>Business to Business</option>
                                        <option value="3">Business to Business to Consumer</option>
                                        <option value="4">Business to Gov</option>
                                        @elseif($PROJET->TYPEPROJET==3)
                                        <option value="null" >Choisir...</option>
                                        <option value="1">Business to Consumer</option>
                                        <option value="2" >Business to Business</option>
                                        <option value="3" selected>Business to Business to Consumer</option>
                                        <option value="4">Business to Gov</option>
                                        @elseif($PROJET->TYPEPROJET==4)
                                        <option value="null" >Choisir...</option>
                                        <option value="1">Business to Consumer</option>
                                        <option value="2" >Business to Business</option>
                                        <option value="3" >Business to Business to Consumer</option>
                                        <option value="4" selected>Business to Gov</option>
                                        @endif


                                    </select>
                                <input type="hidden" name="ID_LANGUE" value="1">
                                <input type="hidden" name="ID_HELP" value="1">
                                <input type="hidden" name="ID_USERS" value="1">
                              </div>
                              <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
                            <button type="submit" class="btn btn-primary" name="action" value="enregistrer">Enregistrer</button>
                          </div>
                            </form>
                          </div>

                        </div>
                      </div>
                    </div>








                    </div>
                </div>
            </div>

</div>

@endif



@endsection


@section('script')

<script>


$('form#edit_projet').on('submit', function(event){
  event.preventDefault();

  $.post(
    '{{ route('edit_projet') }}',
    $(this).serialize(),
    function (response) {
      console.log(response);

      if (response.status == 'success') {
        // on ferme la popin & on replie la box partenaires
        $('#modifprojet').modal('hide');


        @foreach($FRPROJETS as $PROJET)
       $('<div id="refresh" ><p class="navbar-text">{{$PROJET->LIBELLEPROJET}}</p><br/><p class="navbar-text">{{$PROJET->TYPEPROJET}}</p></div>').insertAfter("#insertion1");
       @endforeach
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
        $('<div class="alert alert-warning"><strong>Warning!</strong> Tous les champs doivent êtres remplis </div>').appendTo("#edit_projet");
      }
    }
  );
//script pour rafraichir la page après l'enregistrement
  window.location.replace('{{ route('home') }}');
});



$('form#new_projet').on('submit', function(event){
  event.preventDefault();

  $.post(
    '{{ route('new_projet') }}',
    $(this).serialize(),
    function (response) {
      console.log(response);return;
      if (response.status == 'success') {
        // on ferme la popin & on replie la box partenaires
        $('#newprojet').modal('hide');

      /*  @foreach($FRPROJETS as $PROJET)
       $('<div id="refresh" ><p class="navbar-text">{{$PROJET->LIBELLEPROJET}}</p><br/><p class="navbar-text">{{$PROJET->TYPEPROJET}}</p></div>').insertAfter("#insertion1");
       @endforeach */
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
        $('<div class="alert alert-warning"><strong>Warning!</strong> Tous les champs doivent êtres remplis </div>').appendTo("#new_projet");
      }
    }
  );
//script pour rafraichir la page après l'enregistrement
  //window.location.replace('/newebm_integration/public/home');
});


  $(function () {
  $('[data-toggle="popover"]').popover()});

</script>

@endsection

<!--  FIN MOERATEUR  -->

@endif

@endif
