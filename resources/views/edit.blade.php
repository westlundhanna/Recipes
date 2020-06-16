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
            <select name="categoryId">
                <option value="0">Välj kategori:</option>
                <option value="1" name="Fisk">Fisk</option>
                <option value="2" name="Kött">Kött</option>
                <option value="3" name="Fågel">Fågel</option>
                <option value="4" name="Vegetarisk">Vegetarisk</option>
            </select>
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