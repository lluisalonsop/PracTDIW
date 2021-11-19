<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title> Market For Tokens </title>
    <link rel="stylesheet" type="text/css" href="/public_html/recursosnew/css/uab.css">
    <script src="../recursosnew/js/llistarcategories.js"></script>


</head>

<body>
    <div id="container">
        <header id="toppest">
            <div style = "grid-area: pic;">
            <a> <img src="/public_html/recursosnew/img/logo.jpg" width="100px" /></a>
        
            </div>

            <div style = "grid-area: text;">
            <h1>Market For Tokens!</h1>
            <p>Benvinguts a la botiga MFT!</p>
            </div>

        </header>

        <form action="/public_html/index.php" method="get">
            <input type="submit" name="accio" value="home"/>
        </form> 

        <header class="fancy">
         <h2> Categories :</h2>
        </header>
        <div id ="categories">
            <?php foreach($res as $categ){ ?>
                <div style="<?php echo $categ["ID"]; ?>">
                    <a> <img src="<?php echo $categ["Foto"]; ?>" /></a>
                    <h4><?php echo $categ["Nombre"]?> onclick="ajaxllistproducts(<?php echo $categ["ID"];?>)"</h4>
                </div>
            <?php }?>
        </div>
    </div> 
</body>
</html>
Tecnologies de desenvolupament per a Internet i web 2021/202
