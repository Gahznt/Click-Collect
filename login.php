<?php 
session_start();
include 'conexao.php';

if (empty($_POST['user']) || empty($_POST['pass'])) {
	header('location: index.php');
	exit();
}

$usuario = mysqli_escape_string($conexao, $_POST['user']);
$senha = mysqli_real_escape_string($conexao, $_POST['pass']);

$query = "SELECT * FROM usuarios WHERE user = '".$usuario."' and pass = '".$senha."';";
$resultado = mysqli_query($conexao, $query);
$row = mysqli_num_rows($resultado);
$array = $resultado->fetch_array();

if ($row == 1) {
	$_SESSION['usuario'] = $usuario;
	if ($array['acesso'] == 1) {
		header('location: painel.php');
		exit;
		} else { header('location: painel_motorista.php'); exit; };
	} else {
	$_SESSION['nao_autenticado'] = true;
	header('location: index.php');
	exit;
}