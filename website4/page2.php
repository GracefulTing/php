<?php 
	session_start();

	$name = $_SESSION['name'];
	$email = $_SESSION['email'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Page2</title>
</head>
<body>
	<h2>你的名字是:<?php echo $name; ?></h2>
	<h2>你的email是:<?php echo $email; ?></h2>
	<a href="page3.php">Go to Page 3</a>
</body>
</html>