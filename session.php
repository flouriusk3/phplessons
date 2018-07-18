<?php 
session_start();
 ?>

<!DOCTYPE hmtl>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Session</title>
	</head>
	<body>
<!-- Navigation -->
		<ul>
			<li><a href="index.php">Home</a></li>
			<li><a href="contact.php">Contact</a></li>
		</ul>
<?php
$_SESSION['username'] = "kiyunnaf";
echo $_SESSION['username'];
echo "<br>";

if (!isset($_SESSION['username'])) {
	echo "You are not logged in!";
} else {
	echo "You are logged in!";
}
?>

	</body>
</html>