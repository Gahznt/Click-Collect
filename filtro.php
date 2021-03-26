<?php
include 'verifica_login.php';
include 'cabecalhosite.php';
include 'functions_gaiolas.php';
include 'conexao.php';
?>
<div class="container">
	<table class="table table-striped table-bordered">
	<tr>
		<td align="center" class="text-primary">Gaiola</td>
		<td align="center"class="text-primary">Loja</td>
		<td align="center"class="text-primary">Data do Envio</td>
		<td align="center"class="text-primary">Recebimento Loja</td>
	</tr>
<?php

$dataloja = $_GET['loja'];
$query = "SELECT * FROM despacho WHERE loja ='".$dataloja."';";
$resultado = mysqli_query($conexao, $query);

while ($dadosfiltro = $resultado->fetch_array()) { ?>
		<tr>
			<td align="center" ><?php echo $dadosfiltro['gaiolas'] ?></td>
			<td align="center" ><?php echo $dadosfiltro['loja'] ?></td>
			<td align="center" ><?php echo date('d/m/Y h:m:s', strtotime( $dadosfiltro['datadespacho'])) ?></td>
						<td align="center">
			<?php if ( $dadosfiltro['recebimentoloja'] == 0 ) { ?> 
				<form method="POST" action="retorno.php">
				<input type="text" hidden name="id" <?php echo "value='".$dadosfiltro['id']."'"?> >
				<p class="alert alert-danger" role="alert">Pendente de entrega</p>
				</form>
			<?php } else {
					echo $dadosfiltro['datarecebimento'];
			} ?>
		</td>
	</tr> <?php
} ?>
</table>
		<a href="lista.php">Voltar</a>
</div>