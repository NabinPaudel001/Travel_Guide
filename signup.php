<?php
 $user= $_POST["username"];
 $email = $_POST["Email"];
 $password=$_POST["password"];
 $conn = new mysqli('localhost','root','','project');
 if($conn->connect_error){
    die('connection failed :'.$conn->connect_error);
 }
 else{
    $stmt=$conn->prepare("insert into projectdb (username,email,password)
    values('$user','$email','$password')");
    $stmt->execute();
    $redirect_url = "welcomesignup.php?user=" . urlencode($user) . "&email=" . urlencode($email);
    header("Location: " . $redirect_url);
    $stmt->close();
    $conn->close();
 }
?>