<?php
    include ('dbconnect.php');
    if(isset($_POST['submit'])){
    $Name=$_POST['NAME'];
    $Password=$_POST['PASS'];
    $sql="select * from projectdb where username='$Name' and password='$Password'";
    $result=mysqli_query($conn,$sql);
    $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
    $count=mysqli_num_rows($result);
    if($count==1){
        $redirect_url = "welcomelogin.php?user=" . urlencode($Name);
        header("Location: " . $redirect_url);
    }
    else{
        echo '<script>
            window.location.href="home.php";
            alert("Wrong password");
            </script>';
    }
    }
?>