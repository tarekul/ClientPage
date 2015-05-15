
<html>
<head>
	<style>
		body{
			background-color:#3399FF;
		}
		div{
			text-align: center;
		}

	</style>
	</head>
<body>
	<?php
	$connection = new mysqli('localhost', 'root', 'root', 'S1533608'); //CHANGE THIS

		echo '<form action="SearchSalesperson.php">';  //CHANGE THIS TO SearchClient.php
		echo '<div><input type = "submit" name = "search" style = "width: 400px; height:100px; text-align: center;" value = "Back To Search"></div>';
		echo '</form>';
		echo '<form action="ClientPage.php">';  //CHANGE THIS TO UR HOMEPAGE.
		echo '<div><input type = "submit" name = "home" style = "width: 400px; height:100px; text-align: center;" value = "Home"></div>';
		echo '</form>';
		echo "<br>";
		$IDholder=$_GET['id'];
		$update_comp = "UPDATE users SET complaint = complaint+1 WHERE id=".$IDholder;
		$connection->query($update_comp);
		echo "<h1 style=text-align:center>A Complained has been sent to Director, Harper Cadman!<h1><br>";
		
		
		echo '</form>';
	?>
		
</body>
	</html>




		

