<?php 
    if (!empty($_SERVER['HTTPS']) && ('on' == $_SERVER['HTTPS'])) {
        $uri = 'https://';
     } else {
        $uri = 'http://';
     }
     $uri .= $_SERVER['HTTP_HOST'];
     header('Location: '.$uri .'/public_html/recursosnew/htmls/mostrar_categories.html');
     exit;
?>
