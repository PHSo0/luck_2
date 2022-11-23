<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<style>
body{
    padding : 0%;
    margin : 0%;
    border : none;
    background : #FFFDF5;
}
.login{
    color : #000000;
    width: 100%;
    height : 100px;
    text-align: center;
    font-family: 'Inter';
    font-style: normal;
    font-weight: 800;
    font-size: 48px;
    line-height: 58px;
    position: fixed;
    top : 228px;
    
}
.id{
    width :30%;
    height : 50px;
    font-family: 'Inter';
    font-style: normal;
    font-weight: 300;
    font-size: 25px;
    line-height: 30px;
    background-color: #fffdf5;    
    position : fixed;
    top : 358px;
    border : 0px;
    border-bottom: 2px solid #000000;
    left : 35%;   
}
.pw{
    width :30%;
    height : 50px;
    font-family: 'Inter';
    font-style: normal;
    font-weight: 300;
    font-size: 25px;
    line-height: 30px;
    background-color: #fffdf5;    
    position : fixed;
    top : 428px;
    border : 0px;
    border-bottom: 2px solid #000000;
    left : 35%; 
}
.button{
    background-color: #000000;
    color : white;
    width : 20%;
    height : 50px;
    position : fixed;
    bottom : 285px;
    left: 40%;
    font-family: 'Inter';
    font-style: normal;
    font-weight: 800;
    font-size: 24px;
    line-height: 29px;
}

</style>
</head>
<body>
    <!--로그인 화면 구현 완성-->
    <?php
    include("../header/no_login_header.php");
    ?>
    <p class = "login">LOGIN</p>
    <form action = "process.php?mode=login" method = "post">
    <input class = "id" name = "id" type = "text" placeholder="  ID">
    <input class = "pw" name = "pw" type = "password" placeholder="  PASSWORD">
    <input class = "button" type = "submit" value="로그인">
    </form>
    
</body>
</html>