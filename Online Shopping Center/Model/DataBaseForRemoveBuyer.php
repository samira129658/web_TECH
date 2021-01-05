<?php
$buyerid = filter_input(INPUT_POST,'buyerid');
$name = filter_input(INPUT_POST,'name');
$address = filter_input(INPUT_POST,'address');
$mobile = filter_input(INPUT_POST,'mobile');
$email = filter_input(INPUT_POST,'email');
$purchasedmobile = filter_input(INPUT_POST,'purchasedmobile');



if(!empty($buyerid))

{





                    $servername = "localhost";
					$dbusername = "root";
					$dbpassword = "";
					$dbname = "mobileshop";


					$conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);

					if($conn -> connect_error)

						{
							die("Error in Data Base Connection: " . $conn -> connect_error);
						}

					else

					{
							echo "<h3> Data Base Connection Successful </h3>";



					    /* $sql = "INSERT INTO addandshowbuyerlist (buyerid,name,address,mobile,email,purchasedmobile) values ('$buyerid','$name','$address','$mobile','$email', '$purchasedmobile')"; */

					    $sql = "DELETE FROM addandshowbuyerlist WHERE buyerid='".$buyerid."'";

                         if ($conn->query($sql))

                        {

                        	echo "Buyer Removed Successfully";

						     $sql = "SELECT buyerid,name,address,mobile,email,purchasedmobile FROM addandshowbuyerlist"; // Query
							$result = $conn -> query($sql); // result set

							 if($result->num_rows > 0)

							{
									// show result
							echo "<h1> Buyer's Information: </h1>";

							echo "<ol>";
							while($row = $result -> fetch_assoc())

							{

                             echo "<br>";
                             echo " Buyer ID = " . $row['buyerid'];
                             echo "<br>";
                             echo " Name = " . $row['name'];
                             echo "<br>";
                             echo "  Address = " . $row['address'];
                             echo "<br>";
                             echo "  Mobile = " . $row['mobile'];
                             echo "<br>";
                             echo " Email = " . $row['email'];
                             echo "<br>";
                             echo "  Purchased Product= " . $row['purchasedmobile'];
                             echo "<br>";



							}


							echo "</ol>";
							echo "<br>";

								}

							else
								{
									echo "<p> Result is zero</p>";
								}


                        }

                            else

                           {

                        	/* echo " No Records Uploaded.....  Error is : ".$sql ."<br>"; */

                        	echo " No Record Uploaded....."."<br>";

                           }





                           $conn->close();

                    }




}


else

{

	 echo "<h2> Buyer ID Must Be Filled </h2";


	die();
}



 ?>




 <br><br>

   <div style="width:fit-content; margin-left:auto; margin-right:auto; text-align: left;">
			<table style="width: auto; border: 2px solid #000; border-collapse: collapse;">


 <button style="color:green; font-size:17px; font-weight: bold" type="button" onClick="document.location.href='../View/Dashboard.php'">Back</button>
&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp




</table>

<div>
