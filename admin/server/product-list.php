<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "db_yxglasses";
 
// 创建连接
$conn = @mysql_connect($servername, $username, $password);mysql_select_db($dbname, $conn);

$sql = "SELECT * FROM yx_products";
$result = mysql_query($sql);
$list = array();
$i=0;
if ($result->num_rows > 0) {
    // 输出数据
    while($row = $result->fetch_assoc()) {
    	// echo json_encode($row)."<br>";
    	$row['altImg'] = "<img style='width:100px;' src='server/upload/{$row['altImg']}'/>";
    	$row['option'] = "<a href='javascript:;' onclick='productDel({$row['id']})'><font color='red'>删除</font></a>";
    	$list[$i++] = $row;
    }
}
$data = '{"data":'.json_encode($list).'}';

mysql_close($conn);

die($data);