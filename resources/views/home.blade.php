@extends('layouts.app')

@section('content')
<<<<<<< HEAD
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
=======
<div class="Wrapper">
    <h1 class="Page-Title">Mina Sidor</h1>

    <div class="Form__Container">
        <h3>Skapa ett nytt recept</h3>
        <form method="POST" action="/home">
            <div>
                <input type="text" name="title" placeholder="Vad heter ditt recept?">
            </div>
            <div>
                <input type="textarea" name="ingredients" placeholder="Fyll i ingredienser">
            </div>
            <div>
                <input type="textarea" name="desciption" placeholder="Beskriv receptet">
            </div>
            <div>
                <button type="submit">Publicera Recept</button>
            </div>
        </form>
>>>>>>> d902f60bcb3fc79d5c150adab5991805d59d2a36
    </div>
</div>
@endsection
