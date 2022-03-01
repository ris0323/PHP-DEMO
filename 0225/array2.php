<?php
/* $student["name"] ="Ris";
$student["weight"] = 65;
$student["height"] = 180; */
/* var_dump($student);*/
 
/* 轉換成JS物件
$student=[
    "name" => "Ris",
    "hieght" => 180,
    "weight" => 65
];

echo json_encode($student);
*/


$student=[
    "name" => "Ris",
    "hieght" => 180,
    "weight" => 65
];

echo $student["name"]."'s height is" .$student["hieght"]  //'s 表 什麼的
."cm, weight is ". $student["weight"]."kg";  //輸出Riss height is180cm, weight is 65kg//

?>