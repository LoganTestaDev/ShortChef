<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="description" content="" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="keywords" content="" />
<link rel="icon" type="image/png" href="assets/images/favicon.png" />
<title>Healthy Pineapple | Short Chef</title>
<link href='https://fonts.googleapis.com/css?family=Glass Antiqua' rel='stylesheet'>
<link href='https://fonts.googleapis.com/css?family=Muli' rel='stylesheet'>
<link rel="stylesheet" type="text/css" href="assets/css/main-styles.css" />

<!-- HTML5 Shim, and respond.min.js.  For users on Internet Explorer 8 or earlier, allows HTML5 elements/CSS3 media queries to display with help from this JavaScript file. -->
<!--[if lt IE 9]>
<script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js.1.4.2/respond.min.js"></script>
<![endif]-->

</head>
<body>
<div id="bodyWrapper">

<header>
<div id="logo">
     <a href="index.php"><img src="assets/images/short-chef-logo.png" alt="The Short Chef Logo" /></a>
</div>
<div id="titleContainer">
<h1><a href="index.php">Short Chef<sup>&trade;<sup></a></h1>
<p>Fighting Obesity One Child at a Time</p>
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
<div id="heroImageContainer"><h2>Recipes</h2></div>
<div id="contentContainer" class="contentContainerSupporting">

<div class="supportingPhotoContainer"><img src="assets/images/recipeImages/healthy-pineapple1.jpg" alt="Healthy Pineapple Photo" /></div>
<h3>Recipes from Short Chef: Healthy Pineapple</h3>

<h4>Ingredients</h4>
<ul class="ingredientsList">
<li>1 Nice Ripe Pineapple</li>
<li>1 Cup Fresh Strawberries cut in half </li>
<li>1 Cup pineapple chunks</li>
<li>1 cup of green and red seedless grapes </li>
<li>1 cup berry tomatoes </li>
<li>1 cup each of broccoli & cauliflower florets</li>
<li>2 inch chunks of celery</li>
<li>1 cup each of Cheddar cheese, Swiss cheese cubes or Monterey Jake Cheese</li>
<li>picks for mini kabobs</li>
</ul>
<p>&nbsp;</p>





<h4>Instructions</h4>
<ol class="recipeDirections">
<li>Standing the pineapple up, slice 1 inch off the skin (be careful) – so that it will lay flat</li>
<li>Begin to assemble mini kabobs. Take a cube of cheese, slide it carefully on the pick then slide a grape or a strawberry or a pineapple chuck.Take a cube of cheese, 
then a berry tomato, or a broccoli or cauliflower floret's.</li>
<li>Insert the picks nicely into the pineapple.</li>
</ol>
<p>&nbsp;</p>
 
<h4>Serving</h4>
<ol class="recipeDirections">
<li>Place the pineapple on a serving platter.</li>
<li>Make it a centerpiece on your table or any party</li>
<li>Be creative, make any you like. Put only two or three items on each pick.</li>
<li>Make about 25 picks per pineapple.</li>
</ol>






<p>&nbsp;</p>
<p><strong>Enjoy!</strong></p>

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
</html>
