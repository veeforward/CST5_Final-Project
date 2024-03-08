<?php
session_start();

    if (isset($_SESSION["orderNumber"])) {
    $orderNumber = $_SESSION["orderNumber"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Confirmation</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            text-align: center;
        }
        .container {
            max-width: 600px;
            margin: 50px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        h1 {
            color: #333;
        }
        p {
            margin: 10px 0;
            line-height: 1.6;
        }
        .order-number {
            font-size: 24px;
            font-weight: bold;
            color: #007bff;
        }

        .homepage-link {
        color: #007bff;
        text-decoration: none;
    }
    </style>
</head>
<body>
    <div class="container">
        <h1>Order Confirmation <br /></h1>
        <h1>Hi! <?php echo $_SESSION['username']; ?></h1>
        <p>You have successfully completed your order.</p>
        <p>Please take a screenshot or save your order number for pickup.</p>
        <p>Your order number is: <span class="order-number"><?php echo $orderNumber; ?></span></p>
        <p><a href="index.php" class="homepage-link">Go back to homepage</a></p>
        <p><a href="logout.php" class="homepage-link">Log-out</a></p>
    </div>
</body>
</html>
<?php
} else {

    echo "Order number not found!";
}
?>
