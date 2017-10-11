<?php 
	$loggedIn = true;

	$names = ["Henry","Bucky","Emily"];
	// if($loggedIn){
	// 	echo 'U r logged In';
	// }else{
	// 	echo 'U r Not logged In';
	// }

	# 三目运算符
	// echo  ($loggedIn)? 'U r logged In':'U r Not loggen In';

	// echo '<br>';

	# 简写得到 true 或者 false
	// $isRegistered = ($loggedIn == true)?true:false;
	// echo $isRegistered;     //1

	// echo '<br>';


	# 三目嵌套
	// $age = 18;
	// $score = 80;

	// echo 'Your score is '.($score > 70 ? ($age < 20 ? "优秀":"一般"):($age < 20 ? "一般":"差等")); 

	//Your score is 优秀

?>

<!-- html + php 嵌套语法糖 -->

<div>
	<?php if($loggedIn){?>
	<p>Welcome to Beijing!</p>
	<?php }else{ ?>
	<p>Welcome to Zhengzhou!</p>
	<?php } ?>
</div>

<!-- 优化 -->

<div>
	<?php if($loggedIn): ?>
	<p>Welcome to Beijing!</p>
	<?php else: ?>
	<p>Welcome to Zhengzhou!</p>
	<?php endif; ?>
</div>

<!-- 遍历 foreach-->

<div>
	<?php foreach ($names as $value):?>
		<p><?php echo $value; ?></p>
	<?php endforeach; ?>
</div>

<!-- 
	Henry

	Bucky

	Emily
-->

<!-- 遍历数组 for -->

<div>
	<?php for($i=0;$i<count($names);$i++): ?>
		<p><?php echo $names[$i]; ?></p>
	<?php endfor; ?>
</div>


