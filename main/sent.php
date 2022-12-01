<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>게시판 문의</title>
    <style>
    *{
    padding : 0px;
    margin : 0px;
    border : none;  
    }

    .sent_con1{

    }

    .sent_con2{
        
    }

    .input_box1{

    }
    .input_box2{
        
    }
    .push{
        
    }
    </style>
</head>

<body>
<?php
    session_start();
    // if(! isset($_SESSION['id'])){
    //     include("../header/no_login_header.php");
    // } else {
    //     include("../header/yes_login_header.php");
    // } 
    if(! isset($_SESSION['id'])){
        include("../header/no_login_header.php");
    } else{
        include("../header/yes_login_header.php");
    }
    include("../main_nav/none.php");
    ?>
    
    <div class = "sent_con1">
        <form>
            <input class = "input_box1" type = "text" name = "want" placeholder="제목입력">   
        </form>
    </div>
            
    <div class = "sent_con2">
        <textarea class = "input_box2" name = "want"></textarea>
        <button class = "push">보내기</button>
    </div>

    </body>
    </html>