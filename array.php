<?php 
	# array:数组-存储一堆数据的集合   有效控制资源

	/*
		下标数组:下标以0开始
		关联数组:关联以第一个名字开头
	*/

	#下标数组
	$people = array("Kevin","Henry","Hemiah");
	// echo 只能打印单个变量
	echo $people[1]."<br>";      //Henry
	// echo $people[3];     //报错  数组越界

	$ids = [23,45,27];
	echo $ids[2]."<br>";      //27

	$cars = ["Honda","Toyota","BYD"];
	$cars[3] = "BWM";
	echo $cars[3]."<br>";
	echo count($cars)."<br>";   //数组个数   4

	# 打印数组的方法
	print_r($cars);       
	//Array ( [0] => Honda [1] => Toyota [2] => BYD [3] => BWM ) 

	echo '<br>';

	# 万能打印方法
	var_dump($cars);
	//array(4) { [0]=> string(5) "Honda" [1]=> string(6) "Toyota" [2]=> string(3) "BYD" [3]=> string(3) "BWM" } 

	echo '<br>';
	/*---------------------------------------------------*/

	# 关联数组
	$people = array("Henry"=>35,"Bukcy"=>25,"Emily"=>20);
	echo $people["Emily"]."<br>";          //20

	$ids = [22=>"Henry",25=>"Emily"];
	echo $ids[22]."<br>";            //Henry

	$ids[35] = "Bucky";
	echo $ids[35]."<br>";        //Bucky

	print_r($ids);
	//Array ( [22] => Henry [25] => Emily [35] => Bucky )
	echo '<br>';
	
	# 观察
	$cars[] = "Bence";
	print_r($cars);
	// Array ( [0] => Honda [1] => Toyota [2] => BYD [3] => BWM [4] => Bence ) 

	echo '<br>';

	$ids[] = "John";
	print_r($ids); 
	//Array ( [22] => Henry [25] => Emily [35] => Bucky [36] => John )  

	echo '<br>';

	$people[] =  "55";
	print_r($people);
	//Array ( [Henry] => 35 [Bukcy] => 25 [Emily] => 20 [0] => 55 )
	echo '<br>';

	# 多维数组
	$cars = array(
		array("Honda",20,10),
		array("dz",20,20),
		array("Ford",15,10)
	);
	print_r($cars);
	//Array ( [0] => Array ( [0] => Honda [1] => 20 [2] => 10 ) [1] => Array ( [0] => dz [1] => 20 [2] => 20 ) [2] => Array ( [0] => Ford [1] => 15 [2] => 10 ) ) 
	echo '<br>';
	echo $cars[2][1];     //15
?>