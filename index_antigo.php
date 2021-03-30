<html>
<?php include 'cabecalho.php';
session_start();
?>


<h1>Login</h1>
<br>	
<body background="background_all.png" style=" background-image: background_all.png; background-repeat: no-repeat; background-size: 100%">
	<form action="login.php" method="POST">	
		<?php if (isset($_SESSION['nao_autenticado'])): ?>
		<p class="alert alert-danger" role="alert">USUÁRIO OU SENHA INVÁLIDOS!!!</p>
		<?php endif ?>
		<label>
		<b>Usuário:</b>
		<input type="user" name="user" class="form-control" required="yes" autofocus="yes" >
		<b>Senha:</b>
		<input type="password" name="pass" class="form-control" required="yes">
		</label>
		<br>
		<br>
		<button type="submit" class="btn btn-primary">Acessar</button>
		<br>
	</form>
<?php include 'rodape.php'?>
</html>