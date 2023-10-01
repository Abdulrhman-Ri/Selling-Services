<?php

$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];


if (isset($_POST['submit'])){
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $subject = mysqli_real_escape_string($conn, $_POST['subject']);    
    $message = mysqli_real_escape_string($conn, $_POST['message']);    
    
    $sql = "INSERT INTO messages(name, email, subject, message)
            VALUES ('$name', '$email', '$subject', '$message')";

    if(empty($name)){
        echo 'Please Enter your name';
    }elseif(empty($email)){
        echo 'Email is empty!';
    }elseif(empty($subject)){
        echo 'Please Enter subject for your message';
    }elseif(empty($message)){
        echo 'Your Message is empty!';
    }elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        echo 'Please insert real email...';
    }else{
        if(mysqli_query($conn, $sql)){
            header('Location: index.php');
        }else{
            echo 'Error: ' . mysqli_error($conn);
        }
    }
}