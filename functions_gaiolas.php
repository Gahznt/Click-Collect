<?php 
include 'verifica_login.php';
include 'conexao.php' ?>
<?php

function inserirDados($conexao, $pedido, $loja, $now) {
	$querySelect = "SELECT * FROM despacho WHERE gaiolas = '".$pedido.	"' AND recebimentoCT = 0";
	$resultadoConexaoSelect = mysqli_query($conexao, $querySelect);
	$resultadoSelect = mysqli_fetch_assoc($resultadoConexaoSelect);
	if (!is_null($resultadoSelect)) {
		$query = "UPDATE despacho SET datarecebimento = '".$now."', recebimentoCT = '1' WHERE id ='".
		$resultadoSelect['id']."'";
		mysqli_query($conexao, $query);
	}
	$query = "INSERT INTO despacho SET gaiolas = '".$pedido."', loja = '".$loja."', datadespacho = '".$now."';";
	return mysqli_query($conexao, $query);
} 

function inserirRecebimentoFast($conexao, $pedido, $newNow) {
	$query = "INSERT INTO recebimento SET pedido = '".$pedido."', data_recebimento = '".$newNow."';";
	return mysqli_query($conexao, $query);
} 

function inserirRecebimento($conexao, $pedidos, $loja) {

	$query = "SELECT * FROM `despacho` WHERE loja = '".$loja."'";
	if (is_array($pedidos) || is_object($pedidos))
	{
		foreach ($pedidos as $key => $pedido) {
			if($key == 0){
				$query = $query." AND gaiolas = '".$pedido."'";				
			}else{
				$query = $query." OR gaiolas = '".$pedido."' AND loja = '".$loja."'";				

			}
		}
	}
	
	$sth = mysqli_query($conexao, $query);
	$rows = array();
	while($r = mysqli_fetch_assoc($sth)) {
	    $rows[] = $r;
	}
	$resultado = json_encode($rows);

	$array = [];
	foreach ($pedidos as $key => $pedido) {
		$existenoarray = false;
		foreach ($rows as $key => $result) {

			if($result['gaiolas'] == $pedido){
				$existenoarray = true;
			}
		};
	}

	return json_encode($rows);

} 

function confirmaRecebimento($conexao, $value, $loja, $conferente, $matricula, $now) {
	$query = "INSERT INTO recebimento_loja SET pedido = '".$value."', loja_entrega = '".$loja."', conferente = '".$conferente."', matricula = '".$matricula."', data_recebimento = '".$now."';";
	return mysqli_query($conexao, $query);
}




