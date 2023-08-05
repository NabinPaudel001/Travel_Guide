<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        body{
            background-image: url(moon1.jpg);
            background-size: cover;
            color: white;
            font-size: 30px;
        }
        img{
            width: 30vw;
        }
        .time{
            display: flex;
            gap: 20px;
            text-align: center;
        }
        .time .a{
            padding: 9px;
            font-size: 50px;
            color: orangered;
        }
       .time div p{
        font-size: 40px;
       }
       .container{
        position: absolute;
        right: 0;
        margin-right: 10vw;
        transform: translateY(-100px);
       }
       .container #enter{
        width: 25vw;
        height: 40px;
        font-size: 20px;
        border-radius: 5px;
        border: none;
        padding: 5px;
        margin-right: 20px;
       }
       #botton{
        font-size: 20px;
        padding: 12px 15px;
        border-radius: 30px;
        border: none;
        cursor: pointer;
       }
       #botton:hover{
        color: white;
        background-color: orangered;
       }
       .b{
        transform: translateY(-10px);
       }
    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <img src="graass.png" alt=""><br>
        <marquee behavior="scroll" direction="right" scrollamount="50"><img src="plane.png" alt="plane"  id="plane"></marquee>
        <div class="container">
        <!-- <?php $Name=$_GET['Name']; echo "<b>$Name </b>" ;  ?> -->
            <p>Website is under maintenance!!!</p>
            <h1>We're <b>Launching</b> Soon</h1>
            <div class="time">
                <div clas="day">
                    <span class="a" id="day">00</span><br>
                    <span class="b">Days</span>
                </div>
                <div  class="hours">
                    <span class="a" id="hours">00</span><br>
                    <span class="b">Hours</span>
                </div>
                <div  class="minutes">
                    <span class="a" id="minutes">00</span><br>
                    <span class="b">Minutes</span>
                </div>
                <div  class="seconds">
                    <span class="a" id="seconds">00</span><br>
                    <span class="b">Seconds</span>
                </div>
            </div><br><br>
            <form action="">
            <input id="enter" type="text" placeholder="enter your email"> <input id="botton" type="submit" value="Notify me">
            </form>
        </div>
        <script>
            var from =new Date("Aug 15,2023 00:00:00").getTime();
            var x=setInterval(function(){
                var now =new Date().getTime();
                var distance =from - now;
                var days = Math.floor(distance / (1000 * 60 * 60 * 24));
                var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                var seconds = Math.floor((distance % (1000 * 60)) / 1000);
                document.getElementById("day").innerHTML=days;
                document.getElementById('hours').innerHTML=hours;
                document.getElementById('minutes').innerHTML=minutes;
                document.getElementById('seconds').innerHTML=seconds;
            },1000);
        </script>
</body>
</html>