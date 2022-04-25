<?php
$id=$_POST["user_ID"];
$name = $_POST["name"];
$money = $_POST["money"];
$location = $_POST["location"];
$category = $_POST["category"];
include "db.php";
    $query = $connect->prepare("UPDATE shopping SET 
    name=:name,
    money=:money, 
    location=:location, 
    category=:category WHERE id=:id");

    if($query->execute(array(':name'=>$name,
        ':money'=>$money,':location'=>$location,
        ':category'=>$category,':id'=>$id))){
        echo "<meta http-equiv='refresh' content='0;URL= read.php' />";
        } else{
            echo "Error occured"; 
        }
?>