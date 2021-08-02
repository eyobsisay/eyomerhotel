<?php 

if (!empty($_POST['your_fax'])) {
    // It's SPAM
}
else
{
$fullname = $_POST['fullname'];

$email = $_POST['email'];
$subject ="Room Reservation Requiest From Website";
$message = $_POST['message'];
$message1 = $_POST['message1'];

$children=$_POST['children'];
$roomtype=$_POST['roomtype'];
$adults=$_POST['adults'];


$formcontent="*********************\nHotel Booking Request From Eyomer Hotel Website\n
*********************\n\nFull Name: $fullname \n\nCheck-In Date: $message  \n\nCheck-Out Date: $message1 \n\n Room Type: $roomtype \n\n Adults: $adults \n\n Children: $children";
$recipient = "reservation@eyomerhotel.com";

$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Welcome To Eyomer Hotel.\n";
echo "Now Your Room Booked & Please check your Email Address for comfomation.\n" ;
echo "Thank you!\n";
}
?>