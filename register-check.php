<?php
extract($_POST);
include("database.php");
$sql=mysqli_query($conn,"SELECT * FROM admin where email='$email'");
if(mysqli_num_rows($sql)>0)
{
    echo "Email Already Exists"; 
	exit;
}
else(isset($_POST['save']))
and $query="INSERT INTO admin(adminFirstName, adminLastName, email, password) VALUES ('$first_name', '$last_name', '$email', 'md5($pass)')";
    $sql=mysqli_query($conn,$query)or die("Could Not Perform the Query");
    header ("Location: login.php?status=success");

?>