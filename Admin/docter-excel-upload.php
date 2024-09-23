<?php 
session_start();
// include_once('../config.php');

// Check if form is submitted
if(isset($_POST['submit'])){
    getcsv_PHP(); // Call the function to handle CSV file upload
}

// Check if user is logged in
if (strlen($_SESSION['adminid']==0)) {
    header('location:logout.php');
} else{
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


            <div class="form-group">
                <label class="label" style="text-align:center;">File Upload - Product Gallery</label>
                <div class="form-control h-100 text-center position-relative p-4 p-lg-5">
                    <form action="" method="post" enctype="multipart/form-data">
                        Select CSV file to upload:
                        <input type="file" name="csv_file" id="csv_file">
                        <input type="submit" value="Upload CSV" name="submit">
                    </form>
                   
                   
            </div>
<center> <?php

            if(isset($_GET['id']) && $_GET['id'] === 'success') {
                echo "<p style='color:red;'><b>Data imported successfully!</b></p>";
            }
            ?></center>
           
            <div class="flex-grow-1"></div>

            <?php include('includes/footer.php')  ?>

        </div>
    </div>

    <?php include('includes/button.php')  ?>



    <!-- <script data-cfasync="false" src="../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script> -->
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
<?php 
}

// Function to handle CSV file upload
function getcsv_PHP(){
    $final_arr = array();

    // Check if a file is uploaded
    if(isset($_FILES['csv_file'])){
        $file_name = $_FILES['csv_file']['name'];
        $file_tmp = $_FILES['csv_file']['tmp_name'];

        // Move the uploaded file to desired location
        move_uploaded_file($file_tmp,"uploads/".$file_name);

        // Set the input filename to the uploaded file path
        $inputFilename = "uploads/".$file_name;

        // Your database configuration
        include '../config.php';
       
        echo "Data importing started<br/><br/>";
        if (($handle = fopen($inputFilename, "r")) !== FALSE){
            $length = 1000; // Assign value to a variable
            $delimiter = ",";

            $i = 0; 
            while ( ($data = fgetcsv( $handle, $length, $delimiter )) !== FALSE ){ 
                if ($i != 0) {
                    $query = $con->prepare("INSERT INTO doctors (fname, department, gender, dob, fathername, email, phone, address, facebook, twitter, linkedin, whatsapp, Introduction, educational_info, image, status, created_at) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
                    $currentDateTime = date("Y-m-d H:i:s");
                    $query->bind_param('sssssssssssssssss', $data[0], $data[1], $data[2], $data[3], $data[4], $data[5], $data[6], $data[7], $data[8], $data[9], $data[10], $data[11], $data[12], $data[13], $data[14], $data[15], $currentDateTime);
                    $query->execute();
                    echo "Inserted " . $i . " record<br/>";
                }
                
                $i++;
            }
            fclose($handle);

            // Redirect to index.php with success message
            header("Location: docter-excel-upload.php?id=success");
            exit();
        }
        echo "Data imported successfully.";
    } else {
        echo "Please select a file to upload.";
    }
}
?>