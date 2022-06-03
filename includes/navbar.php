<!-- NAVBAR -->
<header class="header">
    <div class="header-1">
        <a href="#" class="logo">iNCYCLIST</a>
        <form class="search-form">
            <input type="text" class="search-input" placeholder="search here...">
            <label class="fa-solid fa-magnifying-glass"></label>
        </form>
        <div class="icons">
            <div id="search-btn" class="fas fa-search"></div>
            <a href="#" class="fas fa-heart"></a>
            <a href="cart.php" class="fas fa-shopping-cart"></a>
            <a href="login" id="login-btn" class="fas fa-user"></a>
            <div class="fa-solid fa-ellipsis" id="dropdown-icon"></div>
        </div>
    </div>
    <div class="header-2">
        <nav>
            <a href="index">home</a>
            <a href="accessories">accessories</a>
            <a href="bikes">bikes</a>
            <a href="clothing">clothing</a>
            <a href="components">components</a>
            <a href="services">services</a>
            <a href="rentals">rentals</a>
        </nav>
    </div>
</header>

<div class="mobile-menu">
    <label class="fa-solid fa-xmark" id="close-menu"></label>
    <nav>
        <a href="index">home</a>
        <a href="accessories">accessories</a>
        <a href="bikes">bikes</a>
        <a href="clothing">clothing</a>
        <a href="components">components</a>
        <a href="services">services</a>
        <a href="rentals">rentals</a>
    </nav>
</div>
<!-- NAVBAR -->

<script>
    const mobile_Menu = document.querySelector('.mobile-menu');
    const closeMenu = document.querySelector('#close-menu');

    closeMenu.addEventListener('click', function() {
        mobile_Menu.classList.remove('active');
    })
</script>