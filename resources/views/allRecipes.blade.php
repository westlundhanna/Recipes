<!-- Sidan Recept där alla recept finns -->   
@extends('layouts.app')

@section('content')
    <div class="Container">
        <h1 class="Page-Title">RECEPT</h1>
        <form action="/category" method="GET">
        {{ csrf_field() }}
            <div>
                <input type="text" name="recipesCategory">
                <button type="submit">Filtrera</button>
            </div>
        </form>
        <div class="Recipe__Container">
            @foreach($recipes as $recipe)
                <ul class="Recipe__Content">
                    <a href="{{ url('singleRecipe', [$recipe->id]) }}">
                        <li>
                            <h2>{{ $recipe->recipesNamn }}</h2>
                            <img src="{{ asset('storage/' . $recipe->image) }}" class="Recipe__Image--Big">
                        </li>
                    </a>
                </ul>
            <!-- </div> -->
            @endforeach
        </div>
    </div>

@endsection
