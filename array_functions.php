<?php
	$array = array("Henry","Bucky","Emily");

	# 计算数组个数 count
	echo count($array)."<br>";    //3

	# 将数组开头的单元移出数组 array_shift   返回被删除元素的值
	echo array_shift($array)."<br>";      //Henry
	print_r($array); 
	//Array ( [0] => Bucky [1] => Emily )
	echo '<br>';

	# 在数组开头插入一个或多个单元 array_unshift
	$insertValue = array_unshift($array,"Hemiah");
	print_r($array);
	//Array ( [0] => Hemiah [1] => Bucky [2] => Emily ) 
	echo '<br>';

	# 将一个或多个单元压入数组的末尾（入栈）array_push
	array_push($array,"Elyse");
	print_r($array);
	//Array ( [0] => Hemiah [1] => Bucky [2] => Emily [3] => Elyse )
	echo '<br>';

	# 弹出数组最后一个单元（出栈） array_pop
	array_pop($array);
	print_r($array);
	//Array ( [0] => Hemiah [1] => Bucky [2] => Emily )
	echo '<br>';

	# 数组排序 sort
	$values = array(22,56,33,48,14);
	sort($values);
	print_r($values);
	//Array ( [0] => 14 [1] => 22 [2] => 33 [3] => 48 [4] => 56 )
	echo '<br>';

	# 数组转字符串 implode
	//implode(separator,array);
	// separator:可选,规定数组元素之间放置的内容,默认空字符串
	$arrayToString = array("a","b","c");
	$value = implode(" ",$arrayToString);
	echo $value.'<br>';       //a b c

	# 字符串转数组 explode 
	$arr = explode(" ",$value);
	print_r($arr);
	//Array ( [0] => a [1] => b [2] => c )
?>