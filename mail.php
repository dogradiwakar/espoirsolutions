
<?php $name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$subject = $_POST['subject'];
$formcontent="From: $name \n Message: $message";
$recipient = "diwakar@espoirsolutions.com";
// $subject = "Contact Form";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("");
echo "Thank You!";
?>