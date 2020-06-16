@extends('layouts.app')
 
@section('content')
 
    <div class="Form__Container">
        <h3>Uppdatera recept</h3>
        <form method="POST" action="/home/{{$Recipe->id}}" enctype="multipart/form-data">
        {{ method_field('PATCH') }}
        {{ csrf_field() }}
            <div>
                <input type="text" name="name" value="{{$Recipe->name}}">
            </div>
            <div>
                <input type="textarea" name="ingredients" value="{{$Recipe->ingredients}}">
            </div>
            <div>
                <input type="textarea" name="description" value="{{$Recipe->description}}">
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