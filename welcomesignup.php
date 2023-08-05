<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        body{
            width: 100%;
            background-image: linear-gradient(103.3deg, rgba(252, 225, 208, 1) 30%, rgba(255, 173, 214, 1) 55.7%, rgba(162, 186, 245, 1) 81.8%);
            font-size: 20px;
        }
        .first{
            padding: 50px 10px;
            background-color: white;
            width: 40%;
            text-align: center;
           position: absolute;
           left: 50%;
           box-shadow: 10px 10px 10px 10px grey;;
         transform: translateX(-50%);
        }
        .fa-solid{
            color: green;
            font-size: 55px;
            
        }
        b{
            font-size: 25px;
            font-style: italic;
        }
        .resend{
            cursor: pointer;
            border-radius: 20px;
            border: none;
            background-color: green;
            color: white;
            margin-top: 20px;
            font-size: 25px;
            padding: 5px 30px;
        }
        .first a{
            font-size: 20px;
            padding: 10px 20px;
            border-radius: 30px;
            background-color: blueviolet;
            color: white;
            text-decoration: none;
        }
        .first a:hover{
            transition: all 0.1s ease-in-out;
            background-color: orangered;
            color: white;
        }
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <div class="first">
        <i class="fa-solid fa-square-envelope"></i><br><br>
        <h1>Please verify your email</h1><br>
        Hi  <?php $user=$_GET['user']; echo "<b>$user </b>" ;  ?>! We sent an email to <br>
        <?php $email=$_GET['email']; echo "<b>$email</b>";  ?><br><br>
        Just click on the link in that email to complete your signup.If you don't <br>
        see  it, you may need to check your spam folder. <br><br>
        Still can't find the email? No problem . <br>
        <button class="resend">Resend Verification Email</button><br><br><br>
        <a href="home.php">&larr; Back</a>
   </div>
</body>
</html>