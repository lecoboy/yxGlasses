<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
	$servername = "127.0.0.1";
	$username = "root";
	$password = "root";
	$dbname = "db_yxglasses";
	 
	// 创建连接
	$conn = @mysql_connect($servername, $username, $password);mysql_select_db($dbname, $conn);

	//具体信息
	$detail = $_POST["detail"];
	$conArr = explode("\n", $detail);
	for ($i=0; $i < sizeof($conArr); $i++) { 
		$conArr[$i] = "<li>".$conArr[$i]."</li>";
	}
	$detail = implode(" ", $conArr);

	//获取要修改的数据id
	$id = $_POST['id'];
	$sql = "UPDATE yx_products set detail='$detail'";
	echo mysql_query($sql);
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>修改具体信息</title>
</head>
<body>
<form action="#" method="post">
	<input type="" name="id"><br>
	<textarea name="detail"></textarea>
	<input type="submit">
</form>
</body>
</html>