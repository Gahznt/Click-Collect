<?php include 'cabecalho_motorista.php';
date_default_timezone_set('America/Sao_Paulo');
$now = date('d/m/Y'); 
$nowHr = date('H:i'); 
 ?>


<p class="alert alert-success" role="alert"> Pedidos inseridos com Sucesso!! <?= $now ?> ás <?= $nowHr ?>h </p>
<a href="lista.php" class="btn-second">Vizualisar agora</a><br>
<a href="painel.php" class="btn-second">Voltar</a>


<?php include 'rodape.php' ?>
