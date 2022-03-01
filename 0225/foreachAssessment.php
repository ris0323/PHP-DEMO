<h1>foreach迴圈</h1>
<?php
$arr=[1,2,3,4];
/* foreach($arr as $value){
        echo $value."<br>"; 第一種寫法*/




        foreach($arr as $value):
            echo $value."<br>";  //第二種寫法//
endforeach;
?>

<h2>student list</h2>
<?php
$student=[
    [
        "name"=>"Ris",
        "height"=>180,
        "weight"=>65,
    ],
    [
        "name"=>"Ris",
        "height"=>180,
        "weight"=>65,
    ],
    [
        "name"=>"Ris",
        "height"=>180,
        "weight"=>65,
    ],
    [
        "name"=>"Ris",
        "height"=>180,
        "weight"=>65,
    ],
    [
        "name"=>"Ris",
        "height"=>180,
        "weight"=>65,
    ],
    [
        "name"=>"Ris",
        "height"=>180,
        "weight"=>65,
    ],
]


?>