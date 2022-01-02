<?php 
	echo '<br/>';
	echo '<div id ="replace">';
	echo '<a> <img src="'.$res[0]['Foto'].'";/></a>';
	echo '<p>'.$res[0]['Nombre'].' </p>';
	echo '<p>'.$res[0]['Descripcion'].'</p>';
	echo '<p>'.$res[0]['Precio'].'</p>';
	echo '<form>';
	echo '<input type="hidden" name="prod" value="'.$res[0]['ID'].'" />';
	echo '<input type="button" onclick="UpdateCesta('.$res[0]['ID'].",".$res[0]['Precio'].')" name="accio" value="Afegeix_al_cabas"/>';
	echo '</div>';

?>
