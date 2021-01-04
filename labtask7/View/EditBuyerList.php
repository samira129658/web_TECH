<!DOCTYPE HTML>

<html>
<style>
    .error {color: #FF0000;}
</style>

<head>

    <link rel="stylesheet" href="../asset/css/styleO.css">
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


                        

                        <font color = "green" : align = middle> <h2>Edit Buyer List</h2> </font>



                        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
                        <tr>
                            <td style="width: fit-content;">

                                <p align="margin-left">

                                    
                                <font color = "blue" : align = left> <h2>1. Name : AAA</h2> </font>
                                    

                                    <button class = "mainDivFormButton" type="button" onClick="document.location.href='EditBuyerDone.php'">Add  </button>  
                                    &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
                                    <button class = "mainDivFormButtonRemoveTrain" type="button" onClick="document.location.href='EditBuyerNotDone.php'">Remove</button>
                                     <br><br>



                                <font color = "blue" : align = left> <h2>2. Name : BBB</h2> </font>

                                    <button class = "mainDivFormButton" type="button" onClick="document.location.href='EditBuyerDone.php'">Add  </button>  
                                    &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
                                    <button class = "mainDivFormButtonRemoveTrain" type="button" onClick="document.location.href='EditBuyerNotDone.php'">Remove</button>

                                     <br><br>



                                <font color = "blue" : align = left> <h2>3. Name : CCC</h2> </font>

                                    <button class = "mainDivFormButton" type="button" onClick="document.location.href='EditBuyerDone.php'">Add  </button>  
                                    &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
                                    <button class = "mainDivFormButtonRemoveTrain" type="button" onClick="document.location.href='EditBuyerNotDone.php'">Remove</button>
                                     <br><br>




                                <font color = "blue" : align = left> <h2>4. Name : DDD</h2> </font>

                                    <button class = "mainDivFormButton" type="button" onClick="document.location.href='EditBuyerDone.php'">Add  </button>  
                                    &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
                                    <button class = "mainDivFormButtonRemoveTrain" type="button" onClick="document.location.href='EditBuyerNotDone.php'">Remove</button>

                                     <br><br>

                               </p>

                            </td>


                        </tr>

                       
                        </form>

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