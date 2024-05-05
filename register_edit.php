<?php
session_start();
include('includes/header.php'); 
include('includes/navbar.php'); 
?>

<div class="container-fluid">

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Edit Student Profil
    </h6>
  </div>

  <div class="card-body">
    <div class="table-responsive">

       <?php

                $connection = mysqli_connect('localhost', 'root', '', 'adminpanel');

                if (isset($_POST['edit_btn'])) 
                {
                  $id = $_POST['edit_id'];

                  $query = "SELECT * FROM register WHERE id='$id'";
                  $query_run = mysqli_query($connection, $query);

                  foreach ($query_run as $row)
                  {
                    ?>

      <form action="code.php" method="POST">
        <input type="hidden" name="edit_id" value="<?php echo $row['id'] ?>" >

           <div class="form-group">
                <label> Nom Complet </label>
                <input type="text" name="edit_NomComplet" value="<?php echo $row['NomComplet'] ?>" class="form-control" placeholder="Enter Nom Complet">
            </div>

            <div class="form-group">
                <label>langue</label>
                <select name="edit_langue" class="form-control">
                    <option value="fr">Français</option>
                    <option value="en">English</option>
                    <!-- Ajoutez d'autres langues si nécessaire -->
                </select>
            </div>

            <div class="form-group">
                <label> Adresse </label>
                <input type="text" name="edit_Adresse" value="<?php echo $row['Adresse'] ?>" class="form-control" placeholder="Enter Adresse">
            </div>

            <div class="form-group">
                <label> E-mail </label>
                <input type="email" name="edit_Email" value="<?php echo $row['Email'] ?>" class="form-control" placeholder="Enter E-mail">
            </div>

            <div class="form-group">
                <label> Phone Number </label>
                <input type="text" name="edit_Phone" value="<?php echo $row['Phone'] ?>" class="form-control" placeholder="Enter Phone">
            </div>

            <div class="form-group">
                <label> Scolarité </label>
                <input type="text" name="edit_Montant" value="<?php echo $row['Montant'] ?>" class="form-control" placeholder="Enter Montant à Envoyer">
            </div>

            <a href="register.php" class="btn btn-danger"> CANCEL </a>
            <button name="updatebtn" class="btn btn-primary"> Update </button>

      </form>

       <?php
       }

    }
    ?>

    </div>
  </div>
</div>

</div>
<!-- /.container-fluid -->

<?php
include('includes/js.php');
include('includes/footer.php');
?>