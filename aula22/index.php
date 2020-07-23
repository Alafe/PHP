<?php 

/*
session é muito semelhante aos cookies, porém ao invés da informação ficar alocada no cliente, ela fica armazenada no servidor
*/

session_start();

$_SESSION['key'] = date("H:i:s");

echo $_SESSION['key'];