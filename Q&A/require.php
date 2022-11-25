
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
        p{
            position: absolute;
            text-align : center;
            top: 500px;
            left: 380px;
            font-family: 'Inter';
            font-style: normal;
            font-weight: 700;
            font-size: 32px;
            line-height: 39px;
            color: #000000;
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
    include("../nav/nav(require).php");
    ?>
    <div id = "QA_content">
    <p>문의가 정상적으로 처리되었습니다</p>

    </div>
</body>
</html>