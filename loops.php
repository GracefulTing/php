<?php 
	# loops:循环---让项目制作的更高效
	# 根据某个条件,重复执行某段代码

	/*
		-For
		-While
		-Do...while
		-Foreach
	*/ 

	# for循环:循环次数已知时使用
	# @params  -  init , condition , inc     初始化,条件,自增
	//打印1-10
	for($i = 0;$i < 10;$i++){
		echo ($i+1)."<br>";
	}

	echo "<br>";

	# while:循环次数未知时使用
	# @params  -  condition 条件
	//打印0-9
	$i = 0;
	while($i < 10){
		echo $i."<br>";
		$i++;
	}

	// for和while搭配使用
	//去重:外层while 内层for

	echo "<br>";

	# do...while
	# @params  -   condition 
	$i = 0;
	do{
		echo $i."<br>";
		$i++;
	}while($i < 10);

	echo "<br>";

	# foreach循环   下标数组
	$people = array("Henry","Bucky","Emily");
	foreach($people as $person){    // 遍历的数组 as 变量接收
		echo $person."<br>";
	}
	echo array_search("Henry", $people)."<br>";
	echo array_search("Bucky", $people)."<br>";
	echo array_search("Emily", $people)."<br>";
	/*	
		Henry
		Bucky
		Emily
	*/
	echo "<br>";

	# foreach循环   关联数组
	$people  =  array(
		"Henry"=>"henry@gmail.com",
		"Bucky"=>"bucky@gmail.com",
		"Emily"=>"emily@gmail.com"
	);
	foreach ($people as $person => $email) {
		echo $person.":".$email."<br>";
	}
	/*
		Henry:henry@gmail.com
		Bucky:bucky@gmail.com
		Emily:emily@gmail.com
	*/
?>