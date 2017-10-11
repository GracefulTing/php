<?php 
	# date():至少要给一个参数
	echo date('d');      //day 11
	echo date('m');      //month 10
	echo date('Y');      //Year 2017
	echo date('y');      //year 17
	echo date('l');      //week Wednesday
	echo date('Y/m/d');   //  2017/10/11
	echo date('d-m-Y');   //  11-10-2017

	echo '<br>';
	# 时分秒
	echo date('h');       //hour 
	echo date('i');       //minutes   
	echo date('s');       //seconds
	echo date('a');       //AM or PM  
	echo '<br>';

	# 设置时区
	date_default_timezone_set("Asia/Shanghai");
	echo date('h:i:sa'); 
	echo '<br>';

	# mktime
	$timestamp = mktime(07,00,12,1,24,1988);  
	echo $timestamp;    //1970-1988秒数
	echo '<br>';

	# 完整的时间
	echo date("m/d/Y h:i:sa",$timestamp);  
	//01/24/1988 07:00:12am
	echo '<br>';  
	echo date("m/d/Y h:i:sa");
	// 10/11/2017 04:13:09pm 
	echo '<br>';

	# 字符串转时间
	$timestamp2 = strtotime("7:00pm March 22 2016");
	echo date("m/d/Y h:i:sa",$timestamp2);
	//03/22/2016 07:00:00pm
	echo '<br>';

	$timestamp3 = strtotime("tomorrow");
	echo date("m/d/Y h:i:sa",$timestamp3);
	//10/12/2017 12:00:00am
	echo '<br>';

	$timestamp4 = strtotime("next sunday");
	echo date("m/d/Y h:i:sa",$timestamp4);
	//10/15/2017 12:00:00am
	echo '<br>';

	$timestamp5 = strtotime("+2 Days");
	echo date("m/d/Y h:i:sa",$timestamp5);
	//10/13/2017 04:17:46pm
?>