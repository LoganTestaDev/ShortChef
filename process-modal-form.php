<?php



$EmailDestination;
$EmailSubject;

// $EmailDestination="logan.testa@saturnodesign.com";
$EmailDestination="C:\xampp\htdocs\Short Chef";
$EmailSubject="Sign-up for emails about Short Chef";



$UserFirstName;
$UserLastName;
$UserEmail;

/*Remove potential malicious incoming user characters and input here on the server side. */
$UserFirstName=trim($_POST['userFirstNameSubscribe']);
$UserFirstName=strip_tags($UserFirstName);
$UserFirstName=htmlspecialchars($UserFirstName);

$UserLastName=trim($_POST['userLastNameSubscribe']);
$UserLastName=strip_tags($UserLastName);
$UserLastName=htmlspecialchars($UserLastName);

$UserEmail=trim($_POST['userEmailSubscribe']);
$UserEmail=strip_tags($UserEmail);
$UserEmail=htmlspecialchars($UserEmail);



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

/* Send the e-mail. */

$SuccessfulTransmission=mail($EmailDestination, $EmailSubject, $EmailBody, "From: <$UserEmail>");

/*Debugging */
//echo "<br> Transmitting! <br> ValidValidation: " . $ValidValidation . "<br> SuccessfulTransmission: " . $SuccessfulTransmission . "<br> " . $EmailDestination . "<br> " . $EmailSubject . "<br> " . $EmailBody  . "<br> " . $UserEmail;


$DestinationURL;
if(isset($_SERVER['HTTP_REFERER'])){
	$DestinationURL=$_SERVER['HTTP_REFERER'];
} else {
	$DestinationURL="index.php";
}


if($SuccessfulTransmission){
?>

<script type="text/javascript">
alert("Subscription successfully sent.  We look forward to keeping you up to date!");
</script>

<?php	
print "<meta http-equiv=\"refresh\" content=\"0;URL=" . $DestinationURL . "\">";	

} else if($SuccessfulTransmission==false){
	
?>

<script type="text/javascript">
alert("Subscription not sent.  Please review the form and try again.");
</script>

<?php
print "<meta http-equiv=\"refresh\" content=\"0;URL=" . $DestinationURL . "\">";	
}




?>