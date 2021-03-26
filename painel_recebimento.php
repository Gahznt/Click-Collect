<?php 
include 'verifica_login.php';
include 'cabecalho_recebimento.php';
?>
	<form action="inf_recebimento.php" method="POST">
	<h1>Receber Pedidos Click</h1><br>
		<h3>Pedidos</h3>
		<textarea name="pedidos" required="yes"></textarea><br><p></p>
		<input class="btn btn-outline-success" type="submit">
	</form>
</html>
<?php include 'rodape.php' ?>