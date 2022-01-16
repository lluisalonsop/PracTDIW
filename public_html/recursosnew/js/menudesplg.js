$(document).ready(function(){
	$("#ConfigLogged").hide();
	$("#UsuariLogo").mouseenter(function(){
		$("#ConfigLogged").slideDown();
	});
	$("#Login").mouseleave(function(){
		$("#ConfigLogged").hide();
	});
});

function EDITPROFILE(){
	location.href = "/public_html/index.php?accio=EditProfile";
}
function CONSULTACOMPRES(){
	location.href = "/public_html/index.php?accio=Consulta-Pedidos";
}
