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

<link rel="stylesheet" href="css/universal.css">
<link rel="stylesheet" href="css/customer-register.css">	
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<title>Fastlink</title>


</head>
<body>
<a href="home.php"> <img src = "images/fastlink.svg" alt="FastLink" class="logo"> </a>
<div class="cregister">
    <form action="customer-register-process.php" method="post" enctype="multipart/form-data" name="myForm" onSubmit="validate()">
		<h2>Register</h2>
        
		<div class="form-group">
					<label> First Name </label>
					<input type="text" class="form-control" name="first_name" id="first_name"> 	
   
					<label> &emsp; &emsp; &emsp; Surname </label>
					<input type="text" class="form-control" name="last_name" > 	
        </div>
		<div class="form-group">
					<label> Date of birth </label>
					<input type="date" class="form-control" name="date_of_birth" > 	
					<label> &emsp; &emsp; &emsp; Phone Number </label>
					<input type="tel" class="form-control" name="phone_number" >
        </div>
		<div class="form-group">
					<label> Email </label>
					<input type="email" class="form-control" name="email"> 	
					<label> &emsp; &emsp; &emsp; Address </label>
					<input type="text" class="form-control" name="address">
        </div>
		<div class="form-group">
					<label> What is your ID type? </label>
					<input type="radio" class="form-control" name="id_type" value="Passport"> 
					<label for="passport"> Passport </label>
					<input type="radio" class="form-control" name="id_type"  value="NHIA"> 
					<label for="nhia"> NHIA </label>
					<input type="radio" class="form-control" name="id_type" value="NIA"> 
					<label for="nia"> NIA </label>
					<input type="radio" class="form-control" name="id_type" value="Voters ID"> 
					<label for="voters_id"> Voter's ID </label>
					<input type="radio" class="form-control" name="id_type" value="Drivers License"> 
					<label for="drivers_license"> Driver's License </label>
        </div>
		<hr>
		<div class="form-group">
					<label> Are you currently married? </label>
					<input type="radio" class="form-control" name="isMarried" value=1> 
					<label for="1"> Yes </label>
					<input type="radio" class="form-control" name="isMarried" value=0> 
					<label for="0"> No </label>
        </div>
		<div class="form-group">
					<label> Are you currently employed? </label>
					<input type="radio" class="form-control" name="isEmployed" value="1"> 
					<label for="1"> Yes </label>
					<input type="radio" class="form-control" name="isEmployed" value="0"> 
					<label for="0"> No </label>
        </div>
		<script type="text/javascript">
				$("input[name='isEmployed']").click(function () {
    $('#employer_div').css('display', ($(this).val() === "1") ? 'block':'none');
});
		</script>
		<div class="form-group"  id="employer_div">
					<label> What is your employer's name? </label>
					<input type="text" class="form-control" name="employer_name" > 	
        </div>

        <div class="form-group">
			<label class="form-check-label"><input type="checkbox" required="required"> I accept the <a href="#">Terms of Use</a> & <a href="#">Privacy Policy</a></label>
		</div>
		<div class="form-group">
            <button type="submit" name="register" value="register">Register Now</button>
        </div>
 
		<script type = "text/javascript">
   
      function validate() {
      	
         if( document.myForm.first_name.value == "" ) {
            alert( "Please provide your first name!" );
            document.myForm.first_name.focus() ;
            return false;
         }
         if( document.myForm.last_name.value == "" ) {
            alert( "Please provide your surname!" );
            document.myForm.last_name.focus() ;
            return false;
         }
         if( document.myForm.date_of_birth.value == "" ) {
            alert( "Please provide your date of birth!" );
            document.myForm.date_of_birth.focus() ;
            return false;
         }
	 
         if( document.myForm.phone_number.value == "" ) {
            alert( "Please enter a phone number!" );
            document.myForm.phone_number.focus() ;
            return false;
         }
   		 var numbers = /^[0-9]+$/;
		          if(document.myForm.phone_number.value.match(numbers)) {
					  return true}
	   		else{
            alert( "Please provide a valid phone number!" );
            document.myForm.phone_number.focus() ;
            return false;
         }	
         if( document.myForm.email.value == "" ) {
            alert( "Please provide your email!" );
            document.myForm.email.focus() ;
            return false;
         }
         if( document.myForm.address.value == "" ) {
            alert( "Please provide your address!" );
            document.myForm.address.focus() ;
            return false;
         }
         if( document.myForm.id_type.value == "" ) {
            alert( "Please select an ID Type!" );
            document.myForm.id_type.focus() ;
            return false;
         }
         if( document.myForm.isMarried.value == "" ) {
            alert( "Please specify your marital status!" );
            document.myForm.isMarried.focus() ;
            return false;
         }
         if( document.myForm.isEmployed.value == "" ) {
            alert( "Please specify your employment status!" );
            document.myForm.isEmployed.focus() ;
            return false;
         }

	   
         return( true );
      }

</script>
    </form>
	
	
</div>
</body>
</html>