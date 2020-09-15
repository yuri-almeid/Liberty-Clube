<?php include_once "backend/php/db.php" ?>

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
							<input name="username" placeholder="Usuário" type="text">
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


					<!-- <div class="alert alert-danger">
            <li>Usuário Inválido</li>
					</div> -->
					
					<button class="btn" type="submit">Login</button>

					<p>Ou</p>

					<!-- Colocar autenticacao do google etc... -->
					<div class="otherAuth">
						<img src="icons/btngooglel.png">
					</div>
				</form>
			
				
				<!-- Registration -->
				<form action="backend/php/register.php" method="POST">
					<div class="inputs">
						<div class="input">
							<input name="email" placeholder="E-mail" type="text">
							<img src="icons/mail.svg">
						</div>
						<div class="input">
							<input name="username" placeholder="Usuário" type="text">
							<img src="icons/user.svg">
						</div>
						<div class="input">
							<input name="password" placeholder="Senha" type="password">
							<img src="icons/pass.svg">
						</div>
						
					</div>

					

					<!-- <div class="alert alert-danger">
            <li>E-mail já cadastrado</li>
					</div> -->

					<button class="btn" type="submit">Cadastrar</button>
					<p>Ou</p>
					<div class="otherAuth">
						<img src="icons/btngooglel.png">
					</div>
				</form>
			</div>
		</div>
	</div>
	<script src="assets/js/jquery-3.3.1.min.js"></script>
	<script src="assets/js/login_animation.js"></script>
</body>
</html>
