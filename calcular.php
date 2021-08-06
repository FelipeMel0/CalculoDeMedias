<style>
    body {
        display: flex;
        align-items: center;
        justify-content: center;
        font-family: 'Roboto Condensed', sans-serif;
        color: darkred;
    }
</style>
<?php

if (isset($_REQUEST["nome"]) && isset($_REQUEST["nota1"]) && isset($_REQUEST["nota2"]) && isset($_REQUEST["nota3"])) {
    $nome = $_REQUEST["nome"];
    $nota1 = $_REQUEST["nota1"];
    $nota2 = $_REQUEST["nota2"];
    $nota3 = $_REQUEST["nota3"];
    $media = ($nota1 + $nota2 + $nota3) / 3;
    $media = round($media, 2);

    if ($media > 6) {
        echo "<h1 style='color: green;'>O aluno $nome teve média $media. Passou de ano!</h1>";
        echo "<body style= 'background-color: lightgreen;'> </body>";
    } elseif ($media <= 6 && $media >= 4) {
        echo "<h1 style='color: darkgoldenrod;'>O aluno $nome teve média $media. Está de recuperação!</h1>";
        echo "<body style= 'background-color: gold;'> </body>";
    } else {
        echo "<h1 style='color: darkred;'>O aluno $nome teve média $media. Reprovado!</h1>";
        echo "<body style= 'background-color: red;'> </body>";
    }
} else {
    echo "Você não prencheu os campos corretamente";
}
