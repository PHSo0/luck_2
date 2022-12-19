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
</div>

<rect></rect></body>