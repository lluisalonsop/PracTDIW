<?php 
	echo '<div id ="cesta">';
	echo '<h3>'."Cantidad de items en la cesta:". $_SESSION['cistella']['n_items'].'</h3>';
	echo '<h3>'."Precio total: ". $_SESSION['cistella']['preu'].'</h3>';
	echo '</div>';

?>