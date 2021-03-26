<?php 
 include 'verifica_login.php';
 include 'cabecalho_recebimento.php';
 include 'conexao.php';
 include 'functions_gaiolas.php';?>
 
<h1>Pedidos despachados</h1>
<div class="container">
<p>
	<form action="filtro_recebimento.php" method="POST">
		<label>Data inicio</label>
		<input type="date" name="datainicio">
		<label>Data fim</label>
		<input type="date" name="datafim">
		<input class="btn btn-secondary" type="submit">
		
		<br><br>
		</p>
	</form>
	</p>
<table class="table table-striped table-bordered">
	<tr>
		<td align="center" class="text-primary">Pedido</td>
		<td align="center"class="text-primary">Data de recebimento do FAST</td>
	</tr>
	
	<?php 
	$data_filtro = date('d/m/Y');
	$resultado = mysqli_query ($conexao, "SELECT * FROM recebimento WHERE data_recebimento = '".$data_filtro."';");
	while ($dados = $resultado->fetch_array()) { ?>
		<tr>
			<td align="center" ><?php echo $dados['Pedido'] ?></td>
			<td align="center" ><?php echo $dados['data_recebimento'] ?></td>
			<td align="center">
			<?php 
			}?>
			</td>
		</tr>
<?php include 'rodape.php' ?>