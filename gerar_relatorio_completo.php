<?php
//include 'verifica_login.php';
include 'conexao.php';
session_start();

 $arquivo = 'relatorio_despachos.xls';
 $html = "";
 $html = "<meta charset='utf-8'>";
 $html .= "<table border = '1'>";
 $html .= '<tr>';
 $html .= "<td colspan='5' align='center'>Relatório CLICK</td>";
 $html .= '<td colspan="4" align="center" style="background-color:red;"><b>Infs de entrega em loja</b></td>';
 $html .= '</tr>';


 $html .= '<tr>';
 $html .= '<td align="center"><b>Pedido<b></td>';
 $html .= '<td align="center"><b>Loja<b></td>';
 $html .= '<td align="center"><b>Data de despacho<b></td>';
 $html .= '<td align="center"><b>Recebimento no CT<b></td>';
 $html .= '<td align="center"><b>Data de recebimento no CT<b></td>';
 $html .= '<td align="center"><b>Pedido entregue em loja<b></td>';
 $html .= '<td align="center"><b>Loja Entregue<b></td>';
 $html .= '<td align="center"><b>Data de entrega na loja<b></td>';
 $html .= '<td align="center"><b>Matricula do conferente loja<b></td>';
 $html .= '</tr>';


		//Selecionar todos os itens da tabela 
		$dtinicio = $_POST['datainicio'];
		$dtfim = $_POST['datafim'];
		$loja = $_POST['loja'];
		$query = "SELECT * FROM recebimento_loja RIGHT JOIN despacho ON (recebimento_loja.pedido = despacho.gaiolas) WHERE loja = '".$loja."' AND DATE(datadespacho) between '".$dtinicio."' and '".$dtfim."';";
		$resultado_query = mysqli_query($conexao, $query);
		
		while($row_query = mysqli_fetch_assoc($resultado_query)){
			$html .= '<tr>';
			$html .= '<td align="center">'.$row_query["gaiolas"].'</td>';
			$html .= '<td align="center">'.$row_query["loja"].'</td>';
			$html .= '<td align="center">'.$row_query["datadespacho"].'</td>';
			$html .= '<td align="center">'.$row_query["recebimentoCT"].'</td>';
			$html .= '<td align="center">'.$row_query["datarecebimento"].'</td>';
			$html .= '<td align="center">'.$row_query["pedido"].'</td>';
			$html .= '<td align="center">'.$row_query["loja_entrega"].'</td>';
			$html .= '<td align="center">'.$row_query["data_recebimento"].'</td>';
			$html .= '<td align="center">'.$row_query["matricula"].'</td>';
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