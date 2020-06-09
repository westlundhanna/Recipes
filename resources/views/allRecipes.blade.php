<!-- Sidan Recept där alla recept finns -->   
@extends('layouts.app')

@section('content')
    <div class="Wrapper">
        <h1 class="Page-Title">RECEPT</h1>
            @foreach($recipes as $recipe)
            <ul class="Recipe__Content">
                <a href=""><li><h2>{{ $recipe->recipesNamn }}</h2></li></a>
                <li>{{ $recipe->recipesIngred }}</li>
                <li>{{ $recipe->recipesBeskrivn }}</li>
                <li>{{ $recipe->recipesKategori }}</li>
            </ul>
            @endforeach
    </div>

@endsection
