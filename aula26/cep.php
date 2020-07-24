<?php
$endereco = $_GET['cep'];

$cep = array(
	10010010 => array(
		'cep' => 10010010,
		'estado' => "PR",
		'cidade' => "Curitiba",
		'rua' => "Rua José"
	),
	10101010 => array(
		'cep' => 10101010,
		'estado' => "SP",
		'cidade' => "Sâo Paulo",
		'rua' => "Rua Maria"
	),
	11111111 => array(
		'cep' => 11111111,
		'estado' => "RJ",
		'cidade' => "Rio de Janeiro",
		'rua' => "Rua Jesus"
	)
);

$JSON = json_encode($cep[$endereco]);
echo $JSON;
?>