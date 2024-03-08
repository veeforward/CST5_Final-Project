<?php

$conn = new mysqli("localhost", "root", "", "pharmacy");

$user = $_POST["username"];
$pass = $_POST["password"];
$email = $_POST["email"];

if($conn){

    $sql = "insert into user(username,password,email) values ('$user','$pass','$email')";
    $result = mysqli_query($conn, $sql);

    if($result){

        echo "Input in database";
        header("location: http://localhost/CST5/FinalProject/login.html");

    }else{

        die(mysqli_error($conn));
    }


}