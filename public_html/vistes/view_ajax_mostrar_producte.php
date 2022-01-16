<?php 
	echo '<br/>';
	echo '<div id ="replace">';
	echo '<a> <img src="'.$res[0]['Foto'].'";/></a>';
	echo '<p>'.$res[0]['Nombre'].' </p>';
	echo '<p>'.$res[0]['Descripcion'].'</p>';
	echo '<p>'.$res[0]['Precio'].'</p>';
	echo '<form action="javascript:void(0);" onsubmit="UpdateCesta('.$res[0]['ID'].",".$res[0]['Precio'].');">';
        echo '<h3> Numero de '.$res[0]['Nombre'].' a introduir al cabás:</h3>';
        echo '<input type="number" id="numero" min="1" required/>';
        echo '<input method="get" type="submit"  name="accio" value="Afegeix"/>';
        echo '</form>';
        echo '</div>';

?>
