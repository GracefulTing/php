<?php 
//1.连接数据库 并判断是否连接成功
$link = mysqli_connect("服务器", "用户名", "密码") or die("数据库连接失败!");
//连接失败的错误号
mysqli_errno();
//连接失败的错误信息
mysqli_error();
//2.选择数据库
mysqli_select_db($link, "数据库名");
//3.设置字符集 三码合一
mysqli_set_charset($link, "utf8");
//4.准备sql语句
$sql = "select * from user";
//5.发送sql语句到MySQL服务器
$res = mysqli_query($link, $sql);
//6.处理结果集资源
//以关联数组形式(字段名为下标)取出当前指针指向的那条数据，取完指针自动加一
$row = mysqli_fetch_assoc($res);
//以索引数组形(数字下标)式取出当前指针指向的那条数据，取完之后指针自动加一
$row = mysqli_fetch_row($res);
//以关联索引下标的形式输出一条数据
$row = mysqli_fetch_array($res);
//以对象的形式返回一条数据
$row = mysqli_fetch_object($res);

//资源结果集返回的行数
$num = mysqli_num_rows($res);
//资源结果集返回的列数
$col = mysqli_num_fields($res);
//以二维数组的形式返回资源结果集中的所有数据
$all = mysqli_fetch_all($res);
$fields = mysqli_fetch_fields($res);

//执行增删改操作的时候
$rows = mysqli_affected_rows($link);
//最后一次添加生成的记录ID
$id = mysqli_insert_id($link);

//7.释放结果资源集
mysqli_free_result($res);
//8.关闭链接
mysqli_close($link);

 ?>