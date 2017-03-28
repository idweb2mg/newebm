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
@section('css')
<link href="{{asset('css/sb-admin.css')}}" rel="stylesheet">

<!-- Morris Charts CSS -->
<link href="{{asset('css/plugins/morris.css')}}" rel="stylesheet">
<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
@endsection
@section('content')

<div class="col-sm-offset-4 col-sm-4">
  <br>
<div class="panel panel-primary">
  <div class="panel-heading">Fiche d'utilisateur</div>
  <div class="panel-body">
@foreach($users as $user)
    <p>Nom : {{ $user->name }}</p>
    <p>Email : {{ $user->email }}</p>


    @endforeach
  </div>
</div>
<a href="javascript:history.back()" class="btn btn-primary">
  <span class="glyphicon glyphicon-circle-arrow-left"></span> Retour
</a>
</div>
@endsection
