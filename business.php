<?php
  
    include_once('db/db_connection.php');
    $query = "SELECT * FROM registration WHERE id = " .$_GET['id'];
    $data = $db->query($query);

    $businessDetail = $data->fetch();
   
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Business Details</title>
    <link href="css/styles.css" rel="stylesheet" />
    <link href="css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
    <script defer src="fontawesome-free-5.15.1-web/js/all.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.5.0/css/flag-icon.min.css"
        integrity="sha512-Cv93isQdFwaKBV+Z4X8kaVBYWHST58Xb/jVOcV9aRsGSArZsgAnFIhMpDoMDcFNoUtday1hdjn0nGp3+KZyyFw=="
        crossorigin="anonymous" />
</head>


<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-light bg-light">
        <a class="navbar-brand" href="index.html"> <img src="./images/logo.png" alt="" srcset="" height="50"
                width="200"> </a>
        <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i
                class="fas fa-bars"></i></button>
    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-secondary bg-secondary" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <a class="nav-link" href="dashboard.php">
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

            <main>
                <h2 class="mt-4">Business Details</h2>
                <div class="card-body">
                    <table class="table">

                        <tbody>
                          <tr>
                            <th scope="row">Business Name</th>
                            <td><?php echo $businessDetail["businessName"] ?></td>
                            <td>
                           
                          </tr>
                          <tr>
                            <th scope="row">Business Phone Number</th>
                            <td><?php echo $businessDetail["businessNumber"] ?></td>
                       
                          </tr>
                          <tr>
                            <th scope="row">Business Email</th>
                            <td><?php echo $businessDetail["businessEmail"] ?></td>
                          </tr>
                          <tr>
                            <th scope="row">Business Address</th>
                            <td><?php echo $businessDetail["businessAddress"] ?></td>
                       
                          </tr>
                          <tr>
                            <th scope="row">Ghana Post Address</th>
                            <td><?php echo $businessDetail["ghPostAddress"] ?></td>
                          </tr>
                        
                        <tr>
                            <th scope="row">Landmark</th>
                            <td><?php echo $businessDetail["landmark"] ?></td>
                       
                          </tr>
                          <tr>
                            <th scope="row">Type of Business</th>
                            <td><?php echo $businessDetail["typeOfBusiness"] ?></td>
                          </tr>
                          <tr>
                            <th scope="row">Sole Proprietorship</th>
                            <td><?php echo $businessDetail["businessDocument"] ?></td>
                          </tr>
                          <tr>
                            <th scope="row">Limited Liability Company</th>
                            <td><?php echo $businessDetail["businessDocument"] ?></td>
                          </tr>
                        </tbody>
                      </table>
                </div>
        
        </div>
    </div>
    </main>

    </div>
    </div>

    <footer class="py-4 bg-light mt-auto">
        <div class="container-fluid">
            <div class="d-flex align-items-center justify-content-between small">
                <div class="text-muted">Copyright &copy; TalentsinAfrica 2021 <img src="images/logo-300x67.png"
                        width="50px" alt=""> </div>
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