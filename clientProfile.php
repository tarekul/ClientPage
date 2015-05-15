<head>
	<style>
		body{
			background-color: #3399FF;
		}
	</style>
</head>		

<?php
//HOMEPAGE FOR ALL USERS
$connection = new mysqli('localhost', 'root', 'root', 'S1533608');
if (mysqli_connect_errno()){
	die("connection failed");
}


$ids = $_GET['id'];
$_POST['id'] = $ids;
$id = $_POST['id'];

?>
<FORM METHOD = "POST">
<html>
<head>
	<title>Homepage of a Salesperson</title>
</head>
<style>

</style>
<body bgcolor>
	<?php
	/*
	$link = "http://static3.businessinsider.com/image/4f3e84e4eab8ea173d00001f/what-normal-people-really-think-of-the-kindle-fire.jpg";
	$link2 = "http://www.hugobookstores.com/sites/hugobookstores.com/files/Jako_Headshot.jpg";
	$link3 = "http://www.portlandmercury.com/binary/bde5/1291153942-9083408-large.jpg";
	$link4 = "http://canyouactually.com/wp-content/uploads/FnJnrt90-Optimized.jpeg";
	$link5= "http://l2.yimg.com/bt/api/res/1.2/049obVyicyXCQktNGEDK9Q--/YXBwaWQ9eW5ld3M7cT04NTt3PTEyMDA-/http://globalfinance.zenfs.com/en_us/Finance/US_AFTP_SILICONALLEY_H_LIVE/Here's_What_Normal_People_Can-ce9cfd5221038ba571d77b9730675023";
	$link6 = "http://media.tumblr.com/tumblr_lzvlsbMkFe1qabyrj.jpg";
	*/
	$link7="http://horizonundergroundinc.com/wp/wp-content/uploads/2015/03/clients-pic.jpg";

$name_query = "SELECT * FROM users WHERE id = " . $id;
	$name_result = $connection->query($name_query);
		while($name_rows = $name_result->fetch_array()){
			echo "<img align = left src = '{$link7}' width = 400 height = 300>";

		}

?>
<input type = "submit" name = "like" style = "width: 100px; height:100px; text-align: center;" value = "like">
<input type = "submit" name = "dislike" style = "width: 110px; height:110px;" value = "dislike">


<?php

$ids = $_GET['id'];
$_POST['id'] = $ids;
$id = $_POST['id'];
$name_query = "SELECT * FROM users WHERE id = " . $id;
	$name_result = $connection->query($name_query);
	while($name_rows = $name_result->fetch_array()){
echo "<h1><div style='width: 400px; text-align: center;'>".$name_rows['first_name'] . " " . $name_rows['last_name'] . "</div></h1>
";
echo "<h3> User: " . $name_rows['user_type'] . "</h3>";
echo "<h3> Email: " . $name_rows['email'] . "</h3>";
echo "<h3> Phone number: " . $name_rows['phonenum'] . "</h3>";
	$supervisor_query = "SELECT last_name, first_name FROM users WHERE username = '{$name_rows['supervisor']}'";
	$supervisor_result = $connection->query($supervisor_query);
	while($supervisor_name = $supervisor_result->fetch_array()){
echo "<h3> Currently managed by: " . $supervisor_name['first_name'] . " " . $supervisor_name['last_name'] . "</h3>";}

		if($_POST['like']){

			$update_rating = "UPDATE users SET rating = rating+1 WHERE id = " . $id;
			$update_like = $connection->query($update_rating);
			echo "Liked!<br>";
			//echo "<div style = 'width: 100px; height:100px;text-align: center;'> Liked!</div>";
		}
		if($_POST["dislike"]){
			$update_rating = "UPDATE users SET rating = rating-1 WHERE id = " . $id;
			$update_dislike = $connection->query($update_rating);
			echo "Disliked!<br>";
		}


}

		echo "<a href =sales_complaints.php?id=".$id.">Got a complaint? Click here</a><br>";

?>



</body>
</html>
</form>
<?php
?>

<?php
$connection->close;
?>

