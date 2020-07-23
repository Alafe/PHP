<?php
function olaMundo()
{
	echo "Ola Mundo!!<br>";
}

function soma($n1, $n2)
{
	return $n1+$n2;
}

function olaNome($nome)
{
	echo "Ola $nome<br>";
}

olaMundo();
olaNome("Alafe");
echo "50 + 75 = " . soma(50, 75);