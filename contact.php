<?php

$msg = '';
$msgClass = '';

if(filter_has_var(INPUT_POST, 'submit')){

  $name = htmlspecialchars($_POST['name']);
  $email = htmlspecialchars($_POST['email']);
  $message = htmlspecialchars($_POST['message']);
  
  if(!empty($email) && !empty($name) && !empty($message)){
    if(filter_var($email, FILTER_VALIDATE_EMAIL) === false){
      $msg = 'Not a valid email address';
      $msgClass = 'alert-danger';
    } else {
      $toEmail = 'contact@mmhumanity.com';
      $subject = 'Contact Request From ' . $name;
      $body = "You have received an email from " .$name.":\r\n".$message;
      $headers = "MIME-Version: 1.0" . "\r\n" . "Content-Type:text/html;charset=UTF-8" . "\r\n"
      . "From: " .$name . "<" .$email . ">" . "\r\n";

      if(mail($toEmail, $subject, $body, $headers)) {
        $msg = 'Message has been sent';
        $msgClass = 'alert-success';
      } else {
        $msg = 'Message was not sent';
        $msgClass = 'alert-danger';
      }
    }
  } else {
    $msg= 'Please fill in all fields';
    $msgClass = 'alert-danger';
  }
}

?>