<?php 
	# 监听用户是否触发了submit方法
	if(isset($_POST['submit'])){
		$username = $_POST['username'];

		setcookie('username',$username,time() + 86400*30); 
		header("location:page2.php"); 
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Page 1</title>
</head>
<body>
	<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
		<input type="text" name="username" placeholder="enter ur name!">
		<br>
		<input type="submit" value="提交" name="submit">
	</form>
</body>
</html>