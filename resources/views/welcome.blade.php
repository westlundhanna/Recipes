<!---Första sidan --->
@extends('layouts.app')

@section('content')
    <div class="Container-Index">
        <div class="Image__Container">
            <img src="./img/soup.jpg" alt="" class="Image__Index">
        </div>

        <div class="recept_info">
            <h1>Hitta ditt favorit recept här</h1>
            <p>Lorem ipsum dolor sit amet.</p>
            <button type="submit" class="Button__Recipe">Recept</button>
        </div>  
    </div>
<!---------Exempel kod för Welcome blade------->
@endsection
