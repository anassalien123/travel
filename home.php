<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    <!-- swiper css link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <!-- font awesome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    
    <!-- custom css file link -->
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
    
<!-- header section start  -->
    <section class="header">
        <a href="home.php" class="logo">travel.</a>

        <nav class="navbar">
            <a href="home.php">home</a>
            <a href="about.php">about</a>
            <a href="package.php">package</a>
            <a href="book.php">book</a>
        </nav>

        <div id="menu-btn" class="fas fa-bars"></div>
    </section>

<!-- header section ends -->


<!-- home section start -->
    <section class="home">
        <div class="swiper home-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide slide" style="background: url(images/home-side-1.jpeg) no-repeat">
                    <div class="content">
                        <span>explore, discover, travle</span>
                        <h3>travel arround the world</h3>
                        <a href="package.php" class="btn">discover more</a>
                    </div>
                </div>

                <div class="swiper-slide slide" style="background: url(images/home-side-2.jpeg) no-repeat">
                    <div class="content">
                        <span>explore, discover, travle</span>
                        <h3>discover the new places</h3>
                        <a href="package.php" class="btn">discover more</a>
                    </div>
                </div>

                <div class="swiper-slide slide" style="background: url(images/home-side-3.jpeg) no-repeat">
                    <div class="content">
                        <span>explore, discover, travle</span>
                        <h3>make your tour worthwhile</h3>
                        <a href="package.php" class="btn">discover more</a>
                    </div>
                </div>
            </div>

            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>

        </div>
    </section>
<!-- home section ends -->


<!-- services section starts -->
<section class="services">
    <h1 class="heading-title">our services</h1>
    <div class="box-container">
        <div class="box">
            <img src="images/icon-1.png" alt="">
            <h3>adventure</h3>
        </div>

        <div class="box">
            <img src="images/icon-2.png" alt="">
            <h3>tour guide</h3>
        </div>

        <div class="box">
            <img src="images/icon-3.png" alt="">
            <h3>trekking</h3>
        </div>

        <div class="box">
            <img src="images/icon-4.png" alt="">
            <h3>camp fire</h3>
        </div>

        <div class="box">
            <img src="images/icon-5.png" alt="">
            <h3>off road</h3>
        </div>

        <div class="box">
            <img src="images/icon-6.png" alt="">
            <h3>camping</h3>
        </div>

    </div>
</section>

<!-- services section end -->

<!-- home about section starts -->
<section class="home-about">

    <div class="image">
        <img src="images/about.jpg" alt="">
    </div>

    <div class="content">
        <h3>about us</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat 
            odio praesentium dignissimos facilis provident soluta unde voluptatibus 
            quo aliquam dolorum nostrum, ex temporibus alias esse consequatur suscipit
            possimus cum exercitationem incidunt. Reiciendis, explicabo.</p>
        <a href="about.php" class="btn">read more</a>    
    </div>
</section>
<!-- home about section ends -->

<!-- home packeges section starts -->
<section class="home-packages">
    <h1 class="heading-title">our packages</h1>

    <div class="box-container">
        <div class="box">
            <div class="image">
                <img src="images/img-1.jpeg" alt="">
            </div>
            <div class="content">
                <h3>adventure & tour</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas atque recusandae iure!</p>
                <a href="book.php" class="btn">book now</a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="images/img-2.avif" alt="">
            </div>
            <div class="content">
                <h3>adventure & tour</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas atque recusandae iure!</p>
                <a href="book.php" class="btn">book now</a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="images/img-3.jpg" alt="">
            </div>
            <div class="content">
                <h3>adventure & tour</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas atque recusandae iure!</p>
                <a href="book.php" class="btn">book now</a>
            </div>
        </div>
    </div>
    <div class="load-more"><a href="package.php" class="btn">load more</a></div>

</section>
<!-- home packeges section ends -->

<!-- home offer section starts -->

<section class="home-offer">
    <div class="content">
        <h3>upto 50% off</h3>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Asperiores, cumque voluptatem!</p>
        <a href="book.php" class="btn">book now</a>
    </div>
</section>

<!-- home offer section ends -->







    <!-- footer section starts -->
    <section class="footer">
        <div class="box-container">
            <div class="box">
                <h3>quick links</h3>
                <a href="#"><i class="fas fa-angle-right"></i> home</a>
                <a href="#"><i class="fas fa-angle-right"></i> about</a>
                <a href="#"><i class="fas fa-angle-right"></i> package</a>
                <a href="#"><i class="fas fa-angle-right"></i> book</a>
            </div>

            <div class="box">
                <h3>extra links</h3>
                <a href="#"><i class="fas fa-angle-right"></i> ask questions</a>
                <a href="#"><i class="fas fa-angle-right"></i> about us</a>
                <a href="#"><i class="fas fa-angle-right"></i> privacy policy</a>
                <a href="#"><i class="fas fa-angle-right"></i> terms of use</a>
            </div>

            <div class="box">
                <h3>contact info</h3>
                <a href="#"><i class="fas fa-phone"></i> +123-456-7890</a>
                <a href="#"><i class="fas fa-phone"></i> +123-456-7890</a>
                <a href="#"><i class="fas fa-envelope"></i> tarvelinhappy@gmail.com</a>
                <a href="#"><i class="fas fa-map"></i> Maroc, Meknes, Ouislane -12313</a>
            </div>

            <div class="box">
                <h3>follow us</h3>
                <a href="#"><i class="fa-brands fa-facebook"></i> facebook</a>
                <a href="#"><i class="fa-brands fa-twitter"></i> twitter</a>
                <a href="#"><i class="fa-brands fa-instagram"></i> instagram</a>
                <a href="#"><i class="fa-brands fa-linkedin-in"></i> linkedin</a>
            </div>
        </div>

        <div class="credit"> created by <span>mr. Anass Cheab</span> | all rights reserved</div>
    </section>

    <!-- footer section ends -->


    <!-- swiper js link  -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <!-- custom js file link  -->
    <script src="js/main.js"></script>
</body>
</html>