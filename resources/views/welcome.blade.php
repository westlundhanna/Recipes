<!---Första sidan --->
@extends('layouts.app')

@section('content')
    <div class="Wrapper">
        <div class="test">
            <img src="../../img/soup.jpg" alt="">
        </div>
        <div class="recept_info">
            <h1 class="recept_info-header">Hitta ditt favorit recept här</h1>
            <p class="recept_info-text">Lorem ipsum dolor sit amet.</p>
            <form action="/recipe">
                <button type="submit" class="btn btn-primary">Recept</button>
            </form>
        </div>
    </div>
<!---------Exempel kod för Welcome blade------->
      
@endsection
