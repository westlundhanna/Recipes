@extends('layouts.app')

@section('content')
<div class="Container">
    <h1 class="Page-Title">Mina Sidor</h1>
<!-- Mina Sidor när man är inloggad --->
    <div class="Form__Container">
        <h3>Skapa ett nytt recept</h3>
        <form method="POST" action="/home" enctype="multipart/form-data">
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
                <label for="categoryId">1 = Fisk, 2 = Kött, 3 = Fågel, 4 = Vegetarisk</label>
                <input type="textarea" name="categoryId" id="categoryId" placeholder="Välj Kategori, välj en siffra">
            </div>
            <div>
            <label for="image">Ladda upp bild</label>
                <input type="file" name="image">
            </div>
            <button type="submit">Publicera Recept</button>
        </form>
    </div>
    <h1 class="Page-Title">Mina Recept</h1>
    @foreach($myRecipes as $myRecipe)
    <ul class="Recipe__Content">
        <li>
            <h2>{{ $myRecipe->recipesNamn }}</h2>
            <img src="{{ asset('storage/' . $myRecipe->image) }}" class="Recipe__Image">
        </li>
        <!-- Knappar för Delete & Edit här --->
        <form method="GET" action="/edit/{{$myRecipe->id}}">
        <!-- {{$myRecipe->id}} -->
        {{ csrf_field() }}
            <div class="control">
                <button type="submit"> Uppdatera Recept</button>
            </div>
        </form>
        
        <!-- Delete Controller--->
        <form method="POST" action="/recipes/{{$myRecipe->id}}">
            <!-- {{$myRecipe->id}} -->
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
