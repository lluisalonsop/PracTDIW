<?php 
	@session_start();
	include __DIR__.'/../models/m_conecta_BD.php';
	include __DIR__.'/../models/m_retorna_headers.php';
	include __DIR__.'/../models/m_retorna_pedidos.php';
	$conn = conectaBD();
	if (isset($_SESSION['logged']))
	{
		$UID = $_SESSION['logged'];
		$Headers = consultaHeaders($conn, $UID);
		include __DIR__.'/../vistes/view_pedidos.php';
		foreach($Headers as $head)
		{
			$Pedidos = consultaPedidos($conn, $head['ID']);
			echo '<hr />';
			$total = 0;
			echo '<h2> Comanda de:'.$head['Fecha'].' </h2>';
			foreach($Pedidos as $p_data)
			{
				include __DIR__.'/../vistes/view_mostra_pedidos.php';
			}
			echo '<br>';
			echo '<p> Preu total de la Comanda: '.$total.'</p>';
		}
	}
	else
	{
	echo "<script>alert('Inici sessio primer!');</script>";
	include __DIR__.'/../recursosnew/htmls/portada.php';
	}
?>
