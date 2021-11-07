
		<?php 
		        if (!empty($_SERVER['HTTPS']) && ('on' == $_SERVER['HTTPS'])) {
		        $uri = 'https://';
		    } else {
		        $uri = 'http://';
		    }
		    $uri .= $_SERVER['HTTP_HOST'];
		    $neouri = __DIR__;
		    $neouri = substr($neouri, -32);
		    echo $neouri;
		    header('Location: '.$uri .$neouri. '/view/portada.html');
		    exit;
		?>
