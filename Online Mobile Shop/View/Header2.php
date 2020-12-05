<!DOCTYPE html>
<html>
	<body>
		<table width="1000px" align="center">
			<tr>
				
				<td align="left">


					<img width="350" height="200" src="iPhone1.jpeg" alt="Mobile Shop">

					<img width="350" height="200" src="Note20ultra1.jpg" alt="Mobile Shop">


				</td>

				<td align="middle">

				  

                         <?php

                         require('../Controller/LogoutController.php');

                         ?>


				          <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">

				          	Logged in as <a href="PersonalProfile.php"> <?php echo $_SESSION['name'] ?> </a> or 

                               <!--  <input type="submit" value="Logout" name="Logout" >  -->
                                <input type="submit" value="Logout" name="Logout" >

                            </form>

				   

				</td>

				
			</tr>
		</table>
	</body>
</html>



















