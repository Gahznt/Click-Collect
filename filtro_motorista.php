<?php
include 'verifica_login.php';
include 'cabecalho_motorista.php';
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
$loja = $_GET['loja'];
$conferente = $_GET['conferente'];
$matricula = $_GET['matricula'];
$pedidos = $_GET['pedidos_motorista'];
$arrayPedido = preg_split('/\s+/', trim($pedidos));
$resultado = inserirRecebimento($conexao, $arrayPedido, $loja);
$qtdBipados = count($arrayPedido);
$qtd = count(json_decode($resultado)); 
if ($qtdBipados != $qtd) { ?>
	<p class="alert alert-warning" role="alert">⚠ Quantidade de pedidos encontrados: <b><?php echo $qtd."/".$qtdBipados ?></b> </p>
<?php }
	foreach (json_decode($resultado, true) as $key => $value) { ?>
		<tr>
			<td align="center" ><?php echo $value['gaiolas']?></td>
			<td align="center" ><?php echo $value['loja'] ?></td>
			<td align="center" ><?php echo date('d/m/Y h:m:s', strtotime( $value['datadespacho'])) ?></td>
						<td align="center">
			<?php if ( $value['recebimentoloja'] == 0 ) { ?> 
				<form method="POST" action="retorno_motorista.php">
				<input type="text" hidden name="id" <?php echo "value='".$value['id']."'"?> >
			   <input type="text" hidden name="conferente" <?php echo "value='".$conferente."'"?> >
			   <input type="text" hidden name="matricula" <?php echo "value='".$matricula."'"?> >
				<button type="submit" class="btn btn-warning">⚠Entregar</button>
				</form>
			<?php } else {
					echo $value['datarecebimento'];
			} ?>
		</td>
	</tr> <?php
} ?>
</table>
		<a href="painel_motorista.php">Voltar</a>
</div>