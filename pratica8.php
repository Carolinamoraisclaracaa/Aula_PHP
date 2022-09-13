<?php //PRÁTICA 7 E A 8, VAI TRABALHAR JUNTO

$nome = $_POST['nome']; //ASSIM QUE VC ENVIAR O FORMULÁRIO DO PRÁTICA 7, VAI ENTRAR DENTRO DO PRÁTICA 8
$num1 = $_POST['num1'];
$num2 = $_POST['num2'];

$total = $num1 * $num2;

echo "<h2> Senhor(a) $nome, o resultado do cálculo é  $total </h2> "; //APARECERÁ O NOME E OS NÚMEROS QUE VC COLOCAR NO FORMULÁRIO

?>