<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    #content{
        background-color: #FFFDF5  ;
        width : 100%;
        height : 70px;
        position : absolute;
        top : 53px;
    }
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

    </style>
</head>
<body>
    <?php if(!isset($_SESSION['id'])){
        include("../header/no_login_header.php");
    }

    ?>

    <div id = "content">

    </div>
    <div id = "no_login">
    </div>
    
    
    
    
    
</body>
</html>