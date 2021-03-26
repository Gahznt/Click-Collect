<?php include 'cabecalho_motorista.php';
$now = date('Y/m/d H:i:s'); ?>


<p class="alert alert-success" role="alert"> Pedidos Inseridas com Sucesso!! <?= $now ?> </p>
<a href="lista.php" class="btn-second">Vizualisar agora</a><br>
<a href="painel.php" class="btn-second">Voltar</a>


<?php include 'rodape.php' ?>
