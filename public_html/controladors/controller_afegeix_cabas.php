<?php
 include __DIR__.'/../models/m_afegeix_cabas.php';
 $ID = $_GET['prod'];
 $PREU = $_GET['preu'];
 add_to_cart($ID, $PREU);
 include __DIR__.'/../vistes/view_ajax_mostrar_cistella.php';

?>
