<?php
use App\frmatrice;
use App\frprojet;
use App\user;
use App\Http\Controllers\ProjetController;
//print_r($MATRICES);


?>
@extends('layouts.app')
@section('content')


<div class="table-responsive">

  <div class="col-sm-offset-4 col-sm-4">
  <div class="panel panel-primary">
			<div class="panel-heading">
				<h3 class="panel-title">Liste des utilisateurs</h3>
			</div>
    <table class="table">
        <thead>
            <tr>
                <th>Nom du projet</th>
                <th>Titre Matrice</th>
                <th> Date de modification</th>

            </tr>
            </thead>
        <tbody>

          @foreach($MATRICES as $MATRICE)
						<tr>

							<td>{!! $MATRICE->LIBELLEPROJET !!}</td>
							<td>{!! $MATRICE->TITREMATRICE !!}</td>
              <td>{!! $MATRICE->DATEENREGISTREMENT !!}</td>

						</tr>
            @endforeach

        </tbody>

    </table>

  </div>
  <a href="javascript:history.back()" class="btn btn-primary">
    <span class="glyphicon glyphicon-circle-arrow-left"></span> Retour
  </a>
</div>

</div>
@endsection
