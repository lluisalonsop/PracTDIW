<?php
function consultaResultats($connexio){
try{
$consulta = $connexio->prepare("SELECT Nombre FROM categorias");
$consulta->execute();
$resultats = $consulta->fetchAll(PDO::FETCH_ASSOC);
}
}catch(PDOException $e){
echo "Error: " . $e->getMessage();
}
return($resultats);
}
?>