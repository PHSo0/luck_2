<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>main</title>
    <link rel="stylesheet" href="main.css">
</head>
<body>
    <?php
    include("no_login_header.php");
    include("nav.php");
    ?>
    
    <div id="wrapper">
        <div id="yellow">
            <p class="y1">안에 뭐가 들었을까?</p>
            <p class="y2">FORTUNNE<BR>COOKIE</p>
        </div>

        <div id="green">
            <p class="g1">오늘은 어떤일이?</p>
            <p class="g2">오늘의 운세</p>
            <div id="gcircle1"></div>
            <div id="gcircle2"></div>
        </div>

        <div id="blue">
            <p class="b1">내가 말해줄게!</p>
            <p class="b2">듣고 싶은 말</p>
        </div>

        <div id="pink">
            <p class="p1">정말 행운을 가져다줄까?</p>
            <p class="p2">행운의 아이템</p>
        </div> 
    </div>
</body>
</html>