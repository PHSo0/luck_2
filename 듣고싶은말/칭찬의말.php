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

    .talkbox1 {
    box-sizing: border-box;
    position: absolute;
    width: 324px;
    height: 72px;
    margin-left:10%;    
    top: 188px;
    background: #FFF1A5;
    border: 4px solid #C98724;
    border-radius: 20px;
    }
    .whitebox {
    box-sizing: border-box;
    position: absolute; 
    width: 1334px;
    height: 545px;
    margin-left:10%;
    top: 291px;
    background: #FFFFFF;
    border: 5px solid #A55E0B;
    border-radius: 20px;  
    }
    .talkbox2 {
    box-sizing: border-box;
    position: absolute;
    width: 499px;
    height: 72px;
    margin-left:58.8%;    
    top: 867px;
    background: #FFF1A5;
    border: 4px solid #C98724;
    border-radius: 20px;
    }
    .ch{
        font-family: 'Inter';
        font-style: normal;
        font-weight: 400;
        font-size: 43px;
        line-height: 52px;
        color: #ffffff;
        -webkit-text-stroke: 3px #AB6700;
         position: relative;
        text-align: center;
        letter-spacing: 0.05em;
        }
        .coo{
    font-family: 'Inter';
    font-style: normal;
    font-weight: 700;
    font-size: 32px;
    line-height: 39px;
    text-align : center;
    position : relative;
    top : 200px;
}
    </style>
    <body>
    <?php
    if(! isset($_SESSION['id'])){
        include("../header/no_login_header.php");
    } else{
        include("../header/yes_login_header.php");
    }   
        include("../main_nav/talk.php");
    ?>
<main>
    <div class="talkbox1"><p class="ch"><b>칭찬의 말</b></p></div>

    <div class="whitebox"><?php 
    require_once('../DB/DB.php');
    $sql = $db -> prepare("SELECT b FROM talk ORDER BY RAND() LIMIT 1");
    $sql -> execute();
    $row = $sql -> fetch();
    ?>
    <p class = "coo"> <?=$row['b']?></p></div>
    <div class="talkbox2" onclick="location.href='../main/main_talk.php'" ><p class="ch"><b>다른 말도 듣고 싶어요!<b></p></div>
    </main>
    </body>