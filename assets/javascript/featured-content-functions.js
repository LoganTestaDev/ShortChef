

function addActive(itemToChangeStatus){
	theItem=itemToChangeStatus;
	theItem.classList.add("active");

}

function removeActive(itemToChangeStatus){
	theItem=itemToChangeStatus;
	theItem.classList.remove("active");

	
	
	
}
var hidden0=document.getElementsByClassName("hidden-item")[0];
var hidden1=document.getElementsByClassName("hidden-item")[1];
var hidden2=document.getElementsByClassName("hidden-item")[2];



var featured0=document.getElementsByClassName("featured-section-wrapper")[0];
featured0.addEventListener("mouseenter", function(){ addActive(featured0) }, false);

var featured1=document.getElementsByClassName("featured-section-wrapper")[1];
featured1.addEventListener("mouseenter",  function(){ addActive(featured1) }, false);

var featured2=document.getElementsByClassName("featured-section-wrapper")[2];
featured2.addEventListener("mouseenter",  function(){ addActive(featured2) }, false);



featured0.addEventListener("mouseleave",  function(e){
	determineAdditionalItemsIfOver(featured0, hidden0, e);
}, false);

featured1.addEventListener("mouseleave",  function(e){
	determineAdditionalItemsIfOver(featured1, hidden1, e);
}, false);

featured2.addEventListener("mouseleave",  function(e){
	determineAdditionalItemsIfOver(featured2, hidden2, e);
}, false);




function determineAdditionalItemsIfOver(potentialItem, item, e){

	itemToChangeStatus=potentialItem;
	theItem=item;
	
	
	
	
	var mouseX=e.clientX;
	var mouseY=e.clientY;
	
	var hiddenX=theItem.getBoundingClientRect().left;
	var hiddenY=theItem.getBoundingClientRect().top;
	var hiddenWidth=theItem.getBoundingClientRect().width;
	var hiddenHeight=theItem.getBoundingClientRect().height;
	
	var overItem=false;
	if(hiddenX <= mouseX && mouseX <= hiddenX+hiddenWidth && hiddenY <= mouseY && mouseY <= hiddenY + hiddenHeight) {
		overItem=true;
	}
	if(overItem===false){
		removeActive(itemToChangeStatus);
	}
	//alert("hidden1 x, y, width, height: " + hiddenX + " " + hiddenY + " " + hiddenWidth + " " + hiddenHeight);
	
	
	
}