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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/recept', function () {
    // det utkommenterade fungerar ej. Ska göra så att alla recept i databasen skrivs ut på sidan Recept.
//     $recipes = recipe::all();

    return view('recept');
    // return view('recept', [
    //     'recipe' => $recipes
    // ]);

});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
// Route::get('/recept','RecipesController@show')->name('recept');
// Route::get('/recept', 'receptController')->name('recept');
