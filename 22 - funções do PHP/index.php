<?php 
$nome = "Alafe";
echo substr($nome, 0, 1); //mostra X quantidades de caracteres
proximo();

echo strtolower($nome); //deixa tudo em maiusculo
proximo();

echo strtoupper($nome); //deixa tudo em minusculo
proximo();

$msg = strip_tags("<h1>Ola</h1>, clique <a href=\"\">aqui</a>","<a>");//primeiro parametro a str eo segundo as tag que vão ser usadas
echo $msg;
proximo();

$comida = "Banana, Maçã, Pera, Uva";
$alt = str_replace("Banana", "Morango", $comida);
echo $alt;
proximo();

$nome = "ctrl atl s";
$ex = explode(" ", $nome);
echo $ex[0];
proximo();

$nome = "Fulano da Silva Sauro";
echo strlen($nome);
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