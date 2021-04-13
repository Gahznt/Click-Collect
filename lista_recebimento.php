<?php 
 //include 'verifica_login.php';
 include 'cabecalhosite.php';
 include 'conexao.php';
 include 'functions_gaiolas.php';?>
 
<h1>Pedidos Recebidos - Fast/Vblog</h1>
<hr class="my-4">
<h3>Selecione o período:</h3>
<div class="container">
<p>
	<form action="filtro_recebimento.php" method="POST">
		<label>Data inicio:</label>
		<input type="date" name="datainicio">
		<label>Data fim:</label>
		<input type="date" name="datafim">
		<input class="btn btn-primary" value="Pesquisar" type="submit">
	</form>
</p>
<img src="click-collect.png" width="709px" height="335px" style="background-color: #F8F9FA; border-radius: 25px;">
<?php include 'rodape.php' ?>