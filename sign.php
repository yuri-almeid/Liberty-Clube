<?php include_once "backend/php/server.php" ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<link href="https://fonts.googleapis.com/css?family=Inconsolata:400,500,700" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/login_style.css">
	<title>Junte-se a nós</title>
</head>
<body>
	<div class="align">
		<!-- <img class="logo" src="icons/logo.svg"> -->
		<div class="card">
			<div class="head">
				<div></div>
				<a id="login" class="selected" href="#login">Login</a>
				<a id="register" href="#register">Cadastro</a>
				<div></div>
			</div>
			<div class="tabs">
				<form>
		
					<div class="inputs">
						<div class="input">
							<input name="email" placeholder="E-mail" type="text">
							<img src="icons/user.svg">
						</div>
						<div class="input">
							<input name="password" placeholder="Senha" type="password">
							<img src="icons/pass.svg">
						</div>
						<label class="checkbox">
							<input type="checkbox">
							<span>Mantenha-me conectado</span>
						</label>
					</div>
					
					<button class="btn" type="submit" name="form_login">Login</button>

				</form>
			
				
				<!-- Registration -->
				<form action="sign.php" method="POST">
					<div class="inputs">
						<div class="input">
							<input name="name" placeholder="Nome Completo" type="text">
							<img src="icons/user.svg">
						</div>
						<div class="input">
							<input name="email" placeholder="E-mail" type="text">
							<img src="icons/mail.svg">
						</div>
						<div class="input">
							<input name="password" id="password" placeholder="Senha" type="password">
							<img src="icons/pass.svg">
						</div>
						<div class="input">
							<input name="password_confirmation" id="password_confirmation" placeholder="Confirme a senha" type="password">
							<img src="icons/pass.svg">
						</div>
					</div>

					
					<button class="btn" type="submit" name="form_register">Cadastrar</button>

				</form>
			</div>
			
		</div>
		<?php include('backend/php/errors.php'); ?>
	</div>
	<script src="assets/js/jquery-3.3.1.min.js"></script>
	<script src="assets/js/login_animation.js"></script>
</body>
</html>
