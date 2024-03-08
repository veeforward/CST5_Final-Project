<?php

session_start();

$conn = new mysqli("localhost", "root", "", "pharmacy");

if(isset($_POST["totalQuantity"], $_POST["totalPrice"], $_POST["phone"], $_POST["address"], $_POST["city"])) {
$totalQuantity = $_POST["totalQuantity"];
$totalPrice = $_POST["totalPrice"];
$phone = $_POST["phone"];
$address = $_POST["address"];
$city = $_POST["city"];
$username = $_SESSION["username"];

if ($conn) {

    $sql = "insert into sales_order(quantity,total,phone,address,username) values ('$totalQuantity','$totalPrice','$phone','$address','$username')";
    $result = mysqli_query($conn, $sql);

    if ($result) {

            $orderNumberQuery = "SELECT SO_Num FROM sales_order ORDER BY SO_Num DESC LIMIT 1";
            $orderNumberResult = mysqli_query($conn, $orderNumberQuery);
            $row = mysqli_fetch_assoc($orderNumberResult);
            $orderNumber = $row["SO_Num"];

            $_SESSION["orderNumber"] = $orderNumber;

            header("Location: http://localhost/CST5/FinalProject/ordernum.php");
            exit();

    } else {

        die(mysqli_error($conn));
    }

}

} else {
    header("Location: http://localhost/CST5/FinalProject/checkout.php");
    exit();
}

