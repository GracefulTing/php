<?php 
	// 链接数据库
	$conn = mysqli_connect("localhost","root","","ajaxtest");
	// 准备sql语句
	$query = "SELECT * FROM users";
	// 发送sql语句到服务器
	$result = mysqli_query($conn,$query);
	// 以二维数组的形式返回资源结果集中的所有数据
	$users = mysqli_fetch_all($result,MYSQLI_ASSOC);
	//var_dump($users);
	// 转换为json数据编码
	echo json_encode($users);
?>