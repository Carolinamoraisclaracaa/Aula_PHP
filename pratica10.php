<?php 

$nome = $_POST['nome']; 
$altura = $_POST['altura'];
$peso = $_POST['peso'];




function imc($altura, $peso) {

    return $peso / ($altura * $altura);


}
echo "<h2> Olá $nome, o resultado do seu IMC é de ". imc($altura, $peso)." </h2> "; 


//TÁ INCOMPLETO
?>
