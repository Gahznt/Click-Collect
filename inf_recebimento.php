<?php 
 include 'verifica_login.php';
 include 'cabecalho_recebimento.php';
 include 'conexao.php';
 include 'functions_gaiolas.php';
?>

<?php  
date_default_timezone_set('America/Sao_Paulo');


$pedido = $_POST['pedidos'];
$newNow = date('Y/m/d H:i:s');
$arrayPedido = preg_split('/\s+/', trim($pedido));


		foreach ($arrayPedido as $key => $value) {
		$sucesso = inserirRecebimentoFast($conexao, $value, $newNow);
		 }
	if ($sucesso = true) { ?>
	<p class="alert alert-success" role="alert"> Pedidos Inseridos com Sucesso!! <?= $newNow ?> </p>
	<a href="lista_recebimento.php" class="btn-second">Vizualisar agora</a><br>
	<a href="painel_recebimento.php" class="btn-second">Voltar</a>
	<?php } else { ?>
		<p class="alert alert-danger" role="alert"> Pedidos não inseridos!!</p>
	<?php }

include 'rodape.php' ?>

<meta charset="utf-8">