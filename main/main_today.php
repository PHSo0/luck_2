<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .content{
            background-color: #fffdf5;
            width :100%;
            height: 793px;
            position : absolute;
            top : 123px;

        }
    </style>
</head>
<body>
    <?php
    if(! isset($_SESSION['id'])){
        include("../header/no_login_header.php");
    } else{
        include("../header/yes_login_header.php");
    }
    include("../main_nav/today.php");
    ?>
    <div class="content">
    <p>오늘의 운세 페이지 입니다.</p>
    </div>
</body>
</html>