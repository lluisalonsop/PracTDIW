<?php
 include __DIR__.'/../models/m_conecta_BD.php';
 include __DIR__.'/../models/m_afegeix_cabas.php';
 $ID = $_POST['prod'];
 add_to_cart($ID);
?>
