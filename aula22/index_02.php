<?php 

session_start();
//visualiza a session
if (isset($_SESSION['key'])) {
	echo $_SESSION['key'];
}
