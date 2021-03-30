<?php
include 'verifica_login.php';
include 'cabecalhosite.php';
include 'functions_gaiolas.php';
include 'conexao.php';
$dataloja = $_GET['loja'];
?>
<div class="container">
<p>
<h1>Pedidos despachados</h1>
<form action="gerar_relatorio_completo.php" method="POST">
<input type="text" name="loja"value="<?php echo $dataloja?>" hidden><br>
<input class="btn btn-success" type="submit" value="Extrair Relatorio">
</form>
</p>
	<table class="table table-striped table-bordered">
	<tr>
		<td align="center" class="text-primary">Pedido</td>
		<td align="center"class="text-primary">Loja</td>
		<td align="center"class="text-primary">Data do Envio</td>
	</tr>
<?php

$query = "SELECT * FROM despacho WHERE loja ='".$dataloja."';";
$resultado = mysqli_query($conexao, $query);

while ($dadosfiltro = $resultado->fetch_array()) { ?>
		<tr>
			<td align="center" ><?php echo $dadosfiltro['gaiolas'] ?></td>
			<td align="center" ><?php echo $dadosfiltro['loja'] ?></td>
			<td align="center" ><?php echo date('d/m/Y h:m:s', strtotime( $dadosfiltro['datadespacho'])) ?></td>
	</tr> <?php
} ?>
</table>
<a href="lista.php" class = "btn btn-primary">Voltar</a>
</div>