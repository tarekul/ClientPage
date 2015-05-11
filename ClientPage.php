<!DOCTYPE html>
<html>
<head>
	<style>
		body{
			background-color: #CCFFFF;
		}
		td{
			padding:30;
			border:1px solid;
			font-size: 30px;
	    }
	    nav{
	    	font-size: 25px;
	    	border:5px solid;
	    	text-align: center;
	    	color:black;
	    	width: 715px;

	    }
	    input{
	    	border:1px solid;
	    	font-style: Times;
	    	font-size: 20px;
	    	background-color: white;
	    }
	    div{
	    	font-size: 50px;
	    	padding-right: 10px;
	    }

	</style>

</head>
<body>
	<?php

	
	
	echo "<img src=http://www.clker.com/cliparts/T/S/B/Y/j/1/client.svg height=120 height=120  />";
	
	echo
	"<table>
		<tr>
			<td>Welcome,____________<input type=submit value=Logout></td>
			
		</tr>

	</table>";
	echo '<nav style="height:42px">';
		echo '<form action="BrowseProduct.php" method="post" style="position:absolute;">';
		echo '<input type="submit" value="Browse Products" style="height:40px">';
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
	
	echo '<form action="BrowseProduct.php" method="post" style="width=171px;height:191px"">';
	echo '<br>';
	echo '<input type="submit" value="Browse Products" style="margin-top:40px; margin-right:170px; margin-bottom:40px; height:100px">';
	echo '</form>';
	
	echo '<form action="TransactionHistory.php" method="post">';
	echo '<input type="submit" value="Transaction History" style="position:absolute;top:280px;left:350px;height:100px">';
	echo '</form>';

	echo "<br>";
	echo '<form action="SearchSalesperson.php" method="post">';
	echo '<input type="submit" value="Search Salesperson" style="margin-right:150px;height:100px">';
	echo '</form>';

	echo '<form action="RateSalesperson.php" method="post">';
	echo '<input type="submit" value="Rate Salesperson" style="position:absolute;top:430px;left:350px;height:100px">';
	echo '</form>';

	echo '<table style="margin:-230px 0px 0px 700px;height:80px">
		<tr>
			<td style="padding-right:75px">Best-Selling Products</td>

		</tr>
	</table>';
	echo '<table style="margin:0px 0px 100px 700px">
		<tr>
			<td>Product1</td>
		</tr>
		<tr>
			<td>Product2</td>
		</tr>
		<tr>
			<td>Product3</td>
		</tr>

	</table>';




?>
</body>
</html>