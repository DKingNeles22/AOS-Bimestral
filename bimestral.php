<?php

function hello_world() {
    echo "Hello, world!\n";
}
hello_world();


function salve($nome){

    $nome = "Diego";
    
    echo "Hello $nome";
    
}


$nomes = array ("Diego", "Otavio", "Caio", "Davi", "Jorge", "João");

echo "$nomes[5]";



$nums = array (10, -10, 20, -20, 30, -30);


function VerificarIdade ($idade){
  if ($idade >= 18) {

    
    echo "você é maior de idade";

  }else{
    
    echo "você é menor de idade";
  }
}
$idade = 18;
#9
 
$curso = [ "CursoTecnico" => "informatica"];

echo $curso["CursoTecnico"];
