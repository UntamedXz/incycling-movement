<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Incycling Movement</title>
</head>

<body>
    <div id="preloader"></div>

    <?php include './includes/navbar.php'; ?>

    <!-- BANNER -->
    <section class="banner">
        <div class="row">
            <div class="col col-cont">
                <div class="content">
                    <h1>up to 75% off</h1>
                    <h4>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Illo veniam quia consectetur
                        architecto
                        omnis, harum assumenda, aliquam a consequatur hic soluta impedit, ex at voluptas quam. Iure
                        asperiores ut nihil!</h4>
                    <button class="btn btn-primary custom-btn">SHOP NOW</button>
                </div>
            </div>
            <div class="col col-images">
                <div class="bikes-slider swiper">
                    <div class="wrapper swiper-wrapper">
                        <a href="#" class="swiper-slide"><img src="./assets/images/bike-2.png" alt="bike 2"></a>
                        <a href="#" class="swiper-slide"><img src="./assets/images/bike-3.png" alt="bike 3"></a>
                        <a href="#" class="swiper-slide"><img src="./assets/images/bike-4.png" alt="bike 4"></a>
                        <a href="#" class="swiper-slide"><img src="./assets/images/bike-5.png" alt="bike 5"></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- BANNER -->

    <!-- FREE SHIPPING SECTION -->
    <section class="free-shipping">
        <div class="free-shipping__container">
            <h1>free shipping on orders over &#8369;1,500.00</h1>
            <p>Can't wait another minute to get your hands on the latest gear? Order online and pick up at your local
                Incyclist or take advantage of <strong>FREE shipping on orders over &#8369;1,500.00 (free shipping on
                    bikes
                    over ₱8,500.00) Exclusions Apply.</strong></p>
        </div>
    </section>
    <!-- FREE SHIPPING SECTION -->

    <!-- BIKE STOCK SECTION -->
    <section class="bike-stock">
        <h1>New bikes stock now!</h1>
        <div class="bike-stock-images">
            <div class="bike-stock-cont">
                <a href="#"><img src="./assets/images/new-stock-1.jpg"></a>
                <p class="bike-name">MOUNTAIN BIKES</p>
            </div>
            <div class="bike-stock-cont">
                <a href="#"><img src="./assets/images/new-stock-2.png"></a>
                <p class="bike-name">TOURING BIKES</p>
            </div>
            <div class="bike-stock-cont">
                <a href="#"><img src="./assets/images/new-stock-3.jpg"></a>
                <p class="bike-name">HYBRID BIKES</p>
            </div>
        </div>
    </section>
    <!-- BIKE STOCK SECTION -->

    <!-- FRAMESET SECTION -->
    <section class="frameset">
        <div class="frameset-image">
            <img src="./assets/images/section-3.webp">
        </div>
        <div class="frameset-content">
            <h4>now in stock</h4>
            <h2>Specialized Frameset</h2>
            <p>Take your mountain or road biking to the next level with a shiny new frame from Specialized - all with
                free shipping from Incyclist</p>
            <button class="btn btn-primary custom-btn">SHOP NOW</button>
        </div>
    </section>
    <!-- FRAMESET SECTION -->

    <!-- GIFT CARD SECTION -->
    <section class="gift-card">
        <div class="gift-card-container">
            <div class="col gift-card-img">
                <img src="./assets/images/section-4-card.jpg">
            </div>
            <div class="col gift-card-content">
                <h6>The gift that FITS EVERYONE</h5>
                    <h2>Gift cards!</h2>
                    <h5>Now available for online purchase</h5>
                    <button class="btn btn-primary custom-btn">GRAB YOURS NOW</button>
            </div>
        </div>
    </section>
    <!-- GIFT CARD SECTION -->

    <!-- BIKE FITTINGS SECTION -->
    <section class="bike-fittings">
        <div class="bike-fittings-image">
            <img src="./assets/images/bike-fittings.webp">
        </div>
        <div class="bike-fittings-content">
            <h2>Professional Bike Fittings</h2>
            <p>Unlock your true potential with a Retul bike fit today</p>
            <button class="btn btn-primary custom-btn">BOOK NOW</button>
        </div>
    </section>
    <!-- BIKE FITTINGS SECTION -->

    <!-- SERVICES SECTION -->
    <section class="services">
        <div class="services-container">
            <div class="services-column">
                <img src="./assets/images/service-1.jpg" alt="">
                <div class="contents">
                    <h2>Professional Bike Fittings</h2>
                    <p>Schedule a fit appointment with one of our certified fit specialists.</p>
                    <button class="btn btn-primary custom-btn">schedule a fit</button>
                </div>
            </div>
            <div class="services-column">
                <img src="./assets/images/service-2.jpg" alt="">
                <div class="contents">
                    <h2>RENT THE BEST</h2>
                    <p>Before you buy, try the latest. Rental fees can be applied to any bike purchase (up to 3-days rental can be applied)</p>
                    <button class="btn btn-primary custom-btn">view bikes</button>
                </div>
            </div>
            <div class="services-column">
                <img src="./assets/images/service-3.jpg" alt="">
                <div class="contents">
                    <h2>BIKE SERVICE</h2>
                    <p>For all of your bicycle service needs, there is no job too small for Incycle.</p>
                    <button class="btn btn-primary custom-btn">view our services</button>
                </div>
            </div>
        </div>
    </section>
    <!-- SERVICES SECTION -->

    <!-- SCRIPT -->
    <script>
        var loader = document.getElementById("preloader");

        window.addEventListener("load", function () {
            loader.style.display = "none";
        })
    </script>
    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
    <script src="./assets/js/script.js"></script>
    
</body>

</html>