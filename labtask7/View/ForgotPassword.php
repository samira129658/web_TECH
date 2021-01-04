<!DOCTYPE HTML>
<html>
	<head>

		<script src="../asset/javaScript/ForgotPasswordValidation.js"></script> 
		<title>Forgot Password</title>
		<style>
			.error {color: #FF0000;}

			body

			{
				background-color: #f5f582;
			}

			input

           {

            
            width: 75%;
            height: 5%;
            border: 10px;
            border-radius: 15px;
            padding: 7px 10px 7px 10px;
            margin: 10px 10px 15px 0px;
            box-shadow: 1px 1px 2px 1px blue; 

           }

		</style>

		<link rel="stylesheet" href="../asset/css/styleO.css">
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

							<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"  onsubmit="return validateForm()"> 


								E-mail: <input type="text" name="email">
								<span class="error" id = "errorMsgemail" >* <?php echo $emailErr;?></span>
								<br><br> 

								Password:<input type="Password" name="pwdN">
								<span class="error" id = "errorMsgpwdN" >* <?php echo $pwdNErr;?></span>
								<br><br>


								Confirm Password: </font><input type="Password" name="pwdR">
								<span class="error"  id = "errorMsgpwdR">* <?php echo $pwdRErr;?></span>
								<br><br> 


								<input class = "mainDivFormButtonLogin" type="submit" name="submit1" value="Submit" action = "">
								<br>
							</form>

							<br><br>





						</div>
					</td>
				</tr>
				<tr>
					<td style="border: 2px solid #000; border-collapse: collapse;">
						<?php include 'Footer2.php';?>
					</td>
			</table>


		<div>
	</body>
</html>