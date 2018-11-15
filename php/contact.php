<?php
include_once "index.html";

$webmaster_email = "nicholasmprieto@gmail.com";

$email = $_REQUEST['email'];
$message = $_REQUEST['message'];
$firstname = $_REQUEST['firstname'];
$lastname = $_REQUEST['lastname'];
$txt =
"Name: " . $firstname . " " . $lastname . "\r\n" .
"Email: " . $email . "\r\n" .
"Message: " . $message;

function isInjected($str) {
	$injections = array('(\n+)',
	'(\r+)',
	'(\t+)',
	'(%0A+)',
	'(%0D+)',
	'(%08+)',
	'(%09+)'
	);
	$inject = join('|', $injections);
	$inject = "/$inject/i";
	if(preg_match($inject,$str)) {
		return true;
	}
	else {
		return false;
	}
}

if (isInjected($email) || isInjected($firstname)  || isInjected($lastname) || isInjected($message)) {

}
else {
    mail( "$webmaster_email", "Contact Form Message", $txt );
    header('Location: ../index.html');
}

?>