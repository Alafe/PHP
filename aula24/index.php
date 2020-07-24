<?php 

/*
{
	"titulo":"titanic",
	"sinopse":"um navio colide com um ice barg e afunda",
	"ano":2017,
	"horario":[
		"16:00",
		"16:00",
		"20:00"
	]
}
*/


$arrayFilme = array(
	'titulo' => "titanic",
	'sinopse' => "um navio colide com um ice barg e afunda",
	'ano' => 2017,
	'horario' => array(
		'16:00',
		'16:00',
		'20:00' 
	)
);

//var_dump($arrayFilme);
$jsonStr = json_encode($arrayFilme);
echo $jsonStr;