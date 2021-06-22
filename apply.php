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
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

</head>
<body>
	<a href="home.php"> <img src = "images/fastlink.svg" alt="FastLink" class="logo"> </a>
	<div class="login">
    <form action="loan-process.php" method="post" enctype="multipart/form-data">

		<h2>Registration Successful!</h2>
       
		<p> Apply for a loan for 
			
		<?php
			
		echo $_SESSION["firstName"] . " " . $_SESSION["lastName"];
		
		?>
			
		</p>
		<hr><br> 
		<div class="form-group">
					<label> Principal: (GHC) </label>
					<input type="text" class="form-control" name="principal" id='principal' required>
		</div>
		<div class="form-group">
					<label> Rate </label>
					<input type="text" class="form-control" name="rate" id="rate" required>
		</div>
		<div class="form-group">
					<label> Time (Years)</label>
					<input type="text" class="form-control" name="time" id="time" required>
		</div>
		<hr> <br>
		<input type="button" onClick="showInterest()" value="Calculate simple interest"> </input>
		
		<div class="form-group">
					<label> Simple Interest: (GHC)</label>
					<input type="text" class="form-control" name="simpleInterest" id="simpleInterest" readonly="true">
        <button> Add entry </button>
		</div>
        <div class="text-center">Want to Leave the Page? <br><a href="logout.php">Logout</a></div>

		<script>
		function showInterest(){
            var p = 0;
            var r = 0;
            var t = 0;
            var si = 0;

            p = parseFloat(document.getElementById("principal").value);
            r = parseFloat(document.getElementById("rate").value);
            t = parseInt(document.getElementById("time").value);

            si = ((p*r*t)/100);
            document.getElementById("simpleInterest").value=si;
		}
		</script>
		</form>


</div>
</body>
</html>