<?php 
	# function:函数 - 具有某一功能的代码块
	
	// (工厂模式)

	/*
		Camel Case:驼峰命名  myFunction()
		Lower Case:小驼峰命名  my_function()
		Pascal Case:大驼峰命名  MyFunction()
	*/

	// 定义函数

	# 函数一定会有返回值,undefined或值,只有被调用才会写入内存.

	# 函数名大小写不敏感

	# 1.无参数无返回值
	function simpleFunction(){
		echo 'hello world!';
	}

	// 调用函数
	simpleFunction();

	echo '<br>';

	# 2.有参数无返回值
	function buy($money="20块钱"){
		echo $money.'给了,但没给我买东西!';
	}
	buy("10块钱");     //传参的优先级比默认高

	echo '<br>';

	# 3.多参数有返回值
	function add($a,$b){
		$sum = $a + $b;
		return $sum;
	}
	$val = add(1,2);
	echo $val;

	echo '<br>';

	# 4.无参数有返回值
	function buyDrink(){
		return "饭后饮料";
	}
	$val = buyDrink();
	echo $val;

	echo '<br>';

	// return : 
	// 	结束当前代码;    
	// 	返回结果;

	# 函数传引用
	$myNum = 10;
	function addFive(&$num){
		$num += 5;
	}	
	addFive($myNum);     //拿到了myNum的引用,改变内存中的数值,所以是15   
	echo $myNum;         //15
?>