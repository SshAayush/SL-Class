<?php
include('dbconn.php');
// include_once('dbconn.php');
$username = $_POST['username'];
$password = $_POST['password'];

$query = "INSERT INTO login (username, password) VALUES (:users, :pass)";
$stmt = $pdo->prepare($query);
$stmt->bindParam(':users', $username);
$stmt->bindParam(':pass', $password);
$stmt->execute();





// $query = $pdo->prepare("INSERT INTO TABLE login(username,password) VALUES('$username','$password')");
// $stmt->execute();

?>