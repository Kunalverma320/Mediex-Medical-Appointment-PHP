<?php session_start(); 
include_once('../config.php');
// Code for login 
if(isset($_POST['login']))
{
$adminusername=$_POST['username'];
$pass=md5($_POST['password']);
$ret=mysqli_query($con,"SELECT * FROM admin WHERE username='$adminusername' and password='$pass'");
$num=mysqli_fetch_array($ret);

if($_POST['captcha_code']==$_SESSION['captcha_code']){
if($num>0)
{
$extra="dashboard.php";
$_SESSION['login']=$_POST['username'];
$_SESSION['adminid']=$num['id'];
$_SESSION['firstname']=$num['firstname'];
$_SESSION['logo']=$num['logo'];
echo "<script>window.location.href='".$extra."'</script>";
exit();
}
else
{
echo "<script>alert('Invalid username or password');</script>";
$extra="index.php";
echo "<script>window.location.href='".$extra."'</script>";
exit();
}
}
else{
    echo "<script>alert('Incorrect Captcha Code');</script>"; 
}
}
?>

<!DOCTYPE html>
<html lang="zxx">

<!-- Mirrored from templates.hibootstrap.com/farol/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 08 Feb 2024 12:27:56 GMT -->

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="assets/css/remixicon.css">
    <link rel="stylesheet" href="assets/css/flaticon.css">
    <link rel="stylesheet" href="assets/css/sidebar-menu.css">
    <link rel="stylesheet" href="assets/css/simplebar.css">
    <link rel="stylesheet" href="assets/css/apexcharts.css">
    <link rel="stylesheet" href="assets/css/prism.css">
    <link rel="stylesheet" href="assets/css/rangeslider.css">
    <link rel="stylesheet" href="assets/css/sweetalert.min.css">
    <link rel="stylesheet" href="assets/css/quill.snow.css">
    <link rel="stylesheet" href="assets/css/style.css">

    <link rel="icon" type="image/png" href="assets/images/favicon.png">

    <title>Farol - Bootstrap 5 Admin Dashboard Template</title>
</head>

