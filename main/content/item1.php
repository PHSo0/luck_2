<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    </head>
    <style>
    .content_item {
        background-color: #fffdf5;
        width :100%;
        height: 793px;
        position : absolute;
        top : 123px;
    }
    .circle1{
    width: 218px;
    height: 218px;
    position:absolute;
    left:14%;
    top:20%;*
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
        width: 218px;
        height: 218px;
        left:42%;
        top:29%;
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
    width: 218px;
    height: 218px;
    left:70%;
    top:29%;
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

    .item1{
    position: absolute;
    width: 308px;
    height: 193px;
    left: 11.8%;
    top: 55%;
    font-family: 'Inter';
    font-style: normal;
    font-weight: 700;
    font-size: 43px;
    line-height: 52px;
    text-align: center;
    letter-spacing: 0.05em;
    color: #AB6700;
    }

    .item2{
    position: absolute;
    width: 308px;
    height: 193px;
    left: 40%;
    top: 59%;
    font-family: 'Inter';
    font-style: normal;
    font-weight: 700;
    font-size: 43px;
    line-height: 52px;
    text-align: center;
    letter-spacing: 0.05em;
    color: #AB6700;
    }

    .item3{
    position: absolute;
    width: 308px;
    height: 193px;
    left: 67.8%;
    top: 59%;
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
    <body>
    <?php 
    require_once('../DB/DB.php');
    $sql = $db -> prepare("SELECT * FROM item ORDER BY RAND() LIMIT 1");
    $sql -> execute();
    $row = $sql -> fetch();
    ?>
        <div class="content_item">

    <div class="circle1">
        <img src="pic/?????????.png" alt="?????????"></div>
        <p class="item1">????????? ????????? ???????????? <?=$row['item']?>?????????</p>
    </div>

    <div class="circle2">
        <img src="pic/??????.png" alt="??????"></div>
            <div class="item2"><p>????????? ????????? ????????? <?=$row['color']?>?????????</p>
    </div>

    <div class="circle3">
        <img src="pic/??????.png" alt="??????"></div>
            <div class="item3"><p>????????? ????????? ????????? <?=$row['num']?>?????????</p>
    </div>

</div>
    </body>