@extends('layouts.app')

@section('content')
<div class="Category__Wrapper">
    <h1 class="Page-Title">{{ $category->name }}</h1>
    <div class="Category__Container">
        @if($category->recipes)
        @foreach($category->recipes as $recipe)
        <div class="Category__Recipe">
            <img class="Recipe__Image--extraBig" src="{{ asset('storage/' . $recipe->image) }}" alt="">
            <h4> {{ $recipe->name }} </h4>
            <p> {{ $recipe->ingredients }} </p>
            <p> {{ $recipe->description }} </p>
        </div>
        @endforeach
        @endif
    </div>
</div>

@endsection