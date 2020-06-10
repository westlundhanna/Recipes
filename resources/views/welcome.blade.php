<!---Första sidan --->
@extends('layouts.app')

@section('content')
<<<<<<< HEAD
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
      
=======
    <div class="Container-Index">
        <div class="Image__Container">
            <img src="./img/soup.jpg" alt="">
        </div>

        <div class="recept_info">
            <h1>Hitta ditt favorit recept här</h1>
            <p>Lorem ipsum dolor sit amet.</p>
            <button type="submit" class="btn btn-primary">Recept</button>
        </div>  
    </div>
<!---------Exempel kod för Welcome blade------->
>>>>>>> c2d6277f6d934b689efb7b4b47af1725eafbf7b9
@endsection
