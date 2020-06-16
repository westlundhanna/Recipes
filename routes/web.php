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

/* GET-Routes */
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/allRecipes', 'RecipeController@readAll');
Route::get('/home', 'RecipeController@index');
Route::get('/edit/{id}', 'RecipeController@edit');
Route::get('/singleRecipe/{id}', 'RecipeController@readOne');
// Route::get('/category/{id}', 'CategoryController@filterCategory');


/* POST-Routes */    
Route::post('/home', 'RecipeController@store');


/* DELETE-Routes */
Route::delete('/recipes/{id}', 'RecipeController@destroy');


/* PATCH-Routes */
Route::patch('/home/{id}', 'RecipeController@update');


// Route::get('/recept','RecipesController@show')->name('recept');
// Route::get('/recept', 'receptController')->name('recept');
