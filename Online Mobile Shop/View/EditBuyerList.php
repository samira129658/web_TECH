<!DOCTYPE HTML>

<html>
<style>
    .error {color: #FF0000;}
</style>

<head>
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


                        

                        <font color = "red" : align = left> <h2>Edit Buyer List</h2> </font>



                        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
                        <tr>
                            <td style="width: fit-content;">

                                <p align="margin-left">

                                    

                                    1. Name : AAA <br> 

                                    <button type="button" onClick="document.location.href='EditBuyerDone.php'">Add  </button>  
                                    
                                    <button type="button" onClick="document.location.href='EditBuyerNotDone.php'">Remove</button>

                                     <br><br>


                                    2. Name : BBB <br> 

                                    <button type="button" onClick="document.location.href='EditBuyerDone.php'">Add</button>

                                      <button type="button" onClick="document.location.href='EditBuyerNotDone.php'">Remove</button>

                                     <br><br>


                                    3. Name : CCC <br> 

                                    <button type="button" onClick="document.location.href='EditBuyerDone.php'">Add</button>

                                      <button type="button" onClick="document.location.href='EditBuyerNotDone.php'">Remove</button>

                                     <br><br>


                                    4. Name : DDD  <br> 
                                    <button type="button" onClick="document.location.href='EditBuyerDone.php'">Add</button>

                                      <button type="button" onClick="document.location.href='EditBuyerNotDone.php'">Remove</button>

                                     <br><br>


                                    5. Name : EEE  <br> 

                                    <button type="button" onClick="document.location.href='EditBuyerDone.php'">Add</button> 
                                    
                                      <button type="button" onClick="document.location.href='EditBuyerNotDone.php'">Remove</button>

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
                    <?php include 'Footer.php'; ?>
                </td>
            </tr>

        </table>
        <div>



</body>

</html>