$(document).ready(function(){
let popup 			= document.getElementById('formPopup'),
	popupButton		= document.getElementById('popupButton');

	popupButton.onclick = function(){
		popup.style.display="block";
	};
	window.onclick = function (event) {
		if(event.target == popup){
			popup.style.display="none";
		}
	}
});