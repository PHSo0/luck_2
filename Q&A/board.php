
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
            text-align: center;
            height : 50px;
            border-top : 2px solid black;
            border-bottom : 1px solid black;
            position: relative;
            top : 100px;
            display: block;
        }
        
    </style>
</head>
<body>
    <?php 
    if(!isset($_SESSION['id'])){
        include("../header/no_login_header.php");
    } include("../header/yes_login_header.php");
    ?>
    <?php
    include("../nav/nav(board).php");
    ?>

    <div id = "QA_content">
    <div class = "board_1">게시글1
    </div>
    <div class = "board_1">게시글2
    </div>
    <div class = "board_1">게시글2
    </div>
    <div class = "board_1">게시글2
    </div>
    <div class = "board_1">게시글2
    </div>

    </div>
</body>
</html>