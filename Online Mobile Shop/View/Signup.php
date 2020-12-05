<!DOCTYPE HTML>
<html>
	<head>
		<title>Registration Page</title>
		<style>
			.error {color: #FF0000;}
		</style>
	</head>
	<body>  

		<?Php 


		require('../Controller/SignupController.php');


		?>



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

							<h2>Sign Up</h2>

							<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 

							 
								Name: <input type="text" name="name">
								<span class="error">* <?php echo $nameErr;?></span>
								<br><br>


								E-mail: <input type="text" name="email">
								<span class="error">* <?php echo $emailErr;?></span>
								<br><br>


								User Name: <input type="text" name="username">
								<span class="error">* <?php echo $usernameErr;?></span>
								<br><br>


								Password:<input type="Password" name="pwdN">
								<span class="error">* <?php echo $pwdNErr;?></span>
								<br><br>


								Confirm Password: </font><input type="Password" name="pwdR">
								<span class="error">* <?php echo $pwdRErr;?></span>
								<br><br>


								Gender:
								<input type="radio" name="gender" value="Male">Male
								<input type="radio" name="gender" value="Female">Female
								<input type="radio" name="gender" value="Other">Other
								<span class="error">* <?php echo $genderErr;?></span>
								<br><br>


								</b>Date of Birth: <input type="date" name="dob">
								<span class="error">* <?php echo $dobErr;?></span>
								<br><br>


								<input type="submit" name="submit1" value="Submit">
								<br><br>
								

							</form>

						

						</div>
				</tr>
				<tr>
					<td style="border: 2px solid #000; border-collapse: collapse;">
						<?php include 'Footer.php';?>
					</td>
			</table>
		<div>
	</body>
</html>