<body>

    <div class="preloader" id="preloader">
        <div class="preloader">
            <div class="waviy position-relative">
                <span class="d-inline-block">F</span>
                <span class="d-inline-block">A</span>
                <span class="d-inline-block">R</span>
                <span class="d-inline-block">O</span>
                <span class="d-inline-block">L</span>
            </div>
        </div>
    </div>


    <div class="container-fluid">
        <div class="main-content d-flex flex-column px-0">

            <div class="m-auto mw-510 py-5">
                <form method="post">
                    <div class="d-flex align-items-center gap-4 mb-3">
                        <h4 class="fs-3 mb-0">Get’s started.</h4>
                        <a href="index.html">
                            <img src="assets/images/logo.svg" alt="logo">
                        </a>
                    </div>
                    <!-- <p class="fs-18 mb-5">Don’t have an account? <a href="register.html"
                            class="text-decoration-none text-primary">Register</a></p> -->
                    <div class="d-sm-flex gap-3 mb-4">
                        <a href="https://www.google.com/" target="_blank"
                            class="btn btn-outline-primary fs-16 fw-semibold text-dark heading-fornt py-2 py-md-3 px-4 hover-white w-sm-100">
                            <img src="assets/images/google.svg" alt="google">
                            <span class="ms-2">Sign In With Google</span>
                        </a>
                        <a href="https://www.facebook.com/" target="_blank"
                            class="btn btn-primary fs-16 fw-semibold text-dark heading-fornt py-2 py-md-3 px-4 text-white w-sm-100 mt-3 mt-sm-0">
                            <img src="assets/images/facebook.svg" alt="google">
                            <span class="ms-2">Sign In With Facebook</span>
                        </a>
                    </div>
                    <span class="d-block fs-18 fw-semibold text-center or mb-4">
                        <span class="bg-body-bg d-inline-block py-1 px-3">or</span>
                    </span>
                    <div class="card bg-white border-0 rounded-10 mb-4">
                        <div class="card-body p-4">
                            <div class="form-group mb-4">
                                <label class="label">Username</label>
                                <input type="test" name="username" class="form-control h-58"
                                    placeholder="envytheme@info.com">
                            </div>
                            <div class="form-group mb-0">
                                <label class="label">Password</label>
                                <div class="form-group">
                                    <div class="password-wrapper position-relative">
                                        <input type="password" name="password" id="password"
                                            class="form-control h-58 text-dark" value="@password#">
                                        <i style="color: #A9A9C8; font-size: 16px; right: 15px !important;"
                                            class="ri-eye-off-line password-toggle-icon translate-middle-y top-50 end-0 position-absolute"
                                            aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group mt-4">
                                <input type="text" name="captcha_code" class="form-control h-58 text-dark"
                                    placeholder="Enter Captcha" required>
                                <br>
                                <i class="input-icon bi bi-camera"></i>
                                <img src="captcha.php" style="height:50px;" class="input-icon-2 custom-icon-size" />
                            </div>
                        </div>
                    </div>
                    <div class="d-sm-flex justify-content-between mb-4">
                        <div class="form-check">
                            <input class="form-check-input position-relative" style="top: 1.1px;" type="checkbox" value
                                id="flexCheckDefault">
                            <label class="form-check-label fs-16 text-gray-light" for="flexCheckDefault">
                                Remember me
                            </label>
                        </div>
                        <a href="#" class="fs-16 text-primary text-decoration-none mt-2 mt-sm-0 d-block">
                            Forgot your password?
                        </a>
                    </div>
                    <button name="login"
                        class="btn btn-primary fs-16 fw-semibold text-dark heading-fornt py-2 py-md-3 px-4 text-white w-100"
                        type="submit">Login</button>
                </form>
            </div>

        </div>
    </div>

    <button class="btn btn-danger theme-settings-btn p-0 position-fixed z-2 text-center"
        style="bottom: 30px; right: 30px; width: 40px; height: 40px;" type="button" data-bs-toggle="offcanvas"
        data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling">
        <i data-feather="settings" class="wh-20 text-white position-relative" style="top: -1px; outline: none;"
            data-bs-toggle="tooltip" data-bs-placement="left" data-bs-title="Click On Theme Settings"></i>
    </button>
    <div class="offcanvas offcanvas-end bg-white" data-bs-scroll="true" data-bs-backdrop="true" tabindex="-1"
        id="offcanvasScrolling" aria-labelledby="offcanvasScrollingLabel"
        style="box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;">
        <div class="offcanvas-header bg-body-bg py-3 px-4 mb-4">
            <h5 class="offcanvas-title fs-18" id="offcanvasScrollingLabel">Theme Settings</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body px-4">
            <h4 class="fs-15 fw-semibold border-bottom pb-2 mb-3">RTL / LTR</h4>
            <div class="settings-btn rtl-btn">
                <label id="switch" class="switch">
                    <input type="checkbox" onchange="toggleTheme()" id="slider">
                    <span class="slider round"></span>
                </label>
            </div>
            <div class="mb-4 pb-2"></div>
            <h4 class="fs-15 fw-semibold border-bottom pb-2 mb-3">Light / Dark</h4>
            <button class="switch-toggle settings-btn dark-btn" id="switch-toggle">
                Click To <span class="dark">Dark</span> <span class="light">Light</span>
            </button>
            <div class="mb-4 pb-2"></div>
            <h4 class="fs-15 fw-semibold border-bottom pb-2 mb-3">Only Sidebar Light / Dark</h4>
            <button class="sidebar-light-dark settings-btn sidebar-dark-btn" id="sidebar-light-dark">
                Click To <span class="dark1">Dark</span> <span class="light1">Light</span>
            </button>
            <div class="mb-4 pb-2"></div>
            <h4 class="fs-15 fw-semibold border-bottom pb-2 mb-3">Only Header Light / Dark</h4>
            <button class="header-light-dark settings-btn header-dark-btn" id="header-light-dark">
                Click To <span class="dark2">Dark</span> <span class="light2">Light</span>
            </button>
            <div class="mb-4 pb-2"></div>
            <h4 class="fs-15 fw-semibold border-bottom pb-2 mb-3">Only Footer Light / Dark</h4>
            <button class="footer-light-dark settings-btn footer-dark-btn" id="footer-light-dark">
                Click To <span class="dark3">Dark</span> <span class="light3">Light</span>
            </button>
            <div class="mb-4 pb-2"></div>
            <h4 class="fs-15 fw-semibold border-bottom pb-2 mb-3">Card Style Radius / Square</h4>
            <button class="card-radius-square settings-btn card-style-btn" id="card-radius-square">
                Click To <span class="square">Square</span> <span class="radius">Radius</span>
            </button>
            <div class="mb-4 pb-2"></div>
            <h4 class="fs-15 fw-semibold border-bottom pb-2 mb-3">Card Style BG White / Gray</h4>
            <button class="card-bg settings-btn card-bg-style-btn" id="card-bg">
                Click To <span class="white">White</span> <span class="gray">Gray</span>
            </button>
            <div class="mb-4 pb-2"></div>
            <h4 class="fs-15 fw-semibold border-bottom pb-2 mb-3">Container Style Fluid / Boxed</h4>
            <button class="boxed-style settings-btn fluid-boxed-btn" id="boxed-style">
                Click To <span class="fluid">Fluid</span> <span class="boxed">Boxed</span>
            </button>
        </div>
    </div>


    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/sidebar-menu.js"></script>
    <script src="assets/js/dragdrop.js"></script>
    <script src="assets/js/rangeslider.min.js"></script>
    <script src="assets/js/sweetalert.js"></script>
    <script src="assets/js/quill.min.js"></script>
    <script src="assets/js/data-table.js"></script>
    <script src="assets/js/prism.js"></script>
    <script src="assets/js/clipboard.min.js"></script>
    <script src="assets/js/feather.min.js"></script>
    <script src="assets/js/simplebar.min.js"></script>
    <script src="assets/js/fslightbox.js"></script>
    <script src="assets/js/custom/custom.js"></script>
</body>

<!-- Mirrored from templates.hibootstrap.com/farol/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 08 Feb 2024 12:27:57 GMT -->

</html>