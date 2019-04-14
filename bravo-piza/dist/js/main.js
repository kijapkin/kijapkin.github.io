$(document).ready(function(){
let popup 			= document.getElementById('formPopup'),
	popupButton		= document.getElementById('popupButton');

	popupButton.onclick = function(){
		popup.style.display="block";
	};
	window.onclick = function(e){
		if(e.target==popup){
			popup.style.display="none";
		}
	}
});