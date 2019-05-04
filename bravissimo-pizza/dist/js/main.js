$(document).ready(function(){
let popup 			= document.getElementById('formPopup'),
	toogleClose		= document.getElementById('toogleClose'),
	popupButton		= document.getElementById('popupButton');

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