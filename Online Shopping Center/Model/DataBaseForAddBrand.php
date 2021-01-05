<?php
$brandid = filter_input(INPUT_POST,'brandid');
$brandname = filter_input(INPUT_POST,'brandname');
$brandmodel = filter_input(INPUT_POST,'brandmodel');




if(!empty($brandid))

{

	    if (!empty($brandname))

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



					    $sql = "INSERT INTO addbrand (brandid,brandname,brandmodel) values ('$brandid','$brandname','$brandmodel')";

                         if ($conn->query($sql))

                        {

                        	echo " New Brand Added Successfully";

						     $sql = "SELECT brandid,brandname,brandmodel FROM addbrand"; // Query
							$result = $conn -> query($sql); // result set

							 if($result->num_rows > 0)

							{
									// show result
							echo "<h1> Brand's Information: </h1>";

							echo "<ol>";
							while($row = $result -> fetch_assoc())

							{

                             echo "<br>";
                             echo " Brand ID = " . $row['brandid'];
                             echo "<br>";
                             echo " Brand Name = " . $row['brandname'];
                             echo "<br>";
                             echo "  Brand Model = " . $row['brandmodel'];
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

           	echo " Brand ID must be filled";
           	die();
           }



}


else

{

	 echo "<h2> Please Fill The Necessary Details </h2";


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
