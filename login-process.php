<?php
    if ( $_SERVER['REQUEST_METHOD']=='GET' && realpath(__FILE__) == realpath( $_SERVER['SCRIPT_FILENAME'] ) ) {
        header( 'location: login.php' );
    }
session_start();

if(isset($_POST['save']))
{
    extract($_POST);
    include 'database.php';
    $sql=mysqli_query($conn,"SELECT * FROM admin where email='$email' and password='md5($pass)'");
}
    $row  = mysqli_fetch_array($sql);
    if(is_array($row))
    {
        $_SESSION["adminFirstName"]=$row['adminFirstName'];
        $_SESSION["adminLastName"]=$row['adminLastName']; 
        header("Location: home.php"); 
    }
    else
    {
        echo "Invalid Email ID/Password";
    }

?>