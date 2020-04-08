<?php

    $to = "hemlataborana@gmail.com";
  
    $message = 'Hi Jane, will you marry me?'; 
    $from = 'hemlataborana65@gmail.com';
    $subject = "You have a message from your website";

    if(mail($to, $subject, $message)){
        echo 'Your mail has been sent successfully.';
    } else{
        echo 'Unable to send email. Please try again.';
    }

?>