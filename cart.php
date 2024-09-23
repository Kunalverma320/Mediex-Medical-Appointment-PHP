<!doctype html>
<html class="no-js" lang="zxx">
<!-- Mirrored from html.themeholy.com/mediax/demo/cart.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 13 Feb 2024 10:29:42 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Mediax - Health & Medical HTML Template - Cart</title>
    <meta name="author" content="Mediax">
    <meta name="description" content="Mediax - Health & Medical HTML Template">
    <meta name="keywords" content="Mediax - Health & Medical HTML Template">
    <meta name="robots" content="INDEX,FOLLOW">
    <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="57x57" href="assets/img/favicons/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="assets/img/favicons/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="assets/img/favicons/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="assets/img/favicons/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="assets/img/favicons/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="assets/img/favicons/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="assets/img/favicons/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="assets/img/favicons/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/img/favicons/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="assets/img/favicons/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicons/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicons/favicon-16x16.png">
    <link rel="manifest" href="assets/img/favicons/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="assets/img/favicons/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=DM+Sans:opsz,wght@9..40,100;9..40,200;9..40,300;9..40,400;9..40,500;9..40,600;9..40,700;9..40,800&amp;family=Outfit:wght@300;400;500;600;700;800;900&amp;display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="assets/css/app.min.css">
    <link rel="stylesheet" href="assets/css/fontawesome.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <?php
