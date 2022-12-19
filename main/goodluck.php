<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
<style>
   *{
    padding : 0px;
    margin : 0px;
    border : none;
}

body{
    background-color:#FFFDF5;
}

.ck{
    position: absolute;
    width: 1000px;
    height: 500px;
    margin-left:21.5%;
    margin-top:2.8%;
}

.boxx1{
    border:5px solid #A55E0B;
    border-radius:20px;
    width:1302px;
    height:454px;
    position:absolute;
    margin-left:11%;
    margin-top:23%;
}
.cooo{
    font-family: 'Inter';
    font-style: normal;
    font-weight: 700;
    font-size: 32px;
    line-height: 39px;
    text-align : center;
    position : relative;
    top : 180px;
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
<img class = "ck" src="../a.png">
<div class="boxx1">
    <?php 
    require_once('../DB/DB.php');
    $sql = $db -> prepare("SELECT content FROM cookie ORDER BY RAND() LIMIT 1");
    $sql -> execute();
    $row = $sql -> fetch();
    ?>
    <p class = "cooo"> <?=$row['content']?></p>
</div>

<rect></rect></body>