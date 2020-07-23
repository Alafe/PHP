<?php 

//coolie é um mecanismo que permite guardar informa~çoes no lado do cliente

$req = filter_input(INPUT_GET, "req", FILTER_SANITIZE_NUMBER_INT);

switch ($req) {
	case 1:
		Criar();
		break;
	case 2:
		Ler();
		break;
	case 3:
		Alterar();
		break;
	case 4:
		Deletar();
		break;
}

function Criar()
{
	echo "Criar";
	setcookie("nome", "Alafe", time() + 100);
}

function Ler()
{
	echo filter_input(INPUT_COOKIE, "nome", FILTER_SANITIZE_STRING);
}

function Alterar()
{
	echo "Alterar";
	setcookie("nome", "Pedro");
}

function Deletar()
{
	echo "Deletar";
	setcookie("nome", "Alafe", time() - 1);
}