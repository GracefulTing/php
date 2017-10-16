<?php 
	session_start();

	unset($_SESSION['name']);   //干掉

	session_destroy();     //全部session都干掉
?>