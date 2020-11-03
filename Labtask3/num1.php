<!DOCTYPE HTML>
<html>
	<head>
		<style>
			.error {color: #FF0000;}
		</style>
	</head>
	<body>  

		<?php

			$name = $pwd= "";
			$nameErr= $pwdErr= ""; 

			if ($_SERVER["REQUEST_METHOD"] == "POST") 
			{
				if (empty($_POST["name"])) 
			  	{
			  		$nameErr = "Name is required";
			  	}
			  	else
			  	{
			  		$name = test_input($_POST["name"]);
			  		if (!preg_match("/^[a-zA-Z._-]*$/",$name))
			  		{
			  			$nameErr = "Must be alpha numeric characters, period, dash or underscore";
			  			$name = "";
			  		}
			  		
			  		elseif (strlen($name)<2) 
			  		{
	      				$nameErr = "Must contain at least two (2) characters";
	      				$name = "";
	    			}
			  	}

			  	if (empty($_POST["pwd"])) 
			  	{
			  		$pwdErr = "Password is required";
			  	}
			  	else
			  	{
			  		$pwd = test_input($_POST["pwd"]);	
			  		if (strlen($pwd)<8) 
			  		{
	      				$pwdErr = "Must not be less than eight (8) characters";
	      				$pwd = "";
	    			}
	    			elseif(strpos($_POST["pwd"], "$") == false && strpos($_POST["pwd"], "@") == false && strpos($_POST["pwd"], "%") == false &&strpos($_POST["pwd"], "#") == false)
	    			{
	    				$pwdErr = "Must contain at least one of the special characters (@, #, $, %)";
	    				$pwd = "";
			  		}
			  	}

		  	}

			function test_input($data) 
			{
	 			$data = trim($data);
	 			$data = stripslashes($data);
	  			$data = htmlspecialchars($data);
	  			return $data;
			}

		?>
		<div style="max-width:1000px; margin-left: auto; margin-right:auto">
			<h2>LOGIN</h2>
			<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
				User Name: <input type="text" name="name">
				<span class="error">* <?php echo $nameErr;?></span>
				<br><br>  
				Password: <input type="Password" name="pwd">
				<span class="error">* <?php echo $pwdErr;?></span>
				<br><br>
				<input type="submit" name="submit1" value="Submit">  
			</form>

			<?php
				echo "<h2>Inputs:</h2>";
				echo "<b>User Name:</b> ".$name;
				echo "<br><br>";
				echo "<b>Password:</b> ".$pwd;
			?>
		<div>
	</body>
</html>