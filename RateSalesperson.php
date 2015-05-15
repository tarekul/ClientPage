
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
		
		echo $Salesperson;
		echo "<table>";
		echo "<tr>";
			echo "<td>Last Name</td>";
			echo "<td>First Name</td>";
			echo "<td>Email</td>";
			echo "<td>Rating</td>";
			echo "<td>Complain</td>";
			echo "<td>Status</td>";
			
		echo "</tr>";	
		

		$select='SELECT * FROM users WHERE user_type="Salesperson"';
			$search=$connection->query($select);
			while($row_fetch=mysqli_fetch_array($search)){
				$id=$row_fetch['id'];
				$lastNM=$row_fetch['last_name'];
				$firstNM=$row_fetch['first_name'];
				$email=$row_fetch['email'];
				$rate=$row_fetch['rating'];
				$com=$row_fetch['complaint'];
				
			
				echo "<tr>";
					echo "<td>".$lastNM."</td>";
					if($com<9){
					echo "<td><a href=Salesp_homepage.php?id=$id>$firstNM</td>";
					echo "<td>".$email."</td>";
					echo "<td>".$rate."</td>";
					echo "<td>".$com."</td>";
					echo "<td>Available</td>";
				}
					else if($com>=9){
						echo "<td>".$firstNM."</td>";
						echo "<td>".$email."</td>";
						echo "<td>".$rate."</td>";
						echo "<td>".$com."</td>";
						echo "<td>BlackListed</td>";
					}
					
					
				echo "</tr>";	
			}		
			echo "</table>";	

			echo '<form action="ClientPage.php" method="post" style="position:absolute;left:100px">';
				echo '<input type="submit" value="Home" style="height:40px">';
				echo '</form>';






	?>
</body>