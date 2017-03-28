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
// Admin
Route::get('admin', 'AdminController@admin')->name('admin');

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

Route::get('/', 'WelcomeController@welcome' );

Route::get('/home', 'HomeController@home')->name('home');
//route moderateur

Route::post('/home/editprojet', 'HomeController@editProjet')->name('edit_projet');
Route::post('/home/newprojet', 'HomeController@newProjet')->name('new_projet');

Route::post('/home/edithome', 'HomeController@edithome')->name('edithome');


// Users
Route::post('user', 'UserController@store');
Route::get('user', 'UserController@index');
Route::get('user', 'UserController@create');


Route::get('user/{id}/projet', 'ProjetController@projet')->name('projet.projet');
Route::post('user/{id}/projet', 'ProjetController@projet')->name('projet.projet');
Route::get('user/{id}', 'UserController@show');





Route::put('user/{id}', 'UserController@update');
Route::patch('user/{id}', 'UserController@update');

Route::delete('user/{id}', 'UserController@destroy');
Route::get('user/{id}/edit', 'UserController@edit');
Route::post('user/{id}/edit', 'UserController@edit');
Route::resource('user', 'UserController');






// Email confirmation
Route::get('resend', 'Auth\RegisterController@resend');
Route::get('confirm/{token}', 'Auth\RegisterController@confirm');
