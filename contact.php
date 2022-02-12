<?php
  
  $name=$_POST['name'];
  $email=$_POST['email'];
  $message=$_POST['message'];

  $email_from='Espoir Solutions';
  $email_subject='Test Subject';
  $email_body="Name: $name.\n".
              "Emai: $email.\n".
              "message: $message.\n";


  $to="diwakar@espoirsolutions.com";
  $headers ="From: $email_from \r\n";
  $headers1="Reply-To: $email \r\n";
  mail($to,$email_subject,$email_body,$headers,$headers1);
  echo "Form submitted sucessfully";
  #header("location: index.html");
  
  //$contact->to = $receiving_email_address;
  //$contact->from_name = $_POST['name'];
  //$contact->from_email = $_POST['email'];
  //$contact->subject = $_POST['subject'];

  // Uncomment below code if you want to use SMTP to send emails. You need to enter your correct SMTP credentials
  /*
  $contact->smtp = array(
    'host' => 'mail.espoirsolutions.com ',
    'username' => 'diwakar@espoirsolutions.com',
    'password' => 'Nan@0219',
    'port' => '465'
  );
  
*/
  //$contact->add_message( $_POST['name'], 'From');
  //$contact->add_message( $_POST['email'], 'Email');
  //$contact->add_message( $_POST['message'], 'Message', 10);

  //echo $contact->send();
?>
