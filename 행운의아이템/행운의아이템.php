<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    </head>
    <style>
    body {background-color: #FFFDF5;}
    </style>
    <body>
    <?php
    if(! isset($_SESSION['id'])){
        include("../header/yes_login_header.php");
    } else{
        include("../header/no_login_header.php");
    }   
        include("../main_nav/item.php");
    ?>
    <style>
        .circle1{
            width: 218px;
    height: 218px;
    left: 187px;
    top: 327px;
    background-color: #fffdf5;
    border-radius: 50%;
    border: 3px solid #C98724;
    position: absolute;
}
    .circle1 img{
        position: absolute;
     top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    object-fit: cover;
    background-color:#FFFFFF;
    border-radius:50%;
    }
    .circle2{
        width: 215px;
    height: 215px;
    left: 605px;
    top: 327px;
    background-color: #fffdf5;
    border-radius: 50%;
    border: 3px solid #C98724;
    position: absolute;
}
    .circle2 img{
        position: absolute;
     top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    object-fit: cover;
    background-color:#FFFFFF;
    border-radius:50%;
    }
    .circle3{
        width: 200px;
    height: 200px;
    left: 1046px;
    top: 339px;
    background-color: #fffdf5;
    border-radius: 50%;
    border: 3px solid #C98724;
    position: absolute;
}
    .circle3 img{
        position: absolute;
     top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    object-fit: cover;
    background-color:#FFFFFF;
    border-radius:50%;
    }
    .ch1{
        position: absolute;
    width: 308px;
    height: 193px;
    left: 142px;
    top: 557px;
    font-family: 'Inter';
    font-style: normal;
    font-weight: 700;
    font-size: 43px;
    line-height: 52px;
    text-align: center;
    letter-spacing: 0.05em;
    color: #AB6700;
    }
    .ch2{
        position: absolute;
    width: 308px;
    height: 193px;
    left: 566px;
    top: 557px;
    font-family: 'Inter';
    font-style: normal;
    font-weight: 700;
    font-size: 43px;
    line-height: 52px;
    text-align: center;
    letter-spacing: 0.05em;
    color: #AB6700;
    }
    .ch3{
        position: absolute;
    width: 308px;
    height: 193px;
    left: 990px;
    top: 557px;
    font-family: 'Inter';
    font-style: normal;
    font-weight: 700;
    font-size: 43px;
    line-height: 52px;
    text-align: center;
    letter-spacing: 0.05em;
    color: #AB6700;
    }
    </style>
    <main>
    <body>
    <div class="circle1">
        <img src="pic/색강.png" alt="색강">
    </div>
    <div class="ch1"><p>당신의 행운의 아이템은 000입니다</p></div>
    <div class="circle2">
        <img src="pic/숫자.png" alt="숫자"></div>
    <div class="ch2"><p>당신의 행운의 아이템은 000입니다</p></div>
    <div class="circle3">
        <img src="pic/아이템.png" alt="아이템"></div>
    <div class="ch3"><p>당신의 행운의 아이템은 000입니다</p></div>
    </main>
    </body>