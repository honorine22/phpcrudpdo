<?php
include "db.php";
$id=$_GET["thisID"];
$sql="DELETE FROM shopping WHERE id=:id";
$query=$connect->prepare($sql);
if($query->execute(array(':id'=>$id))){
echo "<meta http-equiv='refresh' content='0;URL=read.php' />";
} else {
    echo "Error occured";
}
?>