<?php


$student=[
    "name" => "Ris",
    "hieght" => 180,
    "weight" => 65
];
?>

<h1></h1> <!-- 輸出為 名字 -->
<script>
    let student=<?=json_encode($student)?>;
    console.log(student)
    let h1=document.querySelector("h1");
    h1.innerText=student.name;
    </script>