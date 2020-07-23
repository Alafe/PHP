<?php
$arrayNome = ["Valentina","Fernanda","Pedro","João","Maria","Jose"];

$nome = filter_input(INPUT_GET, "nome", FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_GET, "email", FILTER_SANITIZE_STRING);
$funcionarioCod = filter_input(INPUT_GET, "funcionario", FILTER_SANITIZE_NUMBER_INT);;
$funcionario = "";

if ($funcionarioCod) {
	$funcionario = $arrayNome[$funcionarioCod-1];
}


// $nome = $_GET['nome'];
// $email = $_GET['email'];

// echo "$nome<br>";
// echo "$email";

?>
<!DOCTYPE html>
<html>
<head>
	<title>Formúlario</title>
	<meta charset="utf-8">
	<style type="text/css">
		ul{
			list-style: none;
		}
		input, select{
			padding: 5px;
			margin-top: 10px;
		}
	</style>
</head>
<body>
	<form method="GET">
		<ul>
			<li>Nome: <input type="text" name="nome"></li>
			<li>E-mail: <input type="text" name="email"></li>
			<li>Funcionário:
				<select name="funcionario">
					<?php 
					for ($i=0; $i < count($arrayNome); $i++) { 
						?>
						<option value="<?= $i+1; ?>"><?= $arrayNome[$i]; ?></option>
						<?php
					}
					?>
				</select>
			</li>
			<li><input type="submit" name="btnSubmit" value="Cadastrar"></li>
		</ul>
	</form>
	<br><br><br>
	<hr>
	<p>Nome: <?= $nome  ?></p>
	<p>E-mail: <?= $email ?></p>
	<p>Funcionario: <?= $funcionario ?> </p>
	<p></p>
</body>
</html>