include("include/header.php")
?>

    <div class="breadcumb-wrapper" data-bg-src="assets/img/bg/breadcumb-bg.jpg">
        <div class="container">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">Cart Page</h1>
                <ul class="breadcumb-menu">
                    <li><a href="index.php">Home</a></li>
                    <li>Cart Page</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="th-cart-wrapper space-top space-extra-bottom">
        <div class="container">
            <div class="woocommerce-notices-wrapper">
                <div class="woocommerce-message">Shipping costs updated.</div>
            </div>
            <form action="#" class="woocommerce-cart-form">
                <table class="cart_table">
                    <thead>
                        <tr>
                            <th class="cart-col-image">Image</th>
                            <th class="cart-col-productname">Product Name</th>
                            <th class="cart-col-price">Price</th>
                            <th class="cart-col-quantity">Quantity</th>
                            <th class="cart-col-total">Total</th>
                            <th class="cart-col-remove">Remove</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="cart_item">
                            <td data-title="Product"><a class="cart-productimage" href="shop-detailis.php"><img
                                        width="91" height="91" src="assets/img/product/product_thumb_1_1.jpg"
                                        alt="Image"></a></td>
                            <td data-title="Name"><a class="cart-productname" href="shop-detailis.php">Surgery Hands
                                    Gloves</a></td>
                            <td data-title="Price"><span class="amount"><bdi><span>$</span>18</bdi></span></td>
                            <td data-title="Quantity">
                                <div class="quantity"><button class="quantity-minus qty-btn"><i
                                            class="far fa-minus"></i></button> <input type="number" class="qty-input"
                                        value="1" min="1" max="99"> <button class="quantity-plus qty-btn"><i
                                            class="far fa-plus"></i></button></div>
                            </td>
                            <td data-title="Total"><span class="amount"><bdi><span>$</span>18</bdi></span></td>
                            <td data-title="Remove"><a href="#" class="remove"><i class="fal fa-trash-alt"></i></a></td>
                        </tr>
                        <tr class="cart_item">
                            <td data-title="Product"><a class="cart-productimage" href="shop-detailis.php"><img
                                        width="91" height="91" src="assets/img/product/product_thumb_1_2.jpg"
                                        alt="Image"></a></td>
                            <td data-title="Name"><a class="cart-productname" href="shop-detailis.php">D-Ribose Drug
                                    Medicine</a></td>
                            <td data-title="Price"><span class="amount"><bdi><span>$</span>18</bdi></span></td>
                            <td data-title="Quantity">
                                <div class="quantity"><button class="quantity-minus qty-btn"><i
                                            class="far fa-minus"></i></button> <input type="number" class="qty-input"
                                        value="1" min="1" max="99"> <button class="quantity-plus qty-btn"><i
                                            class="far fa-plus"></i></button></div>
                            </td>
                            <td data-title="Total"><span class="amount"><bdi><span>$</span>18</bdi></span></td>
                            <td data-title="Remove"><a href="#" class="remove"><i class="fal fa-trash-alt"></i></a></td>
                        </tr>
                        <tr class="cart_item">
                            <td data-title="Product"><a class="cart-productimage" href="shop-detailis.php"><img
                                        width="91" height="91" src="assets/img/product/product_thumb_1_3.jpg"
                                        alt="Image"></a></td>
                            <td data-title="Name"><a class="cart-productname" href="shop-detailis.php">CAD Dentistry
                                    Prosthesis</a></td>
                            <td data-title="Price"><span class="amount"><bdi><span>$</span>18</bdi></span></td>
                            <td data-title="Quantity">
                                <div class="quantity"><button class="quantity-minus qty-btn"><i
                                            class="far fa-minus"></i></button> <input type="number" class="qty-input"
                                        value="1" min="1" max="99"> <button class="quantity-plus qty-btn"><i
                                            class="far fa-plus"></i></button></div>
                            </td>
                            <td data-title="Total"><span class="amount"><bdi><span>$</span>18</bdi></span></td>
                            <td data-title="Remove"><a href="#" class="remove"><i class="fal fa-trash-alt"></i></a></td>
                        </tr>
                        <tr>
                            <td colspan="6" class="actions">
                                <div class="th-cart-coupon"><input type="text" class="form-control"
                                        placeholder="Coupon Code..."> <button type="submit" class="th-btn">Apply
                                        Coupon</button></div><button type="submit" class="th-btn">Update cart</button>
                                <a href="shop.php" class="th-btn">Continue Shopping</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </form>
            <div class="row justify-content-end">
                <div class="col-md-8 col-lg-7 col-xl-6">
                    <h2 class="h4 summary-title">Cart Totals</h2>
                    <table class="cart_totals">
                        <tbody>
                            <tr>
                                <td>Cart Subtotal</td>
                                <td data-title="Cart Subtotal"><span class="amount"><bdi><span>$</span>47</bdi></span>
                                </td>
                            </tr>
                            <tr class="shipping">
                                <th>Shipping and Handling</th>
                                <td data-title="Shipping and Handling">
                                    <ul class="woocommerce-shipping-methods list-unstyled">
                                        <li><input type="radio" id="free_shipping" name="shipping_method"
                                                class="shipping_method"> <label for="free_shipping">Free
                                                shipping</label></li>
                                        <li><input type="radio" id="flat_rate" name="shipping_method"
                                                class="shipping_method" checked="checked"> <label for="flat_rate">Flat
                                                rate</label></li>
                                    </ul>
                                    <p class="woocommerce-shipping-destination">Shipping options will be updated during
                                        checkout.</p>
                                    <form action="#" method="post"><a href="#" class="shipping-calculator-button">Change
                                            address</a>
                                        <div class="shipping-calculator-form">
                                            <p class="form-row"><select class="form-select">
                                                    <option value="AR">Argentina</option>
                                                    <option value="AM">Armenia</option>
                                                    <option value="BD" selected="selected">Bangladesh</option>
                                                </select></p>
                                            <p><select class="form-select">
                                                    <option value="">Select an option…</option>
                                                    <option value="BD-05">Bagerhat</option>
                                                    <option value="BD-01">Bandarban</option>
                                                    <option value="BD-02">Barguna</option>
                                                    <option value="BD-06">Barishal</option>
                                                </select></p>
                                            <p class="form-row"><input type="text" class="form-control"
                                                    placeholder="Town / City"></p>
                                            <p class="form-row"><input type="text" class="form-control"
                                                    placeholder="Postcode / ZIP"></p>
                                            <p><button class="th-btn">Update</button></p>
                                        </div>
                                    </form>
                                </td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr class="order-total">
                                <td>Order Total</td>
                                <td data-title="Total"><strong><span
                                            class="amount"><bdi><span>$</span>47</bdi></span></strong></td>
                            </tr>
                        </tfoot>
                    </table>
                    <div class="wc-proceed-to-checkout mb-30"><a href="checkout.php" class="th-btn">Proceed to
                            checkout</a></div>
                </div>
            </div>
        </div>
    </div>
    <footer class="footer-wrapper footer-layout1" data-bg-src="assets/img/bg/footer_bg_1.jpg">
        <div class="container z-index-common">
            <div class="newsletter-wrap">
                <div class="newsletter-content">
                    <h2 class="sec-title">Subscribe for newsletter</h2>
                </div>
                <form class="newsletter-form">
                    <div class="form-group"><input class="form-control" type="email" placeholder="Email Address"
                            required=""></div><button type="submit" class="th-btn shadow-1">Subscribe</button>
                </form>
            </div>
        </div>
        <div class="widget-area">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-md-6 col-xl-auto">
                        <div class="widget footer-widget">
                            <div class="th-widget-about">
                                <div class="about-logo"><a href="index.php"><img
                                            src="assets/img/logo-footer.svg" alt="Mediax"></a></div>
                                <p class="about-text">Subscribe to out newsletter today to receive latest news
                                    administrate cost effective for tactical data.</p>
                                <p class="footer-info"><i class="fal fa-location-dot"></i> 2478 Street City Ohio 90255
                                </p>
                                <p class="footer-info"><i class="fal fa-envelope"></i> <a href="mailto:info@mediax.com"
                                        class="info-box_link">info@mediax.com</a></p>
                                <p class="footer-info"><i class="fal fa-phone"></i> <a href="tel:+40276328246"
                                        class="info-box_link">+(402) 763 282 46</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-auto">
                        <div class="widget widget_nav_menu footer-widget">
                            <h3 class="widget_title">Quick Links</h3>
                            <div class="menu-all-pages-container">
                                <ul class="menu">
                                    <li><a href="about.php">About Us</a></li>
                                    <li><a href="about.php">Terms of Use</a></li>
                                    <li><a href="service.php">Our Services</a></li>
                                    <li><a href="faq.php">Help & FAQs</a></li>
                                    <li><a href="blog.php">Blog</a></li>
                                    <li><a href="about.php">Privacy policy</a></li>
                                    <li><a href="contact.php">Contact Us</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-auto">
                        <div class="widget widget_nav_menu footer-widget">
                            <h3 class="widget_title">Popular service</h3>
                            <div class="menu-all-pages-container">
                                <ul class="menu">
                                    <li><a href="service-details.php">Cardiology Care</a></li>
                                    <li><a href="service-details.php">Urgent Care</a></li>
                                    <li><a href="service-details.php">Orthopedic Care</a></li>
                                    <li><a href="service-details.php">Diagnosis department</a></li>
                                    <li><a href="service-details.php">Gastroenterology</a></li>
                                    <li><a href="service-details.php">Therapy department</a></li>
                                    <li><a href="service-details.php">Dental service</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-auto">
                        <div class="widget footer-widget">
                            <h3 class="widget_title">Recent Posts</h3>
                            <div class="recent-post-wrap">
                                <div class="recent-post">
                                    <div class="media-img"><a href="blog-details.php"><img
                                                src="assets/img/blog/recent-post-2-1.jpg" alt="Blog Image"></a></div>
                                    <div class="media-body">
                                        <h4 class="post-title"><a class="text-inherit" href="blog-details.php">How
                                                Business Is Taking Over & What to Do About It</a></h4>
                                        <div class="recent-post-meta"><a href="blog.php"><i
                                                    class="fal fa-calendar"></i>21 Jun, 2024</a></div>
                                    </div>
                                </div>
                                <div class="recent-post">
                                    <div class="media-img"><a href="blog-details.php"><img
                                                src="assets/img/blog/recent-post-2-2.jpg" alt="Blog Image"></a></div>
                                    <div class="media-body">
                                        <h4 class="post-title"><a class="text-inherit" href="blog-details.php">Health
                                                vs. Wealth Navigate Business in Medicine</a></h4>
                                        <div class="recent-post-meta"><a href="blog.php"><i
                                                    class="fal fa-calendar"></i>22 Jun, 2024</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright-wrap">
            <div class="container">
                <div class="row gy-2 align-items-center">
                    <div class="col-md-7">
                        <p class="copyright-text">Copyright <i class="fal fa-copyright"></i> 2024 <a
                                href="index.php">Mediax</a>. All Rights Reserved.</p>
                    </div>
                    <div class="col-md-5 text-center text-md-end">
                        <div class="th-social"><a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
                            <a href="https://www.twitter.com/"><i class="fab fa-twitter"></i></a> <a
                                href="https://www.linkedin.com/"><i class="fab fa-linkedin-in"></i></a> <a
                                href="https://www.whatsapp.com/"><i class="fab fa-whatsapp"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>


    <?php
include("include/footer.php")
?>


    <div class="scroll-top">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" style="
            transition: stroke-dashoffset 10ms linear 0s;
            stroke-dasharray: 307.919, 307.919;
            stroke-dashoffset: 307.919;
          "></path>
        </svg>
    </div>
    <script src="assets/js/vendor/jquery-3.7.1.min.js"></script>
    <script src="assets/js/app.min.js"></script>
    <script src="assets/js/main.js"></script>
</body>


</html>