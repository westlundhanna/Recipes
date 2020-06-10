@extends('layouts.app')

@section('content')

<div class="Form__Container">
        <h3>Skapa ett nytt recept</h3>
        <form method="POST" action="/home">
        {{$Recipe->recipesId}}
        {{ method_field('PATCH') }}

        {{ csrf_field() }}
            <div>
                <input type="text" name="recipesNamn" placeholder="1">
            </div>
            <div>
                <input type="textarea" name="recipesIngred" placeholder="2">
            </div>
            <div>
                <input type="textarea" name="recipesBeskrivn" placeholder="3">
            </div>
            <div>
                <input type="textarea" name="recipesKategori" placeholder="4">
            </div>
            <button type="submit">Updatera Recept</button>
        </form>
    </div>

@endsection
