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

mail( "$webmaster_email", "Contact Form Message", $txt );
header('Location: ../index.html');


?>