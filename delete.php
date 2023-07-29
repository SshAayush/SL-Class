<?php
include("dbconn.php");
// $query = ('ALTER TABLE login ADD COLUMN password VARCHAR(255)');
$query = ('DELETE FROM login WHERE username = "test2"');
$stmt = $pdo->prepare($query);
if($stmt -> execute()){
    echo "Value Updated!!";
};


// foreach($value as $key => $value){
//     echo $value['username']."<br>";
//     // echo $value['passowrd']."<br>";
// }

?>