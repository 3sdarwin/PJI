<!DOCTYPE html>
<html lang="pt-BR">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../css/estiloLogin.css">
	<title>Login - CARDIO HEALTH</title>
	<link rel="icon" href="imgs/icone.png">
</head>

<body>
	<?php
		session_start();

		$_SESSION['logged'] = $_SESSION['logged'] ?? null;

		if($_SESSION['logged'] != null && $_SESSION['cargo'] != null){
			if(strcmp($_SESSION['cargo'], "ADM") == 0){
				header("Location: adm.php");
			}elseif(strcmp($_SESSION['cargo'], "Secretario") == 0){
				header("Location: Secretaria.php");
			}elseif(strcmp($_SESSION['cargo'], "Medico") == 0){
				header("Location: Medic.php");
			}
		}

	?>

	<div class="login-box">
		<h2>Login</h2>
		<img src="../imgs/person.png" alt="">
		<form method="POST" action="../Codigos/AutenticacaoLogin.php">
			<div class="user-box">
				<label for="txtLogin"></label>
				<input type="text" name="txtLogin" required="" placeholder="Login">
			</div>
			<div class="user-box">
				<label for="txtSenha"></label>
				<input type="txtPassword" name="txtSenha" required="" placeholder="Senha">
			</div>
			<a class="account" href="#">
				<button type="submit" value="btnLogar">
					<span></span>
					<span></span>
					<span></span>
					<span></span>
					Logar
				</button>
			</a>
			<br></br>
		</form>
</body>

</html>