<?php 
 include 'verifica_login.php';
 include 'conexao.php';
 include 'functions_gaiolas.php';
date_default_timezone_set('America/Sao_Paulo');


$pedido = $_POST['pedidos_motorista'];
$loja = $_POST['loja'];
$conferente = $_POST['conferente'];
$matricula = $_POST['matricula'];
$now = date('Y/m/d H:i:s');
$arrayPedido = preg_split('/\s+/', trim($pedido));



foreach ($arrayPedido as $key => $value) {
	$sucesso = confirmaRecebimento($conexao, $value, $loja, $conferente, $matricula, $now);
}
header("location: sucessomsg_motorista.php");



include 'rodape.php' ?>