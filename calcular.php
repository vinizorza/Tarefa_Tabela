<?php

//Recebendo os valores
$valor_x = $_GET['x'];
$media = $_GET['media'];
$variancia = $_GET['variancia'];

//Fórmula matematica
$resultado = ($valor_x*$media/$variancia)/1000;


//Colocar os valoresgerados pela fórmula numa matriz
$tabela = array();

$tabela[0][0] = '#';

for($j = 1; $j < 11; $j++){
    $tabela[0][$j] = $j-1;
}

for($i = 1; $i <= 40; $i++){
    $tabela[$i] = array();
    $tabela[$i][0] = $i;
    for($j = 1; $j < 11; $j++){
        $tabela[$i][$j] = $resultado;
    }
}

echo json_encode($tabela);