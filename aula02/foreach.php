<?php
    $pokemons = array(
        "Pikachu",
        "Bulbassauro",
        "Squirtle",
        "Charmander",
        "Eevee"
    );

    // echo $pokemons[0]."<br>";
    // echo $pokemons[1]."<br>";
    // echo $pokemons[2]."<br>";

    foreach ($pokemons as $pokemon) {
        if ($pokemon !== "Charmander") {
            echo $pokemon."<br>";
        }        
    }

?>