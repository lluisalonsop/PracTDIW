<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title> Market For Tokens </title>
    <link rel="stylesheet" type="text/css" href="/public_html/recursosnew/css/uab.css">
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
        <input type="submit" name="accio" value="llistar-categories"/> 
        <input type="submit" name="accio" value="mostrar-cabas"/>   
        </form>
        </header>

        <footer id = "container" style = "grid-area: lowest;">
            <img src="/public_html/recursosnew/img/campus-e.png" width="100px" />
            <p>&copy;Universitat Autònoma de Barcelona. Campus d'Excel·lència</p>
        </footer>

    </div>

</body>
</html>
Tecnologies de desenvolupament per a Internet i web 2021/202
