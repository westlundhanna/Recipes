@extends('layouts.app')

@section('content')
<div class="Category__Wrapper">
    <h1 class="Page-Title">{{ $category->categoryNamn }}</h1>
    <!-- {{ csrf_field() }} -->
    <div class="Category__Container">
        @if($category->recipes)
        @foreach($category->recipes as $recipe)
        <div class="Category__Recipe">
            <img class="Recipe__Image--extraBig" src="{{ asset('storage/' . $recipe->image) }}" alt="">
            <h4> {{ $recipe->recipesNamn }} </h4>
            <p> {{ $recipe->recipesIngred }} </p>
            <p> {{ $recipe->recipesBeskrivn }} </p>
        </div>
        @endforeach
        @endif
    </div>
</div>

@endsection