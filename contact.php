<?php 

if (!empty($_POST['your_fax'])) {
    // It's SPAM
}
else
{
$name = $_POST['name'];

$email = $_POST['email'];
$subject =$_POST['subject'];
$message = $_POST['message'];

$formcontent="From: $name  \n Message: $message";
$recipient = "info@eyomerhotel.com";

$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Thank You!";
}
?>