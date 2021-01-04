<!DOCTYPE HTML>

<html>
	<head>
		<title>Login Page</title>
		
    
      <script src="../asset/javaScript/LoginValidation.js"></script> 

		<style>

			.error {color: #FF0000;}


			body
      {

   	background-image: url(1.jpg);
   	background-position: center;
   	

   }

			input

           {

            
            width: 80%;
            height: 5%;
            border: 10px;
            border-radius: 15px;
            padding: 7px 10px 7px 10px;
            margin: 10px 10px 15px 0px;
            box-shadow: 1px 1px 2px 1px blue; 

           }

		</style>

		<link rel="stylesheet" href="../asset/css/styleO.css">
		<!-- <link rel="stylesheet" href="../asset/css/style1O.css">-->

		
	</head>

	<body>  
		

		<?php
          

          require('../Controller/LoginController.php');


		?>



    <div  style="width:fit-content; margin-left:auto; margin-right:auto; text-align: left;">
			
				<tr>
					<td style="border: 2px solid #000; border-collapse: collapse;">
						<?php //include 'Header1.php'?>
					</td>
				</tr>
				<tr>
					<td>
						<div style="max-width:fit-content; margin-left: auto; margin-right:auto">
							<h2 style = "font-size:35px; font-style: bold ; color:green;text-align: center;">LOGIN</h2>

							<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"   onsubmit="return validateForm()" >  

								<!-- <p style = "font-size:25px; font-weight: bold ; color:white"> User Name: </p> <input style = "font-size:15px"  type="text" name="name">
								<span class="error">* <?php //echo $nameErr;?></span>
								<br> 

								<p style = "font-size:25px; font-weight: bold ; color:white"> Password: </p> <input class ="mainDivFormLabel" type="Password" name="pwd">
								<span class="error">* <?php //echo $pwdErr;?></span>
								<br> -->


								<p style = "font-size:25px; font-weight: bold ; color:blue" > User Name: </p>    <input class="mainDivFormLabel" type="text" id = "name" name="name">

								<!-- <p id = "errorMsgName"></p>-->
                                <br>
								<span class="error" id ="errorMsgName"> <?php echo $nameErr;?></span>
								<br> 



								<p style = "font-size:25px; font-weight: bold ; color:blue"> Password: </p>      <input class ="mainDivFormLabel" type="Password" id="pwd" name="pwd">
								<br>
								<span class="error" id = "errorMsgPwd"> <?php echo $pwdErr;?></span>
								<br>

                                

								<input class = "mainDivFormButtonLogin" type="submit" name="submit1" value="Login" action = "Dashboard.php">
								<br>

								
							
								<button class = "mainDivFormButton" type="button" onClick="document.location.href='Signup.php'">Signup</button> 
								
								

								<!-- <input  class = "mainDivFormButtonSignup" type="submit" name="submit2" value="Signup" > -->
								

								<!-- <input class = "mainDivFormButtonBack" type="submit" name="submit3" value="Back" action = "indexO.html"> -->
								<br>
								
								 

								<h2> 

									<a class = "demo" href="ForgotPassword.php"> Forgot Password?</a>

								</h2>
								 

							</form>
							<br><br>

							<?php
								/*echo "<h2>Inputs:</h2>";
								echo "<b>User Name:</b> ".$name;
								echo "<br><br>";
								echo "<b>Password:</b> ".$pwd;
								echo "<br><br>";*/
							?>

						</div>	
					</td>
				</tr>

				<tr>
					<td style="border: 2px solid #000; border-collapse: collapse;">
						<?php include 'Footer.php'?>
					</td>
			



		<div>


	</body>
</html>
