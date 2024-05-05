
<!DOCTYPE html>
<html lang="en">
<head>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title> Politechnic School App </title>
  <!-- Custom fonts for this template-->
  <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="../css/sb-admin-2.min.css" rel="stylesheet">
</head>

<body id="page-top">
  <!-- Page Wrapper -->
  <div id="wrapper">

   <!-- Sidebar -->
   <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center" href="">
  <div class="sidebar-brand-icon rotate-n-15">
    <i class="fas fa-home"></i>
  </div>
  <div class="sidebar-brand-text mx-3"> POLITCHNIC <sup>school</sup></div>
</a>

<!-- Divider -->
<hr class="sidebar-divider my-0">
<!-- Nav Item - Dashboard -->
<li class="nav-item active">
  <a class="nav-link" href="">
    <i class="fas fa-file-alt text-white"></i>
    <span>Student Dashboard</span></a>
</li>

 <!-- Divider -->
      <hr class="sidebar-divider">
      <!-- Heading -->
      <div class="sidebar-heading"></div>
      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item"></li>
      <!-- Nav Item - Charts -->
      <li class="nav-item active">
        <a class="nav-link" href="../niveau">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Ajouter Niveau</span></a>
      </li>
      <!-- Nav Item - Tables -->
      <li class="nav-item active">
        <a class="nav-link" href="">
          <i class="fas fa-fw fa-users"></i>
          <span>Tous les etudiants</span></a>
      </li>
      <!-- Nav Item - Tables -->
      <li class="nav-item active">
        <a class="nav-link" href="../register" target='_self'>
          <i class="fas fa-fw fa-user"></i>
          <span>Ajouter Etudiant</span></a>
      </li>
      <!-- Nav Item - Charts -->
      <li class="nav-item active">
        <a class="nav-link" href="../history">
                  <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
          <span>Historique des etudiants</span></a>
      </li>
      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">
      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>
    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Search -->
          <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
            <div class="input-group">
              <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
              <div class="input-group-append">
                <button class="btn btn-primary" type="button">
                  <i class="fas fa-search fa-sm"></i>
                </button>
              </div>
            </div>
          </form>

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class="nav-item dropdown no-arrow d-sm-none">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search">
                  <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </li>

            <!-- Nav Item - Alerts -->
            <li class="nav-item dropdown no-arrow mx-1">
              <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-bell fa-fw"></i>
                <!-- Counter - Alerts -->
                <span class="badge badge-danger badge-counter">3+</span>
              </a>
              <!-- Dropdown - Alerts -->
              <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
                <h6 class="dropdown-header">
                  Alerts Center
                </h6>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="mr-3">
                    <div class="icon-circle bg-primary">
                      <i class="fas fa-file-alt text-white"></i>
                    </div>
                  </div>

                  <div>
                    <div class="small text-gray-500">December 12, 2019</div>
                    <span class="font-weight-bold">A new monthly report is ready to download!</span>
                  </div>
                </a>

                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="mr-3">
                    <div class="icon-circle bg-success">
                      <i class="fas fa-donate text-white"></i>
                    </div>
                  </div>
                  <div>
                    <div class="small text-gray-500">December 7, 2019</div>
                    $290.29 has been deposited into your account!
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="mr-3">
                    <div class="icon-circle bg-warning">
                      <i class="fas fa-exclamation-triangle text-white"></i>
                    </div>
                  </div>
                  <div>
                    <div class="small text-gray-500">December 2, 2019</div>
                    Spending Alert: We've noticed unusually high spending for your account.
                  </div>
                </a>
                <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
              </div>
            </li>

            <!-- Nav Item - Messages -->
            <li class="nav-item dropdown no-arrow mx-1">
              <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-envelope fa-fw"></i>
                <!-- Counter - Messages -->
                <span class="badge badge-danger badge-counter">7</span>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="messagesDropdown">
                <h6 class="dropdown-header">
                  Message Center
                </h6>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="https://source.unsplash.com/fn_BT9fwg_E/60x60" alt="">
                    <div class="status-indicator bg-success"></div>
                  </div>
                  <div class="font-weight-bold">
                    <div class="text-truncate">Hi there! I am wondering if you can help me with a problem I've been having.</div>
                    <div class="small text-gray-500">Emily Fowler · 58m</div>
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="https://source.unsplash.com/AU4VPcFN4LE/60x60" alt="">
                    <div class="status-indicator"></div>
                  </div>
                  <div>
                    <div class="text-truncate">I have the photos that you ordered last month, how would you like them sent to you?</div>
                    <div class="small text-gray-500">Jae Chun · 1d</div>
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="https://source.unsplash.com/CS2uCrpNzJY/60x60" alt="">
                    <div class="status-indicator bg-warning"></div>
                  </div>
                  <div>
                    <div class="text-truncate">Last month's report looks great, I am very happy with the progress so far, keep up the good work!</div>
                    <div class="small text-gray-500">Morgan Alvarez · 2d</div>
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="https://source.unsplash.com/Mv9hjnEUHR4/60x60" alt="">
                    <div class="status-indicator bg-success"></div>
                  </div>
                  <div>
                    <div class="text-truncate">Am I a good boy? The reason I ask is because someone told me that people say this to all dogs, even if they aren't good...</div>
                    <div class="small text-gray-500">Chicken the Dog · 2w</div>
                  </div>
                </a>
                <a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>
              </div>
            </li>

            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">LOGOUT</span><i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Profile
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                  Settings
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                  Activity Log
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->


  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  
  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>

          <form action="../" method="POST"> 
          
            <button type="submit" name="logout_btn" class="btn btn-primary">Logout</button>

          </form>


        </div>
      </div>
    </div>
  </div>

