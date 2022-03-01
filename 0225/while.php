<?php
$a =0;
while ($a < 10) {
        $a++;
        echo "$a /";
}
?>

<h3>do while </h3>
<?php 
$b=0;
do {
    echo $b. "<br>";
    $b++;
}while($b<10);

?>
<h3>for </h3>
<?php 
for  ($i = 1; $i<10; $i++):
        echo $i."<br>";

endfor;
?>

<h3>continue</h3>
<?php
for($i=0; $i<10; $i++){
            if ($i === 4){
                continue;
            }
            echo $i."<br>";
}  
?>

<h3>break</h3>
<?php
for($i=0; $i<10; $i++){
            if ($i === 4){
                break;
            }
            echo $i."<br>";
}  
?>