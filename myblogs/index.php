<?php 
	require("config/config.php");
	require("config/db.php");

	# 设置utf8编码
	mysqli_query($conn,"set names utf8");

	# 设置sql语句
	$query = "SELECT * FROM posts ORDER BY created_at DESC";

	# 执行sql语句
	$result = mysqli_query($conn,$query);

	# 获取数据
	$posts = mysqli_fetch_all($result,MYSQLI_ASSOC);
	//var_dump($posts);

	# 释放数据
	mysqli_free_result($result);

	# 断开连接
	mysqli_close($conn);
?>


	<?php include("inc/header.php"); ?>
	<div class="container">
		<h1>博客总览</h1>
		<?php foreach($posts as $post): ?>
		<div class="well">
			<h3><?php echo $post['title']; ?></h3>
			<img src="touxiang.jpg" alt="" width="80px" height="80px" class="pull-left" style="margin-right:50px;">
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
			<a href="post.php?id=<?php echo $post['id']; ?>" class="btn btn-info">博客详情</a>
		</div>
		<?php endforeach; ?>
	</div>
	<?php include("inc/footer.php"); ?>
