@extends('layouts.app')
 
@section('content')
 
    <div class="Form__Container">
        <h3>Uppdatera recept</h3>
        <form method="POST" action="/home/{{$Recipe->id}}" enctype="multipart/form-data">
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
            <div>
                <img src="{{ asset('storage/' . $Recipe->image) }}" class="Recipe__Image">
            </div>
            <div>
            <label for="image">Ladda upp bild</label>
                <input type="file" name="image">
            </div>
            
            <button type="submit">Updatera Recept</button>
        </form>
    </div>
 
@endsection