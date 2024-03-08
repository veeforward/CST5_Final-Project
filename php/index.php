<?php

session_start();

if (isset($_SESSION['username'])) {

    ?>

            <!DOCTYPE html>
            <html lang="en">
            <head>
                <meta charset="UTF-8" />
                <meta name="viewport" content="width=device-width, initial-scale=1.0" />
                <link rel="icon" type="png" href="favicon.png" />
                <title>Home page</title>

                <!--google font-->
                <link href="https://fonts.googleapis.com/css2?family=Andika:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet" />
                <link href="https://fonts.googleapis.com/css2?family=Andika:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet" />
                <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
                <!--google font-->

                <!--link for css file-->
                <link rel="stylesheet" type="text/css" href="style.css" />
                <!--link for css file-->
            </head>
            <body>

                <!--header-->
                <header class="header">
                    <a href="index.php" class="logo">
                        <img src="logo.png" />
                    </a>

                    <!--nav bar-->
                    <nav class="headbar" style="margin-left: 40px; padding: 1.5rem .5rem;">
                        <a href="index.php">Home</a>
                        <a href="login.html">Login</a>
                        <a href="Product.php">Product</a>
                        <a href="contact-us.php">Contact</a>
                        <a href="about-us.php">About Us</a>
                    </nav>

                    <div class="menubtn">
                        <a href="logout.php">
                            <button style="color: black; border: 2px groove; margin-left: 60px; border-radius: 10px; padding: 15px;">Log Out</button>
                        </a>
                    </div>

                    <!--nav bar-->


            </header>

            <!--header-->
            <!--banner-->
            <div class="slideshow-container">
                <div class="mySlides fade">
                    <div class="numbertext">1 / 3</div>
                    <img src="slider1.png" style="width:100%; height:275px" />
                    <div class="text">Order Online</div>
                </div>
                <div class="mySlides fade">
                    <div class="numbertext">2 / 3</div>
                    <img src="slider2.png" style="width: 100%; height: 275px" />
                    <div class="text">Pick-up Orders</div>
                </div>
                <div class="mySlides fade">
                    <div class="numbertext">3 / 3</div>
                    <img src="slider3.jpg" style="width: 100%; height: 275px" />
                    <div class="text">Register Online</div>
                </div>
                <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                <a class="next" onclick="plusSlides(1)">&#10095;</a>
            </div>
            <br />
            <div style="text-align:center">
                <span class="dot" onclick="currentSlide(1)"></span>
                <span class="dot" onclick="currentSlide(2)"></span>
                <span class="dot" onclick="currentSlide(3)"></span>
            </div>
            <script>
                let slideIndex = 0;
                let timeoutId = null;
                const slides = document.getElementsByClassName("mySlides");
                const dots = document.getElementsByClassName("dot");

                showSlides();
                function currentSlide(index) {
                    slideIndex = index;
                    showSlides();
                }
                function plusSlides(step) {

                    if (step < 0) {
                        slideIndex -= 2;

                        if (slideIndex < 0) {
                            slideIndex = slides.length - 1;
                        }
                    }

                    showSlides();
                }
                function showSlides() {
                    for (let i = 0; i < slides.length; i++) {
                        slides[i].style.display = "none";
                        dots[i].classList.remove('active');
                    }
                    slideIndex++;
                    if (slideIndex > slides.length) {
                        slideIndex = 1
                    }
                    slides[slideIndex - 1].style.display = "block";
                    dots[slideIndex - 1].classList.add('active');
                    if (timeoutId) {
                        clearTimeout(timeoutId);
                    }
                    timeoutId = setTimeout(showSlides, 5000);
                }
            </script>

            <!--banner-->
            <!--main-->
            <section class="main">
                <div class="left">
                    <h2>Hello, <?php echo $_SESSION['username']; ?>
                    <br /> Good to See You!</h2>
                <h1>Need your meds now?</h1>
                <p>May tamang gamot para sayo</p>

                    <a href="Product.php" class="left">
                        <button>Buy Now</button>
                    </a>
                    
            </div>

            <div class="right">
                <img src="home1.jpg" />
                <img src="home2.jpg" />
                <img src="home3.jpg" />
                <img src="home4.png" />
                <img src="home5.png" />
                <img src="home6.png" />
            </div>

        </section>

        <!--main-->
    </body>
    </html>

    <?php

} else {

    header("Location: http://localhost/CST5/FinalProject/index.html");

    exit();

}

?>




