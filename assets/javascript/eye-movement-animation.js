


var eyeStartX=57;
var eyeStartY=96;
var eyeOffset=22;
var movementRadius=10;


function updatePosition(event) {
	
/* get current mouse position */
var mousePosX=event.pageX;
var mousePosY=event.pageY;

/* get current position of eyes */
var pupil1=document.getElementById("pupil1");
	
var pupil1PosX=pupil1.offsetLeft;
var pupil1PosY=pupil1.offsetTop;
var pupil2YOffset=5;



/*Compute the angle of theta */
var diffX;
var diffY;

// var pupil1StartXSt=440;
// var pupil1StartYSt=790;

/* Account for if the user has scrolled down at the start or after the start of the page loading, both x and y (y is the usual concern). */
var scrollChangeX=window.pageXOffset;
var scrollChangeY=window.pageYOffset;


var pupil1StartXSt=document.getElementById("centerMarker").getBoundingClientRect().left+scrollChangeX;
var pupil1StartYSt=document.getElementById("centerMarker").getBoundingClientRect().top+scrollChangeY;



diffX=Math.abs(mousePosX-pupil1StartXSt);
diffY=Math.abs(mousePosY-pupil1StartYSt);


var angle=Math.atan(diffY/diffX);



/* Okay now set the new position for the eye */

var changeX;
var changeY;

 if(mousePosX<pupil1StartXSt && mousePosY<pupil1StartYSt){
changeX=-movementRadius*Math.cos(angle);
changeY=-movementRadius*Math.sin(angle);
 } else if(mousePosX>=pupil1StartXSt && mousePosY<pupil1StartYSt){
changeX=movementRadius*Math.cos(angle);
changeY=-movementRadius*Math.sin(angle);
 } if(mousePosX<pupil1StartXSt && mousePosY>=pupil1StartYSt){
changeX=-movementRadius*Math.cos(angle);
changeY=movementRadius*Math.sin(angle);
} if(mousePosX>=pupil1StartXSt && mousePosY>=pupil1StartYSt){
changeX=movementRadius*Math.cos(angle);
changeY=movementRadius*Math.sin(angle);
}


var xPupil1=eyeStartX+(-1*eyeOffset)+changeX;
var yPupil1=eyeStartY+changeY;

var xPupil2=eyeStartX+(1*eyeOffset)+changeX;
var yPupil2=eyeStartY+(-1*eyeOffset)+changeY;





document.getElementById("pupil1").style.left=xPupil1+"px";
document.getElementById("pupil1").style.top=yPupil1+"px";

document.getElementById("pupil2").style.left=xPupil2+"px";
document.getElementById("pupil2").style.top=yPupil2+18+"px";




angle="0";
//document.getElementById("mouseCoords").innerHTML="mousePosX: " + mousePosX + " mousePosY: " + mousePosY + "  pupil1StartXSt, Y: " + pupil1StartXSt + ", " + pupil1StartYSt + " angle " +angle;


}






function init(){
	
document.getElementById("pupil1").style.left=eyeStartX+(-1*eyeOffset)+"px";
document.getElementById("pupil1").style.top=eyeStartY+"px";

document.getElementById("pupil2").style.left=eyeStartX+(1*eyeOffset)+"px";
document.getElementById("pupil2").style.top=eyeStartY+(-1*eyeOffset)+18+"px";

}

window.onload=init();
