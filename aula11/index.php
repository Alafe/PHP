<?php
$frutas = array(
	['nome' => "uva", 'preco' => 25, 'qtd' => 70],
	['nome' => "morango", 'preco' => 28, 'qtd' => 100]);
 
foreach ($frutas as $fruta) {
	echo "nome: {$fruta['nome']}<br>";
	echo "preço: {$fruta['preco']}<br>";
	echo "quantidade: {$fruta['qtd']}<br><br>	";
}