<!DOCTYPE HTML>
<html>
<head>
	<style>
		.error {color: #FF0000;}
	</style>
</head>
<body>

	<?php

		$email= $dob= $gender= $SSC= $HSC= $BSc= $MSc= $bgrp="";

		if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["submit1"]))
		{
		  	$email = test_input($_POST["email"]);
		  	$dob = test_input($_POST["dob"]);

		  	if (empty($_POST["gender"]))
		  	{
		  		$gender = "";
		  	}
		  	else
		  	{
		  		$gender = test_input($_POST["gender"]);
		  	}

		  	if (empty($_POST["SSC"]))
		  	{
		  		$SSC = "";
		  	}
		  	else
		  	{
		  		$SSC = test_input($_POST["SSC"]);
		  	}
		  	if (empty($_POST["HSC"]))
		  	{
		  		$HSC = "";
		  	}
		  	else
		  	{
		  		$HSC = test_input($_POST["HSC"]);
		  	}
		  	if (empty($_POST["BSc"]))
		  	{
		  		$BSc = "";
		  	}
		  	else
		  	{
		  		$BSc = test_input($_POST["BSc"]);
		  	}
		  	if (empty($_POST["MSc"]))
		  	{
		  		$MSc = "";
		  	}
		  	else
		  	{
		  		$MSc = test_input($_POST["MSc"]);
		  	}

		  	$bgrp = test_input($_POST["bgrp"]);

		}

		function test_input($data)
		{
 			$data = trim($data);
 			$data = stripslashes($data);
  			$data = htmlspecialchars($data);
  			return $data;
		}

	?>

	<h2>Form without validation (1-5)</h2>
	<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
		<b>1. </b>E-mail: <input type="text" name="email">
		<br><br>
		<b>2. </b>Date of Birth: <input type="date" name="dob">
		<br><br>
		<b>3. </b>Gender:
		<input type="radio" name="gender" value="Female">Female
		<input type="radio" name="gender" value="Male">Male
		<input type="radio" name="gender" value="Other">Other
		<br><br>
		<b>4. </b>Degree(s):
		<input type="checkbox" name="SSC" value="SSC">SSC
		<input type="checkbox" name="HSC" value="HSC">HSC
		<input type="checkbox" name="BSc" value="BSc">BSc
		<input type="checkbox" name="MSc" value="MSc">MSc
		<br><br>
		<b>5. </b>Blood Group:
		<select name="bgrp">
			<option></option>
			<option value="A+">A+</option>
	    	<option value="A-">A-</option>
	    	<option value="B+">B+</option>
	    	<option value="B-">B-</option>
	    	<option value="O+">O+</option>
	    	<option value="O-">O-</option>
	    	<option value="AB+">AB+</option>
	    	<option value="AB-">AB-</option>
		</select>
		<br><br>
		<input type="submit" name="submit1" value="Submit">
	</form>

	<?php
		echo "<h2>Inputs:</h2>";
		echo "<b>E-mail:</b> ".$email;
		echo "<br><br>";
		echo "<b>Date of Birth:</b> ".$dob;
		echo "<br><br>";
		echo "<b>Gender:</b> ".$gender;
		echo "<br><br>";
		echo "<b>Degree(s):</b> ".$SSC." ".$HSC." ".$BSc." ".$MSc;
		echo "<br><br>";
		echo "<b>Blood Group:</b> ".$bgrp;
		echo "<br><br>";
	?>

	<!------------------------------------------------------------------->

	<?php

		$nameErr= $emailErr= $dobErr= $genderErr= $degreeErr= $bgrpErr= "";
		$month = $day = $year ="";
		$name= $vemail= $vdob= $vgender= $vSSC= $vHSC= $vBSc= $vMSc= $vbgrp= "";
		$degree = array();

		if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["submit2"]))
		{
			if (empty($_POST["name"]))
		  	{
		  		$nameErr = "Name is required";
		  	}
		  	else
		  	{
		  		$name = test_input($_POST["name"]);
		  		if (str_word_count($name)<2)
		  		{
		  			$nameErr = "Must contain at least two words";
		  			$name = "";
		  		}
		  		else
		  		{
		  			if (!preg_match("/^[a-zA-Z]/",$name))
		  			{
      					$nameErr = "Must start with a letter";
      					$name = "";
    				}
    				else
    				{
    					if (!preg_match("/^[a-zA-Z -]*$/",$name))
    					{
    						$nameErr = "Must be letters or periods or dashs";
    						$name = "";
    					}
    				}

		  		}
		  	}

			if (empty($_POST["vemail"]))
		  	{
		  		$emailErr = "E-mail is required";
		  	}
		  	else
		  	{
		  		$vemail = test_input($_POST["vemail"]);
		  		if (!filter_var($vemail, FILTER_VALIDATE_EMAIL))
		  		{
  					$emailErr = "Invalid email format";
  					$vemail = "";
  				}
  			}

  			if (empty($_POST["vdob"]))
		  	{
		  		$dobErr = "Date of Birth is required";
		  	}
		  	else
		  	{
		  		$vdob = test_input($_POST["vdob"]);
		  		$month = date('m', strtotime($vdob));
		  		$day = date('d', strtotime($vdob));
		  		$year = date('Y', strtotime($vdob));
		  		if (($day>=1 && $day<=31) && ($month>=1 && $month<=12) && ($year>=1953 && $year<=1998))
		  		{
		  			$vdob = test_input($_POST["vdob"]);
		  		}
		  		else
		  		{
		  			$dobErr = "Invalid Date (Year must be between 1953-1998)";
		  			$vdob = "";
		  		}
  			}

		  	if (empty($_POST["vgender"]))
		  	{
		  		$genderErr = "Gender is required";
		  	}
		  	else
		  	{
		  		$vgender = test_input($_POST["vgender"]);
		  	}


		  	if(isset($_POST["degree"]))
		  	{
		  		$count = 0;
		  		$values = $_POST["degree"];
		  		$count = count($values);

		  		if ($count < 2)
		  		{
		  			$degreeErr = "Minimum two checkbox have to be selected";
		  		}
		  		else
		  		{
		  			$degree = $_POST["degree"];
		  		}

		  	}
		  	else
		  	{
		  		$degreeErr = "Degrees required";
		  	}

		  	if (empty($_POST["vbgrp"]))
		  	{
		  		$bgrpErr = "Blood Group required";
		  	}
		  	else
		  	{
		  		$vbgrp = test_input($_POST["vbgrp"]);
		  	}

		}

	?>

	<h2>Form with validation (6-11)</h2>
	<p><span class="error">* required field</span></p>
	<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
		<b>6. </b>Name: <input type="text" name="name">
		<span class="error">* <?php echo $nameErr;?></span>
		<br><br>
		<b>7. </b>E-mail: <input type="text" name="vemail">
		<span class="error">* <?php echo $emailErr;?></span>
		<br><br>
		<b>8. </b>Date of Birth: <input type="date" name="vdob">
		<span class="error">* <?php echo $dobErr;?></span>
		<br><br>
		<b>9. </b>Gender:
		<input type="radio" name="vgender" value="Male">Male
		<input type="radio" name="vgender" value="Female">Female
		<input type="radio" name="vgender" value="Other">Other
		<span class="error">* <?php echo $genderErr;?></span>
		<br><br>
		<b>10. </b>Degree(s):
		<input type="checkbox" name="degree[]" value="HSC">HSC
		<input type="checkbox" name="degree[]" value="SSC">SSC
		<input type="checkbox" name="degree[]" value="BSc">BSc
		<input type="checkbox" name="degree[]" value="MSc">MSc
		<span class="error">* <?php echo $degreeErr;?></span>
		<br><br>
		<b>11. </b>Blood Group:
		<select name="vbgrp">
			<option></option>
			<option value="A+">A+</option>
	    	<option value="A-">A-</option>
	    	<option value="B+">B+</option>
	    	<option value="B-">B-</option>
	    	<option value="O+">O+</option>
	    	<option value="O-">O-</option>
	    	<option value="AB+">AB+</option>
	    	<option value="AB-">AB-</option>
		</select>
		<span class="error">* <?php echo $bgrpErr;?></span>
		<br><br>
		<input type="submit" name="submit2" value="Submit">
	</form>

	<?php
		echo "<h2>Inputs:</h2>";
		echo "<b>Name:</b> ".$name;
		echo "<br><br>";
		echo "<b>E-mail:</b> ".$vemail;
		echo "<br><br>";
		echo "<b>Date of Birth:</b> ".$vdob;
		echo "<br><br>";
		echo "<b>Gender:</b> ".$vgender;
		echo "<br><br>";
		echo "<b>Degree(s):</b>" ;
		foreach ($degree as $val)
		{
			echo $val." ";
		}
		echo "<br><br>";
		echo "<b>Blood Group:</b> ".$vbgrp;
		echo "<br><br>";
	?>
</body>
</html>
