<!DOCTYPE html>
<html>
	<head>
		<style>
		body{
			background-color:#3399FF;
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
			
			echo '<nav style="height:42px">';
				echo '<form action="ClientPage.php" method="post" style="position:absolute;left:100px">';
				echo '<input type="submit" value="Home" style="height:40px">';
				echo '</form>';

				echo '<form action="TransactionHistory.php" method="post" style="position:absolute;left:180px">';
				echo '<input type="submit" value="Transaction History" style="height:40px">';
				echo '</form>';

				echo '<form action="SearchSalesperson.php" method="post" style="position:absolute;left:365px">';
				echo '<input type="submit" value="Search Salesperson" style="height:40px">';
				echo '</form>';

				echo '<form action="RateSalesperson.php" method="post" style="width:193px;position:absolute;left:545px">';
				echo '<input type="submit" value="Rate Salesperson" style="height:40px">';
				echo '</form>';
			echo "</nav>";



			echo '<h1 style="position:absolute;top:20px;left:160px;width=500px;">Dairy Products</h1>';

			echo '<table style="position:absolute;top:90px;left:50px">';
				echo "<tr>
						<td>Product ID</td>
						<td>Product Name</td>
						<td>Type</td>
						<td>Price</td>
						<td>Amount Remaining</td>
					</tr>";	


			$select='SELECT * FROM Products WHERE Type="Dairy"';
			$search=$connection->query($select);
			while($row_fetch=mysqli_fetch_array($search)){
				$prodID=$row_fetch['ProductID'];
				$prodNM=$row_fetch['ProductName'];
				$type=$row_fetch['Type'];
				$price=$row_fetch['Price'];
				$left=$row_fetch['#remaining'];

				echo "<tr>";
					echo "<td>".$prodID."</td>";
					echo "<td>".$prodNM."</td>";
					echo "<td>".$type."</td>";
					echo "<td>".$price."</td>";
					echo "<td>".$left."</td>";
				echo "</tr>";	
			}		
			echo '</table>';

			echo '<h1 style="position:absolute;top:20px;right:500px;width=500px">FruitProducts</h1>';
			echo '<table style="position:absolute;top:90px;right:300px">';
				echo "<tr>
						<td>Product ID</td>
						<td>Product Name</td>
						<td>Type</td>
						<td>Price</td>
						<td>Amount Remaining</td>
					</tr>";	


			$select='SELECT * FROM Products WHERE Type="Fruit"';
			$search=$connection->query($select);
			while($row_fetch=mysqli_fetch_array($search)){
				$prodID=$row_fetch['ProductID'];
				$prodNM=$row_fetch['ProductName'];
				$type=$row_fetch['Type'];
				$price=$row_fetch['Price'];
				$left=$row_fetch['#remaining'];

				echo "<tr>";
					echo "<td>".$prodID."</td>";
					echo "<td>".$prodNM."</td>";
					echo "<td>".$type."</td>";
					echo "<td>".$price."</td>";
					echo "<td>".$left."</td>";
				echo "</tr>";	
			}		
			echo '</table>'; 


			echo '<h1 style="position:absolute;top:380px;left:160px;width=500px" >Vegetables</h1>';

			echo '<table style="position:absolute;top:480px;left:50px">';
				echo "<tr>
						<td>Product ID</td>
						<td>Product Name</td>
						<td>Type</td>
						<td>Price</td>
						<td>Amount Remaining</td>
					</tr>";	


			$select='SELECT * FROM Products WHERE Type="Vegetable"';
			$search=$connection->query($select);
			while($row_fetch=mysqli_fetch_array($search)){
				$prodID=$row_fetch['ProductID'];
				$prodNM=$row_fetch['ProductName'];
				$type=$row_fetch['Type'];
				$price=$row_fetch['Price'];
				$left=$row_fetch['#remaining'];

				echo "<tr>";
					echo "<td>".$prodID."</td>";
					echo "<td>".$prodNM."</td>";
					echo "<td>".$type."</td>";
					echo "<td>".$price."</td>";
					echo "<td>".$left."</td>";
				echo "</tr>";	
			}		
			echo '</table>';

			echo '<h1 style="position:absolute;top:380px;right:500px;width=500px">	Soup Products</h1>';
			echo '<table style="position:absolute;top:480px;right:240px">';
				echo "<tr>
						<td>Product ID</td>
						<td>Product Name</td>
						<td>Type</td>
						<td>Price</td>
						<td>Amount Remaining</td>
					</tr>";	


			$select='SELECT * FROM Products WHERE Type="Soup"';
			$search=$connection->query($select);
			while($row_fetch=mysqli_fetch_array($search)){
				$prodID=$row_fetch['ProductID'];
				$prodNM=$row_fetch['ProductName'];
				$type=$row_fetch['Type'];
				$price=$row_fetch['Price'];
				$left=$row_fetch['#remaining'];

				echo "<tr>";
					echo "<td>".$prodID."</td>";
					echo "<td>".$prodNM."</td>";
					echo "<td>".$type."</td>";
					echo "<td>".$price."</td>";
					echo "<td>".$left."</td>";
				echo "</tr>";	
			}		
			echo '</table>';



		?>


	</body>
</html>
