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
                <input type="text" name="name" placeholder="Vad heter ditt recept?">
            </div>
            <div>
                <input type="textarea" name="ingredients" placeholder="Fyll i ingredienser">
            </div>
            <div>
                <input type="textarea" name="description" placeholder="Beskriv receptet">
            </div>
            <div>
            <select name="categoryId">
                <option value="0">Välj en kategori</option>
                <option value="1" name="Fisk">Fisk</option>
                <option value="2" name="Kött">Kött</option>
                <option value="3" name="Fågel">Fågel</option>
                <option value="4" name="Vegetarisk">Vegetarisk</option>
            </select>
            </div>
            <div>
                <label for="image">Ladda upp bild</label>
                <input type="file" name="image">
            </div>
            <button type="submit">Publicera Recept</button>
        </form>
    </div>
    <h1 class="Page-Title">Mina Recept</h1>
    <div class="Recipe__List--Wrapper">
        @foreach($myRecipes as $myRecipe)
        <ul class="Recipe__Content">
            <li>
                <h2 class="Recipe--Header">{{ $myRecipe->name }}</h2>
                <img src="{{ asset('storage/' . $myRecipe->image) }}" class="Recipe__Image">
            </li>
            <!-- Knappar för Delete & Edit här --->
            <div class="Button__Container">
                <form method="GET" action="/edit/{{$myRecipe->id}}">
                    <div class="control">
                        <button type="submit" class="Edit--Button"><i class="fas fa-edit"></i></button>
                    </div>
                </form>

                <!-- Delete Controller--->
                <form method="POST" action="/recipes/{{$myRecipe->id}}">
                    {{ method_field('DELETE') }}
                    {{ csrf_field() }}
                    <div class="control">
                        <button type="submit" class="Delete--Button"><i class="fas fa-trash-alt"></i></button>
                    </div>
                </form>
            </div>
        </ul>
        @endforeach
    </div>
</div>
@endsection