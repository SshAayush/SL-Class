<?php
//array in php
// $array = array(name=>'a','b','c','d','e');
include("dbconn.php");
$query = ('SELECT username FROM login');
$stmt = $pdo->prepare($query);
$stmt -> execute();

$value = $stmt->fetchAll(PDO::FETCH_ASSOC);
// $value = $stmt->fetch(PDO::FETCH_COLUMN);

foreach($value as $key => $value){
    echo $value['username']."<br>";
    // echo $value['passowrd']."<br>";
}
?>