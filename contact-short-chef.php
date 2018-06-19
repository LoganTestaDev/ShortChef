<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="description" content="" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta name="keywords" content="" />
      <link rel="icon" type="image/png" href="assets/images/favicon.png" />
      <title>Contact | Short Chef</title>
      <link rel="stylesheet" type="text/css" href="assets/css/main-styles.css" />
      <!-- HTML5 Shim, and respond.min.js.  For users on Internet Explorer 8 or earlier, allows HTML5 elements/CSS3 media queries to display with help from this JavaScript file. -->
      <!--[if lt IE 9]>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js.1.4.2/respond.min.js"></script>
      <![endif]-->
   </head>
   <body>
      <div id="bodyWrapper">
         <?php include 'assets/includePHP/navbar-components.php'; ?>
         <?php include 'assets/includePHP/header-components.php'; ?>
         <div id="heroImageContainer">
         </div>
         <div class="content-container inner-body-wrapper">
            <div class="content-row content-row-pad">
               <div class="content-med-12">
                  <div class="page-header-container">
                     <h1>Contact Us</h1>
                  </div>
                  <div class="breadcrumbs">
                     <ul class="breadcrumbs-nav">
                        <li><a href="index.php">Short Chef</a></li>
                        <li><a href="contact-short-chef.php">Contact</a></li>
                     </ul>
                  </div>
               </div>
               <div class="clear-both"></div>
            </div>
            <div class="content-row content-row-pad">
               <div class="content-med-8" id="contactFormContainer">
                  <form class="contactForm" id="contactForm" name="contactForm" method="post" onsubmit="return validateContactForm();" action="process-contact-form.php">
                     <label for="userFirstName">First Name</label>
                     <input type="text" id="userFirstName" name="userFirstName" placeholder="First Name" required="required">
                     <label for="userLastName">Last Name</label>
                     <input type="text" id="userLastName" name="userLastName" placeholder="Last Name" required="required">
                     <label for="userEmail">Email</label>
                     <input type="email" id="userEmail" name="userEmail" placeholder="Your email" required="required">
                     <label for="userComments">Comments/Questions</label>
                     <textarea id="userComments" name="userComments" placeholder="Write comments here!" required="required"></textarea>
                     <input type="submit" value="Submit"><span id="clientSideValidationFeedback"></span>
                  </form>
               </div>
               <div class="short-chef-gif-container content-med-4">
                  <div class="short-chef-gif-inner-container">
                     <img id="logoImg" src="assets/images/short-chef-logo-hover-over.png" alt="Short Chef Logo Animation Still Image" />
                     <img id="logoGif" src="assets/gifs/short-chef-logo-animation.gif" alt="Short Chef Logo Animation Waving" />
                     <p>What should we make today?</p>
                  </div>
               </div>
               <div class="clear-both"></div>
            </div>
         </div>
         <?php include 'assets/includePHP/events-components.php'; ?>
         <?php include 'assets/includePHP/footer-components.php'; ?>
         <?php include 'assets/includePHP/modal-components.php'; ?>
      </div>
   </body>
   <script type="text/javascript" src="assets/javascript/javascript-functions.js"></script>
   <script type="text/javascript" src="assets/javascript/gif-animation.js"></script>
</html>