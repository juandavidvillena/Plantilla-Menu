<?php

require_once("libs/Sesion.php");



$ses = Sesion::getInstance();

if ($ses->checkActiveSession())
	$ses->redirect("home.php");

if (!empty($_POST)) :

	$email = $_POST["email"];
	$pass  = $_POST["pass"];

	$ok  = $ses->login($email, $pass);
	echo $email . $pass;
	print_r($ok);
	if ($ok) $ses->redirect("home.php");
	echo ("no me da la gaana");
endif;

?>

<!DOCTYPE html>
<html lang="es">

<head>
	<title>Bocallena Teatinos</title>
	<meta charset="utf8" />
	<link rel="stylesheet" type="text/css" href="css/style.css" />
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />

<style>

body{
	max-height: 900px;
	background-image: url("images/intro.jpg");
}

</style>

</head>

<body>

	<div class="clear-form container">

		<div class="row">
			<div class="col-sd-12 mx-auto">
				<img class="logo" src="images/logoapp.png" alt="Bocallena Teatinos" />
			</div>
		</div>

		<form method="post">

			<div class="row mt-5 form-group">
				<div class="col-md-12">
					<input class="form-control w-25 mx-auto" type="text" name="email" placeholder="Introduzca su usuario" required />
				</div>
			</div>

			<div class="row form-group">
				<div class="col-md-12">
					<input class="form-control w-25 mx-auto" type="text" name="pass" placeholder="Introduzca su contraseña" required />
				</div>
			</div>

			<?php
			if ((isset($ok)) && (!$ok)) :
				?>
				<div class="row">
					<div class="col-md-12 text-center">
						<div class="alert alert-danger w-50" role="alert">
							Usuario o contraseña incorrectas.
						</div>
					</div>
				</div>
			<?php
			endif;
			?>
			<div class=" row form-group">
				<div class="col-md-12 text-center">
					<button class="btn btn-primary w-25" type="submit">Entrar</button>
				</div>
			</div>

		</form>

		<!--<div class="row">
			<div class="col-md-12 text-center register">
				<div class="register">
					<a href="registro.php" class="btn btn-link">registrar</a>
				</div>
			</div>
		</div>-->

	</div>
	<?php
	require_once "libs/footer.php";
	?>
	