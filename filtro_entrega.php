<?php 
 include 'verifica_login.php';
 include 'conexao.php';
 include 'cabecalho_recebimento.php';
 include 'functions_gaiolas.php';
date_default_timezone_set('America/Sao_Paulo');
$loja = $_POST['loja'];
$dtinicio = $_POST['datainicio'];
$dtfim = $_POST['datafim'];
?>
<div class="container">
<form action = "gerar_relatorio_entrega.php" method="POST">
<input type="date" name="datainicio" hidden value="<?php echo $dtinicio?>">
<input type="date" name="datafim" hidden value="<?php echo $dtfim?>">
<input name="loja" hidden value="<?php echo $loja?>">
<input class="btn btn-success" type="submit" value="Extrair Relatorio">
</form>
</form>
	<table class="table table-striped table-bordered">
	<tr>
		<td align="center" class="text-primary">Pedido</td>
		<td align="center" class="text-primary">Loja</td>
		<td align="center" class="text-primary">Conferente Loja</td>
		<td align="center" class="text-primary">Matricula Conferente Loja</td>
		<td align="center"class="text-primary">Data da entrega em loja</td>
	</tr>
<?php
$query = "SELECT * FROM recebimento_loja WHERE loja = '".$loja."' AND DATE(data_recebimento) between '".$dtinicio."' and '".$dtfim."';";
$resultado = mysqli_query($conexao, $query);

while ($dadosfiltro = $resultado->fetch_array()) { ?>
	<tr>
		<td align="center" ><?php echo $dadosfiltro['pedido'] ?></td>
		<td align="center" ><?php echo $dadosfiltro['loja'] ?></td>
		<td align="center" ><?php echo $dadosfiltro['conferente'] ?></td>
		<td align="center" ><?php echo $dadosfiltro['matricula'] ?></td>
		<td align="center" ><?php echo date('d/m/Y H:i:s', strtotime( $dadosfiltro['data_recebimento'])) ?></td>
		<?php } ?>
	</td>
</tr> 
</table>

<?php include 'rodape.php' ?>