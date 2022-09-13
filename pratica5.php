<?php 

//TRABALHANDO COM ARRAYS

$carros = [
            'Opala', 'BMW', 'Mustang', 'Batmóvel','Lancer', 'Skyline', 'Silvia S15',
            'Lamborghini', 'Fusca', 'GTR R35', 'Uno', 'Corsa', "Fox", 'Mercedes'
            ];

  // echo $carros[7];

  // echo count($carros);

  $dados = count($carros); //APARECEU TODA A LISTA DOS CARROS 

        sort($carros); //ORDEM ALFABÉTICA
        
        echo "<ul>";
            
  for ($i = 0; $i < $dados; $i++) { //RODAR A QUANTIDADE QUE FOI CONSERVADA NO  COUNT

    echo "<li>" . $carros[$i] . "</li>";

  }

  echo "</ul>";

  
?>