<?php
error_reporting(E_ALL);

include_once("DB.php");

$db = new DB();
$db->select('SELECT * FROM user');
$arr = $db->arr;
var_dump($arr);

//$db = new PDO('mysql:host=localhost;dbname=test','root','57447210');
//$stmt = $db->prepare('SELECT id, name FROM user');
//$stmt->execute();
//while($row = $stmt->fetch(PDO::FETCH_OBJ)){
//    echo $row->id." ".$row->name."<br>";
//}



//git push -u origin master

//evgeniy.gladkov33@gmail.com