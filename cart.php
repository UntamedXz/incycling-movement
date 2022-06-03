<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.0/css/jquery.dataTables.min.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.12.0/js/jquery.dataTables.min.js"></script>
</head>


<script>
    $(document).ready(function () {
        $('#table_id').dataTable({
            responsive: true,
            scrollX: true,
        });
    });
</script>


<title>Incyclist</title>

<style>
    body {
        background: url(./assets/images/bikee.png) no-repeat;
        background-size: cover;
        background-position: center;
        background-attachment: fixed;
        height: 100%;
    }
</style>
</head>

<body>
    <div id="preloader"></div>

    <?php include './includes/navbar.php'; ?>
    <input type="hidden" name="" id="cartCount" value="<?php echo $cartCount; ?>">

    <section class="cart">
        <div class="wrapper">
            <br><br>
            <h1>Shopping Cart</h1>
            <hr>
            <div class="project">
                <div class="shop">
                    <div class="box">
                            <img src="https://cdn.shopify.com/s/files/1/0335/2166/4131/products/LT0101-01_a300f7ae-f639-4dd2-8917-3a2d0c328e55_900x.jpg?v=1653070247"
                                alt="" width="300px">

                        <div class="content">
                            <h3>Dumonde Lite BCL Lube 2oz</h3>
                            <h4>Price P2,411.94</h4>
                            <div class="qty-remove">
                                <p class="unit">Quantity: 2</p>
                                <h4 class="subTotal">Subtotal: P4,823.88</h4>
                            </div>
                            <p class="btn-area">
                                    <i class='bx bxs-trash'></i>
                                    <span class="btn-2">Remove</span>
                                </p>
                        </div>
                    </div>
                    <div class="box">
                    <img src="https://cdn.shopify.com/s/files/1/0335/2166/4131/products/64119-460_APP_RBX-JERSEY-SS-WMN-BLK-RED-TEAM-M_HERO_900x.jpg?v=1650931382"
                                alt="" width="300px">

                        <div class="content">
                            <h3>Specialized Rbx Jersey Ss Wmn</h3>
                            <h4>Price P3,936.26</h4>
                            <div class="qty-remove">
                                <p class="unit">Quantity: 1</p>
                                <h4 class="subTotal">Subtotal: P3,936.26</h4>
                            </div>
                            <p class="btn-area">
                                    <i class='bx bxs-trash'></i>
                                    <span class="btn-2">Remove</span>
                                </p>
                        </div>
                    </div>
                    <div class="box">
                            <img src="https://cdn.shopify.com/s/files/1/0335/2166/4131/products/0H0ALAXF3C48_900x.jpg?v=1645146132"
                                alt="" width="300px">

                        <div class="content">
                            <h3>2022 Cervelo Aspero-5 Force Xplr Etap Axs 1</h3>
                            <h4>Price P393,678.75</h4>
                            <div class="qty-remove">
                                <p class="unit">Quantity: 1</p>
                                <h4 class="subTotal">Subtotal: P393,678.75</h4>
                            </div>
                            <p class="btn-area">
                                    <i class='bx bxs-trash'></i>
                                    <span class="btn-2">Remove</span>
                                </p>
                        </div>
                    </div>
                    <?php
                    
                    ?>
                </div>
                <div class="right-bar">
                    <p><span>Total</span> <span><strong>P2,800.00</strong></span></p>

                    <a href="checkout.php"><i class='bx bxs-cart'></i>Proceed to Checkout</a>
                </div>
            </div>
        </div>
    </section>

  
    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js">
    </script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js">
    </script>
    <script src="./assets/js/script.js"></script>
    <script>
        var loader = document.getElementById("preloader");

        window.addEventListener("load", function () {
            loader.style.display = "none";
        })
    </script>

    <script type="text/javascript">
        $('.btn-2').on('click', function(e) {
            e.preventDefault();
            
        })
    </script>
</body>

</html>