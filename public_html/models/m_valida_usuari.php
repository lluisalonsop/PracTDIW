<?php
function validaUsuari(){
  echo "<script>console.log('ENTRAVALIDAUSURAI');</script>";
  try{
  $Nombre = $_POST['username'];
  $Correu = $_POST['correu'];
  $Clau = $_POST['clau'];
  $Clau = password_hash($Clau, PASSWORD_DEFAULT);
  $Adreca = $_POST['adreca'];
  $Poblacio = $_POST['poblacio'];
  $CPostal = $_POST['codi_postal'];


  $Correu = filter_var($Correu, FILTER_VALIDATE_EMAIL);

  }
  catch(PDOException $e){
	echo "Error: " . $e->getMessage();
  }
  if ($Correu != false)
  {
    echo "<script>console.log('CORREUIN');</script>";
    if(strlen($Adreca)< 31)
    {
    	echo "<script>console.log('ADREÇAIN');</script>";
    	if(strlen($Poblacio) < 31)
      	{
      		echo "<script>console.log('POBLACIOIN');</script>";
        	return(true);
      	}	
    }
  }
  return(false);
 }
function validaUsuariNoPwd(){
	try{
  		$Nombre = $_POST['username'];
  		$Correu = $_POST['correu'];
  		$Adreca = $_POST['adreca'];
  		$Poblacio = $_POST['poblacio'];
  		$CPostal = $_POST['codi_postal'];
  		$Correu = filter_var($Correu, FILTER_VALIDATE_EMAIL);
	}
  	catch(PDOException $e){
		echo "Error: " . $e->getMessage();
  	}
 	if ($Correu != false)
  	{
  		echo "<script>console.log('CORREUIN');</script>";
  		if(strlen($Adreca)< 31)
  		{
  			echo "<script>console.log('ADREÇAIN');</script>";
  		  	if(strlen($Poblacio) < 31)
  		    	{
  		    		echo "<script>console.log('POBLACIOIN');</script>";
  			      	return(true);
  		    	}	
  		}
  	}
	return(false);
}
?>
