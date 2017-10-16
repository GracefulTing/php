<?php 
	$users = ["name"=>"henry","email"=>"123@qq.com","age"=>20];
	$users = serialize($users);          //解析
	setcookie("users",$users,time()+86400);

	$users = unserialize($_COOKIE['users']);     //反解析
	print_r($users);
?>