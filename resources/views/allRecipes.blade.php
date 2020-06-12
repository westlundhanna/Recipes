<!-- Sidan Recept där alla recept finns -->   
@extends('layouts.app')

@section('content')
    <div class="Container">
        <div>
            <h1 class="Page-Title">RECEPT</h1>
        </div>
        
        <div class="Recipes__Wrapper">
            <div class="Recipe__Container">
                @foreach($recipes as $recipe)
                    <ul class="Recipe__Content">
                        <a href="{{ url('singleRecipe', [$recipe->id]) }}">
                            <li>
                                <div class="Recipe__Link">
                                    <h2 class="Recipe__Title">{{ $recipe->recipesNamn }}</h2>
                                    <img src="{{ asset('storage/' . $recipe->image) }}" class="Recipe__Image--Big">
                                </div>
                            </li> 
                        </a>
                    </ul>
                @endforeach
            </div> 

            <form action="/category" method="GET">
            {{ csrf_field() }}
                <div class="Recipe__Filter">
                    <input type="text" name="recipesCategory">
                    <button type="submit">Filtrera</button>
                </div>
            </form>
        </div>
    </div>

@endsection
