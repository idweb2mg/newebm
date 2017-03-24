<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//alexis
Route::get('/', 'HomeController@welcome' );


Route::get('MATRICE/{ID_MATRICE}', 'MATRICEController@view');
Route::any('/edit_partenaires', 'MATRICEController@editPartenaires')->name('edit_partenaires');

Auth::routes();

Route::get('/home', 'HomeController@index');

// Users
Route::get('user/sort/{role?}', 'UserController@index');
Route::resource('user', 'UserController', ['except' => 'index']);

Route::get('/projet', 'HomeController@frprojet');

Route::get('/matrice', 'HomeController@frmatrice');
