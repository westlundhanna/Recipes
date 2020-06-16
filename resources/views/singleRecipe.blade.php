@extends('layouts.app')

@section('content')

    <div class="Single-Recipe__Container">
        <h1 class="Recipe-Title">{{$recipe->recipesNamn}}</h1>
        
        <div class="Single-Recipe__Wrapper">
            <div class="Image__Container">
                <img class="Recipe__Image--extraBig" src="{{ asset('storage/' . $recipe->image) }}" alt="">
            </div>

            <div class="Single-Recipe-Text">
                <h5 class="Single__Recipe--Header">Ingredienser:</h5>
                <p class="Single__Recipe-Content"> {{$recipe->recipesIngred}}</p>
                <h5 class="Single__Recipe--Header">Beskrivning:</h5>
                <p class="Single__Recipe-Content"> {{$recipe->recipesBeskrivn}}</p>
            </div>  
        </div>
    </div>

@endsection