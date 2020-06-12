<!-- Sidan Recept där alla recept finns -->   
@extends('layouts.app')

@section('content')
    <div class="Container">
        <h1 class="Page-Title">RECEPT</h1>
        <form action="/category" method="GET">
        {{ csrf_field() }}
            <div>
                <input type="text" name="recipesCategory">
                <button type="submit">Filtrera</button>
            </div>
        </form>
        <div class="Recipe__Container">
            @foreach($recipes as $recipe)
                <ul class="Recipe__Content">
                    <a href=""><li><h2>{{ $recipe->recipesNamn }}</h2></li></a>
                    <li>{{ $recipe->recipesIngred }}</li>
                    <li>{{ $recipe->recipesBeskrivn }}</li>
                    <li>{{ $recipe->recipesKategori }}</li>
                </ul>
            <!-- </div> -->
            @endforeach
        </div>
    </div>

@endsection
