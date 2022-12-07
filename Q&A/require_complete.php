
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
            width: 77.5%;
            background-color: #FFFDF5;
            position: absolute;
            top: 53px;
            left: 294px;
        }
        .employ{
            font-family: 'Inter';
            font-style: normal;
            font-size: 32px;
            font-weight: 700;
            line-height: 39px;
            color: #000000;
            position: relative;
            top: 50%;
            margin-top: -50px;
            margin-left : 37%;
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
    include("../nav/nav(require).php");
    ?>
     <div id = "QA_content">
    <p class = "employ">문의가 정상적으로 처리되었습니다.</p>
</div>
</body>
</html>