<?php 
include('security.php');
include('includes/header.php'); 
include('includes/navbar.php');
?>


<div class="modal fade" id="addadminprofile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Ajouter Un Etudiant</h5> 
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <form action="code.php" method="POST">
        <div class="modal-body">
            <div class="form-group">
                <label>Nom Complet</label>
                <input type="text" name="NomComplet" class="form-control" placeholder="Enter Nom ">
            </div>
            <div class="form-group">
                <label>Adresse</label>
                <input type="text" name="Adresse" class="form-control" placeholder="Enter Prenoms">
            </div>
            <div class="form-group">
                <label>E-mail</label>
                <input type="email" name="Email" class="form-control" placeholder="Enter E-mail">
            </div>
             <div class="form-group">
                <label>langue</label>
                <select name="langue" class="form-control">
                    <option value="">Selectionnez la langue</option>
                    <option value="fr">Français</option>
                    <option value="en">English</option>
                    <!-- Ajoutez d'autres langues si nécessaire -->
                </select>
            </div>
            <div class="form-group">
                <label>Telephone</label>
                <input type="text" name="Phone" class="form-control" placeholder="Enter Phone">
            </div>

            <div class="form-group">
                <label>Montant</label>
                <input type="text" name="Montant" class="form-control" placeholder="Enter montant">
            </div>
        </div>

        <input type="hidden" name="usertype" value="user" class="form-control">

        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" name="registerbtn" class="btn btn-primary">Save</button>
        </div>
      </form>

    </div>
  </div>
</div>


<div class="container-fluid">

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addadminprofile">
              Ajouter Etudiant
            </button>
    </h6>
  </div>

  <div class="card-body">

     <?php
     if (isset($_SESSION['success']) and $_SESSION['success'] !='') 
     {
       echo '<h2 class="bg-primary" > '.$_SESSION['success'].' </h2>';
       unset($_SESSION['success']);
     }

     if (isset($_SESSION['status']) and $_SESSION['status'] !='') 
     {
       echo '<h2 class="bg-danger" > '.$_SESSION['status'].' </h2>';
       unset($_SESSION['status']);
     }

     ?>

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

<?php
include('includes/js.php');
include('includes/footer.php');
?>