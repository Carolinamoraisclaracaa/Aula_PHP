<?php 

//ARRAYS ASSOCIÁVEIS

$alunos = [  
            "Carolina" =>"18", "Thais" =>"30", "Ana" =>"45", "Henrique" =>"21", "Thalled" =>"20",
            "Marlon" =>"89", "Luara" =>"36", "Lina" =>"26", "Isaac" =>"25", "Laurinha" =>"19",
            "Leonardo" =>"75", "Maicon" =>"22", "Luisa" =>"20", "Luis" =>"19", "Mercedes" =>"65",
];

// echo $alunos["Carolina"]; //BUSCAR POR VALOR, COLOCAR O NOME, E O VALOR VAI APARECER LÁ

$num = count($alunos);

echo "<table border='1' width='400' >
<tr bgcolor='lightgreen'>
<th> Nome </th>
<th> Idade </th>
</tr>";

foreach ($alunos as $nome => $idade) {    //BUSCAR NOME E A IDADE  
    
    echo "<tr align='center'>"; //TABLEA 
    echo "<td> $nome </td> <td> $idade </td>";
    echo "</tr>";

}

echo "</table>";

?>