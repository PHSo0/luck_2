
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        #QA_content2{
            height: 863px;
            width: 83%;
            background-color: #FFFDF5;
            position: absolute;
            top: 53px;
            left: 294px;
        }
        #QA_content3{
            position: absolute;
            width: 500px;
            left: 874px;
            top: 580px;
            font-family: 'Inter';
            font-style: normal;
            font-weight: 700;
            font-size: 32px;
            line-height: 39px;
            color: #000000;
        }

        p{
            position: absolute;


            left: 350px;
            top: 243px;
            font-family: 'Inter';
            font-style: normal;
            font-weight: 700;
            font-size: 40px;
            line-height: 48px;
            color: #000000;
            text-align : center;
             }
    line{
        box-sizing: border-box;
        position: absolute;
        width: 937px;
        height: 455px;
        left: -235px;
        top: 60px;
        border: 2px solid #000000;
    }
    set{
        box-sizing: border-box;
        position: absolute;
        width: 130px;
        height: 48px;
        left: -7px;
        top: 0px;
        border: 2px solid #000000;
    }          
    </style>
</head>
<body>
<?php 
    session_start();
    if(! isset($_SESSION['id'])){
        include("../header/no_login_header.php");
    } else{
        include("../header/yes_login_header.php");
    }
    ?>
    <?php
    include("../nav/nav(require).php");
    ?>
    <div id = "QA_content2">
    <p>필요한 정보를 입력해주세요</p>
    <p><line></line></p>
    </div>
    <div id = "QA_content3">
    <p>보내기</p>
    <p><set></set></p>
</div>
</body>
</html>