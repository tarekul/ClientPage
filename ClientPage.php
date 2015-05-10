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
	    	border:3px solid;
	    	text-align: center;

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
			<td>Welcome, _______________ <input type=submit value=Logout></td>
			
		</tr>

	</table>";
	echo "<nav>
		<input type=submit value=Home>
		<input type=submit value=Browse Products>
		<input type=submit value=Transaction History>
		<input type=submit value=Search Salesperson>
		<input type=submit value=Rate Salesperson>
	</nav>";
	
	echo "<br>";
	echo '<input type="submit" value="Browse Products" style="margin-top:40px; margin-right:170px; margin-bottom:40px; height:100px">';
	echo '<input type="submit" value="Transaction History" style="height:100px">';
	
	echo "<br>";
	echo '<input type="submit" value="Search Salesperson" style="margin-right:150px;height:100px">';
	echo '<input type="submit" value="Rate Salesperson" style="height:100px">';

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