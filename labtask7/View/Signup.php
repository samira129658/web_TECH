<!DOCTYPE HTML>
<html>
	<head>

		<script src="../asset/javaScript/SignupValidation.js"></script>
		<title>Registration Page</title>

		<style>
  	
   body
   {

   	
   	background-color: #f7d677;

   }

   input

   {

   	width: 80%;
   	height: 5%;
   	border: 1px;
   	border-radius: 15px;
   	padding: 8px 15px 8px 15px;
   	margin: 10px 0px 15px 0px;
   	box-shadow: 1px 1px 2px 1px grey; 

   }

	.error {color: #FF0000;}

	</style>

	<link rel="stylesheet" href="../asset/css/styleO.css">

	</head>
	<body>  

		<?Php 


		require('../Controller/SignupController.php');


		?>

        <center> 

		<div style="max-width:1000px; margin-left: auto; margin-right:auto">
			<table style="width: 1000px; border: 2px solid #000; border-collapse: collapse;">
				<tr>
					<td style="border: 2px solid #000; border-collapse: collapse;">
						<?php include 'Header1.php';?>
					</td>
				</tr>
				<tr>
					<td style="text-align: center;">
						<div style="width:fit-content; margin-left:auto; margin-right:auto; text-align: left;">

							<h2 style="color:black; font-size:25px; text-align: center; font-weight: bold">Sign Up Form</h2>

							<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" onsubmit="return validateForm()" >


							<!-- <form method="post" 	action="<?php //echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" onsubmit="return validateForm()"> -->

							 
							<font size="4px"> Name: </font>	 <input type="text" id="name" name="name"> <br>
								<span class="error" id="errorMsgName" ><?php echo $nameErr;?></span>
								<br><br>


								<font size="4px"> E-mail:</font> <input type="text" id="email" name="email"> <br>
								<span class="error" id="errorMsgEmail"> <?php echo $emailErr;?></span>
								<br><br>


								<font size="4px"> User Name:</font> <input type="text" id="username" name="username"> <br>
								<span class="error" id="errorMsgUserName"><?php echo $usernameErr;?></span>
								<br><br>


								<font size="4px"> Password:</font><input type="Password" id="pwdN" name="pwdN"> <br>
								<span class="error" id="errorMsgpwdN"> <?php echo $pwdNErr;?></span>
								<br><br>


								<font size="4px"> Confirm Password:</font></font><input type="Password" id="pwdR" name="pwdR"> <br>
								<span class="error" id="errorMsgpwdR"> <?php echo $pwdRErr;?></span>
								<br><br>


								 <!-- Gender:
								<input type="radio" name="gender" value="Male">Male
								<input type="radio" name="gender" value="Female">Female
								<input type="radio" name="gender" value="Other">Other
								<span class="error">* <?php //echo $genderErr;?></span>
								<br><br> -->


								<font size="4px"> Date of Birth: </font> </b><input type="date" id = "dob" name="dob"> <br>
								<span class="error" id="errorMsgDOB"> <?php echo $dobErr;?></span>
								<br><br>


								<input class = "mainDivFormButton" type="submit" name="submit1" value="Submit">
								<br><br>
								

							</form>

							<?php

								
								 
							?>

						</div>
				</tr>
				<tr>
					<td style="border: 2px solid #000; border-collapse: collapse;">
						<?php include 'Footer2.php';?>
					</td>
			</table>
		<div>

			</center>
	</body>
</html>




