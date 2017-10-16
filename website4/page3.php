<?php 
	
	session_start();
	# 改变session存储的值
	$_SESSION['name'] = 'henry';     //回到page2也是henry
	# 获取session存储的值
	$name = isset($_SESSION['name']) ? $_SESSION['name'] : 'name属性不存在';
	$email =isset($_SESSION['email']) ? $_SESSION['email'] : 'email属性不存在';

	print_r($_SESSION);
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Page 3</title>
</head>
<body>
	<h2><?php echo $name; ?></h2>
	<h2><?php echo $email; ?></h2>
</body>
</html>