<?php

session_start();

if (isset($_SESSION['username'])) {

?>

<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact Us</title>

    <link rel="stylesheet" type="text/css" href="contact-us.css" />

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
            <img src="banner2.jpg" />
        </div>
        <div class="container">
            <h1 class="title">Contact Us</h1>
        </div>


    </section>
    <!--banner-->

    <section class="main">
        <div class="center">
            <h1>Head Office</h1>
            <p>Lot 25 Block 17 Phase 3, NHA Bangkal, Davao City, 8000, Davao del Sur, Philippines</p>
            <ul>
                <li style="padding-bottom: 15px">
                    <img src="phone1.png" width="30" />
                    <span style="margin-left: 12px">(082) 123-4567</span>
                </li>
                <li style="padding-bottom: 15px">
                    <img src="phone2.png" width="30" />
                    <span style="margin-left: 12px">(082) 123-4567</span>
                </li>
                <li style="padding-bottom: 15px">
                    <img src="phone3.png" width="30" />
                    <a href="mailto:info@samplepharmacy.com" style="margin-left: 12px; color:#666">info@samplepharmacy.com</a>
                </li>
            </ul>
        </div>

        <div class="map">
            <h3>Google Maps</h3>
            <iframe width="600" height="500" id="gmap_canvas" src="http://maps.google.com/maps?q=7.050470571628303,125.56305701315206&z=16&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
        </div>
    </section>



</body>
</html>

<?php

} else {

    header("Location: http://localhost/CST5/FinalProject/contact-us.html");

    exit();

}

?>