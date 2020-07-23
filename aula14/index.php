<?php 
$nome = "Alafe";
echo substr($nome, 0, 1); //mostra X quantidades de caracteres
proximo();

echo strtolower($nome); //deixa tudo em maiusculo
proximo();

echo strtoupper($nome); //deixa tudo em minusculo
proximo();

$msg = strip_tags("<p>Ola, clique <a href=''>aqui</a></p>","<a> <p>");//primeiro parametro a str eo segundo as tag que vão ser usadas
echo $msg;
proximo();

$comida = "Banana, Maçã, Pera, Uva";
$alt = str_replace("Banana", "Morango", $comida);//substitui todas as ocorrências da string de procura com a string de substituição
echo $alt;
proximo();

$nome = "ctrl atl s";
$ex = explode(" ", $nome);// converte string em array
echo $ex[0];
proximo();

$nome = "Fulano da Silva Sauro";
echo strlen($nome); // retorna o tamanho de uma string
if (strlen($nome) <= 10) {
	echo "<br>Válido";
}else{
	echo "<br>Inválido";
}
proximo();



function proximo()
{
	echo "<br>----------------------------<br>";
}