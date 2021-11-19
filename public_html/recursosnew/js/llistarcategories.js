
ajaxllistproducts(categoria){
	const xhtpp = new XMLHttpRequest();
	xhtpp.open("GET", "../../index.php?categ="+categoria);
	htpp.send();
}
