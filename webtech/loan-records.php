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
<link rel="stylesheet" href="css/loan-records.css">


</head>
<body>
	<a href="home.php"> <img src = "images/fastlink.svg" alt="FastLink" class="logo"> </a>
	<div class="login">
    <form action="home.php" method="post" enctype="multipart/form-data">
	<?php
include_once 'database.php';
$result = mysqli_query($conn,"SELECT * FROM customertb");
?>
<?php
if (mysqli_num_rows($result) > 0) {
?>
<table class='table table-bordered table-striped'>
<tr class = "headed">
<td>First Name</td>
<td>Surname</td>
<td>Employment Status</td>
<td>Employer Name</td>
<td>Date of Birth </td>
<td> ID Type </td>
<td> Address</td>
<td>Email</td>
<td>Phone Number</td>
<td> Marital Status </td>
<td> Principal </td>
<td> Rate </td>
<td> Time </td>
<td> Simple Interest </td>
	
</tr>
<?php
$i=0;
while($row = mysqli_fetch_array($result)) {
?>
<tr>
<td><?php echo $row["firstName"]; ?></td>
<td><?php echo $row["lastName"]; ?></td>
<td><?php if ($row["isEmployed"] == 1){echo "Employed";} else echo "Unemployed"; ?></td>
<td><?php echo $row["employerName"]; ?></td>
<td><?php echo $row["dateOfBirth"]; ?></td>
<td><?php echo $row["idType"]; ?></td>
<td><?php echo $row["address"]; ?></td>
<td><?php echo $row["email"]; ?></td>
<td><?php echo $row["phoneNumber"]; ?></td>
<td><?php if ($row["isMarried"] == 1){echo "Married";} else echo "Single"; ?></td>
<td><?php echo $row["principal"]; ?></td>
<td><?php echo $row["rate"]; ?></td>
<td><?php echo $row["time"]; ?></td>
<td><?php echo $row["simpleInterest"]; ?></td>
</tr>
<?php
$i++;
}
?>
</table>
<?php
}
else{
echo "No result found";
}
?>
        <div class="text-center">Want to Leave the Page? <br><a href="logout.php">Logout</a></div>
    </form>
	
</div>
</body>
</html>