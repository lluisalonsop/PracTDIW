<?php
function ComprovaUsuari($connexio, $user, $paswd){
  echo "<script>console.log('ENTRA FUNCIO');</script>";
  $t = 0;
  try{
    $sql = "SELECT u.Password, u.ID 
      FROM  usuarios u
      WHERE u.Nombre='$user'";
    $consulta = $connexio->prepare($sql);
    $consulta->execute();
    $num_usuaris = $consulta->fetchAll(PDO::FETCH_ASSOC);
    echo "<script>console.log('NUM USUARIS:".@$num_usuaris."');</script>";
    $hashword = $num_usuaris[0]['Password'];
    echo "<script>console.log('HASHWORD:".$hashword."');</script>";
    $t = password_verify($paswd, $hashword);
    echo "<script>console.log('HASH:".$hashword."');</script>";
    echo "<script>console.log('TRIED TO VERIFY');</script>";
    $ID = $num_usuaris[0]['ID'];
  }
  catch(PDOException $e){
	echo "Error: " . $e->getMessage();
  }
  $res = array();
  $res['0'] = $t;
  $res['1'] = $ID;
  return($res);
 }
?>
