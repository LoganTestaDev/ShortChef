<div id="subscribeModal">
   <div class="modal-header">
      <div id="closeModal"><span>&times;</span></div>
      <h3>Subscribe!</h3>
   </div>
   <div class="modal-content">
      <p>Want frequent new menu ideas and healthy eating tips and recipes?  Join our mailing list!</p>
      <div class="modal-form">
         <form class="contactForm" method="post" onsubmit="return validateModalForm();" action="process-modal-form.php">
            <label for="userFirstNameSubscribe"></label>
            <input type="text" id="userFirstNameSubscribe" name="userFirstNameSubscribe" placeholder="Enter First Name" required="required">
            <label for="userLastNameSubscribe"></label>
            <input type="text" id="userLastNameSubscribe" name="userLastNameSubscribe" placeholder="Enter Last Name" required="required">
            <label for="userEmailSubscribe"></label>
            <input type="email" id="userEmailSubscribe" name="userEmailSubscribe" placeholder="Enter Your email" required="required">
            <input type="submit" value="Submit">
         </form>
         <div id="modalLogo">
            <img src="assets/images/short-chef-logo.png" alt="The Short Chef Logo" />
         </div>
      </div>
   </div>
   <div class="modal-footer"></div>
</div>
<div id="subscribeModalBackdrop"></div>