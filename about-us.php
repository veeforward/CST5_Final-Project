<?php

session_start();

if (isset($_SESSION['username'])) {

?>

<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>About Us</title>

    <link rel="stylesheet" type="text/css" href="about-us.css" />

    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />

    <link href="https://fonts.googleapis.com/css2?family=Andika:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet" />
</head>
<body>

    <header class="header">
        <a href="index.php" class="logo">
            <img src="logo.png" />
        </a>

        <nav class="headbar">
            <a href="index.php">Home</a>
            <a href="login.html">Login</a>
            <a href="Product.php">Product</a>
            <a href="contact-us.php">Contact</a>
            <a href="about-us.php">About Us</a>
        </nav>

        <div class="menubtn">
            <a href="logout.php">
                <button style="color: black;border: 2px groove">Log Out</button>
            </a>
        </div>


    </header>

    <!--banner-->
    <section class="banner">
        <div class="banner">
            <img src="banner.jpg" />
        </div>
        <div class="container">
            <h1 class="title">Corporate Information</h1>
        </div>


    </section>
    <!--banner-->

    <section class="main">
        <div class="center">
            <h1>To be of service to you - whenever, wherever and however.</h1>
            <p class="center">Sample Pharmarcy is the most dependable and compassionate health and wellness partner in the nation. In order to provide medications within easy reach of its clients, Sample Pharmarcy has opened store after store over the years. It has expanded into a massive global network of over 1,000 locations and 10,000 employees, all of whom receive ongoing training in customer service and product knowledge.</p>

            <h2>History</h2>
            <p>Sample Pharmacy started as a small family-owned store offering basic pharmaceutical services. Over the decades, Sample Pharmacy expanded its services, and became a healthcare destination. They are known for their personalized services and commitment to quality. Today, Sample Pharmacy continues to thrive, playing an essential role in the community's healthcare system.</p>

            <img src="history11.gif" />
            <img src="history21.gif" />
            <img src="history31.gif" />
            <img src="history41.gif" />
        </div>

    </section>



    <!--main-->

</body>
</html>

<?php

} else {

    header("Location: http://localhost/CST5/FinalProject/about-us.html");

    exit();

}

?>