<?php

    $title = $_POST['title'];
    $category = $_POST['category'];
    $description = $_POST['description'];
    
    if(isset($_POST['submit']) && ($_FILES['my_image'])){
       include "./api/conn.php";

        echo "<pre>";
        print_r(($_FILES['my_image']));
        echo "<pre>";

        $img_name = $_FILES['my_image']['name'];
        $img_size = $_FILES['my_image']['size'];
        $tmp_name = $_FILES['my_image']['tmp_name'];
        $error = $_FILES['my_image']['error'];

        $title = mysqli_real_escape_string($conn, $_POST['title']);
        $category = mysqli_real_escape_string($conn, $_POST['category']);
        $description = mysqli_real_escape_string($conn, $_POST['description']);
         

        if($error === 0 && !empty($category) && !empty($title)){
            if($img_size > 12500000){
                $em = "Sorry, your file is too large.";
                header("Location: addService.php?error=$em");
            }else{
                $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
                $img_ex_lc = strtolower($img_ex);

                $allowed_exs = array("jpg", "jpeg", "png");

                if(in_array($img_ex_lc, $allowed_exs)){
                    $new_img_name = uniqid("IMG-", true) . '.' . $img_ex_lc;

                    $img_upload_path = 'imageServices/' . $new_img_name;
                    move_uploaded_file($tmp_name, $img_upload_path);

                    // Insert into Database
                    $sql = "INSERT INTO services(image, title, category, description)
                            VALUES ('$new_img_name', '$title', '$category', '$description')";
				    mysqli_query($conn, $sql);
				    header("Location: ./view.php"); 
                }else{
                    $em = "You can't upload files of this type";
                    header("Location: addService.php?error=$em");
                }
            }
        }else{
            $em = "unknown error occurred!";
            header("Location: addService.php?error=$em");
        }
    }else{
        header("Location: addService.php");
    }
?>