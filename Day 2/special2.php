<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method = "GET" action = "special2.php">
		<input type = 'text' name = 'side1' placeholder="Enter Side">
		<br>
		<input type = 'text' name = 'side2' placeholder="Enter Side">
		<br>
		<input type = 'text' name = 'side3' placeholder="Enter Side">
		<br>
		<input type="submit" name="submit">
		<br>

	</form>

	<?php
		if(isset($_GET['submit'])){
			$side1 = $_GET['side1'];
			$side2 = $_GET['side2'];
			$side3 = $_GET['side3'];


			if ($side1 == $side2 && $side2 == $side3){
				echo "Triangle is equilateral";
			}
			else if ($side1 == $side2 or $side2 == $side3 or $side1 == $side3){
				echo "Triangle is isoceles";
			}

			else{
				echo "Triangle is Scalene";

			}
		}

	?>



</body>
</html>