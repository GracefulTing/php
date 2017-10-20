<?php 
	require("config/config.php");
	require("config/db.php");

	# 编辑博客
	if(isset($_POST['submit'])){
		# 获取input中的数据
		$title = mysqli_real_escape_string($conn,$_POST['title']);
		$author = mysqli_real_escape_string($conn,$_POST['author']);
		$body = mysqli_real_escape_string($conn,$_POST['body']);

		#获取到id
		$update_id = mysqli_real_escape_string($conn,$_POST['update_id']);

		if(!empty($title) && !empty($author) && !empty($body)){
			mysqli_query($conn,"set names utf8");

			$query = "UPDATE posts SET title = '$title',author = '$author',body = '$body' WHERE id = {$update_id}";

			$result = mysqli_query($conn,$query);
			if($result){
				header("location:index.php");
			}else{
				echo "数据编辑失败!".mysqli_error($conn);
			}
		}
	}

	# 设置utf8编码
	mysqli_query($conn,"set names utf8");

	# 获取id
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
	<h1 class="text-muted">编辑博客</h1>
	<br><br>
	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
		<div class="form-group">
			<label>标题</label>
			<input type="text" name="title" class="form-control" value="<?php echo $post['title']; ?>">
		</div>
		<div class="form-group">
			<label>作者</label>
			<input type="text" name="author" class="form-control" value="<?php echo $post['author']; ?>">
		</div>
		<div class="form-group">
			<label>内容</label>
			<input type="text" name="body" class="form-control" value="<?php echo $post['body']; ?>">
		</div>
		<br>
		<input type="hidden" name="update_id" value="<?php echo $post['id']; ?>">
		<input type="submit" name="submit" value="确认" class="btn btn-info btn-block">
	</form>
</div>

<?php include("inc/footer.php"); ?>