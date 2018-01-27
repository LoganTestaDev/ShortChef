<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="description" content="" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="keywords" content="" />
<link rel="icon" type="image/png" href="assets/images/favicon.png" />
<title>Our Children are Overweight | Short Chef</title>
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


<div id="heroImageContainer"><h2>News</h2></div>
<div id="contentContainer">
<h3>Our Children are Overweight</h3>

<div class="content8">
<p>Recently it was reported that obesity among kids reached unprecedented levels, especially in the United States. Many experts believe that 15% of our children are overweight 
and that at least another 15% to 20% are at risk of becoming so.</p>
<h4>What causes our kids to be overweight?</h4>
<p>We all know the answer:<br>
Our kids spend less time exercising and more time watching TV, on the computer or playing video games; add that most of us are busy and unable to prepare balanced, nutritious meals. 
So what do we do? We grab something from the nearest fast food restaurant. But this is hurting our children.</p>
<h4>What can we do to get our kids back in shape?</h4>
<ol>
<li>The most important thing that one can do is to change the family's lifestyle - yours and your kids.</li>
<li>A consistent healthy diet and regular exercise are all that is needed to lose weight and keep it off.</li>
<li>Parents must lead by example. Get the whole family involved in an exercise program of some sort; whether it's walking, biking, a game of basketball or even just a game of catch.</li>
<li>Start eating better and together. Get rid of the sodas and fast foods or at least, limit them.</li>
</ol>
<p>There is a lot of information on the Internet about preparing good meals, quickly.</p>
<h4>How do I start?</h4>
<p>First, get your children to their doctor. Discuss your children's eating and exercise habits with the physician and some positive changes that you can easily make. Your doctor 
may want to do some tests to see if your child has any of the medical conditions associated with obesity.
Depending on your doctor's evaluation, he or she may refer you to a registered dietitian for additional advice, or he may recommend a comprehensive weight management program.</p>
<p>&nbsp;</p>
<p><strong>Make a lifestyle change today!</strong></p>
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
</html>
