<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>

    *{
    padding : 0px;
    margin : 0px;
    border : none;
    
    }
    #no_login{
        position : absolute;
        top : 123px;
        width : 100%;
        height : 863px;
        background: linear-gradient(180deg, #FFEDDD 0%, rgba(255, 255, 255, 0) 3.51%);
    }
    .content{
        text-align: center;
        font-family: 'inter';
        font-size:32px;
        font-weight: 700;
        color: #AB6700;
        line-height: 39px;
        position: relative;
        top : 350px;
    }



    </style>
</head>
<body>
    <?php 
    session_start();
    if(!isset($_SESSION['id'])){
        include("../header/no_login_header.php");
    }
    include("../main_nav/today.php");
    ?>
    <div id = "no_login">
        <p class= "content">로그인이 필요한 서비스입니다.</p>
    </div>
    
    
    
    
    
</body>
</html>