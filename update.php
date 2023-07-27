<?php
include("dbconn.php");
$query = ('UPDATE login SET password = "kriti" WHERE username = "test2"');
$stmt = $pdo->prepare($query);
$stmt -> execute();
echo "Value Updated!!";

// foreach($value as $key => $value){
//     echo $value['username']."<br>";
//     // echo $value['passowrd']."<br>";
// }
?>