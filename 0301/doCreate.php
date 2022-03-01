<?php

/* if(isset($_POST["account"]) || !isset($_POST["password"])){
  echo "請透過正常管道來到此頁!!";
  exit;
}  */
require_once("db_connect.php");  //直接把一支程式讀進來

$account = $_POST["account"];
$password = md5($_POST["password"]); // md5 為加密指令//
//$password=$_POST["password"]; 密碼學會加密是工程師重要的技術//
$gender = $_POST["gender"];
//echo $gender;  列印出來看//
$phones = $_POST["phones"];
$phones = array_filter($phones);
$phones_string = implode(',', $phones);
//var_dump($phones); //

/* if(empty($account)){
  echo "嗨你忘了輸入帳號";
 可再使用header() 提醒輸入
  exit;
}
if(empty($password)){
  echo "連密碼都忘記了嗎RIP";
  exit;
}
echo "account is $account, password is $password."; */
//date_defult_timezone_set("Asia/Taipei");//
$now = date('y-m-d H:i:s');
$sql = " INSERT INTO users (account, password , gender ,phones ,create_time) 
VALUES ('$account', '$password', '$gender', '$phones_string','$now')";

/* echo $sql; */

if ($conn->query($sql) === TRUE) {
  echo "新增資料成功<br>";
  $last_id = $conn->insert_id;
  echo "Id 為 $last_Id";
} else {
  echo "ERROR: " . $sql . "<br>" . $conn->error;
}

$conn->close();
header("location: user-list.php");
