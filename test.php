<?php include 'includes/session.php';
$connForErpsDb = $pdoForErps->open();
// echo phpinfo();
if(isset($_SESSION['user'])){
    header('Location: index.php');
    // exit;
}
 ?>


<?php //endif; ?>
<?php $title = "Login"; ?>
<?php $description = "If you already have account on our website, then login with your credentials or via gmail."; ?>
<?php $keywords = "login page"; ?>
<?php
$canonical= 'https://www.' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
if($canonical == "") {
	$canonical="";
}
//include 'includes/header.php'; ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>Login</title>
    <script>
    (function(w, d, s, l, i) {
        w[l] = w[l] || [];
        w[l].push({
            'gtm.start': new Date().getTime(),
            event: 'gtm.js'
        });
        var f = d.getElementsByTagName(s)[0],
            j = d.createElement(s),
            dl = l != 'dataLayer' ? '&l=' + l : '';
        j.async = true;
        j.src =
            'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
        f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-PRBKM4B');
    </script>
    <!-- End Google Tag Manager -->
</head>
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="canonical" href="<?php echo $canonical; ?>" />
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
    integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
<link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
<body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PRBKM4B" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <div class="hero">
        <a href="https://www.ttbinternetsecurity.com" class="logo" target="_blank">
            <img src="assets/img/logo.png" alt="" class="img-fluid">
        </a>
        <div class="section">
            <div class="container">
                <div class="row full-height justify-content-center">
                    <div class="col-12 text-center align-self-center py-5">
                        <div class="section pb-5 pt-5 pt-sm-2 text-center">
                            <h6 class="mb-0 pb-3"><span>Log In </span><span>Sign Up</span></h6>
                            <input class="checkbox" type="checkbox" id="reg-log" name="reg-log" />
                            <label for="reg-log"></label>
                            <div class="card-3d-wrap mx-auto">
                                <div class="card-3d-wrapper">
                                    <div class="card-front">
                                        <div class="center-wrap">
                                            <div class="section text-center">
                                                <h5 class="mb-4 pb-3">Log In</h5>
                                                <form class="sign_in cm_form checkout_form" method="POST"
                                                    action="verify">
                                                    <div class="form-group">
                                                        <input type="email" name="email" class="form-style"
                                                            placeholder="Your Email" id="logemail" autocomplete="off">
                                                        <i class="input-icon bi bi-at"></i>
                                                    </div>
                                                    <div class="form-group mt-4">
                                                        <input type="password" name="password" class="form-style"
                                                            placeholder="Your Password" id="logpass" autocomplete="off">
                                                        <i class="input-icon bi bi-lock"></i>
                                                        <i class="input-icon-2 bi bi-eye-slash" id="togglePassword"></i>
                                                    </div>
                                                    <div class="form-group mt-4">
                                                        <input type="text" name="captcha_code" class="form-style"
                                                            placeholder="Enter Captcha" required>
                                                        <i class="input-icon bi bi-camera"></i>
                                                        <img src="captcha_code.php"
                                                            class="input-icon-2 custom-icon-size" />
                                                    </div>

                                                    <!-- <a href="#" class="btn mt-4">submit</a> -->
                                                    <button
                                                        class="button contact_button full_btn round_btn theme_btn btn mt-4"
                                                        type="submit" name="login"><span>Log in</span></button>
                                                </form>
                                                <?php
                                                    if(isset($_SESSION['error'])){
                                                    echo "
                                                        <div class='callout callout-danger text-center'>
                                                        <p>".$_SESSION['error']."</p>
                                                        </div>
                                                    ";
                                                    unset($_SESSION['error']);
                                                    }

                                                    if(isset($_SESSION['success'])){
                                                    echo "
                                                        <div class='callout callout-success text-center'>
                                                        <p>".$_SESSION['success']."</p>
                                                        </div>
                                                    ";
                                                    unset($_SESSION['success']);
                                                    }
                                                ?>
                                                <?php //echo $socialLoginUrl; ?>
                                                <p class="mb-0 mt-4 text-center"><a href="/password_forgot.php"
                                                        class="link">Forgot your password?</a></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-back">
                                        <div class="center-wrap">
                                            <div class="section text-center">
                                                <h5 class="mb-4 pb-3">Sign Up</h5>
                                                <form class="sign_up cm_form checkout_form" action="register-2"
                                                    method="POST">
                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <input type="text" name="firstname" class="form-style"
                                                                    placeholder="First Name" id="logname"
                                                                    value="<?php echo (isset($_SESSION['name'])) ? $_SESSION['name'] : '' ?>"
                                                                    autocomplete="off" required>
                                                                <i class="input-icon bi bi-person"></i>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <input type="text" name="last_name" class="form-style"
                                                                    placeholder="Last Name" id="logname"
                                                                    value="<?php echo (isset($_SESSION['last_name'])) ? $_SESSION['last_name'] : '' ?>"
                                                                    autocomplete="off" required>
                                                                <i class="input-icon bi bi-person"></i>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="form-group mt-4">
                                                        <input type="email" name="email" class="form-style"
                                                            value="<?php echo (isset($_SESSION['email'])) ? $_SESSION['email'] : '' ?>"
                                                            placeholder="Your Email" id="logemail" autocomplete="off"
                                                            required>
                                                        <i class="input-icon bi bi-at"></i>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <div class="form-group mt-4">
                                                                <input type="password" name="password"
                                                                    class="form-style" placeholder="Password"
                                                                    id="logpass-2" autocomplete="off" required
                                                                    pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
                                                                    title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters">
                                                                <i class="input-icon bi bi-lock"></i>
                                                                <i class="input-icon-2 bi bi-eye-slash"
                                                                    id="togglePassword-2"></i>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="form-group mt-4">
                                                                <input type="password" name="repassword"
                                                                    class="form-style" placeholder="Confirm Password"
                                                                    id="logpass-3" autocomplete="off" required>
                                                                <i class="input-icon bi bi-lock"></i>
                                                                <i class="input-icon-2 bi bi-eye-slash"
                                                                    id="togglePassword-3"></i>
                                                            </div>
                                                        </div>
                                                        <p id="strengthMessage"></p>
                                                    </div>
                                                    <div class="row" id="message">
                                                        <h5>Password must contain the following:</h5>
                                                        <p id="letter" class="invalid">A <b>lowercase</b> letter</p>
                                                        <p id="capital" class="invalid">A <b>capital (uppercase)</b>
                                                            letter</p>
                                                        <p id="number" class="invalid">A <b>number</b></p>
                                                        <p id="special_char" class="invalid">A <b>Special character</b>
                                                        </p>
                                                        <p id="length" class="invalid">Minimum <b>8 characters</b></p>
                                                    </div>

                                                    <div class="form-group mt-4">
                                                        <input type="text" name="captcha_code" class="form-style"
                                                            placeholder="Enter Captcha" required>
                                                        <i class="input-icon bi bi-camera"></i>
                                                        <img src="captcha_code.php"
                                                            class="input-icon-2 custom-icon-size" />
                                                    </div>
                                                    <button
                                                        class="button contact_button full_btn round_btn theme_btn btn mt-4"
                                                        id="SignUp" type="submit" name="signup" disabled="disabled"
                                                        autocomplete="off"><span>Sign Up</span></button>
                                                    <!-- <a href="#" class="btn mt-4">submit</a> -->
                                                </form>

                                                <?php
                                                if(isset($_SESSION['error'])){
                                                    echo "
                                                    <div class='callout callout-danger text-center'>
                                                        <p>".$_SESSION['error']."</p>
                                                    </div>
                                                    ";
                                                    unset($_SESSION['error']);
                                                }

                                                if(isset($_SESSION['success'])){
                                                    echo "
                                                    <div class='callout callout-success text-center'>
                                                        <p>".$_SESSION['success']."</p>
                                                    </div>
                                                    ";
                                                    unset($_SESSION['success']);
                                                }
                                                ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="bubbles">
                                <img src="assets/img/bubble.png" alt="">
                                <img src="assets/img/bubble.png" alt="">
                                <img src="assets/img/bubble.png" alt="">
                                <img src="assets/img/bubble.png" alt="">
                                <img src="assets/img/bubble.png" alt="">
                                <img src="assets/img/bubble.png" alt="">
                                <img src="assets/img/bubble.png" alt="">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous">
    </script>
    <script type="text/javascript">
    const togglePassword = document.querySelector("#togglePassword");
    const password = document.querySelector("#logpass");

    togglePassword.addEventListener("click", function() {
        // toggle the type attribute
        const type = password.getAttribute("type") === "password" ? "text" : "password";
        password.setAttribute("type", type);

        // toggle the icon
        this.classList.toggle("bi-eye");
    });

    const togglePassword2 = document.querySelector("#togglePassword-2");
    const password2 = document.querySelector("#logpass-2");

    togglePassword2.addEventListener("click", function() {
        // toggle the type attribute
        const type = password2.getAttribute("type") === "password" ? "text" : "password";
        password2.setAttribute("type", type);

        // toggle the icon
        this.classList.toggle("bi-eye");
    });

    const togglePassword3 = document.querySelector("#togglePassword-3");
    const password3 = document.querySelector("#logpass-3");

    togglePassword3.addEventListener("click", function() {
        // toggle the type attribute
        const type = password3.getAttribute("type") === "password" ? "text" : "password";
        password3.setAttribute("type", type);

        // toggle the icon
        this.classList.toggle("bi-eye");
    });
    
    </script>


    <!--script for password authenticatoin-->
    <script>
    var myInput = document.getElementById("logpass-2");
    var letter = document.getElementById("letter");
    var capital = document.getElementById("capital");
    var number = document.getElementById("number");
    var length = document.getElementById("length");
    var special_char = document.getElementById("special_char");

    // When the user clicks on the password field, show the message box
    myInput.onfocus = function() {
        document.getElementById("message").style.display = "block";
    }

    // When the user clicks outside of the password field, hide the message box
    myInput.onblur = function() {
        document.getElementById("message").style.display = "none";
        //   none
    }

    // When the user starts to type something inside the password field
    myInput.onkeyup = function() {

        // Validate lowercase letters
        var lowerCaseLetters = /[a-z]/g;
        if (myInput.value.match(lowerCaseLetters)) {
            letter.classList.remove("invalid");
            letter.classList.add("valid");
        } else {
            letter.classList.remove("valid");
            letter.classList.add("invalid");
        }

        // Validate capital letters
        var upperCaseLetters = /[A-Z]/g;
        if (myInput.value.match(upperCaseLetters)) {
            capital.classList.remove("invalid");
            capital.classList.add("valid");
        } else {
            capital.classList.remove("valid");
            capital.classList.add("invalid");
        }

        // Validate numbers
        var numbers = /[0-9]/g;
        if (myInput.value.match(numbers)) {
            number.classList.remove("invalid");
            number.classList.add("valid");
        } else {
            number.classList.remove("valid");
            number.classList.add("invalid");
        }

        // Validate length
        if (myInput.value.length >= 8) {
            length.classList.remove("invalid");
            length.classList.add("valid");
        } else {
            length.classList.remove("valid");
            length.classList.add("invalid");
        }

        //   Special Character
        var special_char_regex = /\W|_/g;
        if (myInput.value.match(special_char_regex)) {
            special_char.classList.remove("invalid");
            special_char.classList.add("valid");
        } else {
            special_char.classList.remove("valid");
            special_char.classList.add("invalid");
        }

        if (myInput.value.match(lowerCaseLetters) && myInput.value.match(upperCaseLetters) && myInput.value.match(
                numbers) && myInput.value.length >= 8 && myInput.value.match(special_char_regex)) {
            document.getElementById("message").style.display = "none";
            $('#SignUp').removeAttr('disabled');
        } else {
            $('#SignUp').attr('disabled', 'disabled');
        }

    }
    </script>

</body>
<?php //include 'includes/scripts.php'; ?>

</html>