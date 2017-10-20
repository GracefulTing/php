<?php 
	# 连接数据库
	// $conn = mysqli_connect("localhost","root","","blogs");
	$conn = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);


	# 判断是否链接成功
	if(mysqli_connect_errno()){   //0表示成功
		echo "数据库连接失败!".mysqli_connect_errno();
	}
?>