<?php
  function add_to_cart($ID, $Preu){
    session_start();
    if(@!is_null($_SESSION['cistella']))
    {
              if(isset($_SESSION['cistella']['items'][$ID]))
              {
                $_SESSION['cistella']['items'][$ID] = $_SESSION['cistella']['items'][$ID] + 1;
                
              }
              else
              {
                $_SESSION['cistella']['items'][$ID] = 1;
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

    $_SESSION['cistella']['n_items'] = $_SESSION['cistella']['n_items']+1;
    $_SESSION['cistella']['preu'] = $_SESSION['cistella']['preu'] + $Preu;
    echo "<script>console.log('".$_SESSION['cistella']['n_items']."');</script>";
  }  
?>
