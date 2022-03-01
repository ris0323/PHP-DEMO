<?php 

/* if(isset($_GET["account"])){
    echo "have account!!";
} */
if(isset($_GET["account"]) || !isset($_GET["password"])){
  echo "請透過正常管道來到此頁!!";
  exit;
} 

$account=$_GET["account"];
$password=$_GET["password"];

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