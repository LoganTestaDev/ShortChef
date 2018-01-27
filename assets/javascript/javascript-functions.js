

/* Dropdown navigation menu code */
function toggleShowDropdownContent(){
     document.getElementById("navDropdown").classList.toggle("showDropdownContent");	
}

window.onclick=function(e){
	if(!e.target.matches('.dropButton')){
		var navDropdown=document.getElementById("navDropdown");
		if(navDropdown.classList.contains('showDropdownContent')){
		navDropdown.classList.remove('showDropdownContent');
		}
	}
}
/* End of dropdown navigation menu code */









/* Subscribe modal code */

function showModal(){
	subscribeModal.style.display="block";
	subscribeModalBackdrop.style.display="block";
	subscribeModalBackdrop.style.opacity="0.7";	
}

function hideModal() {
	subscribeModal.style.display="none";
	subscribeModalBackdrop.style.display="none";
	subscribeModalBackdrop.style.opacity="0";
}

var subscribeButton=document.getElementById("subscribeButton");
var subscribeModal=document.getElementById("subscribeModal");
var subscribeModalBackdrop=document.getElementById("subscribeModalBackdrop");
var closeModal=document.getElementById("closeModal");


subscribeButton.addEventListener("click", showModal, false);
closeModal.addEventListener("click", hideModal, false);
subscribeModalBackdrop.addEventListener("click", hideModal, false);

/* End of subscribe modal code */



/*Contact form validation */

function validateContactForm(){	


	var userFirstName=document.forms["contactForm"]["userFirstName"].value;
	var userLastName=document.forms["contactForm"]["userLastName"].value;
	var userEmail=document.forms["contactForm"]["userEmail"].value;
	var userComments=document.forms["contactForm"]["userComments"].value;
	
	
	
	
	var validForm=true;  /*Change this to false if anything goes wrong! */
	
	if(userFirstName === null || userFirstName === ""){
		validForm=false;
		document.forms["contactForm"]["userFirstName"].focus();
	}
	
	else if(userLastName === null || userLastName === ""){
		validForm=false;
		document.forms["contactForm"]["userLastName"].focus();
	}
	
	else if(userEmail === null || userEmail === ""){
		validForm=false;
		document.forms["contactForm"]["userEmail"].focus();
	}
	
	else if(userComments === null || userComments === ""){
		validForm=false;
		userComments=document.forms["contactForm"]["userComments"].focus();
	}
	
	
	/* VALIDATE EMAIL INPUTS */
	
	var atPos=userEmail.indexOf("@");
	var dotPos=userEmail.lastIndexOf(".");
	var finalChar=userEmail.length-1;
	
	if(atPos <= 0 ){
		validForm=false;
	}
	
	if(atPos + 1 >= dotPos){
		validForm=false;
	}	
	
	if(dotPos + 1 >= finalChar){
		validForm=false;
	}

	if(validForm===false){
		document.getElementById("clientSideValidationFeedback").innerHTML="Please fill all required fields in the correct format.";
		validForm=false;
	
	}else if (validForm){
		document.getElementById("clientSideValidationFeedback").innerHTML="Processing";
	}
	
	return validForm;
}




/*Modal form validation.  Similar to contact form but slightly different variables and checks. */

function validateModalForm(){	


	var userFirstName=document.forms["contactForm"]["userFirstNameSubscribe"].value;
	var userLastName=document.forms["contactForm"]["userLastNameSubscribe"].value;
	var userEmail=document.forms["contactForm"]["userEmailSubscribe"].value;	
	
	
	
	var validForm=true;  /*Change this to false if anything goes wrong! */
	
	if(userFirstName === null || userFirstName === ""){
		validForm=false;
		document.forms["contactForm"]["userFirstNameSubscribe"].focus();
	}
	
	else if(userLastName === null || userLastName === ""){
		validForm=false;
		document.forms["contactForm"]["userLastName"].focus();
	}
	
	else if(userEmail === null || userEmail === ""){
		validForm=false;
		document.forms["contactForm"]["userEmailSubscribe"].focus();
	}
	
	
	
	/* VALIDATE EMAIL INPUTS */
	
	var atPos=userEmail.indexOf("@");
	var dotPos=userEmail.lastIndexOf(".");
	var finalChar=userEmail.length-1;
	
	if(atPos <= 0 ){
		validForm=false;
	}
	
	if(atPos + 1 >= dotPos){
		validForm=false;
	}	
	
	if(dotPos + 1 >= finalChar){
		validForm=false;
	}

	if(validForm===false){
		document.getElementById("clientSideValidationFeedback").innerHTML="Please fill all required fields in the correct format.";
		validForm=false;
	
	}else if (validForm){
		document.getElementById("clientSideValidationFeedback").innerHTML="Processing";
	}
	
	return validForm;
}








