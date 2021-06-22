<?php

    if ( $_SERVER['REQUEST_METHOD']=='GET' && realpath(__FILE__) == realpath( $_SERVER['SCRIPT_FILENAME'] ) ) {
        header( 'location: customer-register.php' );
    }
?>
<?php

extract($_POST);
include("database.php");


if(isset($_POST['register'])){
$query = "INSERT INTO customertb(firstName, lastName, isEmployed, employerName, dateOfBirth, idType, address, email, phoneNumber, isMarried) VALUES ('$first_name', '$last_name', '$isEmployed', '$employer_name', '$date_of_birth', '$id_type', '$address', '$email', '$phone_number', '$isMarried')";

	if(mysqli_query($conn, $query)){
    	echo " 
		<script type='text/javascript'> 
		alert('Customer registration successful!');
 		</script>";
		session_start();
		$sql=mysqli_query($conn,"SELECT * FROM customertb where email='$email' and phoneNumber='$phone_number'");
    $row  = mysqli_fetch_array($sql);

		$_SESSION["firstName"] = $row['firstName'];
		$_SESSION["lastName"] = $row['lastName'];
		$_SESSION["email"] = $row['email'];
		
		header ("Location: apply.php?status=success");
} else{


		
		echo " 
		<script type='text/javascript'> 
		alert('Customer registration unsuccessful!');
 		</script>";
		
   		header ("Location: customer-register.php?status=fail");
    return false;
	
}

}

?>
