<?php require_once('pratica14.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title> Editar Tabela com Dados </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
</head>
<body bgcolor="	#2E8B57"> 

    <?php 

     try {
        $sql = "SELECT * FROM aluno WHERE id_aluno = :id_aluno"; //PEGA O ID DO ALUNO, PREPARA QUAL ID VC QUER E PREPARA PARA EDITAR APENAS AQUELE ID

        $stmt = $conexao->prepare($sql);
        $stmt->bindParam(':id_aluno', $id_aluno, PDO::PARAM_INT);

        $id_aluno = $_POST['id'];
        $stmt->execute();

        $dados = $stmt->setFetchMode(PDO::FETCH_ASSOC);

        foreach($stmt->fetchAll() as $dados => $linha) { //EDITAR= BUSCA PELO ID DOS USUARIOS

            $id_aluno = $linha['id_aluno'];
            $nome = $linha['nome'];
            $email = $linha['email'];
            $telefone = $linha['telefone'];
            $data_nascimento = $linha['data_nascimento'];
        }



     } catch (PDOExecption $e) {
        
        echo $e->getMessage();

     }   
    ?>


    
    <fieldset style="width:500px; border: 3px solid #4B0082;" >
        <legend> <strong> Informe seus dados: </strong> </legend>
        <form action="pratica21.php" method="post" name="cad" >

            <label> Nome: </label>
            <input type="hidden" name="id" id="id" value="<?php echo $id_aluno; ?>" required />
            <input type="text" name="nome" id="nome" value="<?php echo $nome; ?>" required />
            <br/> <br/>
            <label> E-mail: </label>
            <input type="email"  name="mail" id="mail" value="<?php echo $email; ?>" required />
            <br/> <br/>
            <label> Telefone: </label>
            <input type="tel" name="telefone" id="telefone" value="<?php echo $telefone; ?>" required />
            <br/> <br/>
            <label> Data de Nascimento: </label>
            <input type="date"name="data_nasc" id="data_nasc" value="<?php echo $data_nasc; ?>" required />
            <br/> <br/>
            <input type="submit" id="alterar" name="alterar" value="ALTERAR" />

        </form>
    </fieldset>


</body>
</html>
