<?php
function sum(){
$array = array(10,20,30,0,50);
$sum = 0;
foreach($array as $value){
    $sum = $sum + $value;
}
echo "<h1>"."The sum of the array is:".$sum ."</h1>";
}

sum();

?>