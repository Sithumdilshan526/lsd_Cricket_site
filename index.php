<?php
require 'config.php';
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>LSD Cricket | Cricket Store</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

<div class="topbar">
    <div class="container">
        <span>Free delivery on selected orders</span>
        <span>WhatsApp: +94 77 000 0000</span>
    </div>
</div>

<header class="navbar">
    <div class="container navin">
        <a class="brand" href="index.php"><img src="assets/images/logo.svg" alt="LSD Cricket"></a>
        <button class="iconbtn mobile-toggle">â˜°</button>

        <nav class="navlinks">
            <a href="index.php">Home</a>
            <a href="shop.php">Shop</a>
            <a href="shop.php?category=hard">Hard Cricket</a>
            <a href="shop.php?category=soft">Soft Cricket</a>
            <a href="#about">About</a>
            <a href="#contact">Contact</a>
        </nav>

        <div class="nav-actions">
            <button class="theme-btn" id="themeToggle" onclick="toggleTheme()">â˜¾ Dark</button>
            <a class="iconbtn" href="cart.php">
                ðŸ›’ <span class="cartbadge"><?= cart_count() ?></span>
            </a>
        </div>
    </div>
</header>

<!-- ==================== HOME HERO ==================== -->
<section class="hero">
    <div class="container hero-grid">
        <div>
            <div class="eyebrow">LSD CRICKET STORE</div>
            <h1>Gear up. Play hard. Play better.</h1>
            <p>
                Premium cricket bats, balls, gloves, helmets and soft-ball gear.
                Simple ordering, secure checkout and island-wide delivery.
            </p>

            <div style="display:flex;gap:10px;margin-top:25px">
                <a class="btn btn-primary" href="shop.php">Shop Collection</a>
                <a class="btn" style="border:1px solid rgba(255,255,255,.3);color:#fff" href="#about">Explore</a>
            </div>
        </div>

        <img
            class="hero-img"
            src="assets/images/hero.png"
            alt="LSD Cricket equipment">
    </div>
</section>

<!-- ==================== CATEGORIES ==================== -->
<section class="section">
    <div class="container">
        <div class="section-head">
            <div>
                <div class="eyebrow">SHOP BY CATEGORY</div>
                <h2>Choose your game</h2>
            </div>
        </div>

        <div class="categories">
            <a class="cat" href="shop.php?category=hard">
                <img src="assets/images/categories/hard-cricket.png" alt="Hard Cricket">
                <div class="cat-copy">
                    <h3>Hard Cricket</h3>
                    <p>Match-ready equipment</p>
                </div>
            </a>

            <a class="cat" href="shop.php?category=soft">
                <img src="assets/images/categories/soft-cricket.png" alt="Soft Cricket">
                <div class="cat-copy">
                    <h3>Soft Cricket</h3>
                    <p>Tape-ball &amp; tennis-ball gear</p>
                </div>
            </a>
        </div>
    </div>
</section>

