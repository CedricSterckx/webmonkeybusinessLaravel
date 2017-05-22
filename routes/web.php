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

//Zonder Eloquent
//Route::get('/evenementen ', function () {
//
//  //  $evenementen = DB::table('evenementen')->get();
////
////    dd($evenementen);
//  $evenementen = App\Evenement::all();
//    return view('evenementen.evenementen-list', compact('evenementen'));
//
//});
//Route::get('/evenement/{id}', function ($id) {
//
//    $evenement = DB::table('evenementen')->find($id);
//
//
//    return view('evenementen.show', compact('evenement'));
//});

//Eloquent
Route::get('/evenements', 'EvenementsController@index');
Route::get('/evenements/{evenement}', 'EvenementsController@show');


//Route::get('/', 'EvenementsController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'HomeController@index')->name('home');



