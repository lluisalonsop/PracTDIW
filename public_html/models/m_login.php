<?php
function ComprovaUsuari($connexio, $user, $paswd){
  echo "<script>console.log('ENTRA FUNCIO');</script>";
  $res = 0;
  try{
    $sql = "SELECT u.Password  
      FROM  usuarios u
      WHERE u.Nombre='$user'";
    $consulta = $connexio->prepare($sql);
    $consulta->execute();
    $num_usuaris = $consulta->fetchAll(PDO::FETCH_ASSOC);
    echo "<script>console.log('NUM USUARIS:".$num_usuaris."');</script>";
    $hashword = $num_usuaris[0]['Password'];
    echo "<script>console.log('HASHWORD:".$hashword."');</script>";
    $res = password_verify($paswd, $hashword);
    echo "<script>console.log('HASH:".$hashword."');</script>";
    echo "<script>console.log('TRIED TO VERIFY');</script>";
  }
  catch(PDOException $e){
	echo "Error: " . $e->getMessage();
  }
  return($res);
 }
?>
