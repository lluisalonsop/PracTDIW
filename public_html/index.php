<?php
 echo "<script>console.log('ENTRA PHP');</script>";
 session_start();
 $accio = @$_GET['accio'];
 if (@!isset($accio))
    {
        $accio = $_POST['accio'];
    }

    
 switch ($accio) {
 case 'llistar-categories':
 @include __DIR__.'/resources/resource_llistar_categories.php';
 break;

 case 'llistar-productes':
 @include __DIR__.'/resources/resource_llistar_productes.php';
 break;

 case 'mostrar-producte':
 @include __DIR__.'/resources/resource_mostrar_producte.php';
 break;

 case 'login':
 @include __DIR__.'/resources/resource_mostrar_login.php';
 break;

 case 'setlogin':
 @include __DIR__.'/resources/resource_set_login.php';
 break;

 case 'Registrar':
 @include __DIR__.'/resources/resource_registre.php';
 break;

 case 'Afegeix_al_cabas':
 include __DIR__.'/resources/resource_afegeix_cabas.php';
 break;
 
 case 'mostrar-cabas':
 include __DIR__.'/resources/resource_mostrar_cabas.php';
 break;
 
 case 'Confirmar':
 include __DIR__.'/resources/resource_confirma_compra.php';
 break;

 case 'Buidar':
 @include __DIR__.'/resources/resource_buida_cistella.php';
 break;

 case 'Consulta-Pedidos':
 @include __DIR__.'/resources/resource_consulta_pedidos.php';
 break;
 
 case 'EditProfile':
 include __DIR__.'/resources/resource_editar_perfil.php';
 break;
 
 case 'Guardar':
 include __DIR__.'/resources/resource_guardar_perfil.php';
 break;
 
 case 'Sortir':
 @session_destroy();
 $_GET['accio'] = "default";
 @include __DIR__.'/index.php';
 break;

 default:
 @include __DIR__.'/resources/resource_portada.php';
 break;
 }
?>
