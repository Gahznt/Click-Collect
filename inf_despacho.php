<?php 
 include 'verifica_login.php';
 include 'conexao.php';
 include 'functions_gaiolas.php';
date_default_timezone_set('America/Sao_Paulo');


$pedido = $_GET['pedidos'];
$loja = $_GET['loja'];
$now = date('Y/m/d H:i:s');
$arrayPedido = preg_split('/\s+/', trim($pedido));



foreach ($arrayPedido as $key => $value) {
	$sucesso = inserirDados($conexao, $value, $loja, $now);
}
header("location: sucessomsg.php");



include 'rodape.php' ?>