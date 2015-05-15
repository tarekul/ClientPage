
<!doctype html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<!-- Apple devices fullscreen -->
	<meta name="apple-mobile-web-app-capable" content="yes" />
	<!-- Apple devices fullscreen -->
	<meta names="apple-mobile-web-app-status-bar-style" content="black-translucent" />

	<title>FLAT - Blank Page</title>

	<!-- Bootstrap -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<!-- jQuery UI -->
	<link rel="stylesheet" href="css/plugins/jquery-ui/smoothness/jquery-ui.css">
	<link rel="stylesheet" href="css/plugins/jquery-ui/smoothness/jquery.ui.theme.css">
	<!-- Theme CSS -->
	<link rel="stylesheet" href="css/style.css">
	<!-- Color CSS -->
	<link rel="stylesheet" href="css/themes.css">


	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>

	<!-- Nice Scroll -->
	<script src="js/plugins/nicescroll/jquery.nicescroll.min.js"></script>
	<!-- imagesLoaded -->
	<script src="js/plugins/imagesLoaded/jquery.imagesloaded.min.js"></script>
	<!-- jQuery UI -->
	<script src="js/plugins/jquery-ui/jquery.ui.core.min.js"></script>
	<script src="js/plugins/jquery-ui/jquery.ui.widget.min.js"></script>
	<script src="js/plugins/jquery-ui/jquery.ui.mouse.min.js"></script>
	<script src="js/plugins/jquery-ui/jquery.ui.resizable.min.js"></script>
	<script src="js/plugins/jquery-ui/jquery.ui.sortable.min.js"></script>
	<!-- slimScroll -->
	<script src="js/plugins/slimscroll/jquery.slimscroll.min.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Bootbox -->
	<script src="js/plugins/bootbox/jquery.bootbox.js"></script>
	<!-- Bootbox -->
	<script src="js/plugins/form/jquery.form.min.js"></script>
	<!-- Validation -->
	<script src="js/plugins/validation/jquery.validate.min.js"></script>
	<script src="js/plugins/validation/additional-methods.min.js"></script>

	<!-- Theme framework -->
	<script src="js/eakroko.min.js"></script>
	<!-- Theme scripts -->
	<script src="js/application.min.js"></script>
	<!-- Just for demonstration -->
	<script src="js/demonstration.min.js"></script>

	<!--[if lte IE 9]>
		<script src="js/plugins/placeholder/jquery.placeholder.min.js"></script>
		<script>
			$(document).ready(function() {
				$('input, textarea').placeholder();
			});
		</script>
	<![endif]-->

	<!-- Favicon -->
	<link rel="shortcut icon" href="img/favicon.ico" />
	<!-- Apple devices Homescreen icon -->
	<link rel="apple-touch-icon-precomposed" href="img/apple-touch-icon-precomposed.png" />

</head>

<body>
	<div id="navigation">
		<div class="container-fluid">
			<a href="#" id="brand">WAREHOUSE Product Ordering System</a>
			
			<ul class='main-nav'>
				<li>
					<a href="BrowseProduct.php">
						<span>Browse Products</span>
					</a>
				</li>
				<li>
					<a href="SearchSalesperson.php">
						<span>Search Salesperson</span>
					</a>
				</li>
				<li>
					<a href="RateSalesperson.php">
						<span>Rate Salesperson</span>
					</a>
				</li>
				
			</ul>
			<div class="user">  
				<div class="dropdown">

					<a href="#" class='dropdown-toggle' data-toggle="dropdown">John Doe
						<img src="img/demo/user-avatar.jpg" alt="">
					</a>
					<ul class="dropdown-menu pull-right">
						<li>
							<a href="more-login.html">Sign out</a> 
						</li>
					</ul>
				</div>
			</div>
	</div>
		</div>
	
		<div id="main">
			<div class="container-fluid">
				<div class="page-header">
					<div class="pull-left">
						<h1>Welcome!</h1>
					</div>
					<div class="pull-right">
						
						<ul class="stats">
							
							<li class='lightred'>
								<i class="fa fa-calendar"></i>
								<div class="details">
									<span class="big"><?php echo date("m, d, Y")?></span>
									<span>
										<?php echo date("D"). ' ' .  date("h:i")?>
										
										 
									</span>
								</div>
							</li>
						</ul>
					</div>

				</div>
				<div class="breadcrumbs">
					<ul>
						<li>
							<a href="BrowseProduct.php">Browse Products</a>
							<i class="fa fa-angle-right"></i>
						</li>
						<li>
							<a href="SearchSalesperson.php">Search Salesperson</a>
							
						</li>
						
					</ul>
					<div class="close-bread">
						<a href="#">
							<i class="fa fa-times"></i>
						</a>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-12">
						<div class="box">
							<div class="box-title">
								<h3>
									<i class="fa fa-globe"></i>
									Top Selling items of the Most Bought Type 
								</h3>
							</div>
							<div class="box-content">
								<?php
									$i=rand(0,2);
									
										if($i=0){
										echo '<img src="http://pics.drugstore.com/prodimg/418589/220.jpg">';
										echo '<img src="http://www.jirdc.org/training/mealtime/Nutrition/Pyramid/Fruits/apples.gif">';
										echo '<img src="http://www.dailyperricone.com/wp-content/uploads/2010/11/Broccoli-2-505x336.jpg">';
										}
										if($i=1){
											echo '<img src="http://images6.fanpop.com/image/photos/34500000/Cheesy-Yellow-Cheese-colors-34563242-424-283.jpg">';
									
									
											echo '<img src="http://icons.iconarchive.com/icons/artbees/paradise-fruits/128/Banana-icon.png">';
									
									
											echo '<img src="http://ohmyapt.apartmentratings.com/wp-content/uploads/2010/06/tomatoes.jpg">';
										} 

									
									
									
									

									

							


								?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>

</html>



























<!--
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

	/*
	
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
-->