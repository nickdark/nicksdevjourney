<?php
include_once "index.html";

$webmaster_email = "nicholasmprieto@gmail.com";

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$message = $_POST['message'];
$txt =
"Name: " . $firstname . " " . $lastname . "\r\n" .
"Email: " . $email . "\r\n" .
"Message: " . $message;

mail( "$webmaster_email", "Contact Form Message", $txt );
header('Location: ../index.html');


?>