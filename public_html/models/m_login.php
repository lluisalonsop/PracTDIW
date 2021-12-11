<?php
function ComprovaUsuari($connexio, $user, $paswd){
  $res = 0;
  try{
    $sql = "SELECT u.Password  
      FROM  usuarios u
      WHERE u.Nombre='$user'";
    $consulta = $connexio->prepare($sql);
    $consulta->execute();
    $num_usuaris = $consulta->fetchAll(PDO::FETCH_ASSOC);
    $hashword = $num_usuaris[0]['Password'];
    $res = password_verify($paswd, $hashword);
  }
  catch(PDOException $e){
	echo "Error: " . $e->getMessage();
  }
  return($res);
 }
?>
