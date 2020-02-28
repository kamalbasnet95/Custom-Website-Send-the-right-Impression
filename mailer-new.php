<?php

$To = "sendRight@sendright.com" ; // Where do you want this email to go.  Needs to be a valid email address.
$Subject = "Publishing Website Message" ; // The subject line of your email
$Redir = "thank.html" ; // Where do you want this user to go after the form is submitted

// Do not touch below this line

// Compose the body of the message

$body = "This is a form submission from your website<br/>\n" . 
	"<table border=1>";
while ( list($key,$value) = each($_POST)) { 
	$body .= "<tr><td>" . htmlentities($key) . "</td><td>" . htmlentities($value) . "</td></tr>\n";
}
$body .= "</table>";

// Add some headers to the file
$headers  = "MIME-Version: 1.0\n";
$headers .= "Content-type: text/html; charset=iso-8859-1\n";
$headers .= "From: Your Website <webmaster@$_SERVER[SERVER_NAME]>\n";

// Mail it
mail($To,$Subject,$body,$headers);
header("Location: $Redir");

?>
