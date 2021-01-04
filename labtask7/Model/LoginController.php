<?php

			$name = $pwd= "";
			$nameErr= $pwdErr= ""; 

			if ($_SERVER["REQUEST_METHOD"] == "POST") 


			{
				
				$counter = 0;


                if (isset($_POST["name"]) & !empty($_POST["name"])) 

                  {


   		          $name = $_POST["name"];


  		           }

  		           else

                  {

  			        $counter = $counter + 1;

  		           }


  		           if (isset($_POST["pwd"]) & !empty($_POST["pwd"])) 

                      {

   		             $pwd = $_POST["pwd"];

  		                }

  		                else 

                         {

  			            $counter = $counter + 1;

  		             }

  		             $userFound = false;

                   $myfile = fopen("../Data/LoginData.txt", "r") or die("Unable to open file!");

                   //$myfile = fopen("/WEB TECH CODES PHP/MID TERM/False Railway/Data/LoginData.txt", "r") or die("Unable to open file!");
                   	echo "hello";


                  	while ($line = fgets($myfile)) 

                    {

				        		$words = explode(",",$line);
				        		$val1=strcmp($name,$words[2]);
				        		$val2=strcmp($pwd."\n",$words[3]);
				        		echo $val1;
				        		echo $val2;

				        		if(strcmp($name,$words[2]) == 0 && strcmp($pwd."\n",$words[3]) == 0 ) 

				                    {

				        			$userFound = true;

				        	 	    }

				        	 	    


      		        }

      		        fclose($myfile);

			      		        if($userFound == false)

			                   {

			      			     $counter = $counter + 1;

			      		      }


				      		      if($counter == 0) 

				                 {

				      			   echo "<p>Login Successful</p>";

				      			   //echo "<a href='../View/Dashboard.php'>Home</a>";



    

												session_start();
												$_SESSION['name']=$name;




				      			   header('Location: ../View/Dashboard.php');
                       

				      		     }

               

				               else 

				               {
						      			echo "Login Unsuccessful";
						      			echo "Try Again";
						      			header('Location: ../View/LoginFailed.php');

						      			echo "Login Unsuccessful";
						      			echo "Try Again";
						      			
				      		    }

      	}









				/*if (empty($_POST["name"])) 
			  	{
			  		$nameErr = "Name is Required";
			  	}

			  	else
			  	{
			  		$name = test_input($_POST["name"]);

			  		if (strlen($name)<3) 

			  		{
	      				$nameErr = "Name Must be greater then 3 letters";
	      				$pwd = "";
	    			}
			  
			  	}

			  	if (empty($_POST["pwd"])) 

			  	{
			  		$pwdErr = "Password is required";
			  	}

			  	else
			  	{
			  		$pwd = test_input($_POST["pwd"]);

			  		
	    			
			  	}
		  	}


			function test_input($data) 

			{
	 			$data = trim($data);
	 			$data = stripslashes($data);
	  			$data = htmlspecialchars($data);
	  			return $data;
			}


           if( !empty($_POST["name"]) && !empty($_POST["pwd"]) )

           {


                    if ( $name == Fahim && $pwd == 123 )

                    {
                        
                        header('Location: Dashboard.php');
                        exit;

                    }

                    else
                        {
                        	header('Location: LoginFailed.php');
                             exit;
                        }

                        
           } */



		?>