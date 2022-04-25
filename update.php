<?php
$id=$_POST["user_ID"];
$name = $_POST["name"];
$money = $_POST["money"];
$location = $_POST["location"];
$category = $_POST["category"];
$countfiles = count($_FILES['files']['name']);
include "db.php";
    $query = $connect->prepare("UPDATE shopping SET 
    name=:name,
    money=:money, 
    location=:location, 
    category=:category,
    image=:image WHERE id=:id");

for ($i=0; $i < $countfiles; $i++) { 
    $filename = $_FILES['files']['name'][$i];
    $target_file = 'upload/'.$filename;
    $file_extension = pathinfo($target_file, PATHINFO_EXTENSION);
    $file_extension = strtolower($file_extension);
    $valid_extension = array("png","jpeg","jpg");
    if(in_array($file_extension, $valid_extension)) {
        if(move_uploaded_file(
            $_FILES['files']['tmp_name'][$i],
            $target_file)
        ) {
    if($query->execute(array(':name'=>$name,
        ':money'=>$money,':location'=>$location,
        ':category'=>$category,':image'=>$target_file,':id'=>$id))){
        echo "<meta http-equiv='refresh' content='0;URL= read.php' />";
        } else{
            echo "Error occured"; 
        }
    }
}
}
?>