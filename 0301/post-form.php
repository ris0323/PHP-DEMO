<?php 

if(isset($_POST["account"]) || !isset($_POST["password"])){
  echo "請透過正常管道來到此頁!!";
  exit;
} 

$account=$_POST["account"];
$password=$_POST["password"];

if(empty($account)){
  echo "嗨你忘了輸入帳號";
 //可再使用header() 提醒輸入
  exit;
}
if(empty($password)){
  echo "連密碼都忘記了嗎RIP";
  exit;
}


echo "account is $account, password is $password.";

?>