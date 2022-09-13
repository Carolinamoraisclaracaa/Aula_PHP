<?php  // ESSE CÓDIGO PRECISA DE UMA CONEXÃO

require_once('pratica14.php'); // VAI CHAMAR AS INFORMAÇÕES DA PRATICA 14

try {
    
    $sql = "INSERT INTO aluno(nome, email, telefone, data_nascimento) VALUES 
    ('Betinha', 'betinharainha@gmail.com', '31 963258741', '1900-08-04')"; 
   

    $conexao->exec($sql);

    echo "Dados gravados com sucesso!";


} catch (Expection $e) {
    
    echo "Erro na conexão! Não foi posíivel gravar os dados!" . $e->getMessage();

}

$conexao = null;    

?>

<!-- ('Laurinha', 'ruivall@hotmail.com', '11965487620', '2021-05-22'),
    ('Carolina ', 'cacadufut@hotmail.com', '31960287020', '2004-05-26'),
     ('Thalled', 'thalledzinho@hotmail.com', '21999746023', '2005-08-20')"; -->
