<?php 
 include 'verifica_login.php';
 include 'cabecalho_recebimento.php';
 include 'conexao.php';
 include 'functions_gaiolas.php';?>
 
<h1>Gaiolas despachadas</h1>
<div class="container">
	<form action="filtro_recebimento.php">
		<input type="date" name="datafiltro">
		<input class="btn btn-secondary" type="submit">
		<a href="gerar_relatorio.php"  class="btn btn-success">Gerar relatorio Geral</a>
		<br><br>
		</p>
	</form>
<table class="table table-striped table-bordered">
	<tr>
		<td align="center" class="text-primary">Pedido</td>
		<td align="center"class="text-primary">Data do recebimento do FAST</td>
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