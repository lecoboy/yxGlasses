<?php
$id = $_POST['id'];
if($id == "" || $id == null){
	die("要删除的产品不存在！");
}

$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "db_yxglasses";
 
// 创建连接
$conn = new mysqli($servername, $username, $password, $dbname);
 
// 检测连接
if ($conn->connect_error) {
    die("连接失败: " . $conn->connect_error);
} 
$sql = "DELETE FROM yx_news where id={$id}";

if ($conn->query($sql) === TRUE) {
    die("true");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();