<?php 
	# string function: 处理字符串的函数

	# 返回字符串的一部分 substr
	/*
		substr(string,start,length);
		length:可选  被返回字符串的长度 默认到字符串的结尾
		start:开始位置  正数:在字符串指定位置开始   负数:从字符串结尾开始的指定位置开始  0:在字符串中的第一个字符处开始
	*/
	$output = "hello world!";
	$output = substr($output, 6);
	echo $output."<br>";      //world!

	# 返回给定的字符串 string 的长度  strlen
	echo strlen($output)."<br>";    //6

	# 查找字符串首次出现的位置 strpos
	/*
		strpos()对大小写敏感
		strpos(string,find,start);
		find:规定要查找的字符串  start:可选,规定在何处搜索
	*/
	$output = "123545435";
	$output = strpos($output,"2");
	echo $output."<br>";           //1

	# 计算指定字符串在目标字符串中最后一次出现的位置 strrpos
	//区分大小写
	$output = "hello world!";
	$output = strrpos($output,"l");
	echo $output."<br>";           //9

	# 去除首尾空格trim
	/*
		trim(string,charlist);
		charlist:可选 规定从字符串中删除哪些字符,如果被省略,则移除以下所有字符
		"\0"-null  "\t"-制表符  "\n"-换行符  "\x0B"-垂直制表符 "\r"-回车 " "-空格
	*/
	$output = "  hellowrold  ";
	echo strlen($output)."<br>";     //14
	echo trim($output)."<br>";  
	echo strlen(trim($output))."<br>";     //10
	
	# 将字符串转为大写 strtoupper
	$str = "helloworld";
	echo strtoupper($str)."<br>";  //HELLOWORLD
	
	# 将字符串转为小写 strtolower
	$str = "HELLOWORLD";
	echo strtolower($str)."<br>";    //helloworld
	
	# 将每个单词首字母大写 ucwords
	$str = "hello world!";
	echo ucwords($str)."<br>";       //Hello World!
	
	# 替换所有匹配的内容  str_replace
	/*
		substr_replace(string,replacement,start,length);
		string:要检查的字符串   replacement:要插入的字符串  start:从何处开始替换   
		length:可选 要替换多少个字符 默认与字符串长度相同
		正数-被替换的字符串长度   负数-表示待替换的子字符串结尾处距离string末端的字符的个数
		0-插入而非替换
	*/
	$text = "Hello World";
	$output = str_replace("World","everybody" , $text);
	echo $output."<br>";      //Hello everybody
	
	# 判断是否是字符串  is_string
	$val = "22";
	$output = is_string($val);
	echo $output."<br>";      //1

	# 压缩字符串  gzcompress
	$string = "一大堆文字";
	$compressed = gzcompress($string);
	echo $compressed."<br>";  //x�{�����O�=���t�tV �

	# 解压字符串
	$uncompressed = gzuncompress($compressed);
	echo $uncompressed."<br>";  //一大堆文字

	# 过滤掉数组中非字符串的值
	$values = array(true,false,"hello",32,"23",23.4,' ','',0,'0');
	foreach ($values as $value) {
		#判断value是否是字符串,如果是那么输出
		if(is_string($value)){
			echo $value." is a string!<br>";
		}
	}
	// hello is a string!
	// 23 is a string!
	// is a string!
	// is a string!
	// 0 is a string!
?>