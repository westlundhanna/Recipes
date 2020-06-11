<!-- Sidan Recept där alla recept finns -->   
@extends('layouts.app')

@section('content')
    <div class="Wrapper">
        <h1 class="Page-Title">RECEPT</h1>
        <form action="/category" method="GET">
        {{ csrf_field() }}
            <div>
                <input type="text" name="recipesCategory">
                <button type="submit">Filtrera</button>
            </div>
        </form>
        @foreach($recipes as $recipe)
            <div>
                <h1>  {{ $recipe->recipesNamn }} </h1>
                <h2> {{ $recipe->recipesIngred }} </h2>
                <p> {{ $recipe->recipesBeskrivn }} </p>
                <p> {{ $recipe->recipesKategori }} </p>
            </div>
        @endforeach
        
    </div>

@endsection
