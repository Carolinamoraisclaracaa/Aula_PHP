<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title> Prática 12 </title>  
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body> 

<!---->
<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post"> <!---->

        <label> Nome: </label>
        <input type="text" id="nome" name="nome"/>
        <br/> <br/>
        <label> E-mail: </label>
        <input type="email" id="mail" name="mail"/>
        <br/> <br/>
        <label> Telefone: </label>
        <input type="tel" id="telefone" name="telefone"/>
        <br/> <br/>
        <input type="submit" id="enviar" name="enviar" value="ENVIAR" />
        
    </form>

    <h2> Dados Informados: <h2>

    <?php 
        $nome = $emai = $telefone = "";

        if($_SERVER['REQUEST_METHOD'] =="POST") {
            $nome = verificar($_POST['nome']);
            $email = verificar($_POST['mail']);
            $telefone = verificar($_POST['telefone']);

            echo "<strong> Nome: </strong> $nome <br/>";
            echo "<strong> E-mail: </strong> $email <br/>";
            echo "<strong> Telefone: </strong> $telefone <br/>";

        } 

        function verificar($dados) { // É O RETORNO DOS DADOS QUE FORAM FILTRADOS
            $dados = trim($dados);  // ELIMINAR ESPAÇOS DESNECESSÁRIOS
            $dados = stripslashes($dados); // FILTRAR BARRAS INVERTIDAS
            $dados = htmlspecialchars($dados); // IGNORAR CÓDIGOS E TAGS ( É BOM PARA EVITAR QUE PESSSOAS ESTRAGEM SEUS CÓDIGOS )

            return $dados;
        }




    ?>


       
    
</body>
</html> 