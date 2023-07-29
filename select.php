<?php
//array in php
include("dbconn.php");
$query = ('SELECT * FROM login');
$stmt = $pdo->prepare($query);
$stmt -> execute();

$value = $stmt->fetchAll(PDO::FETCH_ASSOC);
// var_dump($value);
// $value = $stmt->fetch(PDO::FETCH_COLUMN);

foreach($value as $item){
    echo $item['username']."<br>";
    echo $item['password']."<br>";
}
?>