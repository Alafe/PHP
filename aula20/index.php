<?php 

//SHA1 - gera uma chave sem volta com 40 caracteres
$s = sha1("Ola mundo");
echo $s;

echo "<br>";

//MD5 - gera uma chave sem volta com 32 caracteres
$m = md5("PHP");
echo $m;

echo "<br>";

//base64_encode - griptografa uma string mas permite retornar ao valor original
$b = base64_encode("criptografia");
echo $b;
echo "<br>";
//base64_decode - retorna o valor original de uma string criptografada em base64
echo base64_decode($b);


