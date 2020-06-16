<!-- Sidan Recept där alla recept finns -->
@extends('layouts.app')

@section('content')
<div class="Container">
    <div class="Recipes__Header">
        <h1 class="Page-Title">RECEPT</h1>
    </div>
    <form action="/category" method="GET">
        <div class="Recipe__Filter">
            <select name="category">
                <option value="0">Välj en kategori</option>
                <option value="1">Fisk</option>
                <option value="2">Kött</option>
                <option value="3">Fågel</option>
                <option value="4">Vegetarisk</option>
            </select>
            <button type="submit" class="Filter__Button">Filtrera</button>
        </div>
    </form>

    <div class="Recipes__Wrapper">
        <div class="Recipe__Container">
            @foreach($recipes as $recipe)
            <ul class="Recipe__Content">
                <a href="{{ url('singleRecipe', [$recipe->id]) }}">
                    <li>
                        <div class="Recipe__Link">
                            <h2 class="Recipe__Title">{{ $recipe->name }}</h2>
                            <img src="{{ asset('storage/' . $recipe->image) }}" class="Recipe__Image--Big">
                        </div>
                    </li>
                </a>
            </ul>
            @endforeach
        </div>
    </div>

    @endsection