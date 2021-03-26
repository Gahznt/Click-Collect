<?php
include 'verifica_login.php';
include 'cabecalho_recebimento.php';
include 'functions_gaiolas.php';
include 'conexao.php';
?>
<div class="container">
	<table class="table table-striped table-bordered">
	<tr>
		<td align="center" class="text-primary">Pedido</td>
		<td align="center"class="text-primary">Data da coleta FAST</td>
	</tr>
<?php

$newNow = $_GET['datafiltro'];
$query = "SELECT * FROM recebimento WHERE data_recebimento = '".$newNow."';";
$resultado = mysqli_query($conexao, $query);

while ($dadosfiltro = $resultado->fetch_array()) { ?>
		<tr>
			<td align="center" ><?php echo $dadosfiltro['pedido'] ?></td>
			<td align="center" ><?php echo date('d/m/Y', strtotime( $dadosfiltro['data_recebimento'])) ?></td>
			<?php } ?>
		</td>
	</tr> 
</table>
		<a href="lista_recebimento.php">Voltar</a><br>
</div>