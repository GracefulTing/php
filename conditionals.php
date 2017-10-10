<?php 
	//分支
	# if & switch 
	
	# 关系运算符 
	/* >  <  ==  !=  >=  <=  ===  !== */

	//$num = 6;
	
	# 单个if
	// if($num <= 4){
	// 	echo 'num的值一定小于等于4';
	// }
	// echo 'hello';
	
	# if else
	// if($num >= 4){
	// 	echo 'true';
	// }else{
	// 	echo 'false';
	// }

	# nesting if (if嵌套)
	// $number = 4;
	// if($number >= 4){
	// 	if($number <= 10){
	// 		echo 'number一定在4-10之间';
	// 	}else{
	// 		echo 'number一定大于10';
	// 	}
	// }else{
	// 	echo 'number一定小于4';
	// }

	/*-----------------------------------------------------*/

	# 逻辑运算符
	/* 
		逻辑与  &&  AND   一假即假
		逻辑或  ||  OR    一真即真
		逻辑非  !  
		逻辑异或  XOR    同假异真   只有一个为真,结果才为真 
	*/

	// $num = 3;
	// if($num > 3 XOR $num < 10){
	// 	echo 'num大于3并且小于10';
	// }


	# switch

	$favColor = 1;
	switch($favColor){
		case '1':
			echo 'angry';
			break;
		case 'yellow':
			echo 'happy';
			break;
		case 'blue':
			echo 'silence';
			break;
		case 'green':
			echo 'forgive';
			break;
		default:
			echo 'GUN';
			break;
	}

	//JS switch中case判断===
?>