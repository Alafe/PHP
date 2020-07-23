<?php 

//constantes
define('min', 17);
define('max', 45);

//variavel
$idade = 23;

echo "Min: " . min . "<br>";
echo "Max: " . max . "<br>";
echo "Idade: " . $idade . "<br>";

if($idade >= min && $idade <= max){
	echo "Acesso liberado";
}else{
	echo "Acesso negado";
}