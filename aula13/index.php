<?php 
function AjustarSalario($sal, &$valorAjuste)
{
	$valorAjuste = 300.00;
	return ($sal + $valorAjuste);
}

$salario = 1500.50;
$valorAjuste = 0;
$valorFinal = AjustarSalario($salario, $valorAjuste);

echo "O Valor ajustado é de: R$ {$valorFinal}, com aumento de: R$ {$valorAjuste}";