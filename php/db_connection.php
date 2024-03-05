<?php
$conn = new mysqli("localhost", "root", "", "pharmacy");

if ($conn->connect_error) {
    
    die("Connection failed". $conn->connect_error);

}else{

    //echo "connected.";
}

//header("location:../login.html");
