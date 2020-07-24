<?php

$jsonStr = '{"titulo":"titanic","sinopse":"um navio colide com um ice barg e afunda","ano":2017,"horario":["16:00","16:00","20:00"]}';

$arrayFilme = json_decode($jsonStr);

echo "<p><b>Titulo: " . $arrayFilme->{"titulo"} . "</b></p>";
echo "<p><b>Sinopse: " . $arrayFilme->sinopse . "</b></p>";
echo "<p><b>Ano: " . $arrayFilme->ano . "</b></p>";
echo "<p><b>Horario: </b></p>";

for ($i=0; $i < count($arrayFilme->horario); $i++) { 
	echo "<p>------------<b>" . $arrayFilme->horario[$i] . "</b></p>";	
}