<!DOCTYPE html>
<html>
	<body>
		<div style="max-width:1000px; margin-left: auto; margin-right:auto">
			<img style="border: 3px solid #555 " width="200"height="200" src="Profile.png" alt="Profile Icon">
			<br><br>
			<form  action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"method="post" enctype="multipart/form-data">
				<input type="file" name="fileToUpload" id="fileToUpload">
				<br><br>
				<input type="submit" value="Submit" name="submit">
			</form>
			<br>
            <h2>Output:</h2>

			<?php
				$target_dir = "uploads/";
				$uploadOk = 1;
				
				if ($_SERVER["REQUEST_METHOD"] == "POST")
				{
					$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
					$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

					if (empty($_FILES["fileToUpload"]["name"]))
					{
						echo "Please select a file to upload.";
						$uploadOk = 0;
					}
					elseif($imageFileType != "jpeg" && $imageFileType != "jpg" && $imageFileType != "png" ) 
					{
					  echo "Sorry, only JPEg, JPG & PNG files are allowed.";
					  $uploadOk = 0;
					}
					elseif ($_FILES["fileToUpload"]["size"] > 4000000) 
					{
					  echo "Sorry, your file is too large. Picture size should not be more than 4MB.";
					  $uploadOk = 0;
					}
					elseif (file_exists($target_file)) 
					{
					  echo "Sorry, file already exists.";
					  $uploadOk = 0;
					}
					if ($uploadOk == 0) 
					{
					  echo "<br>Your file was not uploaded.";

					} 
					else 
					{
					  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) 
					  {
					    echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
					  } 
					  else
					  {
					    echo "Sorry, there was an error uploading your file.";
					  }
					}
				}
			?>
		<div>
	</body>
</html>
