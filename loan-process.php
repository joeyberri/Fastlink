<?php
session_start();
if (!isset($_SESSION["adminFirstName"]) || !isset($_SESSION["adminLastName"])){
    header("location: login.php");
}
    if ( $_SERVER['REQUEST_METHOD']=='GET' && realpath(__FILE__) == realpath( $_SERVER['SCRIPT_FILENAME'] ) ) {
        header( 'location: customer-register.php' );
    }


?>
<?php
extract($_POST);
include("database.php");

$cEmail = $_SESSION["email"];


if(2>1){
	
$query = "UPDATE customertb SET principal = '$principal', rate = '$rate', time = '$time', simpleInterest = '$simpleInterest' WHERE email = '$cEmail'";

	mysqli_query($conn, $query);
	if(mysqli_query($conn, $query)){
		echo " 
		<script type='text/javascript'> 
		alert('Loan record added!');
 		</script>";
		unset($_SESSION["firstName"]);
		unset($_SESSION["lastName"]);
		unset($_SESSION["email"]);
		header ("Location: loan-records.php?status=success");
} else{
		
	//	header ("Location: apply.php?status=fail");
			
   
    return false;

}

}

?>
