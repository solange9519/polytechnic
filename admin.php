<?php
include('includes/header.php'); 
include('includes/navbar.php'); 
?>

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
                        <a class="text-danger" href="../attentes.php">Etudiants en attentes </a>
                         </div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?php
                require 'dbconfig.php';

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
                      <div class="text-xs font-weight-bold  text-uppercase mb-1"><a class="text-success" href="niveau.php">Niveau d'etude</a> </div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?php
                require 'dbconfig.php';

                $query = "SELECT id FROM register ORDER BY id";
                $query_run = mysqli_query($connection, $query);

                $row = mysqli_num_rows($query_run);

                echo '<h1>'.$row. '</h1>';

                ?></div>
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
                      <div class="text-xs font-weight-bold  text-uppercase mb-1">  <a class="text-info" href="../admin">Total des Etudiants Inscrit</a></div>
                      <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                          <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">
                                        
                        <?php
                require 'dbconfig.php';

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
                      <div class="text-xs font-weight-bold text-info text-uppercase mb-1"><a href="../approbation">Niveau d'etude encours</a></div>
                      <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                          <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">

                            <?php
                require 'dbconfig.php';

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
                <form action="register_edit.php" method="post">
                    <input type="hidden" name="edit_id" value="<?php echo $row['id']; ?>">
                    <button  type="submit" name="edit_btn" class="fa fa-edit" style="color: #1d20e3"></button>
                </form>&nbsp;&nbsp;
                <form action="code.php" method="post">
                  <input type="hidden" name="delete_id" value="<?php echo $row['id']; ?>">
                  <button type="submit" name="delete_btn" class="fa fa-trash" style="color: red"></button>
                </form>&nbsp;&nbsp;
                 <form action="register_edit.php" method="post">
                    <input type="hidden" name="edit_id" value="<?php echo $row['id']; ?>">
                    <button  type="submit" name="edit_btn" class="fa fa-bullseye" style="color: green"></button>
                </form>&nbsp;&nbsp;
                <form action="code.php" method="post">
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
  <?php
include('includes/js.php');
include('includes/footer.php');
?>