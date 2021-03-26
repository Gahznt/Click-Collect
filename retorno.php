<?php 
 include 'verifica_login.php';
 include 'cabecalho.php';
 include 'conexao.php';
 include 'functions_gaiolas.php';
?>

<?php  
date_default_timezone_set('America/Sao_Paulo');

$now = date('Y/m/d H:i:s');
$id = $_POST['id'];

if (confirmaRecebimento($conexao, $now, $id)) {  
	header("location: painel_motorista.php");
} else { 
	?> <p class="text-danger"> Gaiolas não recebida!!</p>
<?php } ?>

<?php

?>
<?php include 'rodape.php' ?>