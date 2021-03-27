<?php 
 include 'verifica_login.php';
 include 'cabecalho_recebimento.php';
 include 'conexao.php';
 include 'functions_gaiolas.php';?>
 
<h1>Pedidos Recebidos</h1>
<p class="lead alert-primary">
Consultar pedidos que foram recebidos do FAST.
</p>
<h3>Selecione o período</h3>
<div class="container">
<p>
	<form action="filtro_recebimento.php" method="POST">
		<label>Data inicio</label>
		<input type="date" name="datainicio">
		<label>Data fim</label>
		<input type="date" name="datafim">
		<input class="btn btn-secondary" type="submit">
		</p>
	</form>
	
<?php include 'rodape.php' ?>