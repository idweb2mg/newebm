<?php
use App\User;
use App\roles;


$users =\DB::table('Users')->get();


?>
@extends('layouts.app')
@section('css')
<link href="{{asset('css/sb-admin.css')}}" rel="stylesheet">

<!-- Morris Charts CSS -->
<link href="{{asset('css/plugins/morris.css')}}" rel="stylesheet">
<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
@endsection
@section('content')
<div class="table-responsive">
  <div class="col-sm-offset-4 col-sm-4">
  <div class="panel panel-primary ">
			<div class="panel-heading">
				<h3 class="panel-title">Liste des utilisateurs</h3>
			</div>
    <table class="table">
        <thead>
            <tr>
                <th>id</th>
                <th>name</th>

            </tr>
            </thead>
        <tbody>

            @foreach ($users as $user)
						<tr>
							<td>{!! $user->id !!}</td>
							<td class="text-primary"><strong>{!! $user->name !!}</strong></td>
               <td>{!! link_to_route('projet.projet', 'Projet', [$user->id], ['class' => 'btn btn-primary btn-block']) !!}</td>
							<td>{!! link_to_route('user.show', 'Voir', [$user->id], ['class' => 'btn btn-success btn-block']) !!}</td>
							<td>{!! link_to_route('user.edit', 'Modifier', [$user->id], ['class' => 'btn btn-warning btn-block']) !!}</td>
							<td>
								{!! Form::open(['method' => 'DELETE', 'route' => ['user.destroy', $user->id]]) !!}
									{!! Form::submit('Supprimer', ['class' => 'btn btn-danger btn-block', 'onclick' => 'return confirm(\'Vraiment supprimer cet utilisateur ?\')']) !!}
								{!! Form::close() !!}
							</td>

						</tr>
					@endforeach

        </tbody>

    </table>
    <a href="javascript:history.back()" class="btn btn-primary">
      <span class="glyphicon glyphicon-circle-arrow-left"></span> Retour
    </a>
  </div>
</div>
</div>
@endsection
@section('scripts')

    <script>

        $(function() {
            // Seen gestion
            $(document).on('change', ':checkbox', function() {
                $(this).parents('tr').toggleClass('warning');
                $(this).hide().parent().append('<i class="fa fa-refresh fa-spin"></i>');
                $.ajax({
                    url: '{!! url('userseen') !!}' + '/' + this.value,
                    type: 'PUT',
                    data: "seen=" + this.checked
                })
                .done(function() {
                    $('.fa-spin').remove();
                    $('input[type="checkbox"]:hidden').show();
                })
                .fail(function() {
                    $('.fa-spin').remove();
                    var chk = $('input[type="checkbox"]:hidden');
                    chk.show().prop('checked', chk.is(':checked') ? null:'checked').parents('tr').toggleClass('warning');
                    alert('{{ trans('back/users.fail') }}');
                });
            });
        });

    </script>

@endsection
