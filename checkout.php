<!DOCTYPE html>
<html class="no-js" lang="zxx">


<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Mediax - Health & Medical HTML Template - Checkout</title>
    <meta name="author" content="Mediax" />
    <meta name="description" content="Mediax - Health & Medical HTML Template" />
    <meta name="keywords" content="Mediax - Health & Medical HTML Template" />
    <meta name="robots" content="INDEX,FOLLOW" />
    <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no" />
    <link rel="apple-touch-icon" sizes="57x57" href="assets/img/favicons/apple-icon-57x57.png" />
    <link rel="apple-touch-icon" sizes="60x60" href="assets/img/favicons/apple-icon-60x60.png" />
    <link rel="apple-touch-icon" sizes="72x72" href="assets/img/favicons/apple-icon-72x72.png" />
    <link rel="apple-touch-icon" sizes="76x76" href="assets/img/favicons/apple-icon-76x76.png" />
    <link rel="apple-touch-icon" sizes="114x114" href="assets/img/favicons/apple-icon-114x114.png" />
    <link rel="apple-touch-icon" sizes="120x120" href="assets/img/favicons/apple-icon-120x120.png" />
    <link rel="apple-touch-icon" sizes="144x144" href="assets/img/favicons/apple-icon-144x144.png" />
    <link rel="apple-touch-icon" sizes="152x152" href="assets/img/favicons/apple-icon-152x152.png" />
    <link rel="apple-touch-icon" sizes="180x180" href="assets/img/favicons/apple-icon-180x180.png" />
    <link rel="icon" type="image/png" sizes="192x192" href="assets/img/favicons/android-icon-192x192.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicons/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicons/favicon-96x96.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicons/favicon-16x16.png" />
    <link rel="manifest" href="assets/img/favicons/manifest.json" />
    <meta name="msapplication-TileColor" content="#ffffff" />
    <meta name="msapplication-TileImage" content="assets/img/favicons/ms-icon-144x144.png" />
    <meta name="theme-color" content="#ffffff" />
    <link rel="preconnect" href="https://fonts.googleapis.com/" />
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=DM+Sans:opsz,wght@9..40,100;9..40,200;9..40,300;9..40,400;9..40,500;9..40,600;9..40,700;9..40,800&amp;family=Outfit:wght@300;400;500;600;700;800;900&amp;display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="assets/css/app.min.css" />
    <link rel="stylesheet" href="assets/css/fontawesome.min.css" />
    <link rel="stylesheet" href="assets/css/style.css" />
</head>

<body>

    <?php
include("include/header.php")
?>





