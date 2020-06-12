@extends('layouts.app')
 
@section('content')
 
    <div class="Form__Container">
        <h3>Skapa ett nytt recept</h3>
        <form method="POST" action="/home/{{$Recipe->id}}">
        {{$Recipe->id}}
        {{ method_field('PATCH') }}
 
        {{ csrf_field() }}
            <div>
                <input type="text" name="recipesNamn" value="{{$Recipe->recipesNamn}}">
            </div>
            <div>
                <input type="textarea" name="recipesIngred" value="{{$Recipe->recipesIngred}}">
            </div>
            <div>
                <input type="textarea" name="recipesBeskrivn" value="{{$Recipe->recipesBeskrivn}}">
            </div>
            <div>
                <input type="textarea" name="categoryId" value="{{$Recipe->categoryId}}">
            </div>
            <button type="submit">Updatera Recept</button>
        </form>
    </div>
 
@endsection
