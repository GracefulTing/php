<?php 
	//echo 'hello world!';

	// if(isset($_GET['name'])){
	// 	echo '你的名字是: '.$_GET['name'];
	// }

	// if(isset($_POST['name'])){
	// 	echo '你的名字是: '.$_POST['name'];
	// }


	header('Content-Type:text/html;charset=utf-8');

	# 1.链接数据库
	$conn = mysqli_connect("localhost","root","","ajaxtest");
	# 设置字符集
	mysqli_query($conn,"set names 'utf8'");
	//mysqli_set_charset($conn,"utf8"); 

	if(isset($_POST['name'])){
		$name = $_POST['name'];
		# 准备sql语句
		$query = "INSERT INTO users(name) VALUES('$name')";
		# 发送sql语句到服务器
		$result = mysqli_query($conn,$query);
		if($result){
			echo '数据插入成功!';
		}else{
			echo '数据插入失败!'.mysqli_error($conn);
		}
	}

?>
