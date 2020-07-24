<?php

$cep = "10010-010";
$cep = str_replace("-", "", $cep);

/*
"http://correiosapi.apphb.com/cep/" . $cep
nâo funciono
*/

$str = file_get_contents("http://localhost/PHP/aula26/cep.php/?cep=" . $cep);

$arrayCidade = json_decode($str);

if ($arrayCidade != null) {
	echo "<p><b>CEP: </b>" . $arrayCidade->cep . "</p>";
	echo "<p><b>Estado: </b>" . $arrayCidade->estado . "</p>";
	echo "<p><b>cidade: </b>" . $arrayCidade->cidade . "</p>";
	echo "<p><b>Rua: </b>" . $arrayCidade->rua . "</p>";

}

