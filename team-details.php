<?php
 include_once("config.php");
 error_reporting(0);
?>

<!DOCTYPE html>
<html class="no-js" lang="zxx">


<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Mediax - Health & Medical HTML Template - Team Details</title>
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

<?php

if(isset($_GET['uid'])) {

    $id=$_GET['uid'];
    $ret=mysqli_query($con,"select * from doctors where id=$id limit 1");
    $row = mysqli_fetch_array($ret);
   
   // $id = $row['id'];
   $name = $row['fname'];
   $image = $row['image'];
   $phone = $row['phone'];
   
   
   $dob = $row['dob'];
   
   $dateOfBirth = new DateTime($dob);
   $currentDate = new DateTime();
   $age = $currentDate->diff($dateOfBirth)->y;
   $Introduction=$row['Introduction'];
   $email = $row['email'];
   $address = $row['address'];
   $facebook = $row['facebook'];
   $linkedin = $row['linkedin'];
   $whatsapp = $row['whatsapp'];
   
   $twitter = $row['twitter'];
   $whatsapp = $row['whatsapp'];


?>





    <div class="breadcumb-wrapper" data-bg-src="assets/img/bg/breadcumb-bg.jpg">
        <div class="container">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">Doctor Details</h1>
                <ul class="breadcumb-menu">
                    <li><a href="index.php">Home</a></li>
                    <li>Doctor Details</li>
                </ul>
            </div>
        </div>
    </div>
    <section class="space">
        <div class="container">
            <div class="row gy-40">
                <div class="col-xl-4 position-relative">
                    <div class="team-sticky">
                        <div class="about-box mb-40">
                            <div class="box-img"><img src="assets/img/team/<?php echo $image ?>" alt="team image"></div>
                            <div class="box-content">
                                <h3 class="box-title"><?php echo $name ?></h3>
                                <p class="box-desig"><?php $department = $row['department'];
                                $sql = "SELECT * FROM `storepick` WHERE STORE_ID='Categories' AND PICK_ID='$department'";
                                $result_new = $con->query($sql);
                                if ($result_new->num_rows > 0) {
                                    
                                    while($row_new = $result_new->fetch_assoc()) {
                                        echo "<span>" . $row_new["PICK_TEXT"] . "</span>";
                                        
                                    }
                                } else {
                                    echo "";
                                }   ?></p>
                                <p class="box-text">Our team of skilled doctors, nurses, and specialists bring years of
                                    experience and expertise to ensure you receive.</p>
                            </div>
                        </div>
                        <div class="about-box">
                            <div class="box-content">
                                <h3 class="box-title">Personal Information</h3>
                                <p class="box-link"><i class="icon-btn fas fa-phone"></i> <a
                                        href="tel:+16365478974"><?php echo $phone ?></a></p>
                                <p class="box-link"><i class="icon-btn fas fa-envelope"></i> <a
                                        href="mailto:<?php echo $email ?>"><?php echo $email ?></a></p>
                                <p class="box-link"><i class="icon-btn fas fa-location-dot"></i> <?php echo $address ?></p>
                                <p class="box-link"><i class="icon-btn fas fa-stethoscope"></i> <?php echo $age ?> Years Old</p>
                                <div class="th-social"><a href="<?php echo $facebook ?>"><i
                                            class="fab fa-facebook-f"></i></a> <a href="<?php echo $twitter ?>"><i
                                            class="fab fa-twitter"></i></a> <a href="<?php echo $linkedin ?>"><i
                                            class="fab fa-linkedin-in"></i></a> <a href="https://api.whatsapp.com/send?phone=<?php echo $whatsapp ?>&text=Send20%a20%quote"><i
                                            class="fab fa-whatsapp"></i></a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-8">
                    <div class="team-details">
                        <h2 class="sec-title mb-4">Introduction</h2>
                        <?php echo $Introduction ?>
                        <div class="row gy-2">
                            <div class="col-md-6">
                                <div class="checklist body-color">
                                    <ul>
                                        <li><i class="fas fa-circle-arrow-right"></i><b>Cardiology </b>D.N.Sc.</li>
                                        <li><i class="fas fa-circle-arrow-right"></i><b>Family Medicine </b>D.N.Sc. -
                                            M.B.B.S,Ph.D</li>
                                        <li><i class="fas fa-circle-arrow-right"></i><b>Oncology </b>M.B.B.S,Ph.D</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="checklist body-color">
                                    <ul>
                                        <li><i class="fas fa-circle-arrow-right"></i><b>Dermatology </b>M.B.B.S,Ph.D
                                        </li>
                                        <li><i class="fas fa-circle-arrow-right"></i><b>Obstetrics & Gynecology </b>Ph.D
                                        </li>
                                        <li><i class="fas fa-circle-arrow-right"></i><b>Orthopedic Surgery
                                            </b>M.B.B.S,Ph.D</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <h4 class="sec-title mb-4 mt-40">Educational Info</h4>
                        <p class="mb-4">We understand that every patient is unique, and their healthcare needs may vary.
                            That's why we create individualized treatment plans tailored to your specific condition,
                            lifestyle, and preferences.</p>
                        <div class="checklist body-color">
                            <ul>
                                <li><i class="text-theme2 far fa-circle-dot"></i><b>Medical College Of California
                                    </b>(Doctor of Medicine 2005)</li>
                                <li><i class="text-theme2 far fa-circle-dot"></i><b>Center Of Medicine Anthology
                                    </b>(Medicine Doctorate Aid 2010)</li>
                                <li><i class="text-theme2 far fa-circle-dot"></i><b>Cambridge School Of Medicine
                                    </b>(MBBS Ph.D. 2014)</li>
                            </ul>
                        </div>
                        <!-- <h4 class="sec-title mb-4 mt-40">Memberships</h4>
                        <p class="mb-4">We understand that every patient is unique, and their healthcare needs may vary.
                            That's why we create individualized treatment plans tailored to your specific condition,
                            lifestyle, and preferences.</p>
                        <div class="checklist body-color">
                            <ul>
                                <li><i class="text-theme2 far fa-circle-dot"></i>European Society Of Cardiology</li>
                                <li><i class="text-theme2 far fa-circle-dot"></i>Fellow Royal Society Of Medicine</li>
                                <li><i class="text-theme2 far fa-circle-dot"></i>British Cardiovascular Society</li>
                            </ul>
                        </div> -->
                        <h4 class="sec-title mb-4 mt-40">Professional Skills</h4>
                        <p class="mb-4">My offer flexible appointment scheduling options to accommodate your busy
                            lifestyle. Whether you prefer to book in advance or need a same-day appointment.</p>
                        <div class="skill-feature">
                            <h5 class="skill-feature_title">Surgery</h5>
                            <div class="progress">
                                <div class="progress-bar bg-theme2" style="width: 70%;">
                                    <div class="progress-value">70%</div>
                                </div>
                            </div>
                        </div>
                        <div class="skill-feature">
                            <h5 class="skill-feature_title">Medical Research</h5>
                            <div class="progress">
                                <div class="progress-bar bg-theme2" style="width: 90%;">
                                    <div class="progress-value">90%</div>
                                </div>
                            </div>
                        </div>
                        <div class="skill-feature">
                            <h5 class="skill-feature_title">Professionalism</h5>
                            <div class="progress">
                                <div class="progress-bar bg-theme2" style="width: 75%;">
                                    <div class="progress-value">75%</div>
                                </div>
                            </div>
                        </div>
                        <form action="https://html.themeholy.com/mediax/demo/mail.php" method="POST"
                            class="team-contact-form mt-5">
                            <h4 class="form-title">Book An Appointment</h4>
                            <div class="row">
                                <div class="form-group col-sm-6"><input type="text" class="form-control" name="name"
                                        id="name" placeholder="Your Name"></div>
                                <div class="form-group col-sm-6"><input type="email" class="form-control" name="email"
                                        id="email" placeholder="Email Address"></div>
                                <div class="form-group col-sm-6"><input type="tel" class="form-control" name="number"
                                        id="number" placeholder="Phone Number"></div>
                                <div class="form-group col-sm-6"><input type="text" class="date-pick form-control"
                                        name="date" id="date-pick" placeholder="Date"></div>
                                <div class="form-btn col-12"><button class="th-btn btn-fw">BOOK AN APPOINTMENT</button>
                                </div>
                            </div>
                            <p class="form-messages mb-0 mt-3"></p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php
}
else {
    header("location:team.php");
}
?>


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