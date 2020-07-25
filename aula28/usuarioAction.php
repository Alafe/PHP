<?php 

$req = filter_input(INPUT_GET, "req", FILTER_SANITIZE_NUMBER_INT);
$arquivo = "usuario.txt";

switch ($req) {
	case 1:
		sleep(1);//para poder ver o beforeSend
		$nome = filter_input(INPUT_POST, "nome", FILTER_SANITIZE_STRING);
		$email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_STRING);
		$telefone = filter_input(INPUT_POST, "telefone", FILTER_SANITIZE_STRING);
		
		$str = "Nome: {$nome}|E-mail: {$email}|Telefone: {$telefone}";

		$fp = fopen($arquivo, "a+");
		if (fwrite($fp, "{$str}<br>\n")) {
			echo "1";
		}else{
			echo "0";
		}
		fclose($fp);
		break;

	case 2:
		$fp = fopen($arquivo, "r");
		$texto = fread($fp, filesize($arquivo)); 
		fclose($fp);
		echo $texto;
		break;
	
	default:
		echo "nada";
		break;
}