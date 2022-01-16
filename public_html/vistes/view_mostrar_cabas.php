<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title> Market For Tokens </title>
    <link rel="stylesheet" type="text/css" href="/public_html/recursosnew/css/uab.css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
    <script src="/public_html/recursosnew/js/menudesplg.js"></script>
    <script src="/public_html/recursosnew/js/cabas.js"></script>


</head>

<body>
        <div id="container">
		        <header id="toppest" style="grid-area: top">
		            <div style = "grid-area: mt">
		                <br/>
		            </div>
		            <div style = "grid-area: pic">
		            <img src="/public_html/recursosnew/img/logo.jpg" width="100px" /></a>
		            </div>

		            <div style = "grid-area: text">
		            <h1>Market For Tokens!</h1>  
		            <p>Benvinguts a la botiga MFT!</p>

		                         </div>
		                        <div id="Login"style = "grid-area: login">
		                        	<div id="UsuariLogo">
		                        	<?php
                        		if(isset($_SESSION['logged']) && $_SESSION['logged'] != -1){
                    				echo'<img src="/public_html/recursosnew/img/'.$_SESSION['logged'].'" width="140px" /></a>';
                        			echo'</div>';
                        			echo'<div id="ConfigLogged">';
                                		echo'<div id="MeuAcc">';
                        	 		echo'<p2 onclick="EDITPROFILE()"> El meu compte. <p2>';
                        			echo'</div>';
					 	echo'<div id="MeuCompr">';
                        	 		echo'<p2 onclick="CONSULTACOMPRES()"> Les meves compres. </p2>';
                        			echo'</div>';
                            			echo'<form action="/public_html/index.php" method="get">';
                                    		echo'<input type="submit" name="accio" value="Sortir"/>';
                                }
                                else{
                             		echo'<img src="/public_html/recursosnew/img/usuari.jpg" width="140px" /></a>';
                        		echo'</div>';
                        		echo '<div id="ConfigLogged">';
                                	echo '<form action="/public_html/index.php" method="get">';
                                	echo '<input type="submit" name="accio" value="login"/>';
                                }
                        	 echo '</div>';
                                echo '<div id ="cesta">';
                                echo '<h3>'."Cantidad de items en la cesta:". @$_SESSION['cistella']['n_items'].'</h3>';
                                echo '<h3>'."Precio total: ". @$_SESSION['cistella']['preu'].'</h3>';
                                echo '</div>';
                                ?>
		                        </div>

		        <div id="navtab"style = "grid-area: navtab">   
			        <form action="/public_html/index.php" method="get">
			        <input type="submit" name="accio" value="llistar-categories"/> 
			        </form>
		    	</div>
		        </header>
		    </div>
		    <form action="/public_html/index.php" method="get">
            		<input type="submit" name="accio" value="home"/>
        	    </form>
    <?php
        if (session_id() == ''){
            session_start();
        }
        @$ALL_ITEMS = $_SESSION['cistella']['items'];
        if (@count($ALL_ITEMS) != 0){ 
        	echo '<h2> Vosté te al cabas: </h2>';
        	foreach($ALL_ITEMS as $numprod)
        	{   
            		$id = key($ALL_ITEMS);
            		$resultats = consultaResultats($conn, $id);
            		echo '<hr />';
            		echo '<p> Producte:   '.$resultats[0]['Nombre'].' </p>';
            		echo '<a> <img src="'.$resultats[0]['Foto'].'";/></a>';
            	echo '<p> Descripcio: '.$resultats[0]['Descripcion'].'</p>';
            	echo '<p> Preu per unitat: '.$resultats[0]['Precio'].'</p>';
            	echo '<p> Total en el cabas : '.$_SESSION['cistella']['items'][$id].'</p>';
            	echo '<br />';
            	echo '<form action="javascript:void(0);" onsubmit="UpdateCesta('.$resultats[0]['ID'].",".$resultats[0]['Precio'].');">';
        	echo '<h3> Numero de '.$resultats[0]['Nombre'].' a afegir al cabás:</h3>';
        	echo '<input type="number" id="numero_'.$id.'_1" min="1" required/>';
        	echo '<input method="get" type="submit"  name="accio" value="Afegeix"/>';
        	echo '</form>';
        	echo '<form action="javascript:void(0);" onsubmit="RestarCesta('.$resultats[0]['ID'].",".$resultats[0]['Precio'].');">';
        	echo '<h3> Numero de '.$resultats[0]['Nombre'].' a treure del cabás:</h3>';
        	echo '<input type="number" id="numero_'.$id.'_2" min="1" max='.$_SESSION['cistella']['items'][$id].' required/>';
        	echo '<input method="get" type="submit"  name="accio" value="Treure"/>';
        	echo '</form>';
            	echo '<button onclick="Buidaproduct('.$id.','.$_SESSION['cistella']['items'][$id].','.$resultats[0]['Precio'].')"> Eliminar tots els '.$resultats[0]['Nombre'].' </button>';
            	echo '<br />';
            	next($ALL_ITEMS);
        	}
        	echo '<h2> Accions a fer: </h2>'; 
        	echo '<form action="/public_html/index.php" method="get">';
        	echo '<input type="submit" name="accio" value="Confirmar"/>';
            	echo '<form action="/public_html/index.php" method="get">';
            	echo '<input type="submit" name="accio" value="Buidar"/>';
        }
        else{
        	echo '<h2> Vosté no te rés al cabas!!! </h2>';
        }
   ?>
   	<br />
        <footer style = "grid-area: lowest;">
            <img src="/public_html/recursosnew/img/campus-e.png" width="100px" />
            <p>&copy;Universitat Autònoma de Barcelona. Campus d'Excel·lència</p>
        </footer>
</body>
</html>
Tecnologies de desenvolupament per a Internet i web 2021/202
