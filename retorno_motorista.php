<?php 
 include 'verifica_login.php';
 include 'conexao.php';
 include 'functions_gaiolas.php';

date_default_timezone_set('America/Sao_Paulo');

$now = date('Y/m/d H:i:s');
$id = $_POST['id'];
$url = $_POST['url'];
$pedidos = $_POST['pedidos'];
$conferente = $_POST['conferente'];
$matricula = $_POST['matricula'];

if (confirmaRecebimento($conexao, $now, $id, $conferente, $matricula)) {  
	header("Location: ".$_SERVER['HTTP_REFERER']."");
} else { 
	?> <p class="text-danger"> Pedido não recebido!!</p>
<?php } ?>

<?php

?>
<?php include 'rodape.php' ?>