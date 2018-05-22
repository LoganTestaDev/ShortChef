var lowerBoundY;
var upperBoundY;

var kitchenUtensil1 = document.getElementsByClassName("kitchen-utensil-1")[0];
var kitchenUtensil2 = document.getElementsByClassName("kitchen-utensil-2")[0];
var kitchenUtensil3 = document.getElementsByClassName("kitchen-utensil-3")[0];
var bodyWrapper = document.getElementById("bodyWrapper");

var kitchen1PosYStart = kitchenUtensil1.style.top;
var kitchen2PosYStart = kitchenUtensil2.style.top;
var kitchen3PosYStart = kitchenUtensil3.style.top;

var lastWindowPosY; // Store the last y position of the window


function runFunctions() {
	determineBrowserWidthAndUpperLowerBounds();
    movingScreenBehavior();
    parallaxScroll();
}

function determineBrowserWidthAndUpperLowerBounds () {
	var browserWidth=document.body.clientWidth;

	
	if(browserWidth < 700) {
		lowerBoundY = 2300;
		upperBoundY = 3200;
		
	} else {
		lowerBoundY = 1450;
        upperBoundY = 2200;
	}
}

function movingScreenBehavior() {
    var scrolledFromLeft = window.pageXOffset;
    var scrolledFromTop = window.pageYOffset;

    //document.getElementById("coordinates").innerHTML="Left:" + scrolledFromLeft + "<br>Top: " + scrolledFromTop;

    if (scrolledFromTop >= lowerBoundY && scrolledFromTop <= upperBoundY) {
        kitchenUtensil1.style.display = "block";
        kitchenUtensil2.style.display = "block";
        kitchenUtensil3.style.display = "block";
    } else {
        kitchenUtensil1.style.display = "none";
        kitchenUtensil2.style.display = "none";
        kitchenUtensil3.style.display = "none";
    }
}

function init() {
    setInterval(function() {
        runFunctions();
    }, 10);
}


function parallaxScroll() {
    var scrolledFromLeft = window.pageXOffset;
    var scrolledFromTop = window.pageYOffset;


    //Check that the window's top position is in bounds and hasn't changed y position.
    if (scrolledFromTop >= lowerBoundY && scrolledFromTop <= upperBoundY) {
        if (scrolledFromTop != lastWindowPosY) {
            //determine how far the user has just scrolled/moved keyboard/moved by touch/adjusted the scrollbar to the right.
            // Get the current y offset of the window, and compare it to the the y offset the last time this method was called.

            var scrollY = scrolledFromTop - lastWindowPosY;

            var scrollSpeedFactorY1 = 0.5; //set the factor that we want to adjust the scrolling speed by (0.5=50% faster, 1= twice as fast, etc.)
            var scrollSpeedFactorY2 = 0.5;
            var scrollSpeedFactorY3 = 0.25;


            var kitchen1PosY = kitchenUtensil1.offsetTop;
            var kitchen2PosY = kitchenUtensil2.offsetTop;
            var kitchen3PosY = kitchenUtensil3.offsetTop;

            var diffY1 = scrollY * scrollSpeedFactorY1;
            var diffY2 = scrollY * scrollSpeedFactorY2;
            var diffY3 = scrollY * scrollSpeedFactorY3;

            var newkitchen1PosY = kitchen1PosY + diffY1;
            var newkitchen2PosY = kitchen2PosY + diffY2;
            var newkitchen3PosY = kitchen3PosY + diffY3;

            document.getElementById("coordinates").innerHTML = "kitchen1PosYStart, 2, 3: " + kitchen1PosYStart + ", " + kitchen2PosYStart + ", " + kitchen3PosYStart +
                "<br> lastWindowPosY " + lastWindowPosY +
                "<br> scrolledFromLeft, scrolledFromTop " + scrolledFromLeft + ", " + scrolledFromTop + "<br> kitchen2PosY " + kitchen2PosY + "<br> scrollY: " + scrollY + "<br> diffY2 " + diffY2 +
                "<br> newkitchen2PosY " + newkitchen2PosY;

            //At the end, adjust the desired objects actual positions
            kitchenUtensil1.style.top = newkitchen1PosY + "px";
            kitchenUtensil2.style.top = newkitchen2PosY + "px";
            kitchenUtensil3.style.top = newkitchen3PosY + "px";

            lastWindowPosY = window.pageYOffset;
        } else {

        }

    } else {
        //If we are outside the affected area reset the 'fixed' position scrolling elements to their original starting positions.  This prevents the images from being offset slightly when we scroll back up or down
        //into the affected area.  Save the current window y offset for later use.
        kitchenUtensil1.style.top = kitchen1PosYStart;
        kitchenUtensil2.style.top = kitchen2PosYStart;
        kitchenUtensil3.style.top = kitchen3PosYStart;

        lastWindowPosY = window.pageYOffset;

    }
}

window.onload = init();