<?php
  function add_to_cart($ID){
    if(isset($_SESSION['cistella']))
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
    }
    $_SESSION['cistella']['n_items'] = $_SESSION['cistella']['n_items']+1;
  }  
?>
