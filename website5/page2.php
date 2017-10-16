<?php 
	//重新赋值
	setcookie('username',"Franch",time()+86400);
	//删除cookie
	// setcookie('username','asdf',time()-3600);

	if(count($_COOKIE)>0){
		echo '一共有'.count($_COOKIE)."COOKIE";
	}else{
		echo '没有设置任何COOKIE';
	}

	if(isset($_COOKIE['username'])){
		echo '你的用户名是: '.$_COOKIE['username'];
	}else{
		echo '用户名不存在!';
	}
?>

