<?php 

function Gravar(string $txt, string $arquivo)
{
	$fp = fopen($arquivo, "a+");
	fwrite($fp, "{$txt} <br>\r\n");
	fclose($fp);
}