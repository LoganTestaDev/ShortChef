<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="description" content="" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="keywords" content="" />
<link rel="icon" type="image/png" href="assets/images/favicon.png" />
<title>Checkerboard Salad | Short Chef</title>
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

<div class="supportingPhotoContainer"><img src="assets/images/recipeImages/checkerboardSalad1.jpg" alt="Checkerboard Salad Photo" /></div>
<h3>Recipes from Short Chef: Checkerboard Salad</h3>

<p>If Tomatoes and watermelon together sounds a little crazy to you – remember I am Short Chef!</p>
<p>&nbsp;</p>
<p>What grows together goes together, this Short Chef recipe proves that.</p>
<p>&nbsp;</p>
<p>Remember that tomatoes are a fruit, which they are botanically, so this combination of fruits and veggies with fresh herbs goes great together. Important to 
always toss this salad together before serving. The picture of the presentation to create a checkerboard of the ingredients. So have some fun, and it does take some time.</p>





<p>&nbsp;</p>
<h4>Ingredients</h4>
<ul class="ingredientsList">
<li>3 or 4 small to medium heirloom tomatoes, in assorted colors, cored and cut into 3&frasl;4-inch chunks</li>
<li>1 small English or regular cucumber, peeled, seeded, and cut into 3&frasl;4-inch cubes</li>
<li>1 cup 3&frasl;4-inch-cubed yellow or red seedless watermelon flesh</li>
<li>1 Hass avocado, halved, pitted, peeled, and cut into 3&frasl;4-inch cubes</li>
<li>1 tablespoon chopped mixed fresh herbs, in any combination: basil, tarragon, chives, and cilantro</li>
<li>1&frasl;4 teaspoon coriander seed</li>
<li>3 tablespoons extra virgin olive oil - 3 tablespoons aged balsamic vinegar</li>
<li>Season with Sea salt and freshly ground black pepper</li>
</ul>
<p>&nbsp;</p>


<h4>Instructions</h4>
<ol class="recipeDirections">
<li>Combine the tomatoes, cucumber, watermelon, avocado, and Fresh Herbs. </li>
<li>In a small bowl, whisk together the olive oil, balsamic vinegar, and salt and pepper to taste.</li>
<li>Pour over the tomato mixture and toss to coat evenly. </li>
<li>On a flat plate or platter begin to build your checkerboard…have fun!</li>
<li>This recipe serves 5 people.</li>

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
