<?php 
    // O QUE TERÁ NO BANCO DE DAOS, SE PRECISAR MUDAR, MUDAR AQUI EM BAIXO
    $servidor ="localhost";
    $usuario ="root";
    $senha = "";
    $nomebd = "pratica13_c";

    $conexao = new mysqli($servidor, $usuario, $senha, $nomebd);

    if($conexao->connect_error) { //CONEXÃO COM O BANCO DE DADOS

        echo "Erro na conexão com o Banco de Dados!" . $conexao->connect_error;


    }else {
        echo "Conexão com o Banco de Dados estabelecida!";

    }

?>