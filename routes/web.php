<?php

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
Route::get('/category', 'CategoryController@filterCategory');


/* POST-Routes */
Route::post('/home', 'RecipeController@store');


/* DELETE-Routes */
Route::delete('/recipes/{id}', 'RecipeController@destroy');


/* PATCH-Routes */
Route::patch('/home/{id}', 'RecipeController@update');

