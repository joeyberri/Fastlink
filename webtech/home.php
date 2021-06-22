<?php
session_start();
if (!isset($_SESSION["adminFirstName"]) || !isset($_SESSION["adminLastName"])){
    header("location: login.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<title>Fastlink</title>
<link rel="stylesheet" href="css/universal.css">

</head>
<body>

	<img src = "images/fastlink.svg" alt="FastLink" class="logo">
	<div class="login">
    <form action="home.php" method="post" enctype="multipart/form-data">
		<h2>Administrator</h2>
        <br>            

		<p class="hint-text"><br><b>Welcome, </b><?php echo $_SESSION["adminFirstName"] ?> &nbsp; <?php echo $_SESSION["adminLastName"] ?></p> <hr> <br> <br>
		<div class="form-group">
		<a class="link" href="customer-register.php"> Apply for Loan </a> <br class="bunch-space">
		</div>
		<div class="form-group">
		<a class="link" href="loan-records.php"> View loan applicants </a>
		</div>
        <div class="text-center">Want to Leave the Page? <br><a href="logout.php">Logout</a></div>
    </form>
	
</div>
</body>
</html>