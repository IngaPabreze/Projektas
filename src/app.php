<?php
if (isset($_POST['submit'])){
    $name= trim($_POST['name']);
    $email= trim($_POST['email']);
    $message= trim($_POST['message']);
    if(!empty($name) && !empty($email) && !empty($message)){
        if(filter_var($email, FILTER_VALIDATE_EMAIL)){
            $from ="$email";
            $to = "inga.pabreze@gmail.com";
            $subject="New message";
            $autor='From: '.$name.' ,'.$email;
            $zinute = htmlspecialchars($message);
            mail($to, $subject, $autor, $zinute, $from);
            echo "<script>alert('Thank you, we got your message.');</script>";
            }
    }
    include('db.php');
    }
