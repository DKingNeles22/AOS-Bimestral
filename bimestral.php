<?php
#1
function hello_world() {
    echo "Hello, world!\n";
}
hello_world();

#2
function salve($nome){

    $nome = "Diego";
    
    echo "Hello $nome";
    
}
#3

$nomes = array ("Diego", "Otavio", "Caio", "Davi", "Jorge", "João");

echo "$nomes[5]";

#4

$nums = array (10, -10, 20, -20, 30, -30);

#6

#8

function VerificarIdade ($idade){
  if ($idade >= 18) {

    
    echo "você é maior de idade";

  }else{
    
    echo "você é menor de idade";
  }
}

#9
 
$curso = [ "CursoTecnico" => "informatica"];

echo $curso["CursoTecnico"];
