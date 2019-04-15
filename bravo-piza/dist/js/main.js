$(document).ready(function(){
let popup 			= document.getElementById('formPopup');
	popupButton		= document.getElementById('popupButton');
	toogleClose		= document.getElementById('toogleClose');

	popupButton.onclick = function(){
		popup.style.display="block";
	};
	toogleClose.onclick = function(){
		popup.style.display="none";
	};
	window.onclick = function(e){
		if(e.target==popup){
			popup.style.display="none";
		}
	}
});