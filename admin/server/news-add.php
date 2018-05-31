<?php
//文件处理
$fileName = $_POST["fileName"];
if($fileName == "" || $fileName == null){
	die("请至少上传一张图片！");
}
$nameArr = explode(";", $fileName);
$headImg = $nameArr[0];

//字段处理
$title = $_POST["title"];
$author = $_POST["author"];
$note = $_POST["note"];
$txt = $_POST["txt"];
$summary = $_POST["summary"];
$addTime = date("Y-m-d H:i:s");
$state = 0;

// $conArr = explode("\n", $txt);
// for ($i=0; $i < sizeof($conArr); $i++) { 
// 	$conArr[$i] = "<p>".$conArr[$i]."</p>";
// }
// $txt = implode(" ", $conArr);

//描述
$conArr = explode("\n", $txt);
for ($i=0; $i < sizeof($conArr); $i++) { 
	$conArr[$i] = "<p>".$conArr[$i]."</p>";
}
$txt = implode(" ", $conArr);

$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "db_yxglasses";
 
// 创建连接
$conn = @mysql_connect($servername, $username, $password);mysql_select_db($dbname, $conn);

$sql = "INSERT INTO `yx_news` (`title`, `author`, `note`, `headImg`, `txt`, `addTime`, `state`)
VALUES ('{$title}','{$author}','{$note}','{$headImg}','{$txt}','{$addTime}',{$state})";

if (mysql_query($sql) === TRUE) {
    die("true");
} else {
    echo "Error: " . $sql . "<br>" . mysql_error();
}

mysql_close($conn);