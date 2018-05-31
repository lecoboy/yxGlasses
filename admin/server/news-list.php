<?php
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
$sql = "SELECT * FROM yx_news";
$result = $conn->query($sql);
$list = array();
$i=0;
if ($result->num_rows > 0) {
    // 输出数据
    while($row = $result->fetch_assoc()) {
    	// echo json_encode($row)."<br>";
    	$row['headImg'] = "<img style='width:100px;' src='server/upload/{$row['headImg']}'/>";
    	$row['option'] = "<a href='javascript:;' onclick='newsDel({$row['id']})'><font color='red'>删除</font></a>";
    	$list[$i++] = $row;
    }
}
$data = '{"data":'.json_encode($list).'}';

$conn->close();

die($data);