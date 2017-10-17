<?php 
	/* 操作数据库
	 * 1.链接数据库
	 * 2.执行sql语句
	 * 3.获取数据并使用
	 * 4.断开连接
	*/

	function updateData($sql){
		# 链接数据库
		$mysqli = new mysqli("localhost","root","","people");
		# 测试是否链接成功
		if($mysqli->connect_errno){  //0表示成功,什么都没有
			die($mysqli->connect_error);
		}
		
		# 设置utf8
		$mysqli->query("set names utf8");
		# 执行sql语句
		$result = $mysqli->query($sql);
		if($result){
			echo '更新成功!';
		}else{
			echo '更新失败!';
		}
		# 断开连接
		$mysqli->close();
	}

	# 准备sql语句
	$sql = "UPDATE customers SET name='yt',email='tt@qq.com' WHERE id = 6";
	updateData($sql);
?>