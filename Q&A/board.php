
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        #QA_content{
            height: 863px;
            width: 83%;
            background-color: #FFFDF5;
            position: absolute;
            top: 53px;
            left: 294px;
        }
        .board_1{
            margin : 160px 320px 0px 320px;
            height : 84px;  
            text-align: left;
            border-top : 1px solid black;
            position: relative;
            top : 100px;
            display :block;
        }
        .board_2{
            margin : 0px 320px 0px 320px;
            height : 84px;  
            border-top : 1px solid black;
            position: relative;
            top : 100px;
            display :block;
        }
        .board_3{
            margin : 0px 320px 0px 320px;
            height: 84px;  
            border-top : 1px solid black;
            border-bottom : 1px solid black;
            position: relative;
            top : 100px;
            display : block;
        }
        .post{
            margin :30px;
        }

        .sub_button{
            position :absolute;
            font-family: 'Inter';
            font-style: normal;
            font-weight: 700;
            font-size: 20px;
            line-height: 24px;
            margin : 690px 0px 0px 1350px;
            background-color: #FFFDF5;
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
    ?>
    <?php
    include("../nav/nav(board).php");
    ?>
    <?php $num =1; ?>

    <div id = "QA_content">
    <div class = "board_1"><p class="post">게시글1</p>
    </div>
    <div class = "board_2"><p class="post">게시글1</p>
    </div>
    <div class = "board_2"><p class="post">게시글1</p>
    </div>
    <div class = "board_3"><p class="post">게시글1</p>
    </div>
    </div>

    <input type = submit value="글쓰기" class = "sub_button">
</body>
</html>