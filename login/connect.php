<?php
$name = $_POST['name'];
$Email = $_POST['Email'];
$password = $_POST['password'];
$Confirm_password = $_POST['Confirm_password'];

 $conn = new mysqli('localhost','root','','test');
 if($conn->connect_error){
    die('Connection Failed : '.$conn->connect_error);
 }
 else{
    $smt-> $conn->prepare("insert into registration(name, Email, password, Confirm_password) values(?,?,?,?)");
    $smt->bind_param("ssss", $name, $Email, $password, $Confirm_password);
    $smt->execute();
    echo "successful reg";
    $smt->close();
    $conn->colse();
 }
 ?>