<?php
function validaUsuari(){
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
    if(strlen($Adreca)< 31)
    {
        if(strlen($Poblacio) < 31)
      {
        return(true);
      }
    }
  }
  return(false);
 }
?>