<!-- ==================== PRODUCT ITEMS ==================== -->
<section class="section" style="padding-top:20px">
    <div class="container">
        <div class="section-head">
            <div>
                <div class="eyebrow">FEATURED</div>
                <h2>Popular Products</h2>
            </div>
            <a class="btn btn-outline" href="shop.php">View all</a>
        </div>

        <div class="products">

            <!-- Product 1 -->
            <article class="product">
                <a href="product.php?id=1">
                    <img src="assets/images/products/cricket-bat.png" alt="English Willow Cricket Bat">
                </a>
                <div class="product-body">
                    <span class="tag">Hard Cricket</span>
                    <h3>English Willow Cricket Bat</h3>
                    <div class="price">Rs. 35,000.00</div>
                    <div class="product-actions">
                        <a class="btn btn-dark" href="product.php?id=1">View</a>
                        <a class="btn btn-primary" href="add_to_cart.php?id=1">Add</a>
                    </div>
                </div>
            </article>

            <!-- Product 2 -->
            <article class="product">
                <a href="product.php?id=2">
                    <img src="assets/images/products/cricket-ball.png" alt="Leather Cricket Ball">
                </a>
                <div class="product-body">
                    <span class="tag">Hard Cricket</span>
                    <h3>Leather Cricket Ball</h3>
                    <div class="price">Rs. 4,500.00</div>
                    <div class="product-actions">
                        <a class="btn btn-dark" href="product.php?id=2">View</a>
                        <a class="btn btn-primary" href="add_to_cart.php?id=2">Add</a>
                    </div>
                </div>
            </article>

            <!-- Product 3 -->
            <article class="product">
                <a href="product.php?id=3">
                    <img src="assets/images/products/batting-gloves.png" alt="Batting Gloves">
                </a>
                <div class="product-body">
                    <span class="tag">Hard Cricket</span>
                    <h3>Batting Gloves</h3>
                    <div class="price">Rs. 6,500.00</div>
                    <div class="product-actions">
                        <a class="btn btn-dark" href="product.php?id=3">View</a>
                        <a class="btn btn-primary" href="add_to_cart.php?id=3">Add</a>
                    </div>
                </div>
            </article>

            <!-- Product 4 -->
            <article class="product">
                <a href="product.php?id=4">
                    <img src="assets/images/products/helmet.png" alt="Cricket Helmet">
                </a>
                <div class="product-body">
                    <span class="tag">Hard Cricket</span>
                    <h3>Cricket Helmet</h3>
                    <div class="price">Rs. 12,000.00</div>
                    <div class="product-actions">
                        <a class="btn btn-dark" href="product.php?id=4">View</a>
                        <a class="btn btn-primary" href="add_to_cart.php?id=4">Add</a>
                    </div>
                </div>
            </article>

            <!-- Product 5 -->
            <article class="product">
                <a href="product.php?id=5">
                    <img src="assets/images/products/kit-bag.png" alt="Cricket Kit Bag">
                </a>
                <div class="product-body">
                    <span class="tag">Hard Cricket</span>
                    <h3>Cricket Kit Bag</h3>
                    <div class="price">Rs. 8,500.00</div>
                    <div class="product-actions">
                        <a class="btn btn-dark" href="product.php?id=5">View</a>
                        <a class="btn btn-primary" href="add_to_cart.php?id=5">Add</a>
                    </div>
                </div>
            </article>

            <!-- Product 6 -->
            <article class="product">
                <a href="product.php?id=6">
                    <img src="assets/images/products/soft-bat.png" alt="Soft Cricket Bat">
                </a>
                <div class="product-body">
                    <span class="tag">Soft Cricket</span>
                    <h3>Soft Cricket Bat</h3>
                    <div class="price">Rs. 4,500.00</div>
                    <div class="product-actions">
                        <a class="btn btn-dark" href="product.php?id=6">View</a>
                        <a class="btn btn-primary" href="add_to_cart.php?id=6">Add</a>
                    </div>
                </div>
            </article>

            <!-- Product 7 -->
            <article class="product">
                <a href="product.php?id=7">
                    <img src="assets/images/products/tennis-ball.png" alt="Tennis Cricket Ball">
                </a>
                <div class="product-body">
                    <span class="tag">Soft Cricket</span>
                    <h3>Tennis Cricket Ball</h3>
                    <div class="price">Rs. 350.00</div>
                    <div class="product-actions">
                        <a class="btn btn-dark" href="product.php?id=7">View</a>
                        <a class="btn btn-primary" href="add_to_cart.php?id=7">Add</a>
                    </div>
                </div>
            </article>

            <!-- Product 8 -->
            <article class="product">
                <a href="product.php?id=8">
                    <img src="assets/images/products/tape-ball.png" alt="Tape Ball">
                </a>
                <div class="product-body">
                    <span class="tag">Soft Cricket</span>
                    <h3>Tape Ball</h3>
                    <div class="price">Rs. 450.00</div>
                    <div class="product-actions">
                        <a class="btn btn-dark" href="product.php?id=8">View</a>
                        <a class="btn btn-primary" href="add_to_cart.php?id=8">Add</a>
                    </div>
                </div>
            </article>

            <!-- Product 9 -->
            <article class="product">
                <a href="product.php?id=9">
                    <img src="assets/images/products/cricket-pads.png" alt="Cricket Pads">
                </a>
                <div class="product-body">
                    <span class="tag">Hard Cricket</span>
                    <h3>Cricket Pads</h3>
                    <div class="price">Rs. 9,500.00</div>
                    <div class="product-actions">
                        <a class="btn btn-dark" href="product.php?id=9">View</a>
                        <a class="btn btn-primary" href="add_to_cart.php?id=9">Add</a>
                    </div>
                </div>
            </article>

        </div>
    </div>
</section>

<section class="section features" id="about">
    <div class="container">
        <div class="section-head">
            <div>
                <div class="eyebrow">WHY LSD CRICKET</div>
                <h2>Built for cricket lovers</h2>
            </div>
        </div>

        <div class="feature-grid">
            <div class="feature">ðŸ<strong>Quality Gear</strong><span class="muted">Selected equipment for practice and matches.</span></div>
            <div class="feature">ðŸšš<strong>Easy Delivery</strong><span class="muted">Simple island-wide order process.</span></div>
            <div class="feature">ðŸ’³<strong>Flexible Payment</strong><span class="muted">Cash on delivery and online payment-ready checkout.</span></div>
            <div class="feature">ðŸ’¬<strong>Support</strong><span class="muted">Contact us for product and order help.</span></div>
        </div>
    </div>
</section>

<section class="section">
    <div class="container newsletter">
        <div class="eyebrow">STAY IN THE GAME</div>
        <h2>Get new gear updates</h2>
        <p>Join our simple newsletter for new products and offers.</p>
        <form>
            <input placeholder="Your email address">
            <button class="btn btn-primary">Subscribe</button>
        </form>
    </div>
</section>

<footer class="footer" id="contact">
    <div class="container">
        <div class="footer-grid">
            <div>
                <div class="brand" style="color:#fff">LSD <span>Cricket</span></div>
                <p>Hard-ball and soft-ball cricket equipment for players who want to play better.</p>
            </div>
            <div>
                <h4>Shop</h4>
                <a href="shop.php?category=hard">Hard Cricket</a>
                <a href="shop.php?category=soft">Soft Cricket</a>
                <a href="cart.php">Cart</a>
            </div>
            <div>
                <h4>Support</h4>
                <a href="#">Delivery</a>
                <a href="#">Returns</a>
                <a href="#">Privacy Policy</a>
            </div>
            <div>
                <h4>Contact</h4>
                <p>Matara, Sri Lanka</p>
                <p>+94 77 000 0000</p>
                <p>info@lsdcricket.lk</p>
            </div>
        </div>
        <div class="copyright">Â© 2026 LSD Cricket. All rights reserved.</div>
    </div>
</footer>

<script src="assets/js/app.js"></script>
</body>
</html>

