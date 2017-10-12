<div class="container">
	<?php 
		// echo $_GET["user"]."<br>";
		// echo $_GET["Email"];

		# 检查user是否能获取到

		# $_GET
		// if(isset($_GET['user']) && isset($_GET['Email'])){
		// 	#echo $_GET['user'];
		// 	$name = $_GET['user'];
		// 	$email = $_GET['Email'];
		// 	echo $name.":".$email;
		// }

		# $_POST
		// if(isset($_POST['user']) && isset($_POST['Email'])){
		// 	$name = $_POST['user'];
		// 	$email = $_POST['Email'];
		// 	if(!empty($name) && !empty($email)){
		// 		echo $name." : ".$email;
		// 	}
		// 	print_r($_POST);
		// }

		# $_REQUEST	
		if(isset($_REQUEST['user']) && isset($_REQUEST['Email'])){
		
			$name = $_REQUEST['user'];
			$email = $_REQUEST['Email'];

			if(!empty($name) && !empty($email)){
				echo $name." : ".$email;
			}

			print_r($_REQUEST);
		}

		# 查询url地址后面的参数  GET
		//echo $_SERVER['QUERY_STRING'];
		//user=123&Email=123%40qq.com
	?>
</div>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>GET & POST</title>
	<link rel="stylesheet" href="https://bootswatch.com/cyborg/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<form action="get_post.php" method="GET">
			<div class="form-group">
				<label for="">Name</label>
				<input type="text" class="form-control" name="user">
			</div>
			<div class="form-group">
				<label for="">Email</label>
				<input type="email" class="form-control" name="Email">
			</div>
			<input type="submit" value="提交" class="btn btn-primary btn-block">
		</form>

		<ul class="list-group">
			<li class="list-group-item">
				<a href="<?php echo $_SERVER['PHP_SELF']."?user=dede"; ?>" class="btn btn-success btn-block">
					dede
				</a>
			</li>
			<li class="list-group-item">
				<a href="<?php echo $_SERVER['PHP_SELF']."?user=爪子"; ?>" class="btn btn-info btn-block">
					爪子
				</a>
			</li>
		</ul>

		<h1>
			<?php if(isset($_GET['user'])){echo $_GET['user'];} ?>	
		</h1>
	</div>
</body>
</html>