<style>
   body{
       display: flex;
       align-items: center;
       justify-content: center;
       font-family: 'Roboto Condensed', sans-serif; 
       
   }
</style>
<?php

if(isset ($_REQUEST["nome"]) && isset ($_REQUEST["nota1"]) && isset ($_REQUEST["nota2"]) && isset ($_REQUEST["nota3"])){
    $nome = $_REQUEST["nome"];
    $nota1 = $_REQUEST["nota1"];
    $nota2 = $_REQUEST["nota2"];
    $nota3 = $_REQUEST["nota3"];
    $media = ($nota1 + $nota2 + $nota3) / 3;

    if($media > 6){
        echo "<h1 style='color: green;'>O aluno $nome teve média $media. O aluno passou de ano!</h1>";
    }
    elseif($media <= 6 && $media>= 4){
        echo "<h1 style='color: pink;'>O aluno $nome teve média $media. O aluno está de recuperação!</h1>";
    }
    else{
        echo "<h1 style='color: red;'>O aluno $nome teve média $media. O aluno reprovou!</h1>";
    }
} else{
    echo "Você não prencheu os campos corretamente";
} 
