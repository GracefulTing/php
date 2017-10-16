<?php 
	if(isset($_POST['submit'])){
		// echo '123';

		session_start();

		//$_SESSION['name']中name是随便起
		$_SESSION['name'] = $_POST['name'];
		$_SESSION['email'] = $_POST['email'];

		header("Location:page2.php");
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Page1</title>
</head>
<body>
	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
		<input type="text" name="name" placeholder="enter name"><br>
		<input type="text" name="email" placeholder="enter email"><br>
		<input type="submit" value="提交" name="submit">
	</form>
</body>
</html>