<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="description" content="" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta name="keywords" content="" />
      <link rel="icon" type="image/png" href="assets/images/favicon.png" />
      <title>About | Short Chef</title>
      <link rel="stylesheet" type="text/css" href="assets/css/main-styles.css" />
      <!-- HTML5 Shim, and respond.min.js.  For users on Internet Explorer 8 or earlier, allows HTML5 elements/CSS3 media queries to display with help from this JavaScript file. -->
      <!--[if lt IE 9]>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js.1.4.2/respond.min.js"></script>
      <![endif]-->
   </head>
   <body onmousemove="updatePosition(event);">
      <div id="bodyWrapper">
         <?php include 'assets/includePHP/navbar-components.php'; ?>
         <?php include 'assets/includePHP/header-components.php'; ?>
         <div id="heroImageContainer">
            <div class="inner-body-wrapper">
               <div id="heroImageText">
                  <h2>Learn About Short Chef</h2>
               </div>
            </div>
         </div>
         <div class="breadcrumbs inner-body-wrapper">
            <ul class="breadcrumbs-nav">
               <li><a href="index.php">Short Chef</a></li>
               <li><a href="about-short-chef.php">About</a></li>
            </ul>
         </div>
         <div class="content-container inner-body-wrapper">
            <div class="content-row content-row-pad">
               <div class="content-lar-8">
                  <h3 class="page-sub-header major-subheading">Learn About Short Chef</h3>
                  <p><strong>Short Chef</strong> is a life-long culinary expert who has dedicated many years to educating kids about proper nutrition.</p>
                  <p><strong>Short Chef</strong> is leading the fight against obesity and diabetes in children, empowering them with knowledge to make better decisions to fuel their bodies with the best nutrition.  
                     Kids today can be in control of what they eat and drink. They need to develop good eating habits that lead to healthy conscious lifelong lifestyle choices, not settling for poor nutrition.
                  </p>
                  <p><strong>Short Chef</strong> reaches nearly 1000 students with various events. He works with many schools and school districts to provide nutritional cooking workshops through Creative Learning & 
                     Play Programs. Starting last summer, Short Chef began conducting two-day workshops to reach kids through summer programs that stress the importance of eating fresh healthy foods 
                     while making it fun for kids. Kids learn about new foods and vegetables with a hands-on rewarding experience that creates new healthy heating behaviors.
                  </p>
                  <p>Over the course of the last 12 months, Short Chef taught at over 25 schools, presented at Health, Green and Fitness Fairs, spoken on panels, appeared on TV programs and begun a 
                     video series to better educate families on how to have fun in the kitchen that will lead to healthier lives.
                  </p>
                  <h4>Some of the Short Chef's Healthy Eating Events and Programs</h4>
                  <ul class="generic-list">
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
               </div>
               <div class="content-lar-4">
                  <div id="eyeContainer">
                     <div id="avocado"></div>
                     <div id="eye1"></div>
                     <div id="eye2"></div>
                     <div id="pupil1"></div>
                     <div id="pupil2"></div>
                     <div id="centerMarker"></div>
                     <p id="mouseCoords"></p>
                  </div>
                  <div class="supporting-photo-container about">
                  </div>
               </div>
            </div>
         </div>
         <?php include 'assets/includePHP/events-components.php'; ?>
         <?php include 'assets/includePHP/footer-components.php'; ?>
         <?php include 'assets/includePHP/modal-components.php'; ?>
      </div>
   </body>
   <script type="text/javascript" src="assets/javascript/javascript-functions.js"></script>
   <script type="text/javascript" src="assets/javascript/eye-movement-animation.js"></script>
</html>