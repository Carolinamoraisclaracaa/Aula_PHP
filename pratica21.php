<?php 

require_once('pratica14.php'); // VAI CHAMAR AS INFORMAÇÕES DA PRATICA 14

//ALTERAR OS DADOS
$sql = "UPDATE aluno SET nome = :nome, email = :mail, telefone = :telefone, data_nascimento = :data_nasc WHERE id_aluno = :id_aluno";


  $stmt = $conexao->prepare($sql); //ARMAZAENAR AS VARIAVEIS DA CONEXÃO, NÃO EXECUTA ELA
  
  $stmt->bindParam(':id_aluno', $id_aluno, PDO::PARAM_STR);
  $stmt->bindParam(':nome', $nome, PDO::PARAM_STR); // ESSA VARIAVEL NÃO VAI PASSAR DIRETO, ELA VAI PASSAR NA 1, NA 2 E DPS PASSA (AQUI TEM SEGURANÇA)
  $stmt->bindParam(':mail', $mail, PDO::PARAM_STR); // O STMT VAI VENDO OS DADOS UM POR UM
  $stmt->bindParam(':telefone', $telefone, PDO::PARAM_STR);
  $stmt->bindParam(':data_nasc', $data_nasc, PDO::PARAM_STR); // PDO::PARAM_STR = RECONHECIMENTO DAS VARIAVEIS (STRING)

try {  //ELE TENTA FUNCIONAR E SE NÃO DER ELE MANDA A MENSAGEM DE ERRO // ESSE É O 3
  //POST PUXA PELO NOME

$id_aluno = verificar($_POST['id']);  
$nome = verificar($_POST['nome']);
$mail = verificar($_POST['mail']);
$telefone = verificar($_POST['telefone']);
$data_nasc = verificar($_POST['data_nasc']);

$stmt->execute(); //TUDO QUE FOI FEITO, ESTÁ ARMAZENADO NO STMT

    echo "<script>
            alert('Dados deletados com Sucesso!!');
            location.href = 'pratica18.php';
          </script>";  

} catch (PDOExpection $e) {
   
    echo "<script>
             alert('Erro ao deletar os dados!" . $e->getMessage(). "');
             location.href = 'pratica18.php';
         </script>"; 
    

} 

$conexao = null; 

function verificar($dados) { // É O RETORNO DOS DADOS QUE FORAM FILTRADOS //esse 2
    $dados = trim($dados);  // ELIMINAR ESPAÇOS DESNECESSÁRIOS
    $dados = stripslashes($dados); // FILTRAR BARRAS INVERTIDAS
    $dados = htmlspecialchars($dados); // IGNORAR CÓDIGOS E TAGS ( É BOM PARA EVITAR QUE PESSSOAS ESTRAGEM SEUS CÓDIGOS )

    return $dados;
}

?>