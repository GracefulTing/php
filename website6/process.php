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
	mysqli_query($conn,"set names 'utf8'"); 

	if(isset($_POST['name'])){
		$name = $_POST['name'];
		$query = "INSERT INTO users(name) VALUES('$name')";
		$result = mysqli_query($conn,$query);
		if($result){
			echo '数据插入成功!';
		}else{
			echo '数据插入失败!'.mysqli_error($conn);
		}
	}

?>
