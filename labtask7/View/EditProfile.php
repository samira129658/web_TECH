<!DOCTYPE HTML>

<html>
<style>
    .error {color: #FF0000;}

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

<head>

    <script src="../asset/javaScript/EditProfileValidation.js"></script>
    <link rel="stylesheet" href="../asset/css/styleO.css">
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
                        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"  onsubmit="return validateForm()"> 
                        <tr>
                            


                            <td style="width: fit-content;">

                                <p align="margin-left">


                                    Name: <br>
                                    <input type="text" name="name">
                                    <span class="error" id="errorMsgName">* <?php echo $nameErr; ?></span>
                                    <br>


                                    Email: <br>
                                    <input type="text" name="email">
                                    <span class="error" id="errorMsgEmail">* <?php echo $emailErr; ?></span>
                                    <br>


                                    <!-- <input type="radio" name="gender" value="Male">Male
                                    <input type="radio" name="gender" value="Female">Female
                                    <input type="radio" name="gender" value="Other">Other
                                    <span class="error">* <?php //echo $genderErr; ?></span>
                                    <br><br> -->


                                    Date of Birth : <br>
                                    <input type="date" name="dob">
                                    <span class="error" id="errorMsgDOB">* <?php echo $dobErr; ?></span>
                                    <br>


                                    Address : <br>
                                    <input type="text" name="address">
                                    <span class="error" id="errorMsgAddress">* <?php echo $addressErr; ?></span>
                                    <br>


                                    

                                    <input class = "mainDivFormButtonLogin" type="submit" name="submit1" value="Submit" >
                                    <br>


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
                    <?php include 'Footer2.php'; ?>
                </td>
            </tr>

        </table>
        <div>
</body>

</html>