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
Route::any('/edit_activite', 'MATRICEController@editActivites')->name('edit_activite');
Route::any('/edit_ressources', 'MATRICEController@editRessources')->name('edit_ressources');
Route::any('/edit_propositions', 'MATRICEController@editPropositions')->name('edit_propositions');
Route::any('/edit_relation', 'MATRICEController@editRelation')->name('edit_relation');
Route::any('/edit_canaux', 'MATRICEController@editCanaux')->name('edit_canaux');
Route::any('/edit_segments', 'MATRICEController@editSegments')->name('edit_segments');
Route::any('/edit_structures', 'MATRICEController@editStructures')->name('edit_structures');
Route::any('/edit_sources', 'MATRICEController@editSources')->name('edit_sources');

Auth::routes();

Route::get('/home', 'HomeController@index');

// Users
Route::get('user/sort/{role?}', 'UserController@index');
Route::resource('user', 'UserController', ['except' => 'index']);

Route::get('/projet', 'HomeController@frprojet');

Route::get('/matrice', 'HomeController@frmatrice');
