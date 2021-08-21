<?php

include 'banco.php';
include 'calculos.php';
include 'dados.php';

echo '<pre>';

$dados = new dados;

$dados->a = 1;
$dados->b = 12;
$dados->c = -13;

$dados->exibe();

var_dump($dados);

?>