<?php



$EmailDestination;
$EmailSubject;

// $EmailDestination="logan.testa@saturnodesign.com";
$EmailDestination="C:\xampp\htdocs\Short Chef";
$EmailSubject="Comments/Questions about Short Chef";



$UserFirstName;
$UserLastName;
$UserEmail;
$UserComments;

/*Remove potential malicious incoming user characters and input here on the server side. */
$UserFirstName=trim($_POST['userFirstName']);
$UserFirstName=strip_tags($UserFirstName);
$UserFirstName=htmlspecialchars($UserFirstName);

$UserLastName=trim($_POST['userLastName']);
$UserLastName=strip_tags($UserLastName);
$UserLastName=htmlspecialchars($UserLastName);

$UserEmail=trim($_POST['userEmail']);
$UserEmail=strip_tags($UserEmail);
$UserEmail=htmlspecialchars($UserEmail);

$UserComments=trim($_POST['userComments']);
$UserComments=strip_tags($UserComments);
$UserComments=htmlspecialchars($UserComments);


/*Additional Validation */

$ValidValidation=true;

if(Trim($UserFirstName)==""){
$ValidValidation=false;	
}

if(Trim($UserLastName)==""){
$ValidValidation=false;	
}

if(Trim($UserEmail)==""){
$ValidValidation=false;	
}

if(Trim($UserComments)==""){
$ValidValidation=false;	
}


/*Additional more Advanced Validation */

if(!filter_var($UserEmail, FILTER_VALIDATE_EMAIL)){
	$ValidValidation=false;
}

if($ValidValidation==false){
	print "Validation failed.  Please check all input fields again.";
	exit;	
}

/* The page will exit if the validation has failed at any point up to here.  Otherwise, continue.
/* Create the e-mail body. */

$EmailBody="";
$EmailBody.="User Name: " . $UserFirstName . ", " . $UserLastName . "\n";
$EmailBody.="User Email: " . $UserEmail . "\n";
$EmailBody.="User Comments: " . $UserComments . "\n";

/* Send the e-mail. */

$SuccessfulTransmission=mail($EmailDestination, $EmailSubject, $EmailBody, "From: <$UserEmail>");

/*Debugging */
//echo "<br> Transmitting! <br> ValidValidation: " . $ValidValidation . "<br> SuccessfulTransmission: " . $SuccessfulTransmission . "<br> " . $EmailDestination . "<br> " . $EmailSubject . "<br> " . $EmailBody  . "<br> " . $UserEmail;


if($SuccessfulTransmission){
?>

<script type="text/javascript">
alert("Form successfully sent.  Thank you for contacting us!");
</script>

<?php	
print "<meta http-equiv=\"refresh\" content=\"0;URL=contact-short-chef.php\">";	
} else if($SuccessfulTransmission==false){
	
?>

<script type="text/javascript">
alert("Form not sent.  Please review the form and try again.");
</script>

<?php
print "<meta http-equiv=\"refresh\" content=\"0;URL=contact-short-chef.php\">";	
}




?>