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
Auth::routes();


Route::get('/home', 'HomeController@index')->name('home');
Route::get('/allRecipes', 'RecipeController@showall');
    // 
Route::post('/home', 'RecipeController@store');
Route::get('/home', 'RecipeController@index');
Route::delete('/recipes/{id}', 'RecipeController@destroy');


// Route::get('/recept','RecipesController@show')->name('recept');
// Route::get('/recept', 'receptController')->name('recept');
