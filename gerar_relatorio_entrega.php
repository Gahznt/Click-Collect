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
 $arquivo = 'Relatório_Entreg_Loja.xls';
 $html = "";

 $html .= "<table border = '1'>";

 $html .= '<tr>';
 $html .= '<td align="center"><b>Pedido<b></td>';
 $html .= '<td align="center"><b>Loja<b></td>';
 $html .= '<td align="center"><b>Conferente Loja<b></td>';
 $html .= '<td align="center"><b>Matrícula Conferente Loja<b></td>';
 $html .= '<td align="center"><b>Data Entrega em loja<b></td>';
 $html .= '</tr>';

		//Selecionar todos os itens da tabela 
		$dtinicio = $_POST['datainicio'];
		$dtfim = $_POST['datafim'];
		$loja = $_POST['loja'];
		$query = "SELECT * FROM recebimento_loja WHERE loja = '".$loja."' AND DATE(data_recebimento) between '".$dtinicio."' and '".$dtfim."';";
		$resultado_query = mysqli_query($conexao, $query);
		
		while($row_query = mysqli_fetch_assoc($resultado_query)){
			$html .= '<tr>';
			$html .= '<td align="center">'.$row_query["pedido"].'</td>';
			$html .= '<td align="center">'.$row_query["loja"].'</td>';
			$html .= '<td align="center">'.$row_query["conferente"].'</td>';
			$html .= '<td align="center">'.$row_query["matricula"].'</td>';
			$html .= '<td align="center">'.$row_query["data_recebimento"].'</td>';
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