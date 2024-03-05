<?php

$conn = new mysqli("localhost", "root", "", "pharmacy");

$user = $_POST["username"];
$pass = $_POST["password"];
$email = $_POST["email"];

if($conn){

    $sql = "insert into users (username,pass,email) values ('$user','$pass','$email')";
    $result = mysqli_query($conn, $sql);

    if($result){
        
        echo "Input in database";
        header("location:../login.html");

    }else{

        die(mysqli_error($conn));
    }


}