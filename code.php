<?php

 $connection = mysqli_connect('localhost', 'root', '', 'adminpanel');

require_once 'security.php'; // On inclut la connexion à la base de données

// Si les variables existent et ne sont pas vides
if(isset($_POST['registerbtn']))
{
    // Patch XSS
    $NomComplet = $_POST['NomComplet'];
    $Adresse = $_POST['Adresse'];
    $Email = $_POST['Email'];
    $Phone = $_POST['Phone'];
    $langue = $_POST['langue'];
    $Montant = $_POST['Montant'];
    $CodeSecret = substr(md5(uniqid()), 0, 10);
    $token = uniqid();
    $personalLink = "http://localhost/politechnic/register?lang=$langue&token=$token";
    $numDossier = 'DEPS'.substr(md5(uniqid()), 0, 6);
    $numeroCompte = str_replace('.', '', uniqid());
    $usertype = $_POST['usertype'];

    // On vérifie si l'utilisateur existe
    $Email_query = "SELECT * FROM register WHERE Email='$Email' ";
    $Email_query_run = mysqli_query($connection, $Email_query);
    if(mysqli_num_rows($Email_query_run) > 0)
    {
        $_SESSION['status'] = "Email Already Taken. Please Try Another one.";
        $_SESSION['status_code'] = "error";
        header('Location: register.php');  
    }
    else
    {
        $query = "INSERT INTO register (NomComplet,Adresse, Email,Phone,CodeSecret,Montant,langue,token,personalLink,numDossier,numeroCompte,usertype) VALUES ('$NomComplet','$Adresse','$Email','$Phone', '$CodeSecret','$Montant','$langue','$token','$personalLink','$numDossier','$numeroCompte','$usertype')";
        $query_run = mysqli_query($connection, $query);
            
            if($query_run)
            {
                // echo "Saved";
                $_SESSION['status'] = "Etudiant Ajouter";
                $_SESSION['status_code'] = "success";
                header('Location: register');
            }
            else 
            {
                $_SESSION['status'] = "Echec d'ajout de l'etudiant";
                $_SESSION['status_code'] = "error";
                header('Location: register');  
            }
        }
    }

if (isset($_POST['updatebtn'])) 
{
    $id = $_POST['edit_id'];
    $NomComplet = $_POST['edit_NomComplet'];
    $Adresse = $_POST['edit_Adresse'];
    $Email = $_POST['edit_Email'];
    $langue = $_POST['edit_langue'];
    $Phone = $_POST['edit_Phone'];
    $Montant = $_POST['edit_Montant'];

    $query = "UPDATE register SET NomComplet='$NomComplet', Adresse='$Adresse', Email='$Email', Phone='$Phone', langue='$langue',Montant='$Montant' WHERE id='$id' ";
    $query_run = mysqli_query($connection, $query);

    if ($query_run) 

    {
        $_SESSION['success'] = "Your Data is Updated";
        header('Location:register.php');
    }

    else{
        $_SESSION['status'] = "Your Data is Not Updated";
        header('Location:register.php');
    }
}


if (isset($_POST['delete_btn'])) 
{
    $id = $_POST['delete_id'];

    $query = "DELETE FROM register WHERE id='$id' ";
    $query_run = mysqli_query($connection, $query);

    if($query_run) 

    {
        $_SESSION['success'] = "Etudiant Supprimé";
        header('Location:register.php');
    }
    else

    {
        $_SESSION['status'] = "echec de suppression";
        header('Location:register.php');
    }
}

?>
