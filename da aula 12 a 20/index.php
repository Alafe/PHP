<?php

/*
fazendo aulas
12 - constante
13 - if, elseif e else
14 - switch
15 - while
16 - for
17 - dowhile
18 - array
19 - foreach
20 - furction
*/
//aula 12
define('nome', 'Alafe');
//aula 13
if(nome != "Alafe"){
	echo "ola " . nome;
}
elseif (nome == "alafe") {
	echo "ola " . nome;
}
else{
	echo nome . ", você não é o Alafe";
}

proximo();

//aula 14
$tipo = "conta";
switch ($tipo) {
	case 'conta':
		for ($i=1; $i <= 10; $i++) { 
			echo "$i ";
		}
		break;
	case 'nome':
		echo "Alafe";
		break;
	default:
		
		break;
}


proximo();
//aula 15
 $n = 1;
 while ($n <= 10) {
 	echo "$n<br>";
 	$n++;
 }

 proximo();

 //aula 16
 for ($i=11; $i <= 20; $i++) {
 	echo "$i<br>";
 }

 proximo();

 //aula 17
 $n = 21;
 do {
 	echo "$n<br>";
 	$n++;
 } while ($n <= 30);

proximo();

//aula 18
$array1 = array("Alafe", "Pedro", "João", "Maria");
$array2 = [1,2,4,8,16];
$array3 = ['nome' => "Goku", "poder" => "+8000"];
echo $array1[0]."<br>";
echo $array2[4]."<br>";
echo $array3['nome']."<br>";

proximo();
//aula 19
$frutas = ["banana", "morango", "maçã"];
foreach ($frutas as $fruta) {
	echo "$fruta ";
}
echo "<br>";
foreach ($frutas as $key => $fruta) {
	echo "$key: $fruta<br>";
}
//aula 20
function proximo()
{
	echo "<br>--------------------------------------<br>";
}