<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800"> Statistiques </h1>  

    <?php 
                if(isset($_GET['reg_err']))
                {
                    $err = htmlspecialchars($_GET['reg_err']);

                    switch($err)
                    {
                        case 'success':
                        ?>
                            <div class="alert alert-success">
                              <font color="018347"> ENREGISTRER </font></strong> 
                            </div>

                        <?php
                        
                        break;

                        case 'already':
                        ?>
                            <div class="alert alert-danger">
                              <font color="018347"> ECHEC </font></strong> 

                            </div>

                        <?php 

                    }
                }

            ?>

    <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
      <i class="fas fa-download fa-sm text-white-50"></i> Generate Report </a>
  </div>

  <!-- Content Row -->
  <div class="row">

  <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold  text-uppercase mb-1">
                        <a class="text-danger" href="../history">Historique des etudiants</a>
                         </div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">

                        <?php
                require '../dbconfig.php';
                $query = "SELECT id FROM register ORDER BY id";
                $query_run = mysqli_query($connection, $query);
                $row = mysqli_num_rows($query_run);
                echo '<h1>'.$row. '</h1>';
                ?>
                        
                      </div>
                    </div>
                    <div class="col-auto">
                     <!-- <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>-->
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Earnings (Monthly) Card Example -->
              <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold  text-uppercase mb-1">
                        <a class="text-success" href="../niveau">Niveau d'etude</a></div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">

                        <?php
                require '../dbconfig.php';
                $query = "SELECT id FROM register ORDER BY id";
                $query_run = mysqli_query($connection, $query);
                $row = mysqli_num_rows($query_run);
                echo '<h1>'.$row. '</h1>';
                ?>
                  
                </div>
                    </div>
                    <div class="col-auto">
                     <!-- <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>-->
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold  text-uppercase mb-1"> 
                        <a class="text-info" href="../history">Niveau d'etude terminé</a>
                      </div>
                      <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                          <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">
                                        
                        <?php
                require '../dbconfig.php';

                $query = "SELECT id FROM register ORDER BY id";
                $query_run = mysqli_query($connection, $query);

                $row = mysqli_num_rows($query_run);

                echo '<h1>'.$row. '</h1>';

                ?>
                          </div>
                        </div>
                        <div class="col">
                        </div>
                      </div>
                    </div>
                    <div class="col-auto">
                   <!--    <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>-->
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-info text-uppercase mb-1"><a href="../encours">Niveau d'etude encours</a></div>
                      <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                          <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">

                            <?php
                require '../dbconfig.php';
                $query = "SELECT id FROM register ORDER BY id";
                $query_run = mysqli_query($connection, $query);
                $row = mysqli_num_rows($query_run);
                echo '<h1>'.$row. '</h1>';
                ?>

                          </div>
                        </div>

                        <div class="col">
                        </div>
                      </div>
                    </div>
                    <div class="col-auto">
                   <!--    <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>-->
                    </div>
                  </div>
                </div>
              </div>
            </div>
            
             <!-- Pending Requests Card Example -->
            <div class="col-xl-3 col-md-6 mb-4"></div>
        <div class="container-fluid">
          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800 text-center"><b> Liste des Etudiants</b></h1>
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary"></h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <?php
                $connect = mysqli_connect('127.0.0.1', 'root', '', 'adminpanel');
                $query = "SELECT * FROM register";
                $query_run = mysqli_query($connect, $query);
            ?>
                <table class="table  table-striped table-bordered table-earning" id="dataTable" width="100%" cellspacing="0">
                <caption class="cap"></caption>
                  <thead>
                    <tr>
                      <th>Nom Complet</th>
                      <th>Adresse </th>
                      <th>E-mail</th> 
                      <th>Telephone</th>
                      <th>Code Secret</th>
                      <th>Scolarité</th>
                      <th>Action</th>
                    </tr>
                  </thead>

                   <?php
          if(mysqli_num_rows($query_run) > 0)
            {
              while($row = mysqli_fetch_assoc($query_run))
            {
              ?>

                  <tbody>
                <tr>
                <td><?php  echo $row['NomComplet']; ?>  </td>
            <td><?php  echo $row['Adresse']; ?>  </td>
            <td><?php  echo $row['Email']; ?>  </td>
            <td><?php  echo $row['Phone']; ?>  </td>
            <td><?php  echo $row['CodeSecret']; ?>  </td>
            <td><?php  echo $row['Montant']; ?>  </td>

            <td style="display: flex;">
                <form action="../edit" method="post">
                    <input type="hidden" name="edit_id" value="<?php echo $row['id']; ?>">
                    <button  type="submit" name="edit_btn" class="fa fa-edit" style="color: #1d20e3"></button>
                </form>&nbsp;&nbsp;
                <form action="../code.php" method="post">
                  <input type="hidden" name="delete_id" value="<?php echo $row['id']; ?>">
                  <button type="submit" name="delete_btn" class="fa fa-trash" style="color: red"></button>
                </form>&nbsp;&nbsp;
                 <form action="" method="post">
                    <input type="hidden" name="edit_id" value="<?php echo $row['id']; ?>">
                    <button  type="submit" name="edit_btn" class="fa fa-bullseye" style="color: green"></button>
                </form>&nbsp;&nbsp;
                <form action="" method="post">
                  <input type="hidden" name="delete_id" value="<?php echo $row['id']; ?>">
                  <button type="submit" name="delete_btn" class="fa fa-times-circle" style="color: red"></button>
                </form>
            </td>
          </tr>

          <?php
            
            }
        }
            else{

              echo"No Record Foundd";
          }

          ?>
        
        </tbody>
      </table>
              </div>
            </div>
          </div>
        </div>
        <!-- /.container-fluid -->
      </div>
      <!-- End of Main Content -->

 <!-- Bootstrap core JavaScript-->
  <script src="../vendor/jquery/jquery.min.js"></script>
  <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script> 
  <!-- Core plugin JavaScript--> 
  <script src="../vendor/jquery-easing/jquery.easing.min.js"></script> 
  <!-- Custom scripts for all pages--> 
  <script src="../js/sb-admin-2.min.js"> </script> 
  <!-- Page level plugins -->
  <script src="../vendor/chart.js/Chart.min.js"></script>
   <!-- Page level custom scripts --> 
   <script src="../js/demo/chart-area-demo.js"></script> 
   <script src="../js/demo/chart-pie-demo.js"></script>

   <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Politechnic School App 2024</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->
      </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->
    </div>
    <!-- End of Content Wrapper -->
    
</body>

</html>