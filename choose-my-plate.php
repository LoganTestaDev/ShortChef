<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="description" content="" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="keywords" content="" />
<link rel="icon" type="image/png" href="assets/images/favicon.png" />
<title>Choose My Plate | Short Chef</title>
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
<div id="heroImageContainer"><h2>Short Chef Thoughts</h2></div>
<div id="contentContainer">

<h3>Build a Healthy Plate</h3>
<p>Before you eat, think about what goes on your plate or in your cup or bowl. Foods like vegetables, fruits, whole grains, low-fat dairy products, 
and lean protein foods contain the nutrients you need without too many calories. Try some of these options.</p>


<div id="restaurantEatingGuide">
<img class="centerImage" src="assets/images/myplate1.jpg" alt="1: Portion Control" />

<ul class="genericList">
<li>Eat red, orange, and dark-green vegetables, such as tomatoes, sweet potatoes, and broccoli, in main and side dishes.</li>
<li>Eat fruit, vegetables, or unsalted nuts as snacks—they are nature's original fast foods.</li>
</ul>
<p>&nbsp;</p>
<hr/>
<p>&nbsp;</p>

<img class="centerImage" src="assets/images/myplate2.jpg" alt="2: Order Foods to Go" />
<ul class="genericList">
<li>They have the same amount of calcium and other essential nutrients as whole milk, but less fat and calories.</li>
<li>Try calcium-fortified soy products as an alternative to dairy foods.</li>
</ul>

<p>&nbsp;</p>
<hr/>
<p>&nbsp;</p>

<img class="centerImage" src="assets/images/myplate3.jpg" alt="3: Try the Light Menu" />
<ul class="genericList">
<li>Choose 100% whole-grain cereals, breads, crackers, rice, and pasta.</li>
<li>Check the ingredients list on food packages to find whole-grain foods.</li>
</ul>

<p>&nbsp;</p>
<hr/>
<p>&nbsp;</p>

<img class="centerImage" src="assets/images/myplate4.jpg" alt="3: Try the Light Menu" />
<ul class="genericList">
<li>Twice a week, make seafood the protein on your plate.</li>
<li>Eat beans, which are a natural source of fiber and protein.</li>
<li>Keep meat and poultry portions small and lean.</li>
</ul>
</div>

<p>&nbsp;</p>

<h4>Grains - Vegetables - Fruits - Milk
Meat & Beans - and Oils & Fats</h4>
<p>What we need to remember when using this program is that these different food groups provide us with some of the nutrients but not all of them. 
Food from one group can never replace those from others as they are all equally as important. So in order to maintain a healthy life and diet you 
need to include them all.</p>
<p>&nbsp;</p>

<p>Source: United States Department of Agriculture - <a href="https://www.choosemyplate.gov/" target="_blank">Choose My Plate Dietary Guidelines Consumer Brochure</a></p>


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
