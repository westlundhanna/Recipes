@extends('layouts.app')

@section('content')

    <div class="Single-Recipe__Container">
        <h1 class="Recipe-Title">{{$recipe->recipesNamn}}</h1>
        
        <div class="Single-Recipe__Wrapper">
            <div class="Image__Container">
                <img class="Recipe__Image--extraBig" src="{{ asset('storage/' . $recipe->image) }}" alt="">
            </div>

            <div class="Single-Recipe-Text">
                <h5>Ingredienser:</h5>
                <p> {{$recipe->recipesIngred}}</p>
                <h5>Beskrivning:</h5>
                <p> {{$recipe->recipesBeskrivn}}</p>
                <h5>Kategori:</h5>
                <p>{{$recipe->categoryId}}</p>
            </div>  
        </div>
    </div>

@endsection