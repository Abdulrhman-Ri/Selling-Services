<?php
$conn = mysqli_connect('localhost', 'root', 'root', 'react-crud');

if(!$conn){
    echo 'Error: ' . mysqli_connect_error();
}