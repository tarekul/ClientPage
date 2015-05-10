<html>
<head>
	<style>
		body{
			background-color: #CCFFFF;
		}
		table{
			border:1px solid black;
			
		}
        th,td{
            border: 1px solid black;
            padding: 10px;
        }
     </style>
</head>
<body>
	<?php
		$connection = new mysqli("localhost","root","root","S1533608");
		
		echo $Salesperson;
		echo "<table>";
		echo "<tr>";
			echo "<td>Last Name</td>";
			echo "<td>First Name</td>";
			echo "<td>Email</td>";
			echo "<td>Rating</td>";
		echo "</tr>";	
		

		$select='SELECT * FROM UsersWarehouse WHERE Type="Salesperson"';
			$search=$connection->query($select);
			while($row_fetch=mysqli_fetch_array($search)){
				$lastNM=$row_fetch['LastName'];
				$firstNM=$row_fetch['FirstName'];
				$email=$row_fetch['Email'];
				$rate=$row_fetch['Rating'];
				
			
				echo "<tr>";
					echo "<td>".$lastNM."</td>";
					echo "<td><a href=SalespersonProfile.php?first=$firstNM>$firstNM</td>";
					echo "<td>".$email."</td>";
					echo "<td>".$rate."</td>";
					
				echo "</tr>";	
			}		
			echo "</table>";	






	?>
</body>