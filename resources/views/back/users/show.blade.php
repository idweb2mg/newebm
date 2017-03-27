<?php
use App\User;
use App\roles;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Http\Controllers\UserController;
/*$id =Auth::user()->id;
$users =\DB::table('users')->Where('id',$id)->get();
print_r($id);*/

 ?>
@extends('layouts.app')

@section('content')

<div class="col-sm-offset-4 col-sm-4">
  <br>
<div class="panel panel-primary">
  <div class="panel-heading">Fiche d'utilisateur</div>
  <div class="panel-body">

    <p>Nom : {{ $user->name }}</p>
    <p>Email : {{ $user->email }}</p>
    @if($user->admin == 1)
      Administrateur
    @endif
    
  </div>
</div>
<a href="javascript:history.back()" class="btn btn-primary">
  <span class="glyphicon glyphicon-circle-arrow-left"></span> Retour
</a>
</div>
@endsection
