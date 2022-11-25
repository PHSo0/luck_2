<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>오늘은 어떤 말이 듣고 싶나요?</title>
    <style>
        .content_h{
            background-color: #fffdf5;
            width :100%;
            height: 793px;
            position : absolute;
            top : 123px;
        }
        .img_s{
            margin-top:20px;
        }
        img { display:block; margin:auto;}

        .talk_1{
            width:331px;
            height:445px;
            margin-left:157px;
            margin-top:20px;
            background:green; 
            opacity: 0.5;
        }
        .talk_2{
            width:331px;
            height:445px;
            margin-left:513px;
            margin-top:20px;
            background:yellow;
            opacity: 0.5;
        }
        .talk_3{
            width:331px;
            height:445px;
            margin-left:865px;
            margin-top:20px;
            background:red;
            opacity: 0.5;
        }
        .talk_4{
            width:331px;
            height:445px;
            margin-left:1218px;
            margin-top:20px;
            background:blue;
            opacity: 0.5;
        }
    </style>
</head>
<body>
<?php
        include("../../header/yes_login_header.php");
        include("../../main_nav/talk.php");
    ?>
    <div class="content_h">
    
    <img class="img_s" src="../../icon/talk/찐완성.png" width="1440px" height="800px">
    <div class="talk_1"></div>
    
    <!-- <div class="talk_1"></div> -->
    <div class="talk_2"></div>
    <div class="talk_3"></div>
    <div class="talk_4"></div>
    </div>
    
</body>
</html>