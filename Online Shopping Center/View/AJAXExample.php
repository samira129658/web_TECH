<!DOCTYPE html>
<html>
<head>
	<title> AJAX Example</title>
</head>
<body>

	<h1> AJAX Emample</h1>

	<p id = "t1"> </p>
	<button onclick = "createAjaxRequest()">Click</button>

	<script>

		function createAjaxRequest() 

	{
		
		var xhttp = new XMLHttpRequest();
		xhttp.onreadystatechange = function()
		{
			if(this.readyState == 4 && this.status ==200)
			{
				console.log("Samira");

				document.getElementById('t1').innerHTML = xhttp.responseText;
			}
		}

		xhttp.open("GET", "DataBaseForAJAXExample.php", true);
		xhttp.send();

	}
	</script>

</body>
</html>