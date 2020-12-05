<!DOCTYPE HTML>

<html>
	<head>
		<title>login Page</title>
		<style>
			.error {color: #FF0000;}
		</style>
	</head>
	<body>  
		

		<?php
          

          require('../Controller/LoginController.php');


		?>


		<div style="width:fit-content; margin-left:auto; margin-right:auto; text-align: left;">
			<table style="width: auto; border: 2px solid #000; border-collapse: collapse;">
				<tr>
					<td style="border: 2px solid #000; border-collapse: collapse;">
						<?php include 'Header1.php'?>
					</td>
				</tr>
				<tr>
					<td>
						<div style="max-width:fit-content; margin-left: auto; margin-right:auto">
							<h2>LOGIN</h2>

							<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  

								User Name: <input type="text" name="name">
								<span class="error">* <?php echo $nameErr;?></span>
								<br><br>  

								Password: <input type="Password" name="pwd">
								<span class="error">* <?php echo $pwdErr;?></span>
								<br><br>

								<input type="submit" name="submit1" value="Submit" action = "Dashboard.php">
								&nbsp

								</a>
								&nbsp  

								<a href="ForgotPassword.php"> Forgot Password?</a>
								 

							</form>
							<br><br>

							

						</div>	
					</td>
				</tr>

				<tr>
					<td style="border: 2px solid #000; border-collapse: collapse;">
						<?php include 'Footer.php'?>
					</td>
			</table>
		<div>
	</body>
</html>
