
<html>
<head>
	<style>
		body{
			background-color: #3399FF;
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
		
		
		echo "<table>";
		echo "<tr>";
			echo "<td>Last Name</td>";
			echo "<td>First Name</td>";
			echo "<td>Email</td>";
			echo "<td>Rating</td>";
		echo "</tr>";	
		

		$select='SELECT * FROM users WHERE user_type="Client"';
			$search=$connection->query($select);
			while($row_fetch=mysqli_fetch_array($search)){
				$id=$row_fetch['id'];
				$lastNM=$row_fetch['last_name'];
				$firstNM=$row_fetch['first_name'];
				$email=$row_fetch['email'];
				$rate=$row_fetch['rating'];
				
			
				echo "<tr>";
					echo "<td>".$lastNM."</td>";
					echo "<td><a href=clientProfile.php?id=$id>$firstNM</td>";
					echo "<td>".$email."</td>";
					echo "<td>".$rate."</td>";
					
				echo "</tr>";	
			}		
			echo "</table>";	






	?>
</body>