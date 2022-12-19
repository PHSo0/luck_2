<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .cookie_content{
            background-color: #fffdf5;
            width :100%;
            height: auto;
            position: absolute;
            top :120px;
        }
        #k_a{
            position: relative;
            width: 1200px;
            height: 630px;
            background: #BDBAB3;
            border-radius: 20px;
            margin:0 auto; 
        }

        #k_b{
            position: relative;
            width: 1100px;
            height: 530px;
            background: #DEDAD3;
            border-radius: 20px;
            margin-left : 40px; 
        }
        .ch{
            font-family: 'Inter';
            font-style: normal; 
            font-size: 110px;
            line-height: 133px;
            color: #ffffff;
            -webkit-text-stroke: 5px #AB6700;
            position: relative;
            text-align: center;
            top : 45px;
        }

        .icon_1{
            /* width:30%;
            height:300px;
            position: absolute;
            top:10.5%;
            left: 13.2%; */
            /*위 오 아 왼 */
            margin : 0px 50px 50px 60px;
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
   include("../main_nav/cookie.php");
?>
    <div class="cookie_content">
    <div id="k_a"> 
    <div id="k_b">
    <img class="icon_1" src="../icon/포춘쿠키/2.png" width="240" height="240" onclick="location.href='goodluck.php'">
    <img class="icon_1" src="../icon/포춘쿠키/2.png" width="240" height="240" onclick="location.href='goodluck.php'">
    <img class="icon_1" src="../icon/포춘쿠키/2.png" width="240" height="240" onclick="location.href='goodluck.php'"> <br>
    <img class="icon_1" src="../icon/포춘쿠키/2.png" width="240" height="240" onclick="location.href='goodluck.php'">
    <img class="icon_1" src="../icon/포춘쿠키/2.png" width="240" height="240" onclick="location.href='goodluck.php'">
    <img class="icon_1" src="../icon/포춘쿠키/2.png" width="240" height="240" onclick="location.href='goodluck.php'">
    </div>  </div>
    <p class="ch"><b>쿠키를 골라주세요</b></p>
    
    </div>
</body>
</html>