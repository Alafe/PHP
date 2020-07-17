<?php 
$nome = "";
$email = "";



// if (isset($_POST['nome'])) {
// 	$nome = $_POST['nome'];
// }
// if (isset($_POST['email'])) {
// 	$email = $_POST['email'];
// }


?>
<!DOCTYPE html>
<html>
<head>
	<title>Post</title>
	<style type="text/css">
		li{
			list-style-type: none;
		}
	</style>
</head>
<body>
	<form method="POST">
		<ul>
			<li>nome<input type="" name="nome"></li>
			<li>email<input type="" name="email"></li>
			<li><input type="submit" name="enviar"></li>
		</ul>
	</form>
</body>
</html>