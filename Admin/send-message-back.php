<?php session_start();
include_once('../config.php');
if (strlen($_SESSION['adminid']==0)) {
  header('location:logout.php');
  } else{

    $did=$_GET['id'];

?>

<!DOCTYPE html>
<html lang="zxx">

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

    <title>Admin Dashboard</title>
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



    <?php include('includes/sidebar.php')  ?>

    <div class="container-fluid">
        <div class="main-content d-flex flex-column">

            <?php include('includes/header.php')  ?>


            <form id="id-for-send-mail">
                <?php
                    $sql = "select * from contact_customers where id='$did'";
                    $result = $con->query($sql);
                    if ($result->num_rows > 0) {
                        $cnt=1;
                        while ($row = $result->fetch_assoc()) {
                    ?>
                <h1 style="text-align:center;"><?php echo $row['name'];?></h1>
                <div class="form-group md-3" style="text-align:center;">
                    <label class="label">Get Back Message</label>
                    <input type="text" name="message" id="message-id" value="<?php echo $row['id'] ?>"
                        class="form-control text-dark" hidden>
                    <input type="text" name="email" id="email-id_new" value="<?php echo $row['email'] ?>"
                        class="form-control text-dark" hidden>
                    <input type="text" name="name" id="name-paitint" value="<?php echo $row['name'] ?>"
                        class="form-control text-dark" hidden>

                    <div class="form-group mb-4">
                        <label class="label"></label>
                        <div id="standalone-container">
                            <div id="toolbar-container">
                                <span class="ql-formats">
                                    <select class="ql-font"></select>
                                    <select class="ql-size"></select>
                                </span>
                                <span class="ql-formats">
                                    <button class="ql-bold"></button>
                                    <button class="ql-italic"></button>
                                    <button class="ql-underline"></button>
                                    <button class="ql-strike"></button>
                                </span>
                                <span class="ql-formats">
                                    <button class="ql-blockquote"></button>
                                    <button class="ql-code-block"></button>
                                </span>
                                <span class="ql-formats">
                                    <button class="ql-list" value="ordered"></button>
                                    <button class="ql-list" value="bullet"></button>
                                    <button class="ql-indent" value="-1"></button>
                                    <button class="ql-indent" value="+1"></button>
                                </span>
                                <span class="ql-formats">
                                    <button class="ql-link"></button>
                                    <button class="ql-image"></button>
                                    <button class="ql-video"></button>
                                </span>
                            </div>
                            <div id="editor-container" style="height: 250px;"><?php echo $row['message']; ?></div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" id="submit" class="btn btn-primary text-white">Send</button>
                </div>
                <?php
        }
    } else {
        echo "0 results";
    }
    ?>
                <div class="spinner"></div>
            </form>
            <div class="flex-grow-1"></div>

            <?php include('includes/footer.php')  ?>

        </div>
    </div>

    <?php include('includes/button.php')  ?>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script>
    $(document).ready(function() {
        $('#id-for-send-mail').submit(function(e) {
            e.preventDefault();
            var message = $('.ql-editor').html();
            var email = $('#email-id_new').val().trim();
            var name = $('#name-paitint').val().trim();
            var id = $('#message-id').val().trim();
            $('.spinner').show();



            $.ajax({
                url: "send-paisent-mail.php",
                type: "post",
                data: {
                    message: message,
                    id: id,
                    email: email,
                    name,
                    name
                },
                success: function(data) {
                    $('#exampleModal4').modal('hide');
                    alert(data);
                    window.location.href = "contact.php";
                },
                complete: function() {
                    // Hide spinner
                    $('.spinner').hide();
                }
            });
        });
    });
    </script>


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
    <script src="assets/js/apexcharts.min.js"></script>
    <script src="assets/js/amcharts.js"></script>
    <script src="assets/js/custom/ecommerce-chart.js"></script>
    <script src="assets/js/custom/custom.js"></script>
</body>

</html>
<?php } ?>