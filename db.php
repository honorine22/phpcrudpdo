<?php
$DB_server = "localhost"; #Where is your DB Server located
$DB_name = "crudpdo"; #Whic DB you want to have access to
$DB_user_name = "root"; #Are you requesting access as who
$DB_user_password = ""; #Can you proove you have privileges bQ2{nO!7m@ju
$connect = new PDO("mysql:host=".$DB_server.";dbname=".$DB_name, $DB_user_name, $DB_user_password);
if(!$connect){
    echo "Connection to DB failed";
}
?>