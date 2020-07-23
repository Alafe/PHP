<?php

function AbrirConexao()
{
	$conn = new PDO("mysql:host=localhost;dbname=curso.php;charset=utf-8", "root", "");
	return $con;
}