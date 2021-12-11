<?php 
	echo '<br/>';
	echo '<div id ="replace">';
	echo '<a> <img src="'.$res[0]['Foto'].'";/></a>';
	echo '<p>'.$res[0]['Nombre'].' </p>';
	echo '<p>'.$res[0]['Descripcion'].'</p>';
	echo '<p>'.$res[0]['Precio'].'</p>';
	echo '</div>';
	echo '<form action="/public_html/index.php" method="post">';
	echo '<input type="hidden" name="prod" value="'.$res[0]['ID'].'" />';
	echo '<input type="submit" name="accio" value="Afegeix-al-cabàs"/>';
?>
