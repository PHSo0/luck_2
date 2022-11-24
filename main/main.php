<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>main</title>
    <link rel="stylesheet" href="main.css">

</head>
<body>
<?php
    if(! isset($_SESSION['id'])){
        include("../header/no_login_header.php");
    } else {
        include("../header/yes_login_header.php");
    }
    include("../main_nav/today.php");
    ?>
    <div id = "content">
    <img class="main_a" src="pic/찐노랑.png" width="1200" height="450">
    <img class="main_b" src="pic/찐초록.png" height="450">
    <img class="main_c" src="pic/찐파랑.png" width="1000" height="280">
    <img class="main_d" src="pic/찐분홍.png" height="280">
    </div>
     
</body>
</html>