<?php
  $trobat = false;
  for($i = 0; $i <  sizeof($_SESSIONS['cistella']['items'];$i++){
  	if ($_SESSIONS['cistella']['items'][$i]['id_producto'] == $res){
        	$_SESSIONS['cistella']['items'][$i] = $_SESSIONS['cistella']['items'][$i] + 1;
        	$trobat = true;
        	break;
  	}
  }
  if ($trobat == false){
  	$_SESSIONS['cistella']['items'][$i+1]['id_producto'] = $res;
  }
?>
