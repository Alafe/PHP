<?php 
$arrayNome = ["Valentina","Fernanda","Pedro","João","Maria","Jose"];

$nome = filter_input(INPUT_POST, "nome", FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_STRING);
$funcionarioCod = filter_input(INPUT_POST, "funcionario", FILTER_SANITIZE_NUMBER_INT);;
$funcionario = $arrayNome[$funcionarioCod];

// if (isset($_POST['nome'])) {
// 	$nome = $_POST['nome'];
// }
// if (isset($_POST['email'])) {
// 	$email = $_POST['email'];
// }
// if (isset($_POST['funcionario'])) {
// 	$funcionario = $arrayNome[$_POST['funcionario']];
// }

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
	<form method="POST">
		<ul>
			<li>Nome: <input type="text" name="nome"></li>
			<li>E-mail: <input type="text" name="email"></li>
			<li>Funcionário:
				<select name="funcionario">
					<?php 
					for ($i=0; $i < count($arrayNome); $i++) { 
						?>
						<option value="<?= $i; ?>"><?= $arrayNome[$i]; ?></option>
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