<?php 

//FUNÇÕES

function frase() {
    echo"Uma frase dentro de uma função!!";
}

frase(); //CHAMAR A FUNÇÃO ACIMA

echo "</br>";

// FUNÇÕES COM ARGUMENTOS

function textos($nome, $jogo) {
    echo "<h3> My name is $nome and i love play $jogo!! </h3>";

}

textos("Cacá", "Valorant");

function calc($a, $b) {
    return $a * $b; // RETORNAR O VALOR A * B 
}

echo "O resultado dessa multiplicação é " . calc(5,6); // COLOCAR QUAIS SÃO OS NÚMEROS QUE VC QUEIRA MULTIPLICAR


?>