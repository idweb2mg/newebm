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
Auth::routes();
Route::get('/', 'HomeController@welcome' );

Route::get('/', 'HomeController@index')->name('home');
Route::post('/', 'HomeController@edithome')->name('edithome');

// Admin
Route::get('admin', 'AdminController@admin')->name('admin');

// Users

Route::get('user', 'UserController@index');
Route::get('user', 'UserController@create');
Route::post('user', 'UserController@store');


Route::get('user/{id}', 'UserController@show');



Route::get('user/{id}/edit', 'UserController@edit');
Route::post('user/{id}/edit', 'UserController@edit');
Route::get('user/{id}/projet', 'ProjetController@projet')->name('projet.projet');
Route::post('user/{id}/projet', 'ProjetController@projet')->name('projet.projet');
Route::put('user/{id}', 'UserController@update');
Route::patch('user/{id}', 'UserController@update');

Route::delete('user/{id}', 'UserController@destroy');
Route::resource('user', 'UserController');

//route moderateur
Route::any('/home/editprojet', 'HomeController@editProjet')->name('edit_projet');

//route matrice

Route::get('MATRICE/{ID_MATRICE}', 'MATRICEController@view');
Route::any('/edit_partenaires', 'MATRICEController@editPartenaires')->name('edit_partenaires');
Route::any('/edit_activite', 'MATRICEController@editActivites')->name('edit_activite');
Route::any('/edit_ressources', 'MATRICEController@editRessources')->name('edit_ressources');
Route::any('/edit_propositions', 'MATRICEController@editPropositions')->name('edit_propositions');
Route::any('/edit_relation', 'MATRICEController@editRelation')->name('edit_relation');
Route::any('/edit_canaux', 'MATRICEController@editCanaux')->name('edit_canaux');
Route::any('/edit_segments', 'MATRICEController@editSegments')->name('edit_segments');
Route::any('/edit_structures', 'MATRICEController@editStructures')->name('edit_structures');
Route::any('/edit_sources', 'MATRICEController@editSources')->name('edit_sources');




// Email confirmation
Route::get('resend', 'Auth\RegisterController@resend');
Route::get('confirm/{token}', 'Auth\RegisterController@confirm');

