<?php
include 'verifica_login.php';
include 'cabecalho_recebimento.php';
include 'functions_gaiolas.php';
include 'conexao.php';
$dtinicio = $_POST['datainicio'];
$dtfim = $_POST['datafim'];
?>
<div class="container">
<form action = "gerar_relatorio.php" method="POST">
<input type="text" name="datainicio" hidden value="<?php echo $dtinicio?>">
<input type="date" name="datafim" hidden value="<?php echo $dtfim?>">
<input class="btn btn-success" type="submit" value="Extrair Relatorio">
</form>
	<table class="table table-striped table-bordered">
	<tr>
		<td align="center" class="text-primary">Pedido</td>
		<td align="center"class="text-primary">Data da coleta FAST</td>
	</tr>
<?php

$query = "SELECT * FROM recebimento WHERE DATE(data_recebimento) between '".$dtinicio."' and '".$dtfim."';";
$resultado = mysqli_query($conexao, $query);

while ($dadosfiltro = $resultado->fetch_array()) { ?>
		<tr>
			<td align="center" ><?php echo $dadosfiltro['pedido'] ?></td>
			<td align="center" ><?php echo date('d/m/Y H:i:s', strtotime( $dadosfiltro['data_recebimento'])) ?></td>
			<?php } ?>
		</td>
	</tr> 
</table>
		<a href="lista_recebimento.php">Voltar</a><br>
</div>