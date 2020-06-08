<!-- Sidan Recept där alla recept finns -->   
@extends('layouts.app')

@section('content')
    <div class="Wrapper">
        <h1 class="Page-Title">RECEPT</h1>
        @foreach($recipes as $recipe)
            {{ $recipe->recipesNamn }}
            {{ $recipe->recipesIngred }}
            {{ $recipe->recipesBeskrivn }}
            {{ $recipe->recipesKategori }}
        @endforeach
        
    </div>

@endsection
