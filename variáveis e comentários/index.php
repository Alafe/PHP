<?php 
$nome = "Alafe"; //string
$sexo = 'M'; //char
$idade = 22; //int
$salario = 1.00; //float
$vivo = true; //bool
$ds = defSexo($sexo);

echo "nome: $nome<br>";
echo "idade: $idade<br>";
echo "sexo: $ds<br>";
echo "salario: $salario dolar por hora<br>";
echo "vivo: $vivo";


function defSexo($s)
{
	if ($s == 'M') {
		$sexo = "masculino";
	}
	else{
		$sexo = "feminino";
	}

	return $sexo;
}