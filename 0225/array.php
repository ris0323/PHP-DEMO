<?php
$arr[0]=1;
$arr[1]=2;
var_dump($arr);
echo"<br>";

$arr2=array(0,1,2,3);
var_dump($ayy2);
echo "<br>";
$arr3=[1,2,3,4,5];
var_dump($arr3);
?>

<h3>多維陣列</h3>  <!-- 陣列裡面還有陣列 -->
<?php
$name=["Ris","Winnie","Jeff","Iven"];
$height=[180,173,155,123];
$weight=[65,40,80,90];
$students=[$name,$height,$weight];
var_dump($students)
?>