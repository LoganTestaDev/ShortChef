<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="description" content="" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="keywords" content="" />
<link rel="icon" type="image/png" href="assets/images/favicon.png" />
<title>About | Short Chef</title>
<link href='https://fonts.googleapis.com/css?family=Glass Antiqua' rel='stylesheet'>
<link href='https://fonts.googleapis.com/css?family=Muli' rel='stylesheet'>
<link rel="stylesheet" type="text/css" href="assets/css/main-styles.css" />

<!-- HTML5 Shim, and respond.min.js.  For users on Internet Explorer 8 or earlier, allows HTML5 elements/CSS3 media queries to display with help from this JavaScript file. -->
<!--[if lt IE 9]>
<script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js.1.4.2/respond.min.js"></script>
<![endif]-->

</head>
<body onmousemove="updatePosition(event);">
<div id="bodyWrapper">

<header>
<div id="logo">
     <a href="index.php"><img src="assets/images/short-chef-logo.png" alt="The Short Chef Logo" /></a>
</div>
<div id="titleContainer">
<h1><a href="index.php">Short Chef<sup>&trade;<sup></a></h1>
<p>Fighting Obesity One Child at a Time</p>
<div id="eyeContainer">
<div id="avocado">
</div>
<div id="eye1">
</div>
<div id="eye2">
</div>
<div id="pupil1"></div>
<div id="pupil2"></div>
<div id="centerMarker"></div>
<p id="mouseCoords"></p>
</div>
</div>
</header>

<nav id="mobileNav">
	<div class="dropdownArea">
	<div class="dropButton" onclick="toggleShowDropdownContent();">
	<div></div>
	<div></div>
	<div></div>
	</div>
	
<div class="dropdownElements" id="navDropdown">
    <a href="index.php">Home</a>
	<a href="about-short-chef.php">About</a>
	<a href="short-thoughts.php">Short Thoughts</a>
	<a href="recipes-short-chef.php">Recipes</a>
	<a href="events.php">Events</a>
    <a href="contact-short-chef.php">Contact</a>
	<a href="news.php">News</a>
</div>
</div>
</nav>

<nav id="desktopNav">	
    <a href="index.php">Home</a>
	<a href="about-short-chef.php">About</a>
	<a href="short-thoughts.php">Short Thoughts</a>
	<a href="recipes-short-chef.php">Recipes</a>
	<a href="events.php">Events</a>
    <a href="contact-short-chef.php">Contact</a>
	<a href="news.php">News</a>
</nav>
<div id="heroImageContainer"><h2>Learn About Short Chef</h2></div>


<div id="contentContainer">









<div class="content8">
<h3>Learn About Short Chef</h3>
<p><strong>Short Chef</strong> is a life-long culinary expert who has dedicated many years to educating kids about proper nutrition.</p>
<p>&nbsp;</p>
<p><strong>Short Chef</strong> is leading the fight against obesity and diabetes in children, empowering them with knowledge to make better decisions to fuel their bodies with the best nutrition.  
Kids today can be in control of what they eat and drink. They need to develop good eating habits that lead to healthy conscious lifelong lifestyle choices, not settling for poor nutrition.</p>
<p>&nbsp;</p>
<p><strong>Short Chef</strong> reaches nearly 1000 students with various events. He works with many schools and school districts to provide nutritional cooking workshops through Creative Learning & 
Play Programs. Starting last summer, Short Chef began conducting two-day workshops to reach kids through summer programs that stress the importance of eating fresh healthy foods 
while making it fun for kids. Kids learn about new foods and vegetables with a hands-on rewarding experience that creates new healthy heating behaviors.</p>
<p>&nbsp;</p>
<p>Over the course of the last 12 months, Short Chef taught at over 25 schools, presented at Health, Green and Fitness Fairs, spoken on panels, appeared on TV programs and begun a 
video series to better educate families on how to have fun in the kitchen that will lead to healthier lives.</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p><strong>Some of the Short Chef's Healthy Eating Events and Programs</strong></p>
<p>&nbsp;</p>
<ul class="genericList">
<li>Short Chef Video Programs - Coming Soon</li>
<li>Let's Move Program - 2011</li>
<li>Stand Up for Kids - 2011</li>
<li>Short Chef / Whole Foods Cooking Classes - 2011</li>
<li>Big & Small Cooking Classes - 2006 through present</li>
<li>Young Leaders with Character Summer Program 2010 through present</li>
<li>Creative Learning & Play Summer Camps 2009 through present</li>
<li>Creative Learning & Play After-School Programs 2009 through present</li>
<li>Short Chef Supper Club 2009 through present</li>
<li>Spoons Across America Project - 2008</li>

</ul>



<p>&nbsp;</p>
</div>

<div class="content4">




<div id="contentContainer" class="contentContainerSupporting">




<img src="assets/images/short-chef-photo1.png" alt="Short Chef Photo" />
</div>


</div>
<footer>
<p>&copy; <?php echo date("Y"); ?> The Short Chef<sup>&trade;</sup>.  All Rights Reserved.</p>


<div id="footerElements">
<button id="subscribeButton">Subscribe</button>

<div id="socialIcons">
<div><a href="https://www.facebook.com/shortchef2011?fref=ts" target="_blank"><img src="assets/images/socialMediaIcons/facebook-logo.png" alt="Facebook logo" /></a></div>
<div><a href="https://twitter.com/ShortChef51" target="_blank"><img src="assets/images/socialMediaIcons/twitter-logo.png" alt="Twitter logo" /></a></div>
</div>
</div>

</footer>


<div id="subscribeModal">

<div id="subscribeModalContent">
<div class="modalHeader">
<div id="closeModal"><span>&times;</span></div>
<h3>Subscribe!</h3>
</div>
<div class="modalContent">
<p>Want frequent new menu ideas and healthy eating tips and recipes?  Join our mailing list!</p>

<div class="contactFormContainer modalForm">
<form class="contactForm" method="post" onsubmit="return validateModalForm();" action="process-modal-form.php">

<label for="userFirstNameSubscribe"></label>
<input type="text" id="userFirstNameSubscribe" name="userFirstNameSubscribe" placeholder="Enter First Name" required="required">

<label for="userLastNameSubscribe"></label>
<input type="text" id="userLastNameSubscribe" name="userLastNameSubscribe" placeholder="Enter Last Name" required="required">

<label for="userEmailSubscribe"></label>
<input type="email" id="userEmailSubscribe" name="userEmailSubscribe" placeholder="Enter Your email" required="required">

<input type="submit" value="Submit"></input>

</form>
</div>

</div>
</div>
<div class="modalFooter">
</div>
</div>
<div id="subscribeModalBackdrop">
</div>


</div>
</body>
<script type="text/javascript" src="assets/javascript/javascript-functions.js"></script>
<script type="text/javascript" src="assets/javascript/eye-movement-animation.js"></script>
</html>
