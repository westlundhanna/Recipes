@extends('layouts.app')

@section('content')
<div class="Wrapper">
    <h1 class="Page-Title">Mina Sidor</h1>

    <div class="Form__Container">
        <h3>Skapa ett nytt recept</h3>
        <form method="POST" action="/home">
            <div>
                <input type="text" name="title" placeholder="Vad heter ditt recept?">
            </div>
            <div>
                <input type="textarea" name="ingredients" placeholder="Fyll i ingredienser">
            </div>
            <div>
                <input type="textarea" name="desciption" placeholder="Beskriv receptet">
            </div>
            <div>
                <button type="submit">Publicera Recept</button>
            </div>
        </form>
    </div>
</div>
@endsection
