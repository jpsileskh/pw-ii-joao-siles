<?php
    function soma($x, $y) {
        $s = $x + $y;
        return $s;
    }

    echo "2 + 2 = " . soma(11, 11);
    echo "<br>";

    function somaJoao($x, $y) {        
        echo $x . " + " . $y . " = " . $x + $y . "<br>";
    }

    somaJoao(6, 9);
    somaJoao(8, 2);
?>