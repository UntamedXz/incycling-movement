<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./assets/css/style.css">

</head>

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

<body>
    <div id="preloader"></div>

    <?php include './includes/navbar.php';?>
    <br>
    <br>
    <br>
    <br>
    <br>
    <section class="product-details">
        <div class="product-details__wrapper">
            <div class="left">
                <input type="hidden" name="" id="product_id" value="<?php echo $row['product_id']; ?>">
                <input type="hidden" name="" id="userEmail" value="<?php echo $userEmail; ?>">
                <div class="img-container">
                <img src="https://cdn.shopify.com/s/files/1/0335/2166/4131/products/0H0ALAXF3C48_900x.jpg?v=1645146132"
                                alt="" width="500px">
                </div>
                <div class="product-details">
                    <h1 class="product-title">2022 Cervelo Aspero-5 Force Xplr Etap Axs 1</h1>
                    <span class="price"><small>Starts at </small> <b>P<span>393,678.75</span></b></span>
                </div>
            </div>
            <div class="right">
                <div class="form-group">
                    <span>Special Instructions (Optional)</span>
                    <textarea></textarea>
                </div>
            </div>
        </div>
    </section>


    <div class="product-footer">
        <div class="product-footer__wrapper">
            <div class="qty-container">
                <div class="prev qtyBtn">-</div>
                <div class="next qtyBtn">+</div>
                <input class="number-spinner" type="number" name="" id="" value="1" min="1">
            </div>
            <div class="total-box">
                <div class="total">
                    <span class="totalText">Total</span>
                    <span class="totalPrice">P<span
                            class="totalPriceSpan">393,678.75</span></span>
                </div>
                <div class="btn-container">
                    <button type="submit" id="addToCart">ADD TO CART</button>
                </div>
            </div>
        </div>
    </div>

    <script src="./assets/js/script.js"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            $('.prev').on('click', function () {
                var prev = $(this).closest('.qty-container').find('input').val();

                if (prev == 1) {
                    var a = 1;
                    $(this).closest('.qty-container').find('input').val(a);
                } else {
                    var prevVal = prev - 1;
                    $(this).closest('.qty-container').find('input').val(prevVal);
                }
            });

            $('.next').on('click', function () {
                var next = $(this).closest('.qty-container').find('input').val();

                if (next == 100) {
                    $(this).closest('.qty-container').find('input').val('100');
                } else {
                    var nextVal = ++next;
                    $(this).closest('.qty-container').find('input').val(nextVal);
                }
            });

            $(".qtyBtn").on('click', function () {
                var total = parseFloat($('.number-spinner').val()).toFixed(2);
                var price = parseFloat($('.priceValue').text()).toFixed(2);

                var sum = parseFloat(total * price).toFixed(2);
                $('.totalPriceSpan').text(sum);
            });
        })
    </script>

    <script>
        $('#addToCart').on('click', function (e) {
            e.preventDefault();
            var userEmail = $('#userEmail').val();
            var product_id = $('#product_id').val();
            var qty = $('.number-spinner').val();
            var total = $('.totalPriceSpan').text();

            if(userEmail == '') {
                location.href = 'http://localhost/theserve-amarah-s-corner-las-pinas/login';
            } else {
                $.ajax ({
                    type: "POST",
                    url: "add-to-cart",
                    data: {
                        'add-to-cart': true,
                        'userEmail': userEmail,
                        'product_id': product_id,
                        'qty': qty,
                        'total': total,
                    },
                    success: function (response) {
                        if (response == 'success') {
                            $('#toast').addClass('active');
                            $('.progress').addClass('active');
                            $('#toast-icon').removeClass(
                                'fa-solid fa-triangle-exclamation').addClass(
                                'fa-solid fa-check warning');
                            $('.text-1').text('Success!');
                            $('.text-2').text('Added to cart successfully!');

                            setTimeout(() => {
                                $('#toast').removeClass("active");
                                $('.progress').removeClass("active");
                            }, 5000);
                        }
                    }
                })
            }
        })
    </script>

    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
    <script>
        var swiper = new Swiper(".mySwiper", {
            slidesPerView: 'auto',
            spaceBetween: 15,
            centeredSlides: true,
            loop: true,
            autoplay: {
                delay: 3500,
                disableOnInteraction: false,
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
        });
    </script>

    <script>
        var loader = document.getElementById("preloader");

        window.addEventListener("load", function () {
            loader.style.display = "none";
        })
    </script>
</body>

</html>