<?php
  function remove_to_cart($ID,$Preu,$Num){
     if (session_status() === PHP_SESSION_NONE) {
 	session_start();
 }
    if(!is_null($_SESSION['cistella']))
    {
              if(isset($_SESSION['cistella']['items'][$ID]))
              {
              		$_SESSION['cistella']['items'][$ID] = $_SESSION['cistella']['items'][$ID] - $Num;
              }
    }
    else
    {
          $_SESSION['cistella'] = array();
          $_SESSION['cistella']['items'] = array();
          $_SESSION['cistella']['items'][$ID] = 1;
          $_SESSION['cistella']['n_items'] = 0;
          $_SESSION['cistella']['preu'] = 0;
    }

    $_SESSION['cistella']['n_items'] = $_SESSION['cistella']['n_items']-$Num;
    $_SESSION['cistella']['preu'] = $_SESSION['cistella']['preu'] - $Preu;
    echo "<script>console.log('".$_SESSION['cistella']['n_items']."');</script>";
  }  
?>
