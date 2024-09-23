<?php session_start();
include_once('../config.php');
if (strlen($_SESSION['adminid']==0)) {
  header('location:logout.php');
  } else{

    $sql = "SELECT * FROM doctors order by created_at desc";
    $result = $con->query($sql);
    
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
    <title>Doctor Registration</title>
    
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



            <div class="d-sm-flex text-center justify-content-between align-items-center mb-4">
                <!-- <h3 class="mb-sm-0 mb-1 fs-18">Doctor Upload</h3> -->
                <ul class="ps-0 mb-0 list-unstyled d-flex justify-content-center">
                    <li>
                        <a href="index.html" class="text-decoration-none">
                            <i class="ri-home-2-line" style="position: relative; top: -1px"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <span class="fw-semibold fs-14 heading-font text-dark dot ms-2">Doctor Registration</span>
                    </li>
                </ul>
            </div>

            <div class="card bg-white border-0 rounded-10 mb-4">
                <div class="card-body p-4">
                    <div
                        class="d-sm-flex justify-content-between align-items-center border-bottom pb-20 mb-20 text-center">
                        <ul class="nav nav-tabs border-0 courses-tab justify-content-center justify-content-sm-start mb-3 mb-sm-0"
                            id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link fs-18 fw-semibold border-0 active" id="enrolled-tab"
                                    data-bs-toggle="tab" data-bs-target="#enrolled-tab-pane" type="button" role="tab"
                                    aria-controls="enrolled-tab-pane" aria-selected="true">Doctor</button>
                            </li>

                        </ul>
                        <button
                            class="border-0 btn btn-primary py-2 px-3 px-sm-4 text-white fs-14 fw-semibold rounded-3"
                            data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
                            <span class="py-sm-1 d-block">
                                <i class="ri-add-line text-white"></i>
                                <span>Add Doctor</span>
                            </span>
                        </button>
                    </div>

                    <style>
                    td.Comment__row {
                        min-width: 325px;
                    }

                    .Name__row {
                        min-width: 200px;
                    }
                    </style>


                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="enrolled-tab-pane" role="tabpanel"
                            aria-labelledby="enrolled-tab" tabindex="0">
                            <div class="default-table-area course-list">
                                <div class="table-responsive">
                                    <table class="table align-middle" id="myTable">
                                        <thead>
                                            <tr>
                                                <th scope="col">Id</th>
                                                <th scope="col">Doctor Name</th>
                                                <th class="text-primary">department</th>
                                                <th scope="col">gender</th>
                                                <th scope="col">dob</th>
                                                <th scope="col">fathername</th>
                                                <th scope="col">Phone</th>
                                                <th scope="col">Email</th>
                                                <th scope="col">Address</th>
                                                <th scope="col">Facebook</th>
                                                <th scope="col">Twitter</th>
                                                <th scope="col">linkedin</th>
                                                <th scope="col">whatsapp</th>
                                                <!-- <th scope="col">Introduction</th> -->
                                                <th scope="col">educational_info</th>
                                                <th scope="col">status</th>
                                                <th scope="col">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            if ($result->num_rows > 0) {
                                                $cnt=1;
                                                while ($row = $result->fetch_assoc()) {
                                            ?>
                                            <tr>
                                                <td><span class="text-gray-light"><?php echo $cnt; ?></span></td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <!-- <div class="form-check pe-2">
                                                            <input class="form-check-input" type="checkbox" value=""
                                                                id="flexCheckDefault2">
                                                        </div> -->
                                                        <div class="d-flex align-items-center">
                                                            <div class="flex-shrink-0 lh-1">
                                                                <?php 
                                                    $logonew=$row['image'];
                                                if (!empty($logonew) && file_exists("../assets/img/team/$logonew")) {

                                                    ?>
                                                                <img class="rounded-circle wh-54"
                                                                    src="../assets/img/team/<?php echo $logonew; ?>"
                                                                    alt="admin">
                                                                <?php
                                                    } else {

                                                    ?>
                                                                <img class="rounded-circle wh-54"
                                                                    src="<?php echo $logonew ?>" alt="admin">
                                                                <?php
                                                    }
                                                    ?>
                                                                <!-- <img src="assets/images/user-1.jpg" class="wh-44 rounded-circle" alt="user"> -->
                                                            </div>
                                                            <div class="flex-grow-1 ms-10">
                                                                <h4 class="fw-semibold fs-16 mb-0">
                                                                    <?php echo $row['fname']; ?></h4>
                                                                <span class="text-gray-light"> </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>

                                                    <?php
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
                                                
                                                    ?>

                                                </td>
                                                <td>
                                                    <?php
                                                $gender = $row['gender'];
                                                $sql = "SELECT * FROM `storepick` WHERE STORE_ID='Gender' AND PICK_ID='$gender'";
                                                $result_new = $con->query($sql);
                                                if ($result_new->num_rows > 0) {
                                                    
                                                    while($row_new = $result_new->fetch_assoc()) {
                                                        echo "<span>" . $row_new["PICK_TEXT"] . "</span>";
                                                       
                                                    }
                                                } else {
                                                    echo "";
                                                }
                                                
                                                    ?>
                                                    <!-- <span><?php echo $row['gender']; ?></span> -->
                                                </td>

                                                <td>
                                                    <span><?php echo $row['dob']; ?></span>
                                                </td>
                                                <td>
                                                    <span><?php echo $row['fathername']; ?></span>
                                                </td>
                                                <td>
                                                    <span><?php echo $row['email']; ?></span>
                                                </td>
                                                <td>
                                                    <span><?php echo $row['phone']; ?></span>
                                                </td>
                                                <td>
                                                    <span><?php echo $row['address']; ?></span>
                                                </td>
                                                <td>
                                                    <span><?php echo $row['facebook']; ?></span>
                                                </td>
                                                <td>
                                                    <span><?php echo $row['twitter']; ?></span>
                                                </td>
                                                <td>
                                                    <span><?php echo $row['linkedin']; ?></span>
                                                </td>
                                                <td>
                                                    <span><?php echo $row['whatsapp']; ?></span>
                                                </td>
                                                <!-- <td>
                                                    <span><?php echo $row['Introduction']; ?></span>
                                                </td> -->
                                                <td>
                                                    <span><?php echo $row['educational_info']; ?></span>
                                                </td>



                                                <td>
                                                    <?php
                                                    $status = $row['status'];
                                                    $sql = "SELECT * FROM `storepick` WHERE STORE_ID='Status' AND PICK_ID='$status'";
                                                    $result_new = $con->query($sql);
                                                    if ($result_new->num_rows > 0) {
                                                        
                                                        while($row_new = $result_new->fetch_assoc()) {
                                                            echo "<span>" . $row_new["PICK_TEXT"] . "</span>";                                                       
                                                        }
                                                    } else {
                                                        echo "";
                                                    }
                                                    ?>


                                                </td>

                                                <td>
                                                    <div class="dropdown action-opt">
                                                        <button class="btn bg p-0" type="button"
                                                            data-bs-toggle="dropdown" aria-expanded="false">
                                                            <i data-feather="more-horizontal"></i>
                                                        </button>
                                                        <ul
                                                            class="dropdown-menu dropdown-menu-end bg-white border box-shadow">
                                                            <!-- <li>
                                                                <a class="dropdown-item" href="javascript:;">
                                                                    <i data-feather="share-2"></i>
                                                                    Share
                                                                </a>
                                                            </li> -->
                                                            <li>
                                                                <a class="dropdown-item"
                                                                    href="newsedit.php?id=<?php echo $row['id']; ?>">
                                                                    <i data-feather="edit-3"></i>
                                                                    Rename
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a class="dropdown-item" href="javascript:;">
                                                                    <i data-feather="download"></i>
                                                                    Download
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a class="dropdown-item" href="javascript:;">
                                                                    <i data-feather="trash-2"></i>
                                                                    Remove
                                                                </a>
                                                            </li>
                                                            <!-- Add more actions here if needed -->
                                                        </ul>
                                                    </div>
                                                </td>



                                            </tr>
                                            <?php $cnt=$cnt+1; ?>
                                            <?php
                            }
                        } else {
                            echo "0 results";
                        }
                        ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                    </div>



                </div>
            </div>


            <div class="flex-grow-1"></div>

            <?php include('includes/footer.php')  ?>

        </div>
    </div>

    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
        <div class="offcanvas-header border-bottom p-4">
            <h5 class="offcanvas-title fs-18 mb-0" id="offcanvasRightLabel">Add Doctor</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body p-4">
            <form action="save-doctor.php" method="post" id="doctor-save" enctype="multipart/form-data">
                <div class="form-group mb-4">
                    <label class="label">Image Logo</label>
                    <input type="file" name="image" id="image_doc" class="form-control text-dark file">
                </div>
                <div class="form-group mb-4">
                    <label class="label">Doctor Name</label>
                    <input type="text" name="fname" id="fname_doc" class="form-control text-dark" placeholder="Doctor Name">
                </div>
                <?php
                    $query = "SELECT PICK_TEXT, PICK_ID FROM storepick WHERE STORE_ID = 'Categories' AND STORE_TYPE = 1 ORDER BY STORE_INDEX_SEQUENCE ASC";
                    $result = mysqli_query($con, $query);
                    if ($result && mysqli_num_rows($result) > 0) {
                        echo '<div class="form-group mb-4">
                        <label class="label">Department</label>
                                <select name="department" id="department_doc" class="form-select form-control text-dark" >
                                    <option value="" disabled selected hidden>Choose Department</option>';
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo '<option value="' . $row['PICK_ID'] . '">' . $row['PICK_TEXT'] . '</option>';
                        }
                        echo '</select></div>';
                    } else {
                        echo '<div class="alert alert-danger">Error: Unable to fetch departments.</div>';
                    }
                    ?>

                <div class="form-group mb-4">
                    <label class="label">Gender</label>
                    <select class="form-select form-control text-dark" name="gender" id="gender_doc" name="status"
                        aria-label="Default select example">
                        <option value="101" selected>Male</option>
                        <option value="102">Female</option>
                        <option value="103">Other</option>
                    </select>
                </div>
                <div class="form-group mb-4">
                    <label class="label">Date Of Birth</label>
                    <input type="date" name="dob" id="dob_doc" class="form-control text-dark">
                </div>
                <div class="form-group mb-4">
                    <label class="label">Father Name</label>
                    <input type="text" name="fathername" id="fathername_doc" class="form-control text-dark" placeholder="Father Name">
                </div>
                <div class="form-group mb-4">
                    <label class="label">Email</label>
                    <input type="text" name="email" id="email_doc" class="form-control text-dark" placeholder="Email Name">
                </div>
                <div class="form-group mb-4">
                    <label class="label">Phone</label>
                    <input type="text" name="phone" id="phone_doc" class="form-control text-dark" placeholder="Phone Name">
                </div>
                <div class="form-group mb-4">
                    <label class="label">Address</label>
                    <input type="text" name="address" id="address_doc"  class="form-control text-dark" placeholder="Address">
                </div>
                <div class="form-group mb-4">
                    <label class="label">Facebook Link</label>
                    <input type="text" name="facebook" id="facebook_doc" class="form-control text-dark" placeholder="Facebook Link">
                </div>
                <div class="form-group mb-4">
                    <label class="label">Twitter Link</label>
                    <input type="text" name="twitter" id="twitter_doc" class="form-control text-dark" placeholder="Twitter Link">
                </div>
                <div class="form-group mb-4">
                    <label class="label">Linkedin</label>
                    <input type="text" name="linkedin" id="linkedin_doc" class="form-control text-dark" placeholder="Linkedin lINK">
                </div>
                <div class="form-group mb-4">
                    <label class="label">Whatsapp</label>
                    <input type="text" name="whatsapp" id="whatsapp_doc" class="form-control text-dark" placeholder="Whatsapp Link">
                </div>
                <div class="form-group mb-4" >
                    <label class="label">Introduction</label>
                    <div id="standalone-container" name="Introduction">
                        <div id="toolbar-container" name="Introduction">
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
                        <div id="editor-container" name="Introduction" style="height: 250px;"></div>
                    </div>
                </div>
                <div class="form-group mb-4">
                    <label class="label">Educational Info</label>
                    <textarea type="text" name="educational_info" id="educational_info_doc" class="form-control text-dark"
                        placeholder="Educational Info"></textarea>
                </div>
                <div class="form-group mb-4">
                    <label class="label">Status</label>
                    <select class="form-select form-control text-dark" id="status_doc" name="status"
                        aria-label="Default select example">
                        <option value="101" selected>Active</option>
                        <option value="102">Inactive</option>
                    </select>
                </div>

                <div class="form-group d-flex gap-3">
                    <button class="btn btn-primary text-white fw-semibold py-2 px-2 px-sm-3" id="submit" type="submit"
                        name="addnews">
                        <span class="py-sm-1 d-block">
                            <i class="ri-add-line text-white"></i>
                            <span>Create Doctor</span>
                        </span>
                    </button>
                </div>
                <div class="spinner"></div>

            </form>
        </div>
    </div>

    <?php include('includes/button.php')  ?>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script>
