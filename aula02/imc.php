<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <title>Exercício IMC</title>
</head>
<body>
    <?php
        $peso = 50;
        $altura = 1.75;
        $imc = $peso / pow($altura, 2);

        switch($imc) {
            case $imc < 18.5:
                $classificacao = "Magreza";
                break;
            case $imc < 25:
                $classificacao = "Normal";
                break;
            case $imc < 30:
                $classificacao = "Sobrepeso";
                $obesidade = "Grau I";
                break;
            case $imc < 40:
                $classificacao = "Obesidade";
                $obesidade = "Grau II";
                break;
            default:
                $classificacao = "Obsesidade Grave";
                $obesidade = "Grau III";
                break;
        }

        echo "<p>Peso: $peso kg</p>";
        echo "<p>Altura: $altura cm</p>";
        echo "<p>IMC: $imc</p>";

        echo "<br /><p>Classificação: $classificacao</p>";
        if($imc > 29.9) {
            echo "<p>Obesidade: $obesidade</p>";
        }
    ?>
</body>
</html>