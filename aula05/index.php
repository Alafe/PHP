<?php 

$idade = 23;

if ($idade < 18) {
	echo "maior de idade";
}else if ($idade >=18 && $idade < 60){
	echo "Adulto";
}
else{
	echo "Idoso";
}