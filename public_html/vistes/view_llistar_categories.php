<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title> Market For Tokens </title>
    <link rel="stylesheet" type="text/css" href="/public_html/recursosnew/css/uab.css">
    <script src="/public_html/recursosnew/js/llistarcategories.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
    <script src="/public_html/recursosnew/js/menudesplg.js"></script>


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
                                echo '<h3>'."Cantidad de items en la cesta:". $_SESSION['cistella']['n_items'].'</h3>';
                                echo '<h3>'."Precio total: ". $_SESSION['cistella']['preu'].'</h3>';
                                echo '</div>';
                                ?>
		                        </div>

		        <div id="navtab"style = "grid-area: navtab">   
			        <form action="/public_html/index.php" method="get">
			        <input type="submit" name="accio" value="mostrar-cabas"/> 
			        </form>
		    	</div>
		        </header>
		    </div>
		    <form action="/public_html/index.php" method="get">
            		<input type="submit" name="accio" value="home"/>
        	    </form>

        <header class="fancy">
         <h2> Categories :</h2>
        </header>
        <div id ="categories">
            <?php
             	$count = 0;
            	foreach($res as $categ){ ?>
                	<div style="<?php echo $categ["ID"]; ?>">
                    		<a> <img src="<?php echo $categ["Foto"]; ?>" /></a> 
                    		<p id="<?php echo $categ["ID"]; ?>" onclick="MostrarProductes(<?php echo $categ["ID"]; ?>)"> <?php echo $categ["Nombre"]?></p>
                	</div>
            <?php }?>
        </div>
    </div>
    <div id="replace" > </div> 
</body>
</html>
Tecnologies de desenvolupament per a Internet i web 2021/2022
