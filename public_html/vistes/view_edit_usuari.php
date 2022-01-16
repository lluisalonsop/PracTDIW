<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title> Market For Tokens </title>
    <link rel="stylesheet" type="text/css" href="/public_html/recursosnew/css/uab.css">
    <script src="/public_html/recursosnew/js/login.js"></script>


</head>

<body>
    
        <header id="toppest">
            <div style = "grid-area: pic;">
            <a><img src="/public_html/recursosnew/img/logo.jpg" width="100px" /></a>
            </div>
            <div style = "grid-area: text;">
            <h1>Market For Tokens!</h1>
            <p>Benvinguts a la botiga MFT!</p>
            </div>
        </header>
        <form action="/public_html/index.php" method="get">
            <input type="submit" name="accio" value="home"/>
        </form> 
    <div id="RegLog">
                   
                    <form method="post" enctype="multipart/form-data" action="/public_html/index.php" onsubmit="confirmaRegistre();">
                    	<section style="grid-area: left">
                        	<h2>Les teves Dades: </h2>
                        	<?php
                        	echo 'User:<input type="text" name="username" required value="'.$res[0]['Nombre'].'"/><br />';
                        	echo 'Adreça de correu electrònic:<input type="email" name="correu" required value="'.$res[0]['Correo_Electronico'].'"/><br />';
                        	echo 'Adreça:<input type="text" name="adreca"  maxlength="30" required value="'.$res[0]['Direccion'].'"/><br />';
                        	echo 'Població:<input type="text" name="poblacio"  maxlength="30" required value="'.$res[0]['Poblacion'].'"/><br />';
                        	echo 'Codi Postal:<input type="text" name="codi_postal" pattern="^\d{5}$"  required value="'.$res[0]['Codigo_Postal'].'"/><br />';
                        	?>
                        	Cambiar Imatge: <input type="file" name="profile_image" />
                        </section>
                        	<input method="post" type="submit"  name="accio" value="Guardar"/>
                        </form>
                        <section style="grid-area: right">
                        	<p>Imatge Actual:</p>
                        	<?php
                        	echo'<img src="/public_html/recursosnew/img/'.$_SESSION['logged'].'" width="500px"/>';
                        	?>
      			</section>                  	
                        <br /><br >


        <footer style = "grid-area: lowest;">
            <img src="/public_html/recursosnew/img/campus-e.png" width="100px" />
            <p>&copy;Universitat Autònoma de Barcelona. Campus d'Excel·lència</p>
        </footer>

    </div>

</body>
</html>
Tecnologies de desenvolupament per a Internet i web 2021/202
