<?php  
    for ($x = 0; $x <= 10; $x++) {
        echo "Número: $x <br>";
    }

    $pokemons = array(
        "Pikachu",
        "Bulbassauro",
        "Squirtle",
        "Charmander",
        "Eevee"
    );

    echo count($pokemons);
    echo "<br>";

    for ($x = 0; $x < count($pokemons); $x++) {
        echo $pokemons[$x], "<br>";
    }
?>