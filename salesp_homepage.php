<head>
	<style>
		body{
			background-color: #CCFFFF;
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
	$link = "http://blog.sparefoot.com/wp-content/uploads/2013/02/dwightsales-550x366.jpg";
	$link2 = "https://mensstudies.files.wordpress.com/2008/09/halpert.jpg";
	$link3 = "https://airdj31deux.files.wordpress.com/2012/02/pam-iii.jpg";
	$link4 = "http://upload.wikimedia.org/wikipedia/en/2/22/TheOffice_Karen.png";

$name_query = "SELECT * FROM users WHERE id = " . $id;
	$name_result = $connection->query($name_query);
		while($name_rows = $name_result->fetch_array()){
			if ($name_rows['username'] == 'WBall23')
echo "<img align = left src = '{$link}' width = 400 height = 300>";
else if ($name_rows['username'] == 'JCast24')
echo "<img  align = left src = '{$link2}' width = 400 height = 300>";
else if ($name_rows['username'] == 'KBroo21')
echo "<img  align = left src = '{$link3}' width = 400 height = 300>";
else if ($name_rows['username'] == 'KHens22')
echo "<img  align = left src = '{$link4}' width = 400 height = 350>";}








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

		echo "<a href ='sales_complaints.php?id= " . $id . "'>Got a complaint? Click here</a><br>";

?>



</body>
</html>
</form>
<?php
?>

<?php
$connection->close;
?>