//    $(document).ready(function() {   
//     $('#doctor-save').submit(function(e) {
//         e.preventDefault();
//         var Introduction = $('.ql-editor').html(); 
//         var image_new = $('#image_doc').val(); 
//         var image = $('#image_doc').val();  
//         var email = $('#email_doc').val();
//         var name = $('#fname_doc').val();
//         var department = $('#department_doc').val();
//         var gender = $('#gender_doc').val();
//         var dob = $('#dob_doc').val();
//         var fathername = $('#fathername_doc').val();
//         var phone = $('#phone_doc').val();
//         var address = $('#address_doc').val();
//         var facebook = $('#facebook_doc').val();
//         var twitter = $('#twitter_doc').val();
//         var linkedin = $('#linkedin_doc').val();
//         var whatsapp = $('#whatsapp_doc').val();
//         var educational_info = $('#educational_info_doc').val();
//         var status = $('#status_doc').val();
//         $('.spinner').show();    
//         $.ajax({
//             url: "save-doctor.php",
//             type: "post",
//             data: {
//                 Introduction: Introduction,
//                 email: email,
//                 name: name,
//                 image: image,
//                 department: department,
//                 gender: gender,
//                 dob: dob,
//                 fathername: fathername,
//                 phone: phone,
//                 address: address,
//                 facebook: facebook,
//                 twitter: twitter,
//                 linkedin: linkedin,
//                 whatsapp: whatsapp,
//                 educational_info: educational_info,
//                 status: status
//             },
//             success: function(data) {
//                 alert(data);
//             },
//             error: function(xhr, status, error) {
                
//                 console.error(xhr.responseText);
//             },
//             complete: function() {
               
//                 $('.spinner').hide();
//             }
//         });
//     });
// });

    </script>

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
<?php } ?>