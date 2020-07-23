<?php 

function Gravar(string $txt, string $arquivo)
{
	$fp = fopen($arquivo, "a+");
	fwrite($fp, "{$txt} <br>\r\n");
	fclose($fp);
}

function Leitura(string $arquivo)
{
	$fp = fopen($arquivo, "r");
	$texto = fread($fp, filesize($arquivo));
	fclose($fp);
	echo $texto;
	//return $texto;
}

//Gravar(date("d/m/Y H:i:s"), "file.txt");
//leitura("file.txt");

/*
mode
'r'	Abre somente para leitura.
'r+' Abre para leitura e escrita.
'w'	Abre somente para escrita. Se o arquivo não existir, tenta criá-lo.
'w+' Abre para leitura e escrita. Se o arquivo não existir, tenta criá-lo.
'a'	Abre somente para escrita. Se o arquivo não existir, tenta criá-lo.
'a+' Abre para leitura e escrita. Se o arquivo não existir, tenta criá-lo.
'x'	Cria e abre o arquivo somente para escrita. Se o arquivo já existir, a chamada a fopen() falhará, retornando FALSE e gerando um erro de nível E_WARNING. Se o arquivo não existir, tenta criá-lo. Isto é equivalente a especificar as flags O_EXCL|O_CREAT para a chamada de sistema open(2).
'x+' Cria e abre o arquivo para leitura e escrita. Se o arquivo já existir, a chamada a fopen() falhará, retornando FALSE e gerando um erro de nível E_WARNING. Se o arquivo não existir, tenta criá-lo. Isto é equivalente a especificar as flags O_EXCL|O_CREAT para a chamada de sistema open(2).
*/