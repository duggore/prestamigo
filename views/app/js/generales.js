function __(id){
	return document.getElementById(id);
}

function Cancela(contenido,url){
	var action = window.confirm(contenido);
	if (action) {
		window.location = url;
	}
}

function Elimina(contenido,url){
	var action = window.confirm(contenido);
	if (action) {
		window.location = url;		
	}
}

function Imprimir(url){
			window.location = url;
	}