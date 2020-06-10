@extends('layouts.app')

@section('content')
<div class="Wrapper">
    <h1 class="Page-Title">Mina Sidor</h1>
<!-- Mina Sidor när man är inloggad --->
    <div class="Form__Container">
        <h3>Skapa ett nytt recept</h3>
        <form method="POST" action="/home">
        {{ csrf_field() }}
            <div>
                <input type="text" name="recipesNamn" placeholder="Vad heter ditt recept?">
            </div>
            <div>
                <input type="textarea" name="recipesIngred" placeholder="Fyll i ingredienser">
            </div>
            <div>
                <input type="textarea" name="recipesBeskrivn" placeholder="Beskriv receptet">
            </div>
            <div>
                <input type="textarea" name="recipesKategori" placeholder="Vilken kategori?">
            </div>
            <button type="submit">Publicera Recept</button>
        </form>
    </div>
    <h1 class="Page-Title">Mina Recept</h1>
    @foreach($myRecipes as $myRecipe)
    <ul class="Recipe__Content">
        <li><h2>{{ $myRecipe->recipesNamn }}</h2></li>
        <!-- Knappar för Delete & Edit här --->
        <!-- Edit Controller---->
        <form method="GET" action="/edit/{{$myRecipe->recipesId}}">
        {{$myRecipe->id}}

        {{ csrf_field() }}
            <div class="control">
                <button type="submit"> Uppdatera Recept</button>
            </div>
        </form>
        <!-- Delete Controller--->
        <form method="POST" action="/recipes/{{$myRecipe->recipesId}}">
            {{$myRecipe->id}}
            {{ method_field('DELETE') }}

            {{ csrf_field() }}
            <div class="control">
                <button type="submit"> Radera Recept</button>
            </div>
        </form>
    </ul>
    @endforeach
</div>
@endsection
