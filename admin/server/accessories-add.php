<?php
$fileName = $_POST["fileName"];
if($fileName == "" || $fileName == null){
	die("请至少上传一张图片！");
}
$nameArr = explode(";", $fileName);
$altImg = $nameArr[0];
$pos = strpos($fileName,";");
//imgs中去掉altImg
// if($pos == 0){
// 	$imgs = "";
// }else{
// 	$imgs = substr($fileName, $pos+1);	
// }
$imgs = $fileName;
$name = $_POST["name"];
$price = $_POST["price"];
$type = $_POST["type"];
$addTime = date("Y-m-d H:i:s");
$state = 0;
//描述，特点，具体信息
$describe = $_POST["describe"];
$add_title = $_POST["add_title"];
$add_content = $_POST["add_content"];

// $conArr = explode("\n", $txt);
// for ($i=0; $i < sizeof($conArr); $i++) { 
// 	$conArr[$i] = "<p>".$conArr[$i]."</p>";
// }
// $txt = implode(" ", $conArr);

//描述
$conArr = explode("\n", $describe);
for ($i=0; $i < sizeof($conArr); $i++) { 
	$conArr[$i] = "<p>".$conArr[$i]."</p>";
}
//额外
$conArr = explode("\n", $add_content);
for ($i=0; $i < sizeof($conArr); $i++) { 
	$conArr[$i] = "<p>".$conArr[$i]."</p>";
}
$add_content = implode(" ", $conArr);

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

$sql = "INSERT INTO `yx_accessories` (`altImg`, `imgs`, `name`, `describe`, `add_title`, `add_content`, `addTime`, `state`, `price`)
VALUES ('{$altImg}','{$imgs}','{$name}','{$describe}','{$add_title}','{$add_content}','{$addTime}',{$state},'{$price}')";

if ($conn->query($sql) === TRUE) {
    die("true");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();