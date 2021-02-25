<?php

    if(filter_has_var(INPUT_POST, 'submit')) {
        $name = $_POST['full-name'];
        $email= $_POST['email'];
        $message = $_POST['message'];

        if(!empty($email) && !empty($name) && !empty($message)){
            if(filter_var($email, FILTER_VALIDATE_EMAIL) === true){
                $toEmail = "";
                $subject = "Contact request from " . $name;
                $body = "<h2>Contact Request</h2>
                        <h4>Name</h4><p>" . $name ."</p>
                        <h4>Email</h4><p>" . $email . "</p>
                        <h4>Message</h4><p>" . $message . "</p>
                        ";

                $headers = "MIME-Version: 1.0" . "\r\n";
                $headers .= "Content-Type:text/html;charset=UTF-8" . "\r\n";
                $headers .= "From: " . $name . "<" . $email . ">" . "\r\n";

                mail($toEmail, $subject, $body, $headers);
            }
        }
    }


?>