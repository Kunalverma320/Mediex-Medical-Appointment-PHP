<?php

include("config.php");

?>



<!DOCTYPE html>
<html class="no-js" lang="zxx">


<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Mediax - Health & Medical HTML Template - Our Doctors</title>
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
                <h1 class="breadcumb-title">Our Doctors</h1>
                <ul class="breadcumb-menu">
                    <li><a href="index.php">Home</a></li>
                    <li>Our Doctors</li>
                </ul>
            </div>
        </div>
    </div>
    <section class="space">
        <div class="container">
            <div class="title-area text-center"><span class="sub-title"><img src="assets/img/theme-img/title_icon.svg"
                        alt="Icon">Expert doctors</span>
                <h2 class="sec-title">Meet our professional Doctors</h2>
            </div>

            <div class="row gy-40 justify-content-center">
                <?php
                              $ret=mysqli_query($con,"select * from doctors where status=1 ");
                              while($row=mysqli_fetch_array($ret))
                            //   $entry_date=$row['entry_date'];
                            //   $formatted_date = date("F j, Y", strtotime($entry_date));
                              {
                              ?>
                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="th-team team-card">
                        <div class="box-img"><img src="assets/img/team/<?php echo $row['image']; ?>" alt="Team">
                            <div class="th-social"><a target="_blank" href="<?php echo $row['facebook']; ?>"><i
                                        class="fab fa-facebook-f"></i></a> <a target="_blank"
                                    href="<?php echo $row['linkedin']; ?>"><i class="fab fa-linkedin-in"></i></a> <a
                                    target="_blank" href="<?php echo $row['twitter']; ?>"><i
                                        class="fab fa-twitter"></i></a></div>
                        </div>
                        <h3 class="box-title"><a href="team-details.php?uid=<?php echo $row['id']; ?>"><?php echo $row['fname']; ?></a></h3><span
                            class="team-desig"><?php
                                                $department = $row['department'];
                                                $sql = "SELECT * FROM `storepick` WHERE STORE_ID='Categories' AND PICK_ID='$department'";
                                                $result_new = $con->query($sql);
                                                if ($result_new->num_rows > 0) {
                                                    
                                                    while($row_new = $result_new->fetch_assoc()) {
                                                        echo "<span>" . $row_new["PICK_TEXT"] . "</span>";
                                                       
                                                    }
                                                } else {
                                                    echo "";
                                                }
                                                
                                                    ?></span>
                    </div>
                </div>
                <?php

                    }
                    ?>
            </div>

        </div>
    </section>





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