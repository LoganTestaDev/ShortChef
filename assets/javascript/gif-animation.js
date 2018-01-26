
/* Gif mouseover code */
function showLogoGif () {
	logoImg.style.display="none";
	logoGif.style.display="block";
}

function hideLogoGif(){
	logoImg.style.display="block";
	logoGif.style.display="none";
}


var logoImg=document.getElementById("logoImg");
var logoGif=document.getElementById("logoGif");

logoImg.addEventListener("mouseover", showLogoGif, false);
logoGif.addEventListener("mouseout", hideLogoGif, false);

/* End of Gif mouseover code */