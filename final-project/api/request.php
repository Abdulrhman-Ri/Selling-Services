<?php

$name_req = $_POST['name-req'];
$email_req = $_POST['email-req'];
$title_req = $_POST['title-req'];


if (isset($_POST['submit_req'])){
    $name_req = mysqli_real_escape_string($conn, $_POST['name-req']);
    $email_req = mysqli_real_escape_string($conn, $_POST['email-req']);
    $title_req = mysqli_real_escape_string($conn, $_POST['title-req']);     
    
    $sql = "INSERT INTO request(name, email, titleService)
            VALUES ('$name_req', '$email_req', '$title_req')";

    if(empty($name_req)){
        echo 'Please Enter your name';
    }elseif(empty($email_req)){
        echo 'Email is empty!';
    }elseif(empty($title_req)){
        echo 'Please Enter the title service';
    }elseif(!filter_var($email_req, FILTER_VALIDATE_EMAIL)){
        echo 'Please insert real email...';
    }else{
        if(mysqli_query($conn, $sql)){
            header('Location: view.php');
        }else{
            echo 'Error: ' . mysqli_error($conn);
        }
    }
}