<?php
    include_once('db/db_connection.php');
    $query = "SELECT * FROM registration" ;
    $data = $db->query($query);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Personal Details</title>
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
        <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
        </form>
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
                <h2 class="mt-4">Personal Details</h2>
                <div class="card-body">
                    <div class="table-responsive" style="width: 98%; background-color: #ffff;">
                        <table class="table" id="dataTable" width="100%" cellspacing="0">
                            <thead style="background-color: #736e7163;">
                                <tr>
                                    <th>Name </th>
                                    <th>Phone Number</th>
                                    <th>Email</th>
                                    <th>Residential Address</th>
                                    <th>Region</th>
                                    <th> More Option</th>
                                </tr>
                            </thead>
                           
                            <tbody id="allprojects">
                                <?php
                                 foreach($data as $d){
                                ?>
                                <tr>
                                    <td><?php echo $d["userName"] ?></td>
                                    <td><?php echo $d["phoneNumber"] ?></td>
                                    <td><?php echo $d["email"] ?></td>
                                    <td><?php echo $d["locationAddress"] ?></td>
                                    <td><?php echo $d["region"] ?></td>
                                    <td><?php echo $d["id"] ?></td>
                                    <td>
                                    <div class="dropdown">
                                        <button type="button" class="btn btn-sm btn-icon btn-secondary" data-toggle="dropdown"
                                          aria-haspopup="true" aria-expanded="false"><i class="fa fa-fw fa-ellipsis-h"></i></button>
                                        <div class="dropdown-menu dropdown-menu-right">
                                          <div class="dropdown-arrow mr-n1"></div><a href="./viewAll.php?id=<?php echo $d["id"] ?>" class="dropdown-item">View Details</a> 
                                         
                                        </div>
                                      </div>
                                </td>
                                </tr>
                                <?php
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
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