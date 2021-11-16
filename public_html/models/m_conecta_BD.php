<?php
function conectaBD(){
   $servername = "localhost";
   $username = "root";
   $password = "";
   //$db = "market for tokens";
   try {
      //$conn = new PDO("mysql:host=$servername;dbname=myDB", $username, $password, $db);
      $conn = new PDO("mysql:host=$servername;dbname=market for tokens", $username, $password);
      // set the PDO error mode to exception
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      echo "Connected successfully";
      }
   catch(PDOException $e)
      {
      echo "Connection failed: " . $e->getMessage();
      }
   return($conn);
}
?>
