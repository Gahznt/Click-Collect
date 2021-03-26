<?php
include 'verifica_login.php';
include 'conexao.php';
session_start();
?>
<html>
<head><meta charset="utf-8">
</head>
<body>

 <?php 
 $arquivo = 'relatorio_recebimento_fast.xls';
 $html = "";
 $html .= "<table border = '1'>";
 $html .= '<tr>';
 $html .= "<td colspan='2'>Relatório de pedidos recebidos do FAST</td>";
 $html .= '</tr>';

 $html .= '<tr>';
 $html .= '<td><b>Pedido<b></td>';
 $html .= '<td><b>Data recebimento<b></td>';
 $html .= '</tr>';

		//Selecionar todos os itens da tabela 
		$dtinicio = $_POST['datainicio'];
		$dtfim = $_POST['datafim'];
		$query = "SELECT * FROM recebimento WHERE DATE(data_recebimento) between '".$dtinicio."' and '".$dtfim."';";
		$resultado_query = mysqli_query($conexao, $query);
		
		while($row_query = mysqli_fetch_assoc($resultado_query)){
			$html .= '<tr>';
			$html .= '<td>'.$row_query["pedido"].'</td>';
			$html .= '<td>'.$row_query["data_recebimento"].'</td>';
			$html .= '</tr>';
		}
		// Configurações header para forçar o download
		header ("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
		header ("Last-Modified: " . gmdate("D,d M YH:i:s") . " GMT");
		header ("Cache-Control: no-cache, must-revalidate");
		header ("Pragma: no-cache");
		header ("Content-type: application/x-msexcel");
		header ("Content-Disposition: attachment; filename=\"{$arquivo}\"" );
		header ("Content-Description: PHP Generated Data" );
		// Envia o conteúdo do arquivo
		echo $html;
 ?>


</body>
</html>