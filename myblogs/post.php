<?php 
	require("config/config.php");
	require("config/db.php");

	# 实现删除博客
	if(isset($_POST['delete'])){
		$delete_id = mysqli_real_escape_string($conn,$_POST['delete_id']);
		# sql语句
		$query = "DELETE FROM posts WHERE id = {$delete_id}";
		if(mysqli_query($conn,$query)){
			header("location:index.php");
		}else{
			echo "error".mysqli_error($conn);
		}
	}

	# 设置utf8编码
	mysqli_query($conn,"set names utf8");

	# 获取id
	//$id = $_GET['id'];
	$id = mysqli_real_escape_string($conn,$_GET['id']);     

	# 设置sql语句
	$query = "SELECT * FROM posts WHERE id = {$id}";

	# 执行sql语句
	$result = mysqli_query($conn,$query);

	# 获取数据
	$post = mysqli_fetch_assoc($result);
	//var_dump($post);

	# 释放数据
	mysqli_free_result($result);

	# 断开连接
	mysqli_close($conn);
?>


	

	<?php include("inc/header.php"); ?>
	<div class="container">
		<h1>博客详情</h1>
		<div class="well">
			<h3><?php echo $post['title']; ?></h3>
			<p>
				<strong>ID:</strong>
				<?php echo $post['id']; ?>
			</p>
			<p>
				<strong>作者:</strong>
				<?php echo $post['author']; ?>
			</p>
			<p>
				<strong>时间:</strong>
				<?php echo $post['created_at']; ?>
			</p>
			<p>
				<?php echo $post['body']; ?>
			</p>
			<br>
			<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" class="pull-right">
				<input type="hidden" name="delete_id" value="<?php echo $post['id']; ?>">
				<input type="submit" value="删除" name="delete" class="btn btn-success">
			</form>
			<a href="<?php echo ROOT_URL; ?>editpost.php?id=<?php echo $post['id']; ?>" class="btn btn-success">编辑</a>
		</div>
		<a href="<?php echo ROOT_URL; ?>" class="btn btn-info btn-block">返回主页</a>
	</div>
	<?php include("inc/footer.php"); ?>
	