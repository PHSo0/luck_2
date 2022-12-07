<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>main</title>
<style>
*{
    padding : 0px;
    margin : 0px;
    border : none;  
}

#mmcontent{
    background-color: #FFFDF5; 
    width : 100%;
    height: 793px;
    position : absolute;
    top : 123px;
    min-height: 100%;
    position: relative;
    padding-bottom: 60px;   
    
}

.main_a{
    margin:30px 15px 10px 45px; /*위 오 아 왼 */
}

.main_b{
    margin:30px 15px 10px 2px;
}

.main_c{
    margin: 10px 15px 20px 45px;
}

.main_d{
    margin: 10px 0px 20px 0px;
}

footer{
    background-color: #442c2c;
    width : 100%;
    height : 203px;
    bottom : 0;
}
.first{
    font-family: 'Inter';
    font-style: normal;
    font-weight: 400;
    font-size: 25px;
    line-height: 30px;
    letter-spacing: 0.05em;
    color: #FAFAFA;
    background-color: #442c2c;
}
.second{
    width : 1351px;
    font-family: 'Inter';
    font-style: normal;
    font-weight: 400;
    font-size: 20px;
    line-height: 24px;
    letter-spacing: 0.05em;
    color: #fafafa;
    background-color: #442c2c;
  
    
}
.content{
    margin : 35px;
    position : absolute;
}
.footer_con{
    position : absolute;
    margin-left: 44px;
    margin-top : 26px;  
    background-color: #442c2c;
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
    include("../main_nav/none.php");
    ?>
    <div id = "mmcontent">
    <img class="main_a" src="pic/찐노랑.png" width="1200" height="450">
    <img class="main_b" src="pic/찐초록.png" height="450">
    <img class="main_c" src="pic/찐파랑.png" width="1000" height="280">
    <img class="main_d" src="pic/찐분홍.png" height="280">

    <footer>
    <span class= "footer_con">
    <p class= "first"> 주소 : 08221 서울시 구로구 경인로 445 ([구]고척동 62-160) 동양미래대학교</p>
    <p class = "second"> 출처 : https://kor.pngtree.com/freepng/zodiac-cartoon-hand-will-twelve-zodiac-mouse-cattle_3784078.html, https://kor.pngtree.com/freepng/12-constellations-cute-elements-set_4061735.html,https://kor.pngtree.com/freepng/mbe-style-cartoon-weather-icon-elements-collection_3699707.html,https://kor.pngtree.com/freepng/cartoon-mbe-education-icon-, https://kor.pngtree.com/freepng/fortune-cookies-cookie-chinese-traditional_8726946.htmlhttps://kor.pngtree.com/freepng/fortune-cookies-cookie-chinese-traditional_8726946.htmlcollection_5464415.html </p>
    </span>

    </footer>
</div>     
</body>
</html>