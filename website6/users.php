<?php 
	// 链接数据库
	$conn = mysqli_connect("localhost","root","","ajaxtest");
	$query = "SELECT * FROM users";
	$result = mysqli_query($conn,$query);
	$users = mysqli_fetch_all($result,MYSQLI_ASSOC);
	//var_dump($users);
	echo json_encode($users);
?>