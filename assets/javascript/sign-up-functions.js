
var signUpInput=document.getElementById("signUpText");
var signUpButton=document.getElementById("signUpButton");

signUpButton.addEventListener("click", function(){
	showModal();
	setEmailText(signUpInput.value);

}, false);
