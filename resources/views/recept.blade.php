   
        @extends('layouts.app')

        @section('content')
        <div class="Wrapper">
            <h1 class="Page-Title">RECEPT</h1>
            <!-- Försöker skriva ut recepten i databasen -->
            <!-- Foreach loop för recepten -->
            
            <?php
            $recipes = App\Recipe::all();

            foreach($recipes as $recipe) {
                echo $recipe->recipesId;
                echo $recipe->recipesNamn;
                echo $recipe->recipesIngred;
                echo $recipe->recipesBeskrivn;
                echo $recipe->recipesKategori;
            }
            ?>
        </div>

        @endsection
