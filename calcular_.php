<?php

// Recebendo os valores passando por GET - sem nenhum filtro
// Basta pegar os valores das variáveis e fazer a lógica
$valor_x = $_GET['x'];
$media = $_GET['media'];
$variancia = $_GET['variancia'];

echo 'Valor de x: '.$valor_x.'<br />
      Media: '.$media.'<br />
      Variancia:' .$variancia;