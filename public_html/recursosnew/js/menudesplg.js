$(document).ready(function(){
	$("#ConfigLogged").hide();
	$("#UsuariLogo").mouseenter(function(){
		$("#ConfigLogged").slideDown();
	});
	$("#Login").mouseleave(function(){
		$("#ConfigLogged").hide();
	});
});

