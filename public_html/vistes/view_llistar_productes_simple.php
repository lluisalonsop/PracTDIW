<?php 
	echo <div id ="ajaxed">;
	foreach($res as $p_data){
	echo <div>
	echo <a> <img src="<?php echo $p_data["Foto"]";/></a>;
	echo <p>$p_data['Nombre'] </p>
	echo <p>$p_data['Precio'] </p>
	echo </div>
	}
	echo </div>
?>
