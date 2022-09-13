<?php 

$servidor ="localhost";
$usuario ="root";
$senha = "";
$nomebd = "pratica13_c";

try { //ELE TENTA FUNCIONAR E SE NÃO DER ELE MANDA A MENSAGEM DE ERRO
    $conexao = new PDO("mysql:host=$servidor; dbname=$nomebd", $usuario, $senha);
    $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo "Conexão restaurada com sucesso!";


  } catch (Expection $e) { 
  
  echo "Erro ao conectar com a Base de Dados!" . $e->getMessage();

}


?>