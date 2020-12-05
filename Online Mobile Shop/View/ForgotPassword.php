<!DOCTYPE HTML>
<html>
	<head>
		<title>Forgot Password</title>
		<style>
			.error {color: #FF0000;}
		</style>
	</head>
	<body>  

		
             <?php
          


    

          require('../Controller/ForgotPasswordController.php');




		?>







		<div style="max-width:fit-content; margin-left: auto; margin-right:auto">
			<table style="width: fit-content; border: 2px solid #000; border-collapse: collapse;">
				<tr>
					<td style="border: 2px solid #000; border-collapse: collapse;">
						<?php include 'Header1.php';?>
					</td>
				</tr>
				<tr>
					<td>
						<div style="max-width:fit-content; margin-left: auto; margin-right:auto">
							<h2>FORGOT PASSWORD</h2>

							<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 


								E-mail: <input type="text" name="email">
								<span class="error">* <?php echo $emailErr;?></span>
								<br><br> 

								Password:<input type="Password" name="pwdN">
								<span class="error">* <?php echo $pwdNErr;?></span>
								<br><br>


								Confirm Password: </font><input type="Password" name="pwdR">
								<span class="error">* <?php echo $pwdRErr;?></span>
								<br><br> 


								<input type="submit" name="submit1" value="Submit">
							</form>

							<br><br>




							<?php

								/*echo "<h2>Inputs:</h2>";
								echo "<b>E-mail:</b> ".$email;
								echo "<br>";
								echo "<b>Password:</b> ".$pwdN;
								echo "<br>";
								echo "<b>Confirm Password:</b> ".$pwdR;
								echo "<br>";
								*/
								
							?>

						</div>
					</td>
				</tr>
				<tr>
					<td style="border: 2px solid #000; border-collapse: collapse;">
						<?php include 'Footer.php';?>
					</td>
			</table>


		<div>
	</body>
</html>