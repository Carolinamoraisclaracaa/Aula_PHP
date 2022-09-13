<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title> Prática 11 - Formulário </title>  
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body> 

<!--ESSE FORMULÁRIO VAI PRO BANCO DE DADOS-->
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post"> <!--APARECE O CÓDIGO(ECHO HTMLSPECIALCHARS...)-->

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
            $nome = $_POST['nome'];
            $email = $_POST['mail'];
            $telefone = $_POST['telefone'];

            echo "<strong> Nome: </strong> $nome <br/>";
            echo "<strong> E-mail: </strong> $email <br/>";
            echo "<strong> Telefone: </strong> $telefone <br/>";

        } 


    ?>


       
    
</body>
</html> 