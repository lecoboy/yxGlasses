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
$conn = new mysqli($servername, $username, $password, $dbname);
 
// 检测连接
if ($conn->connect_error) {
    die("连接失败: " . $conn->connect_error);
} 

$sql = "INSERT INTO `yx_news` (`title`, `author`, `note`, `headImg`, `txt`, `addTime`, `state`)
VALUES ('{$title}','{$author}','{$note}','{$headImg}','{$txt}','{$addTime}',{$state})";

if ($conn->query($sql) === TRUE) {
    die("true");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();