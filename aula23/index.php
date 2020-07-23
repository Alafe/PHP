<?php 

require_once "func.php";

try{
	AbrirConexao();	
}catch(Exception $e) {
	echo "Mensagem: " . $e->getMessage() . "<br>";
	echo "Linha: " . $e->getLine() . "<br>";
	echo "Arquivo: " . $e->getFile() . "<br>";
}
