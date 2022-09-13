<script> 

    function deletar() {
        ok = confirm("Realmente deseja deletar esses dados?!");
        if(ok) {
            return true;
        }else {
            return false;
        }
    }
    </script>




<?php 

require_once('pratica14.php');

try {  //ELE TENTA FUNCIONAR E SE NÃO DER ELE MANDA A MENSAGEM DE ERRO
    $sql = "SELECT * FROM aluno"; //CHAMOU O SLQ, SELECIONAR TODA TABELA

$stmt = $conexao->prepare($sql);
$stmt->execute();

$retorno = $stmt->setFetchMode(PDO::FETCH_ASSOC); //TÁ PEGANDO A LINHA E COLUNA TODA DA TABELA 
// PDO::FETCH_ASSOC= VALOR ASSOCADO, VAI PEGAR NOME E O VALOR

echo "<table bgcolor= '#DDA0DD' border='3'; width: 500px;'>
<tr style='background-color:#ADFF2F;'>
<th> ID </th>
<th> Nome </th>
<th> E-mail </th>
<th> Telefone </th>
<th> Data de Nascimento </th>
<th colspan='2'> Ação  </th>

</tr>";



foreach($stmt->fetchAll() as $retorno=>$linha ){  //ONDE TEM TODAS AS INFORMAÇÕES DO BANCO ( $retorno E $linha=CHAVE E VALOR )

//RETORNANDO TODAS AS INFROMAÇÕES
echo "<tr>";  //RETORNAR TODOS OS NOMES DA LINHA
echo "<td>" . $linha['id_aluno'] . "</td>";
echo "<td>" . $linha['nome'] . "</td>";
echo "<td>" . $linha['email'] . "</td>";
echo "<td>" . $linha['telefone'] . "</td>";
echo "<td>" . $linha['data_nascimento'] . "</td>";

echo //hidden= SEGURA OS ID E OCULTA
 "<td> 
        <form action='pratica19.php' method='post' name='del'>
            <input type='hidden' id='id' name='id' value='" . $linha['id_aluno'] . "'/>
            <input type='submit' id='excluir' name='excluir' value='EXCLUIR' style 'background-color: '#8B0000' onclick='return deletar()'/>
        </form>
      </td>";    
      
echo "<td>
        <form action='pratica20.php' method='post' name='del'>
            <input type='hidden' id='id' name='id' value='" . $linha['id_aluno'] . "'/>
            <input type='submit' id='editarr' name='editar' value='EDITAR' style 'background-color: '#FFFF00'/>
        </form>
      </td>";

      echo "</tr>";

}

} catch (PDOExecption $e) {

    echo "Erro ao listar os dados!" . $e->getMessage();
    
}

$conexao = null;






?>