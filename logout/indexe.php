<?php
	session_start();
		unset($_SESSION['myidCompt']);
	session_destroy();
    header("location: ../index.php/");
?>
