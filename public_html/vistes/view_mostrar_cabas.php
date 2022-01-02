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
        <h2> Vosté te al cabas: </h2> 
    <?php
        if (session_id() == ''){
            session_start();
        }
        $ALL_ITEMS = $_SESSION['cistella']['items'];
        foreach($ALL_ITEMS as $numprod)
        {   
            $id = key($ALL_ITEMS);
            $resultats = consultaResultats($conn, $id);
            echo '<p> Producte:   '.$resultats[0]['Nombre'].' </p>';
            echo '<a> <img src="'.$resultats[0]['Foto'].'";/></a>';
            echo '<p> Descripcio: '.$resultats[0]['Descripcion'].'</p>';
            echo '<p> Preu: '.$resultats[0]['Precio'].'</p>';
            echo '<p> Total en el cabas : '.$_SESSION['cistella']['items'][$id].'</p>';
            echo '<br />';
            echo '<br />';
            next($ALL_ITEMS);
        } 
    ?>
            <form action="/public_html/index.php" method="get">
            <input type="submit" name="accio" value="Confirmar"/>
        <footer style = "grid-area: lowest;">
            <img src="/public_html/recursosnew/img/campus-e.png" width="100px" />
            <p>&copy;Universitat Autònoma de Barcelona. Campus d'Excel·lència</p>
        </footer>
</body>
</html>
Tecnologies de desenvolupament per a Internet i web 2021/202
