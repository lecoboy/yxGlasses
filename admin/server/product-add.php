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
$type = $_POST["type"];
// $txt = $_POST["txt"];
$doller = $_POST["doller"];
$rmb = $_POST["rmb"];
$addTime = date("Y-m-d H:i:s");
$state = 0;
//描述，特点，具体信息
$describe = $_POST["describe"];
$trait = $_POST["trait"];
$detail = $_POST["detail"];

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
$describe = implode(" ", $conArr);
//特点
$conArr = explode("\n", $trait);
for ($i=0; $i < sizeof($conArr); $i++) { 
	$conArr[$i] = "<li>".$conArr[$i]."</li>";
}
$trait = implode(" ", $conArr);
//具体信息
$conArr = explode("\n", $detail);
for ($i=0; $i < sizeof($conArr); $i++) { 
	$conArr[$i] = "<li>".$conArr[$i]."</li>";
}
$detail = implode(" ", $conArr);

$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "db_yxglasses";
 
// 创建连接
$conn = @mysql_connect($servername, $username, $password);mysql_select_db($dbname, $conn);


$sql = "INSERT INTO `yx_products` (`altImg`, `imgs`, `name`, `type`, `describe`, `trait`, `detail`, `addTime`, `state`, `doller`, `rmb`)
VALUES ('{$altImg}','{$imgs}','{$name}','{$type}','{$describe}','{$trait}','{$detail}','{$addTime}',{$state},'{$doller}','{$rmb}')";

if (mysql_query($sql) === TRUE) {
    die("true");
} else {
    echo "Error: " . $sql . "<br>" . mysql_error();
}

mysql_close($conn);