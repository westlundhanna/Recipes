@extends('layouts.app')

@section('content')
<div class="Wrapper">
    <h1 class="Page-Title">Mina Sidor</h1>

    <div class="Form__Container">
        <h3>Skapa ett nytt recept</h3>
        <form method="POST" action="/home">
        {{ csrf_field() }}
            <div>
                <input type="text" name="title" placeholder="Vad heter ditt recept?">
            </div>
            <div>
                <input type="textarea" name="ingredients" placeholder="Fyll i ingredienser">
            </div>
            <div>
                <input type="textarea" name="description" placeholder="Beskriv receptet">
            </div>
            <div>
                <input type="checkbox" name="category1" value="Kött">
                <label for="category1">Kött</label>
                <input type="checkbox" name="category2" value="Vegetarisk">
                <label for="category2">Vegetarisk</label>
                <input type="checkbox" name="category3" value="Fågel">
                <label for="category3">Fågel</label>
                <button type="submit">Publicera Recept</button>
            </div>
        </form>
    </div>
</div>
@endsection
