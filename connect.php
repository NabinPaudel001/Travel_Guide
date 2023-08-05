<?php
 $user= $_POST["username"];
 $email = $_POST["email"];
 $password=$_POST["password"];
 $conn = new mysqli('localhost','root','','projectsignin');
 if($conn->connect_error){
    die('connection failed :'.$conn->connect_error);
 }
 else{
    $stmt=$conn->prepare("insert into projectdb1(username,email,password)
    values('','$user','$email','$password')");
    $stmt->execute();
    echo "registration sucessful..";
    $stmt->close();
    $conn->close();
 }
?>