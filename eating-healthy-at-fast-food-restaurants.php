<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="description" content="" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="keywords" content="" />
<link rel="icon" type="image/png" href="assets/images/favicon.png" />
<title>Eating Healthy at Fast Food Restaurants | Short Chef</title>
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
<h3>How to maintain a healthy diet at a fast food restaurant...</h3>
<p>Although fast food restaurants don't always offer us the healthiest of options, many people find that they have to eat fast food from time to time. Of course you do! 
They are not going to disappear; your kids are not going to forget they exist; not mine, for sure. So how can we make the most of a fast food meal? Below, we look at 
healthy fast food so that you can enjoy what you like.</p>
<p>&nbsp;</p>
<p>Most fast food restaurants are now providing nutritional information regarding foods on their websites and on displays at their operations. So, log on or look around, 
it will make it easier to decide what you can and should order; you will avoid the less nutritious, high calorie options. Also, pay attention to any changes they make 
to their menus or any new items that they have, as more and more of these restaurants are paying attention to what their customers want.</p>
<p>&nbsp;</p>
<p>When choosing an item from the menu try to consider the amount of calories that are in salad dressings, cheese and/or sour cream to make your meal a little healthier. 
Next time, ask for a grilled chicken sandwich but hold the mayonnaise; condiments are sometimes the difference between a healthy and unhealthy meal. Restaurants are 
now offering patrons alternatives salads with low calorie or fat free dressings; these are always a better choice.</p>


<p>&nbsp;</p>
<h3 class="centerText">The following are SHORT CHEF GUIDES to eating out:</h3>

<div id="restaurantEatingGuide">
<img class="centerImage" src="assets/images/restaurant1.jpg" alt="1: Portion Control" />
<p>The most important process of healthy eating is Portion Control. If you do nothing else make this your "stick-to-it" law. Watch the sizes of the portions. If possible, 
order a smaller or regular portion; NEVER THE GIANT or SUPER PORTION. Normally, a restaurant size portion is 2 to 3 times larger than what we would normally eat in at home.</p>

<img class="centerImage" src="assets/images/restaurant2.jpg" alt="2: Order Foods to Go" />
<p>It is a fact that people tend to eat more when at a restaurant. If the temptation isn't in front of you, you are less likely to overindulge.</p>


<img class="centerImage" src="assets/images/restaurant3.jpg" alt="3: Try the Light Menu" />
<p>Many restaurants indicate healthy choices on their menus and these are the ones that you SHOULD CONSIDER. Stay away from those attractive menu pictures with all the bad 
things that are not part of your nutritional diet.</p>
</div>


<p>&nbsp;</p>
<p><strong>Healthy fast food eating is possible, what you need to do is look at the healthy alternatives available, as well as remember to keep the portions you eat normal.</p></strong>


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
