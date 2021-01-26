<?php

include_once('db/db_connection.php');
$query = "SELECT * FROM registration WHERE id = " . $_GET['id'];
$data = $db->query($query);

$viewAll = $data->fetch();


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Bank Details</title>
    <link href="css/styles.css" rel="stylesheet" />
    <link href="css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
    <script defer src="fontawesome-free-5.15.1-web/js/all.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.5.0/css/flag-icon.min.css" integrity="sha512-Cv93isQdFwaKBV+Z4X8kaVBYWHST58Xb/jVOcV9aRsGSArZsgAnFIhMpDoMDcFNoUtday1hdjn0nGp3+KZyyFw==" crossorigin="anonymous" />
</head>

<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-light bg-light">
        <a class="navbar-brand" href="index.html"> <img src="./images/logo.png" alt="" srcset="" height="50" width="200"> </a>
        <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button>
        <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
        </form>
    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-secondary bg-secondary" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <a class="nav-link" href="dashboard.html">
                            <div class="sb-nav-link-icon"><i class="fas fa-project-diagram"></i></div>
                            Dashboard
                        </a>
                        <a class="nav-link" href="personalDetails.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-project-diagram"></i></div>
                            Personal Details
                        </a>

                    </div>
                </div>

            </nav>
        </div>
        <div id="layoutSidenav_content">

        <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card">

                    <div class="card-body">
                        <div class="card-title mb-4">
                            <div class="d-flex justify-content-start">
                                <div class="image-container">
                                    <img src="http://placehold.it/150x150" id="imgProfile" style="width: 150px; height: 150px" class="img-thumbnail" />
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <ul class="nav nav-tabs mb-4" id="myTab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="basicInfo-tab" data-toggle="tab" href="#basicInfo" role="tab" aria-controls="basicInfo" aria-selected="true">Basic Info</a>
                                    </li>
                                </ul>
                                <div class="tab-content ml-1" id="myTabContent">
                                    <div class="tab-pane fade show active" id="basicInfo" role="tabpanel" aria-labelledby="basicInfo-tab">
                                        

                                        <div class="row">
                                            <div class="col-5">
                                                <label style="font-weight:bold;">Full Name</label>
                                            </div>
                                            <div class="col-7">
                                            <?php echo $viewAll["userName"] ?>
                                            </div>
                                        </div>
                                        <hr />

                                        <div class="row">
                                            <div class="col-5">
                                                <label style="font-weight:bold;">Phone Number</label>
                                            </div>
                                            <div class="col-7">
                                            <?php echo $viewAll["phoneNumber"] ?>
                                            </div>
                                        </div>
                                        <hr />
                                        
                                        
                                        <div class="row">
                                            <div class="col-5">
                                                <label style="font-weight:bold;">Email</label>
                                            </div>
                                            <div class="col-7">
                                            <?php echo $viewAll["email"] ?>
                                            </div>
                                        </div>
                                        <hr />
                                        <div class="row">
                                            <div class="col-5">
                                                <label style="font-weight:bold;">Residential Address</label>
                                            </div>
                                            <div class="col-7">
                                            <?php echo $viewAll["locationAddress"] ?>
                                            </div>
                                        </div>
                                        <hr />
                                        <div class="row">
                                            <div class="col-5">
                                                <label style="font-weight:bold;">Region</label>
                                            </div>
                                            <div class="col-7">
                                            <?php echo $viewAll["region"] ?>
                                            </div>
                                        </div>
                                        <hr />
                                        <div class="row">
                                            <div class="col-5">
                                                <label style="font-weight:bold;">Date of Birth</label>
                                            </div>
                                            <div class="col-7">
                                            <?php echo $viewAll["dateOfBirth"] ?>
                                            </div>
                                        </div>
                                        <hr />
                                        <div class="row">
                                            <div class="col-5">
                                                <label style="font-weight:bold;">Business Name</label>
                                            </div>
                                            <div class="col-7">
                                            <?php echo $viewAll["businessName"] ?>
                                            </div>
                                        </div>
                                        <hr />
                                        <div class="row">
                                            <div class="col-5">
                                                <label style="font-weight:bold;">Business Phone Number</label>
                                            </div>
                                            <div class="col-7">
                                            <?php echo $viewAll["businessNumber"] ?>
                                            </div>
                                        </div>
                                        <hr />
                                        <div class="row">
                                            <div class="col-5">
                                                <label style="font-weight:bold;">Business Email</label>
                                            </div>
                                            <div class="col-7">
                                            <?php echo $viewAll["businessEmail"] ?>
                                            </div>
                                        </div>
                                        <hr />
                                        <div class="row">
                                            <div class="col-5">
                                                <label style="font-weight:bold;">Business Address</label>
                                            </div>
                                            <div class="col-7">
                                            <?php echo $viewAll["businessAddress"] ?>
                                            </div>
                                        </div>
                                        <hr />
                                        <div class="row">
                                            <div class="col-5">
                                                <label style="font-weight:bold;">Ghana Post Address</label>
                                            </div>
                                            <div class="col-7">
                                            <?php echo $viewAll["ghPostAddress"] ?>
                                            </div>
                                        </div>
                                        <hr />
                                        <div class="row">
                                            <div class="col-5">
                                                <label style="font-weight:bold;">Closet Land mark</label>
                                            </div>
                                            <div class="col-7">
                                            <?php echo $viewAll["landmark"] ?>
                                            </div>
                                        </div>
                                        <hr />
                                        <div class="row">
                                            <div class="col-5">
                                                <label style="font-weight:bold;">Photo ID</label>
                                            </div>
                                            <div class="col-7">
                                            <?php echo $viewAll["photoID"] ?>
                                            </div>
                                        </div>
                                        <hr />
                                        <div class="row">
                                            <div class="col-5">
                                                <label style="font-weight:bold;">Business Document</label>
                                            </div>
                                            <div class="col-7">
                                            <?php echo $viewAll["businessDocument"] ?>
                                            </div>
                                        </div>
                                        <hr />
                                        <div class="row">
                                            <div class="col-5">
                                                <label style="font-weight:bold;">Bank Name</label>
                                            </div>
                                            <div class="col-7">
                                            <?php echo $viewAll["bankName"] ?>
                                            </div>
                                        </div>
                                        <hr />
                                        <div class="row">
                                            <div class="col-5">
                                                <label style="font-weight:bold;">Bank Branch</label>
                                            </div>
                                            <div class="col-7">
                                            <?php echo $viewAll["bankBranch"] ?>
                                            </div>
                                        </div>
                                        <hr />
                                        <div class="row">
                                            <div class="col-5">
                                                <label style="font-weight:bold;">Bank Account Number</label>
                                            </div>
                                            <div class="col-7">
                                            <?php echo $viewAll["accountNumber"] ?>
                                            </div>
                                        </div>
                                        <hr />
                                        <div class="row">
                                            <div class="col-5">
                                                <label style="font-weight:bold;">Wallet Network</label>
                                            </div>
                                            <div class="col-7">
                                            <?php echo $viewAll["walletNetwork"] ?>
                                            </div>
                                        </div>
                                        <hr />
                                        <div class="row">
                                            <div class="col-5">
                                                <label style="font-weight:bold;">Wallet Number</label>
                                            </div>
                                            <div class="col-7">
                                            <?php echo $viewAll["walletNumber"] ?>
                                            </div>
                                        </div>
                                        <hr />
                                        <div class="row">
                                            <div class="col-5">
                                                <label style="font-weight:bold;">Name on Account</label>
                                            </div>
                                            <div class="col-7">
                                            <?php echo $viewAll["walletName"] ?>
                                            </div>
                                        </div>
                                        <hr />
                                        <hr />

                                    </div>
                                    <div class="tab-pane fade" id="connectedServices" role="tabpanel" aria-labelledby="ConnectedServices-tab">
                                        Facebook, Google, Twitter Account that are connected to this account
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>

                </div>
            </div>
        </div>
    </div>
        </div>
    </div>


    </div>
    </div>


    <footer class="py-4 bg-light mt-auto">
        <div class="container-fluid">
            <div class="d-flex align-items-center justify-content-between small">
                <div class="text-muted">Copyright &copy; TalentsinAfrica 2021 <img src="images/logo-300x67.png" width="50px" alt=""> </div>
                <div>
                    <a href="#">Privacy Policy</a>
                    &middot;
                    <a href="#">Terms &amp; Conditions</a>
                </div>
            </div>
        </div>


    </footer>

    <script src="js/jquery-3.5.1.slim.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/scripts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
    <script src="assets/demo/datatables-demo.js"></script>

    <!-- The core Firebase JS SDK is always required and must be listed first -->
    <script src="https://www.gstatic.com/firebasejs/8.1.1/firebase-app.js"></script>

    <!-- TODO: Add SDKs for Firebase products that you want to use
     https://firebase.google.com/docs/web/setup#available-libraries -->
    <script src="https://www.gstatic.com/firebasejs/8.1.1/firebase-firestore.js"></script>

</body>

</html>