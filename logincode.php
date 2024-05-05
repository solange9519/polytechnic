<?php

 $connection = mysqli_connect('localhost', 'root', '', 'adminpanel');

require_once 'security.php'; // On inclut la connexion à la base de données

if(isset($_POST['login_btn']))
{
    $CodeSecret_login = $_POST['CodeSecret']; 

    $query = "SELECT * FROM register WHERE CodeSecret='$CodeSecret_login' LIMIT 1";
    $query_run = mysqli_query($connection, $query);
    $usertypes = mysqli_fetch_array($query_run);

    if($usertypes['usertype'] == "admin")
    {
        $_SESSION['username'] = $email_login;
        header('Location: admin');
    }
    else if($usertypes['usertype'] == "user")
    {
        $_SESSION['cusername'] = $email_login;
        header('Location: user');
    }
    else
    {
        $_SESSION['status'] = "Votre code de suivi est erroné";
        header('Location: logout');
    }
}
?>
