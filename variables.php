<!-- <h1>
	<?php 
		//echo 'Hello World!';
	?>
	<?php 
		//echo 'hi';
	?>
</h1> -->

<?php 
	//echo 'Hello World!';

	/*-----------------------------------------------------*/

	//注释
	//:单行注释  快捷键:command + /
	#:单行注释   快捷键:shift + 3
	/*
		多行注释
		快捷键:alt + command + /
	*/

	/*-----------------------------------------------------*/

	#variable 变量
	// $output = "Hello World!";
	// echo $output;	

	/*
	变量定义规则:
		-前缀:$;   
		-以字母/数字/下划线组成;
		-数字不能开头;
		-大小写敏感;
		-驼峰命名法;
	*/

	/*-----------------------------------------------------*/

	# 数据类型
	/*
		String  Integer  Float  Boolean  Array  Object Resource(函数)
	*/
	// $int = 10;
	// echo $int;
	// $float = 1.3;
	// echo $float;
	// $bool = false;    //false不显示  true为1
	// echo $bool;

	/*-----------------------------------------------------*/

	# 运算符 
	// $num1 = 10;
	// $num2 = 20;
	// $sum = $num1 + $num2;
	// echo $sum;

	/*-----------------------------------------------------*/

	# 字符串拼接
	$str1 = "Hello";
	$str2 = "world";
	//在php中,+号就是+号,没有拼接功能
	// $greet = $str1 + $str2;
	$greet = $str1." ".$str2."!";
	echo $greet."<br>";

	/*-----------------------------------------------------*/

	# php中单引号和双引号的区别
	//单引号中的内容是单纯的字符串
	//双引号中的变量可以正常被解析
	$greet = '$str1 $str2';
	echo $greet."<br>";            //$str1 $str2
	$greet = "$str1 $str2";
	echo $greet."<br>";            //Hello world

	/*-----------------------------------------------------*/

	# 转义字符  \
	$str = 'they\'re here';
	$strr = "they're here";
	echo $str."<br>";
	echo $strr."<br>";      

	printf($strr."<br>");

	//echo不是一个方法,没有返回值,速度快
	//printf():返回值为1

	/*-----------------------------------------------------*/

	# 常量
	//常量的第三个参数为bool,true为不分大小写
	//define(name,value)
	define("GREETING","WhatEver!");
	echo GREETING."<br>";
	define("GREETING","What   Ever!",true);
	// echo greeting."<br>";
	var_dump(greeting);

	/*-----------------------------------------------------*/
	$s1 = 'aa';
	$s2 = 'bb';
	echo $s1,$s2;	
?>
