<?php 

require_once('pratica14.php');


$sql = "INSERT INTO aluno(nome, email, telefone, data_nascimento) VALUES (:nome, :mail, :telefone, :data_nasc )"; // INSERIR NA TABELA...

  $stmt = $conexao->prepare($sql); //ARMAZAENAR AS VARIAVEIS DA CONEXÃO, NÃO EXECUTA ELA
  
  $stmt->bindParam(':nome', $nome, PDO::PARAM_STR); // ESSA VARIAVEL NÃO VAI PASSAR DIRETO, ELA VAI PASSAR NA 1, NA 2 E DPS PASSA (AQUI TEM SEGURANÇA)
  $stmt->bindParam(':mail', $mail, PDO::PARAM_STR); // O STMT VAI VENDO OS DADOS UM POR UM
  $stmt->bindParam(':telefone', $telefone, PDO::PARAM_STR);
  $stmt->bindParam(':data_nasc', $data_nasc, PDO::PARAM_STR); // PDO::PARAM_STR = RECONHECIMENTO DAS VARIAVEIS (STRING)

try {  //ELE TENTA FUNCIONAR E SE NÃO DER ELE MANDA A MENSAGEM DE ERRO // ESSE É O 3
  //POST PUXA PELO NOME

$nome = verificar($_POST['nome']);
$mail = verificar($_POST['mail']);
$telefone = verificar($_POST['telefone']);
$data_nasc = verificar($_POST['data_nasc']);

$stmt->execute(); //TUDO QUE FOI FEITO, ESTÁ ARMAZENADO NO STMT

    echo "Dados gravados com sucesso!!";
    echo "<a href='pratica16.html'> Voltar ao Formulário </a>";

} catch (PDOExecption $e) {
   
    echo "Falha ao gravar os dados!" . $e->getMessage();
    echo "<a href='pratica16.html'> Voltar ao Formulário </a>";

} 

$conexao = null; 

function verificar($dados) { // É O RETORNO DOS DADOS QUE FORAM FILTRADOS //esse 2
    $dados = trim($dados);  // ELIMINAR ESPAÇOS DESNECESSÁRIOS
    $dados = stripslashes($dados); // FILTRAR BARRAS INVERTIDAS
    $dados = htmlspecialchars($dados); // IGNORAR CÓDIGOS E TAGS ( É BOM PARA EVITAR QUE PESSSOAS ESTRAGEM SEUS CÓDIGOS )

    return $dados;
}

?>