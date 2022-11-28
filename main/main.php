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
    <div id = "content">
    <img class="main_a" src="pic/찐노랑.png" width="1200" height="450">
    <img class="main_b" src="pic/찐초록.png" height="450">
    <img class="main_c" src="pic/찐파랑.png" width="1000" height="280">
    <img class="main_d" src="pic/찐분홍.png" height="280">
    </div>
    <footer>
    <div class= "first"> 주소 : 08221 서울시 구로구 경인로 445 ([구]고척동 62-160) 동양미래대학교</div>
    <br>
    <span class = "second"> 출처 : https://kor.pngtree.com/freepng/zodiac-cartoon-hand-will-twelve-zodiac-mouse-cattle_3784078.html, https://kor.pngtree.com/freepng/12-constellations-cute-elements-set_4061735.html,https://kor.pngtree.com/freepng/mbe-style-cartoon-weather-icon-elements-collection_3699707.html,https://kor.pngtree.com/freepng/cartoon-mbe-education-icon-, https://kor.pngtree.com/freepng/fortune-cookies-cookie-chinese-traditional_8726946.htmlhttps://kor.pngtree.com/freepng/fortune-cookies-cookie-chinese-traditional_8726946.htmlcollection_5464415.html </span>

    </footer>
     
</body>
</html>