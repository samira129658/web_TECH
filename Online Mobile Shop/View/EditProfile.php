<!DOCTYPE HTML>

<html>
<style>
    .error {color: #FF0000;}
</style>

<head>
    <title>Dashboard</title>

</head>

<body>



  <?php

       require('../Controller/EditProfileController.php');

  ?>
  


    <div style="max-width: fit-content; margin-left: auto; margin-right:auto">
        <table style="width: fit-content; border: 2px solid #000; border-collapse: collapse;">
            <tr>
                <td colspan="2" style="border: 2px solid #000; border-collapse: collapse;">
                    <?php include 'Header2.php'; ?>
                </td>
            </tr>
            <tr>
                <td style="border: 2px solid #000; border-collapse: collapse; " width="20%">
                    <?php include 'Navigationbar.php'; ?>
                </td>
                <td>
                    <table width="75%">
                        <tr>
                            <td colspan="3">
                                <h2>EDIT YOUR PROFILE</h2>
                            </td>
                        </tr>
                        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
                        <tr>
                            <td style="width: fit-content;">

                                <p align="margin-left">

                                    Name : <br>
                                    <br>
                                    E-mail : <br>
                                    <br>
                                    Gender : <br>
                                    <br>
                                    Date of Birth : <br>
                                    <br>
                                    Address : <br>
                                        <br>
                                </p>

                            </td>


                            <td style="width: fit-content;">

                                <p align="margin-left">


                                    <input type="text" name="name"><span class="error">* <?php echo $nameErr; ?></span>
                                    <br><br>


                                    <input type="text" name="email"><span class="error">* <?php echo $emailErr; ?></span>
                                    <br><br>


                                    <input type="radio" name="gender" value="Male">Male
                                    <input type="radio" name="gender" value="Female">Female
                                    <input type="radio" name="gender" value="Other">Other
                                    <span class="error">* <?php echo $genderErr; ?></span>
                                    <br><br>


                                    <input type="date" name="dob"><span class="error">* <?php echo $dobErr; ?></span>
                                    <br><br>

                                    <input type="text" name="address"><span class="error">* <?php echo $addressErr; ?></span>
                                    <br><br>


                                    <input type="submit" name="submit1" value="Submit">
                                    <br><br>


                                </p>
                            </td>


                        </tr>

                        
                        </form>


                        <tr>
                            <td colspan="3">

                                <?php

								//echo "<h2>Inputs:</h2>";
								//echo "<b>Name:</b> ".$name;
								//echo "<br><br>";
								//echo "<b>E-mail:</b> ".$email;
								//echo "<br><br>";
								//echo "<b>Gender:</b> ".$gender;
								//echo "<br><br>";
								//echo "<b>Date of Birth:</b> ".$dob;
								//echo "<br><br>";
                                //echo "<b>Address:</b> ".$address;
                                //echo "<br><br>";

							    ?>

                            </td>
                        </tr>


                    </table>
                </td>
            </tr>

            <tr>
                <td colspan="2" style="border: 2px solid #000; border-collapse: collapse;">
                    <?php include 'Footer.php'; ?>
                </td>
            </tr>

        </table>
        <div>
</body>

</html>