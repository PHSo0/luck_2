<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="http://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script type="text/javascript" src="http://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>


    
<style>
    body{
        background-color: #FFFDF5;
    }
img{
    width : 100px;
    height : 100px;
}
section{
    width :80%;
    /* height: 793px; */
    position : absolute;
    top : 700px;
    left:10%;
}
    .ddibox {
    box-sizing: border-box;
    position: absolute;
    width: 324px;
    height: 72px;
    left:5%;
    top:14%;
    background: #FFF1A5;
    border: 4px solid #C98724;
    border-radius: 20px;
    }

    .ddibigbox{
    background: #FFFFFF;
    border: 5px solid #A55E0B;
    border-radius: 20px;
    width:1520px;
    height:400px;
    position:absolute;
    left:-2%;
    top:145%;
    }

    .ddiimgbox img{
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    object-fit: cover;
    border-radius:50%;
    }

    .쥐{
        width:200px;
        height:200px;
        border-radius:90px;
        background-color:#C8D7FF;
    }
    .소{
        width:200px;
        height:200px;
        border-radius:90px;
        background-color:gray;
    }
    .호랑이{
        width:200px;
        height:200px;
        border-radius:90px;
        background-color:#FFDCB4;
    }
    .토끼{
        width:200px;
        height:200px;
        border-radius:90px;
        background-color:#FFE7F4;
    }
    .용{
        width:200px;
        height:200px;
        border-radius:90px;
        background-color:pink;
    }
    .뱀{
        width:200px;
        height:200px;
        border-radius:90px;
        background-color:yellow;
    }
    .말{
        width:200px;
        height:200px;
        border-radius:90px;
        background-color:navy;
    }
    .양{
        width:200px;
        height:200px;
        border-radius:90px;
        background-color:#F9FFB7;
    }
    .원숭이{
        width:200px;
        height:200px;
        border-radius:90px;
        background-color:#AEA08B;
    }
    .닭{
        width:200px;
        height:200px;
        border-radius:90px;
        background-color:#DAF4D8;
    }
    .개{
        width:200px;
        height:200px;
        border-radius:90px;
        background-color:yellowgreen;
    }
    .돼지{
        width:200px;
        height:200px;
        border-radius:90px;
        background-color:skyblue;
    }

    .ctitle{
    position: relative;
    top:-10px;
    font-family: 'Inter';
    font-style: normal;
    font-weight: 600;
    font-size: 50px;
    line-height: 80px;
/* identical to box height */
    text-align: center;
    letter-spacing: 0.05em;
    color: #FFFFFF;
    -webkit-text-stroke: 3px #AB6700;
}

</style>
</head>

<body>
<script>
    $(function() {
        $('.mainSlide').slick({
    infinite: true,
  slidesToShow: 5,
  slidesToScroll: 4,
  prevArrow : $('.prevArrow'), 
  nextArrow : $('.nextArrow')
});
    });

</script>
<?php
    session_start();
    if(! isset($_SESSION['id'])){
        include("../header/no_login_header.php");
    } else{
        include("../header/yes_login_header.php");
    }
    include("../main_nav/ddi.php");
    ?>
    <?php 
/* 스크래핑 모듈*/
include('simple_html_dom.php');
//운세 종류

$type=$_GET["type"];
$html = file_get_html('https://search.naver.com/search.naver?where=nexearch&sm=tab_etc&qvt=0&query='.$type.'%20운세');
?>


<div class="ddibox"><p class="ctitle"><?php echo $type;?></p>
        <div class="ddibigbox">
            <div class="<?= $type ?>">  
                <?php echo "<img src='../icon/띠/$type.png'/>"?>
            </div>
        </div>
    </div> 

<section>
    <div class="mainSlide">
        <div><a href="main_ddi.php?type=쥐"><img class = "쥐" src="../icon/띠/쥐.png"></a></div>
        <div><a href="main_ddi.php?type=소"><img class = "소" src="../icon/띠/소.png"></a></div>
        <div><a href="main_ddi.php?type=호랑이"><img class = "호랑이" src="../icon/띠/호랑이.png"></a></div>
        <div><a href="main_ddi.php?type=토끼"><img class = "토끼" src="../icon/띠/토끼.png"></a></div>
        <div><a href="main_ddi.php?type=용"><img class = "용" src="../icon/띠/용.png"></a></div>
        <div><a href="main_ddi.php?type=뱀"><img class = "뱀" src="../icon/띠/뱀.png"></a></div>
        <div><a href="main_ddi.php?type=말"><img class = "말" src="../icon/띠/말.png"></a></div>
        <div><a href="main_ddi.php?type=양"><img class = "양" src="../icon/띠/양.png"></a></div>
        <div><a href="main_ddi.php?type=원숭이"><img class = "원숭이" src="../icon/띠/원숭이.png"></a></div>
        <div><a href="main_ddi.php?type=닭"><img class = "닭" src="../icon/띠/닭.png"></a></div>
        <div><a href="main_ddi.php?type=개"><img class = "개" src="../icon/띠/개.png"></a></div>
        <div><a href="main_ddi.php?type=돼지"><img class = "돼지" src="../icon/띠/돼지.png"></a></div>
      </div>  
</section>    
</body>
</html>