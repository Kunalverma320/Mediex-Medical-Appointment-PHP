<?php

include("config.php");

?>


<!DOCTYPE html>
<html class="no-js" lang="zxx">


<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Mediax - Health & Medical HTML Template - Appointment</title>
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
    <link rel="stylesheet" type="text/css" href="https://common.olemiss.edu/_js/sweet-alert/sweet-alert.css">
    <link rel="stylesheet" href="https://kendo.cdn.telerik.com/2018.2.620/styles/kendo.bootstrap-v4.min.css">

    <style>
    .spinner {
        display: none;
        border: 5px solid #f3f3f3;
        border-top: 5px solid #71e7b5;
        border-radius: 50%;
        margin: auto;
        text-align: center;
        margin-top: 12px;
        width: 50px;
        height: 50px;
        animation: spin 1s linear infinite;
    }

    @keyframes spin {
        0% {
            transform: rotate(0deg);
        }

        100% {
            transform: rotate(360deg);
        }
    }
    </style>

</head>

<body>

    <?php
include("include/header.php")
?>


    <script src="https://code.jquery.com/jquery-1.12.3.min.js"></script>
    <script src="https://kendo.cdn.telerik.com/2018.2.620/js/kendo.all.min.js"></script>

    <div class="breadcumb-wrapper" data-bg-src="assets/img/bg/breadcumb-bg.jpg">
        <div class="container">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">Appointments</h1>
                <ul class="breadcumb-menu">
                    <li><a href="index.php">Home</a></li>
                    <li>Appointments</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="overflow-hidden space">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-xl-9">
                    <div class="title-area">
                        <span class="sub-title2">With Access To</span>
                        <h2 class="sec-title mb-0">24 HOUR EMERGENCY</h2>
                        <h3 class="sec-heading">Assistance</h3>
                        <p class="sec-text">
                            Our clinic is equipped with modern facilities and advanced
                            medical technology to ensure accurate diagnoses and effective
                            treatments. This enables us to provide you with the highest
                            standard of care.
                        </p>
                    </div>
                </div>
            </div>

            <form id="appointment-form">
                <h4 class="form-title">Make An Appointment</h4>
                <div class="row">
                    <div class="form-group col-md-6">
                        <input type="text" class="form-control" name="name" id="name" placeholder="Your Name"
                            required />
                    </div>
                    <div class="form-group col-md-6">
                        <input type="email" class="form-control" name="email" id="email_new" placeholder="Email Address"
                            required />
                    </div>
                    <div class="form-group col-md-6">
                        <input type="tel" class="form-control" name="phone" id="phone" placeholder="Phone Number"
                            required />
                    </div>
                    <div class="form-group col-md-6">
                        <input type="date" class="form-control" name="date" id="date-pick" placeholder="Select Date"
                            required />
                    </div>
                    <div class="form-group col-md-6">
                        <input type="time" id="timePicker" name="time" class="dtt" required>
                    </div>
                    <?php
                    $query = "SELECT PICK_TEXT, PICK_ID FROM storepick WHERE STORE_ID = 'Categories' AND STORE_TYPE = 1 ORDER BY STORE_INDEX_SEQUENCE ASC";
                    $result = mysqli_query($con, $query);
                    if ($result && mysqli_num_rows($result) > 0) {
                        echo '<div class="form-group col-md-6">
                                <select name="department" id="department" class="form-select" required >
                                    <option value="" disabled selected hidden>Choose Department</option>';
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo '<option value="' . $row['PICK_ID'] . '">' . $row['PICK_TEXT'] . '</option>';
                        }
                        echo '</select></div>';
                    } else {
                        echo '<div class="alert alert-danger">Error: Unable to fetch departments.</div>';
                    }
                    ?>
                    <?php
                    $query = "SELECT id,fname FROM doctors order by fname asc";
                    $result = mysqli_query($con, $query);
                    if ($result && mysqli_num_rows($result) > 0) {
                        echo '<div class="form-group col-md-6">
                                <select name="doctors" id="doctors" class="form-select" required > 
                                    <option value="" disabled selected hidden>Choose Doctor</option>';
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo '<option value="' . $row['id'] . '">' . $row['fname'] . '</option>';
                        }
                        echo '</select></div>';
                    } else {
                        echo '<div class="alert alert-danger">Error: Unable to fetch departments.</div>';
                    }
                    ?>
                    <div class="form-group col-12">
                        <textarea name="message" id="message" cols="30" rows="3" class="form-control"
                            placeholder="Type Appointment Note...."></textarea>
                    </div>
                    <div class="form-btn col-12">
                        <button class="th-btn btn-fw" type="submit">BOOK AN APPOINTMENT</button>
                    </div>
                </div>
                <div id="form-final"></div>
                <div class="spinner"></div>


            </form>
        </div>
    </div>

    <div id="myModal" class="modal fade">
        <div class="modal-dialog modal-confirm">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="icon-box">
                        <i class="material-icons">&#xE876;</i>
                    </div>
                    <h4 class="modal-title w-100">Awesome!</h4>
                </div>
                <div class="modal-body">
                    <p class="text-center">Your Appointment has been Send To Doctor. Check your email for details.
                    </p>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-success btn-block" onclick="return offmodel()">OK</button>
                </div>
            </div>
        </div>
    </div>

    <div class="space-bottom">
        <div class="container th-container">
            <div class="swiper th-slider" id="brandSlider3"
                data-slider-options='{"breakpoints":{"0":{"slidesPerView":2},"420":{"slidesPerView":"3"},"768":{"slidesPerView":"4"},"992":{"slidesPerView":"5"},"1200":{"slidesPerView":"6"},"1400":{"slidesPerView":"8"}}}'>
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="brand-card">
                            <img src="assets/img/brand/brand_1_1.svg" alt="Brand Logo" />
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-card">
                            <img src="assets/img/brand/brand_1_2.svg" alt="Brand Logo" />
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-card">
                            <img src="assets/img/brand/brand_1_3.svg" alt="Brand Logo" />
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-card">
                            <img src="assets/img/brand/brand_1_4.svg" alt="Brand Logo" />
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-card">
                            <img src="assets/img/brand/brand_1_5.svg" alt="Brand Logo" />
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-card">
                            <img src="assets/img/brand/brand_1_6.svg" alt="Brand Logo" />
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-card">
                            <img src="assets/img/brand/brand_1_7.svg" alt="Brand Logo" />
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-card">
                            <img src="assets/img/brand/brand_1_8.svg" alt="Brand Logo" />
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-card">
                            <img src="assets/img/brand/brand_1_1.svg" alt="Brand Logo" />
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-card">
                            <img src="assets/img/brand/brand_1_2.svg" alt="Brand Logo" />
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-card">
                            <img src="assets/img/brand/brand_1_3.svg" alt="Brand Logo" />
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-card">
                            <img src="assets/img/brand/brand_1_4.svg" alt="Brand Logo" />
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-card">
                            <img src="assets/img/brand/brand_1_5.svg" alt="Brand Logo" />
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-card">
                            <img src="assets/img/brand/brand_1_6.svg" alt="Brand Logo" />
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-card">
                            <img src="assets/img/brand/brand_1_7.svg" alt="Brand Logo" />
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-card">
                            <img src="assets/img/brand/brand_1_8.svg" alt="Brand Logo" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
    document.addEventListener('DOMContentLoaded', function() {
        var today = new Date();
        var dd = today.getDate();
        var mm = today.getMonth() + 1; //January is 0!
        var yyyy = today.getFullYear();

        if (dd < 10) {
            dd = '0' + dd;
        }

        if (mm < 10) {
            mm = '0' + mm;
        }

        today = yyyy + '-' + mm + '-' + dd;
        document.getElementById("date-pick").setAttribute("min", today);
    });
    </script>
    <script src="https://common.olemiss.edu/_js/sweet-alert/sweet-alert.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script>
    function offmodel() {
        $('#myModal').modal('hide');
        return true;
    }
    </script>
    <script>
    $(document).ready(function() {

        $('#appointment-form').submit(function(e) {
            e.preventDefault();

            // Show spinner
            $('.spinner').show();

            var name = $('#name').val().trim();
            var phone = $('#phone').val().trim();
            var email = $('#email_new').val();
            var time = $('#timePicker').val().trim();
            var date = $('#date-pick').val().trim();
            var department = $('#department').val().trim();
            var doctors = $('#doctors').val().trim();
            var message = $('#message').val().trim();

            $.ajax({
                url: "submit-appointment.php",
                type: "post",
                data: {
                    name: name,
                    phone: phone,
                    email: email,
                    time: time,
                    date: date,
                    department: department,
                    doctors: doctors,
                    message: message
                },
                success: function(data) {
                    // alert(data);
                    $('#myModal').modal('show');
                    // $("#form-final").text(data);
                    $("#appointment-form")[0].reset();
                },
                complete: function() {
                    // Hide spinner
                    $('.spinner').hide();
                }
            });
        });
    });
    </script>




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