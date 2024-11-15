<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Acesse a sua conta</title>
	<!-- ***** ESTILIZAÇÃO ***** -->
	<link href="recursos/css/reset.css" rel="stylesheet">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" rel="stylesheet">
	<link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.12/dist/sweetalert2.min.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100..700;1,100..700&display=swap" rel="stylesheet">
	<link href="recursos/css/geral.css" rel="stylesheet">
	<link href="recursos/css/header.css" rel="stylesheet">
	<link href="recursos/css/login.css" rel="stylesheet">
	<!-- ***** ESTILIZAÇÃO ***** -->
	<!-- ***** PROGRAMAÇÃO ***** -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.12/dist/sweetalert2.all.min.js"></script>
	<script src="recursos/javascript/principal.js"></script>
	<script src="recursos/javascript/login.js"></script>
	<!-- ***** PROGRAMAÇÃO ***** -->
</head>

<body>
	<header>
		<nav class="custom-navbar">
			<a href="pagina-inicial.php"><i class="fa-solid fa-arrow-left"></i></a>
			<span style="font-weight: 400;">Entrar</span>
		</nav>
	</header>
	<main class="container">
		<form id="formLogin" class="formulario" name="logar" onsubmit="document.logar.action='logar.php'" method="post">
			<div class="logo_login">
				<img src="recursos/imagens/logos/logo_futureMob.png">
			</div>
			<!-- <h3 class="mb-3">Acesse a sua conta</h1> -->
			<div class="form-floating">
				<input id="txtEmailLogin" type="email" class="form-control" placeholder="Email" name="txt_email" required>
				<label for="txtEmailLogin">Email</label>
			</div>
			<div class="form-floating">
				<input id="txtSenhaLogin" type="password" class="form-control" placeholder="Senha" name="txt_senha" required>
				<label for="txtSenhaLogin">Senha</label>
				<i onclick="visualizarSenha('txtSenhaLogin');" class="fa-solid fa-eye-slash olho-senha"></i>
			</div>
			<div class="my-1">
				<a class="text-start text-decoration-none" href="esqueceu-senha.php">Esqueceu a senha?</a>
			</div>
			<div class="btn-group-vertical w-100 mt-2">
				<button id="btnEntrar" class="btn btn-lg" type="submit">Entrar</button>
				<a href="cadastro.php" class="btn btn-lg btnCadastrar">Ou cadastre-se</a>
			</div>
		</form>
	</main>
</body>

</html>