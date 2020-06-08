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
            <!-- <div>
                <input type="checkbox" name="kött" value="Kött">
                <label for="kött">Kött</label>
                <input type="checkbox" name="vegetarisk" value="Vegetarisk">
                <label for="vegetarisk">Vegetarisk</label>
                <input type="checkbox" name="fågel" value="Fågel">
                <label for="fågel">Fågel</label>
            </div> -->
            <button type="submit">Publicera Recept</button>
        </form>
    </div>
</div>
@endsection
