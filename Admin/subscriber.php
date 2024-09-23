<?php session_start();
include_once('../config.php');
if (strlen($_SESSION['adminid']==0)) {
  header('location:logout.php');
  } else{
    $sql = "SELECT * FROM subscribe order by created_at desc";
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
    <title>Subscriber Dashboard</title>
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
                <!-- <h3 class="mb-sm-0 mb-1 fs-18">Subscriber Upload</h3> -->
                <ul class="ps-0 mb-0 list-unstyled d-flex justify-content-center">
                    <li>
                        <a href="index.html" class="text-decoration-none">
                            <i class="ri-home-2-line" style="position: relative; top: -1px"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <span class="fw-semibold fs-14 heading-font text-dark dot ms-2">Subscriber Registration</span>
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
                                    aria-controls="enrolled-tab-pane" aria-selected="true">Subscriber</button>
                            </li>

                        </ul>
                        <button
                            class="border-0 btn btn-primary py-2 px-3 px-sm-4 text-white fs-14 fw-semibold rounded-3"
                            data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
                            <span class="py-sm-1 d-block">
                                <i class="ri-add-line text-white"></i>
                                <span>Add Subscriber</span>
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
                                                <th scope="col">Email</th>
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
                                                    <span><?php echo $row['email']; ?></span>
                                                </td>

                                                <td>
                                                    <?php
                                                $status = $row['status'];
                                                $sql = "SELECT * FROM `storepick` WHERE STORE_ID='Status' AND PICK_ID='$status'";
                                                $result_new = $con->query($sql);
                                                if ($result_new->num_rows > 0) {
                                                    while($row_new = $result_new->fetch_assoc()) {
                                                        $pick_text = $row_new["PICK_TEXT"];                                             
                                                        $color = '';                                                       
                                                        if ($status == 101) {
                                                            $color = 'green';
                                                        } elseif ($status == 102) {
                                                            $color = 'blue'; 
                                                        }             
                                                        echo "<span style='color: #fbfbfb;background-color: $color;font-weight: bold;padding: 6px 10px;border-radius: 5px;'>$pick_text</span>";                                                       
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

                                                                <a class="dropdown-item"
                                                                    href="send-app-message-back.php?id=<?php echo $row['id']; ?>">
                                                                    <i data-feather="download"></i>
                                                                    Send Mail
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
<?php } ?>