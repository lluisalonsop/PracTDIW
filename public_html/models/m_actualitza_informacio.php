<?php
function actualitzaBD($conn,$values,$id){
	$aux = getcwd();
	echo "<script>console.log('".$aux."');</script>";
	define('UPLOADS_FULL_PATH','/opt/lampp/htdocs/public_html/recursosnew/img/');
	$imagePath = sprintf('%s%s', UPLOADS_FULL_PATH,$id);
	try {
		$sql = "UPDATE usuarios SET Nombre='".$values["usuari"]."', Codigo_Postal='".$values['cpostal']."', Direccion='".$values['adreca']."', Correo_Electronico='".$values['correu']."', Poblacion='".$values['poblacio']."', IMG='".$imagePath."' WHERE ID=$id"; 
		$stmt = $conn->prepare($sql);
		$stmt->execute();
		move_uploaded_file($_FILES['profile_image']['tmp_name'],$imagePath);
	}
	catch(PDOException $e){
		echo $sql . "<br>" . $e->getMessage();
	}
}
?>