<div class="breadcumb-wrapper" data-bg-src="assets/img/bg/breadcumb-bg.jpg">
        <div class="container">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">Checkout</h1>
                <ul class="breadcumb-menu">
                    <li><a href="index.php">Home</a></li>
                    <li>Checkout</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="th-checkout-wrapper space-top space-extra-bottom">
        <div class="container">
            <div class="woocommerce-form-login-toggle">
                <div class="woocommerce-info">Returning customer? <a href="#" class="showlogin">Click here to login</a>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <form action="#" class="woocommerce-form-login">
                        <div class="form-group"><label>Username or email *</label> <input type="text"
                                class="form-control" placeholder="Username or email"></div>
                        <div class="form-group"><label>Password *</label> <input type="text" class="form-control"
                                placeholder="Password"></div>
                        <div class="form-group">
                            <div class="custom-checkbox"><input type="checkbox" id="remembermylogin"> <label
                                    for="remembermylogin">Remember Me</label></div>
                        </div>
                        <div class="form-group"><button type="submit" class="th-btn">Login</button>
                            <p class="mt-3 mb-0"><a class="text-reset" href="#">Lost your password?</a></p>
                        </div>
                    </form>
                </div>
            </div>
            <div class="woocommerce-form-coupon-toggle">
                <div class="woocommerce-info">Have a coupon? <a href="#" class="showcoupon">Click here to enter your
                        code</a></div>
            </div>
            <div class="row">
                <div class="col-12">
                    <form action="#" class="woocommerce-form-coupon">
                        <div class="form-group"><label>Coupon code</label> <input type="text" class="form-control"
                                placeholder="Write your coupon code"></div>
                        <div class="form-group"><button type="submit" class="th-btn">Apply coupon</button></div>
                    </form>
                </div>
            </div>
            <form action="#" class="woocommerce-checkout mt-40">
                <div class="row">
                    <div class="col-lg-6">
                        <h2 class="h4">Billing Details</h2>
                        <div class="row">
                            <div class="col-12 form-group"><select class="form-select">
                                    <option>United Kingdom (UK)</option>
                                    <option>United State (US)</option>
                                    <option>Equatorial Guinea (GQ)</option>
                                    <option>Australia (AU)</option>
                                    <option>Germany (DE)</option>
                                </select></div>
                            <div class="col-md-6 form-group"><input type="text" class="form-control"
                                    placeholder="First Name"></div>
                            <div class="col-md-6 form-group"><input type="text" class="form-control"
                                    placeholder="Last Name"></div>
                            <div class="col-12 form-group"><input type="text" class="form-control"
                                    placeholder="Your Company Name"></div>
                            <div class="col-12 form-group"><input type="text" class="form-control"
                                    placeholder="Street Address"> <input type="text" class="form-control"
                                    placeholder="Apartment, suite, unit etc. (optional)"></div>
                            <div class="col-12 form-group"><input type="text" class="form-control"
                                    placeholder="Town / City"></div>
                            <div class="col-md-6 form-group"><input type="text" class="form-control"
                                    placeholder="Country"></div>
                            <div class="col-md-6 form-group"><input type="text" class="form-control"
                                    placeholder="Postcode / Zip"></div>
                            <div class="col-12 form-group"><input type="text" class="form-control"
                                    placeholder="Email Address"> <input type="text" class="form-control"
                                    placeholder="Phone number"></div>
                            <div class="col-12 form-group"><input type="checkbox" id="accountNewCreate"> <label
                                    for="accountNewCreate">Create An Account?</label></div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <p id="ship-to-different-address"><input id="ship-to-different-address-checkbox" type="checkbox"
                                name="ship_to_different_address" value="1" checked="checked"> <label
                                for="ship-to-different-address-checkbox">Ship to a different address? <span
                                    class="checkmark"></span></label></p>
                        <div class="shipping_address">
                            <div class="row">
                                <div class="col-12 form-group"><select class="form-select">
                                        <option>United Kingdom (UK)</option>
                                        <option>United State (US)</option>
                                        <option>Equatorial Guinea (GQ)</option>
                                        <option>Australia (AU)</option>
                                        <option>Germany (DE)</option>
                                    </select></div>
                                <div class="col-md-6 form-group"><input type="text" class="form-control"
                                        placeholder="First Name"></div>
                                <div class="col-md-6 form-group"><input type="text" class="form-control"
                                        placeholder="Last Name"></div>
                                <div class="col-12 form-group"><input type="text" class="form-control"
                                        placeholder="Your Company Name"></div>
                                <div class="col-12 form-group"><input type="text" class="form-control"
                                        placeholder="Street Address"> <input type="text" class="form-control"
                                        placeholder="Apartment, suite, unit etc. (optional)"></div>
                                <div class="col-12 form-group"><input type="text" class="form-control"
                                        placeholder="Town / City"></div>
                                <div class="col-md-6 form-group"><input type="text" class="form-control"
                                        placeholder="Country"></div>
                                <div class="col-md-6 form-group"><input type="text" class="form-control"
                                        placeholder="Postcode / Zip"></div>
                                <div class="col-12 form-group"><input type="text" class="form-control"
                                        placeholder="Email Address"> <input type="text" class="form-control"
                                        placeholder="Phone number"></div>
                            </div>
                        </div>
                        <div class="col-12 form-group"><textarea cols="20" rows="5" class="form-control"
                                placeholder="Notes about your order, e.g. special notes for delivery."></textarea></div>
                    </div>
                </div>
            </form>
            <h4 class="mt-4 pt-lg-2">Your Order</h4>
            <form action="#" class="woocommerce-cart-form">
                <table class="cart_table mb-20">
                    <thead>
                        <tr>
                            <th class="cart-col-image">Image</th>
                            <th class="cart-col-productname">Product Name</th>
                            <th class="cart-col-price">Price</th>
                            <th class="cart-col-quantity">Quantity</th>
                            <th class="cart-col-total">Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="cart_item">
                            <td data-title="Product"><a class="cart-productimage" href="shop-details.php"><img
                                        width="91" height="91" src="assets/img/product/product_thumb_1_1.jpg"
                                        alt="Image"></a></td>
                            <td data-title="Name"><a class="cart-productname" href="shop-details.php">Surgery Hands
                                    Gloves</a></td>
                            <td data-title="Price"><span class="amount"><bdi><span>$</span>18</bdi></span></td>
                            <td data-title="Quantity"><strong class="product-quantity">01</strong></td>
                            <td data-title="Total"><span class="amount"><bdi><span>$</span>18</bdi></span></td>
                        </tr>
                    </tbody>
                    <tfoot class="checkout-ordertable">
                        <tr class="cart-subtotal">
                            <th>Subtotal</th>
                            <td data-title="Subtotal" colspan="4"><span
                                    class="woocommerce-Price-amount amount"><bdi><span
                                            class="woocommerce-Price-currencySymbol">$</span>281.05</bdi></span></td>
                        </tr>
                        <tr class="woocommerce-shipping-totals shipping">
                            <th>Shipping</th>
                            <td data-title="Shipping" colspan="4">Enter your address to view shipping options.</td>
                        </tr>
                        <tr class="order-total">
                            <th>Total</th>
                            <td data-title="Total" colspan="4"><strong><span
                                        class="woocommerce-Price-amount amount"><bdi><span
                                                class="woocommerce-Price-currencySymbol">$</span>281.05</bdi></span></strong>
                            </td>
                        </tr>
                    </tfoot>
                </table>
            </form>
            <div class="mt-lg-3 mb-30">
                <div class="woocommerce-checkout-payment">
                    <ul class="wc_payment_methods payment_methods methods">
                        <li class="wc_payment_method payment_method_bacs"><input id="payment_method_bacs" type="radio"
                                class="input-radio" name="payment_method" value="bacs" checked="checked"> <label
                                for="payment_method_bacs">Direct bank transfer</label>
                            <div class="payment_box payment_method_bacs">
                                <p>Make your payment directly into our bank account. Please use your Order ID as the
                                    payment reference. Your order will not be shipped until the funds have cleared in
                                    our account.</p>
                            </div>
                        </li>
                        <li class="wc_payment_method payment_method_cheque"><input id="payment_method_cheque"
                                type="radio" class="input-radio" name="payment_method" value="cheque"> <label
                                for="payment_method_cheque">Cheque Payment</label>
                            <div class="payment_box payment_method_cheque">
                                <p>Please send a check to Store Name, Store Street, Store Town, Store State / County,
                                    Store Postcode.</p>
                            </div>
                        </li>
                        <li class="wc_payment_method payment_method_cod"><input id="payment_method_cod" type="radio"
                                class="input-radio" name="payment_method"> <label for="payment_method_cod">Credit
                                Cart</label>
                            <div class="payment_box payment_method_cod">
                                <p>Pay with cash upon delivery.</p>
                            </div>
                        </li>
                        <li class="wc_payment_method payment_method_paypal"><input id="payment_method_paypal"
                                type="radio" class="input-radio" name="payment_method" value="paypal"> <label
                                for="payment_method_paypal">Paypal</label>
                            <div class="payment_box payment_method_paypal">
                                <p>Pay via PayPal; you can pay with your credit card if you don’t have a PayPal account.
                                </p>
                            </div>
                        </li>
                    </ul>
                    <div class="form-row place-order"><button type="submit" class="th-btn">Place order</button></div>
                </div>
            </div>
        </div>
    </div>


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