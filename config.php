<?php
$host ="localhost";
$db="employee_management";
 $user="root";
$pass="";
//step2 after created DB
//create object from PDO
try {
    $pdo=new PDO("mysql:host=$host;dbname=$db",$user,$pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (Exception $e) {
    die("Could not connect to database". $e->getMessage());
}


?>