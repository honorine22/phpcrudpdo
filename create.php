<?php
include "db.php";
$name=$_POST["prod_name"];
$money = $_POST["money"];
$location = $_POST["location"];
$category = $_POST["category"];
$countfiles = count($_FILES['files']['name']);
    
    $query = $connect->prepare("INSERT INTO shopping
    (name, money, location,category, image) 
    VALUES (:name, :money, :location, :category, :image)");
    for ($i=0; $i < $countfiles; $i++) { 
        $filename = $_FILES['files']['name'][$i];
        // Location
        $target_file = 'upload/'.$filename;
        $file_extension = pathinfo($target_file, PATHINFO_EXTENSION);
        $file_extension = strtolower($file_extension);
        $valid_extension = array("png","jpeg","jpg");
        if(in_array($file_extension, $valid_extension)) {
            if(move_uploaded_file(
                $_FILES['files']['tmp_name'][$i],
                $target_file)
            ) {
                if($query->execute(array(
                ':name'=>$name,
                ':money'=>$money,':location'=>$location,
                ':category'=>$category,':image'=>$target_file))) {
                    echo "File upload successfully";
                    echo "<meta http-equiv='refresh' content='0;URL= read.php' />";
                }else{
                    echo "Error Occured";
                }
            }
        }
    }
?>