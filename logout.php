<?php
    session_start();
    unset($_SESSION["adminFirstName"]);
    unset($_SESSION["adminLastName"]);
    header("Location:login.php");
?>