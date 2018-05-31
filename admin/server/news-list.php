<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "db_yxglasses";
 
// 创建连接
$conn = @mysql_connect($servername, $username, $password);mysql_select_db($dbname, $conn);

$sql = "SELECT * FROM yx_news";
$result = mysql_query($sql);
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

mysql_close($conn);

die($data);