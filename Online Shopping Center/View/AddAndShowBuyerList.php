<!DOCTYPE HTML>

<html>
<style>
    .error {color: #FF0000;}

    input

           {


            width: 70%;
            height: 5%;
            border: 10px;
            border-radius: 15px;
            padding: 7px 10px 7px 10px;
            margin: 10px 10px 15px 0px;
            box-shadow: 1px 1px 2px 1px blue;

           }

           .mainDivFormButtonLogin{
    /*margin-top: 7%;
    margin-bottom: 40%;
    margin-left: 2px; */
    font-size: 15px;
    font-weight: bold;
    background-color:  #29aa05  ;
    border: none;
    color:white;
    /* padding: 15px 22px; */
    text-decoration: none;
    width:168px;


}

</style>

<head>

    <script src="../asset/javaScript/AddAndShowBuyerListValidation.js"></script>
    <!-- <link rel="stylesheet" href="../asset/css/styleO.css"> -->
    <title>Dashboard</title>

</head>

<body>







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
                                <h2>ADD BUYER</h2>
                            </td>
                        </tr>
                        <form method="post" action="../Model/DataBaseForAddAndShowBuyerList.php" onsubmit="return validateForm()">
                        <tr>



                            <td style="width: fit-content;">

                                <p align="margin-left">



                                    Buyer ID: <br>
                                    <input type="text" id="buyerid" name="buyerid">
                                    <span class="error" id="errorMsgBuyerid"></span>
                                    <br>



                                    Buyer Name: <br>
                                    <input type="text" id="name" name="name">
                                    <span class="error" id="errorMsgName"></span>
                                    <br>


                                    Address : <br>
                                    <input type="text" id="address" name="address">
                                    <span class="error" id="errorMsgAddress"></span>
                                    <br>

                                    Mobile: <br>
                                    <input type="text" id="mobile" name="mobile">
                                    <span class="error" id="errorMsgMobile"></span>
                                    <br>


                                    Email: <br>
                                    <input type="text" id="email" name="email">
                                    <span class="error" id="errorMsgEmail"></span>
                                    <br>


                                    Purchased Product: <br>
                                    <input type="text" id="purchasedmobile" name="purchasedmobile">
                                    <span class="error" id="errorMsgPurchasedMobile"></span>
                                    <br>


                                    <!-- <input type="radio" name="gender" value="Male">Male
                                    <input type="radio" name="gender" value="Female">Female
                                    <input type="radio" name="gender" value="Other">Other
                                    <span class="error">* <?php //echo $genderErr; ?></span>
                                    <br><br> -->










                                    <input class = "mainDivFormButtonLogin" type="submit" name="submit1" value="Add" >
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
