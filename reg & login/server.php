<?php
	session_start();

	$errors = [];
	# 链接数据库
	$db = mysqli_connect("localhost","root","","registration");

	# 用户注册
	if(isset($_POST['reg_user'])){
		$username = mysqli_real_escape_string($db,$_POST['username']);
		$email = mysqli_real_escape_string($db,$_POST['email']);
		$password1 = mysqli_real_escape_string($db,$_POST['password1']);
		$password2 = mysqli_real_escape_string($db,$_POST['password2']);

		if(empty($username)){
			array_push($errors,"用户名不能为空!");
		}
		if(empty($email)){
			array_push($errors,"邮箱不能为空!");
		}
		if(empty($password1)){
			array_push($errors,"密码不能为空!");
		}
		if($password1 != $password2){
			array_push($errors,"两次输入的密码不一致");
		}

		if(count($errors) == 0){
			$password = md5($password1);
			$query = "INSERT INTO users(username,email,password) VALUES('$username','$email','$password')";
			mysqli_query($db,"set names utf8");

			if(mysqli_query($db,$query)){
				header("location:login.php");
			}
		}
	}

	# 用户登录
	if(isset($_POST['login_user'])){
		$username = mysqli_real_escape_string($db,$_POST['username']);
		$password = mysqli_real_escape_string($db,$_POST['password']);

		if(empty($username)){
			array_push($errors,"用户名不能为空!");
		}
		if(empty($password)){
			array_push($errors,"密码不能为空!");
		}

		if(count($errors) == 0){
			$password = md5($password);

			$query = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";

			mysqli_query($db,"set names utf8");

			$result = mysqli_query($db,$query);

			# 判断有没有获取到数据
			if(mysqli_num_rows($result) == 1){
				$_SESSION['success'] = "success";
				$_SESSION['username'] = $username;
				header("location:index.php");
				// header("location:../myblogs/index.php");
			}
			
		}
	}
?>