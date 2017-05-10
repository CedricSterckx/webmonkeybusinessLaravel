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

Route::get('/evenementen ', function () {

    $evenementen = DB::table('evenementen')->get();
//
//        dd($evenementen);

    return view('welcome', compact('evenementen'));

});


Route::get('/evenement/{id}', function ($id) {

    $evenement = DB::table('evenementen')->find($id);


    return view('evenementen.show', compact($evenement));
});





Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
