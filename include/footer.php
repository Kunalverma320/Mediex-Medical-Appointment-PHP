<footer class="footer-wrapper footer-layout1" data-bg-src="assets/img/bg/footer_bg_1.jpg">
    <div class="container z-index-common">
        <div class="newsletter-wrap">
            <div class="newsletter-content">
                <h2 class="sec-title">Subscribe for newsletter</h2>
            </div>
            <form id="new-subscribe_foo" class="newsletter-form">
                <div class="form-group">
                    <input class="form-control" name="email" id="email_foo" type="email" placeholder="Email Address" required="" />
                </div>
                <button type="submit" id="submit" class="th-btn shadow-1">Subscribe</button>
            </form>
        </div>
    </div>
    <div class="widget-area">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-md-6 col-xl-auto">
                    <div class="widget footer-widget">
                        <div class="th-widget-about">
                            <div class="about-logo">
                                <a href="index.php"><img src="assets/img/logo-footer.svg"
                                        alt="Mediax" /></a>
                            </div>
                            <p class="about-text">
                                Subscribe to out newsletter today to receive latest news
                                administrate cost effective for tactical data.
                            </p>
                            <p class="footer-info">
                                <i class="fal fa-location-dot"></i> 2478 Street City Ohio
                                90255
                            </p>
                            <p class="footer-info">
                                <i class="fal fa-envelope"></i>
                                <a href="mailto:info@mediax.com" class="info-box_link">info@mediax.com</a>
                            </p>
                            <p class="footer-info">
                                <i class="fal fa-phone"></i>
                                <a href="tel:+40276328246" class="info-box_link">+(402) 763 282 46</a>
                            </p>
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
                                <li>
                                    <a href="service-details.php">Diagnosis department</a>
                                </li>
                                <li><a href="service-details.php">Gastroenterology</a></li>
                                <li>
                                    <a href="service-details.php">Therapy department</a>
                                </li>
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
                                <div class="media-img">
                                    <a href="blog-details.php"><img src="assets/img/blog/recent-post-2-1.jpg"
                                            alt="Blog Image" /></a>
                                </div>
                                <div class="media-body">
                                    <h4 class="post-title">
                                        <a class="text-inherit" href="blog-details.php">How Business Is Taking Over &
                                            What to Do About It</a>
                                    </h4>
                                    <div class="recent-post-meta">
                                        <a href="blog.php"><i class="fal fa-calendar"></i>21 Jun, 2024</a>
                                    </div>
                                </div>
                            </div>
                            <div class="recent-post">
                                <div class="media-img">
                                    <a href="blog-details.php"><img src="assets/img/blog/recent-post-2-2.jpg"
                                            alt="Blog Image" /></a>
                                </div>
                                <div class="media-body">
                                    <h4 class="post-title">
                                        <a class="text-inherit" href="blog-details.php">Health vs. Wealth Navigate
                                            Business in Medicine</a>
                                    </h4>
                                    <div class="recent-post-meta">
                                        <a href="blog.php"><i class="fal fa-calendar"></i>22 Jun, 2024</a>
                                    </div>
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
                    <p class="copyright-text">
                        Copyright <i class="fal fa-copyright"></i> 2024
                        <a href="index.php">Mediax</a>. All Rights
                        Reserved.
                    </p>
                </div>
                <div class="col-md-5 text-center text-md-end">
                    <div class="th-social">
                        <a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
                        <a href="https://www.twitter.com/"><i class="fab fa-twitter"></i></a>
                        <a href="https://www.linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                        <a href="https://www.whatsapp.com/"><i class="fab fa-whatsapp"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

<script>
   $("#new-subscribe_foo").submit(function(e) {
    e.preventDefault(); 
    var email = $("#email_foo").val();
    $.ajax({
        url: "sub-email-save.php",
        type: "post",
        data: {
            email: email
        },
        success: function(data) {
            alert(data); 
        }
    });
});
</script>