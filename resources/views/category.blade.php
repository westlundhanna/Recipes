@extends('layouts.app')

@section('content')
<div class="Wrapper">
    <h1 class="Page-Title">{{ $category->categoryNamn }}</h1>
    <!-- {{ csrf_field() }} -->
    @if($category->recipes)
    @foreach($category->recipes as $recipe)
    <div>
        <img class="Recipe__Image--extraBig" src="{{ asset('storage/' . $recipe->image) }}" alt="">
        <p> {{ $recipe->recipesNamn }} </p>
        <p> {{ $recipe->recipesIngred }} </p>
        <p> {{ $recipe->recipesBeskrivn }} </p>
    </div>
    @endforeach  
    
    @endif
</div>

@endsection