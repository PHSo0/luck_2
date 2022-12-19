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

    /* . img{
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    object-fit: cover;
    border-radius:50%;
    } */
    .dddi{
    width: 200px;
    height: 200px;
    left:5%;
    top:23%;
    border-radius: 50%;
    position: absolute;
}

    .쥐띠{
        width:200px;
        height:200px;
        border-radius:90px;
        background-color:#C8D7FF;
    }
    .소띠{
        width:200px;
        height:200px;
        border-radius:90px;
        background-color:gray;
    }
    .호랑이띠{
        width:200px;
        height:200px;
        border-radius:90px;
        background-color:#FFDCB4;
    }
    .토끼띠{
        width:200px;
        height:200px;
        border-radius:90px;
        background-color:#FFE7F4;
    }
    .용띠{
        width:200px;
        height:200px;
        border-radius:90px;
        background-color:pink;
    }
    .뱀띠{
        width:200px;
        height:200px;
        border-radius:90px;
        background-color:yellow;
    }
    .말띠{
        width:200px;
        height:200px;
        border-radius:90px;
        background-color:navy;
    }
    .양띠{
        width:200px;
        height:200px;
        border-radius:90px;
        background-color:#F9FFB7;
    }
    .원숭이띠{
        width:200px;
        height:200px;
        border-radius:90px;
        background-color:#AEA08B;
    }
    .닭띠{
        width:200px;
        height:200px;
        border-radius:90px;
        background-color:#DAF4D8;
    }
    .개띠{
        width:200px;
        height:200px;
        border-radius:90px;
        background-color:yellowgreen;
    }
    .돼지띠{
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


<div class="ddibox"><p class="ctitle"><?=$type?></p>
        <div class="ddibigbox"> 
            <div class = "dddi">
                <img src = "../icon/띠/<?=$type?>.png" class="<?= $type ?>" style="object-fit: cover;">
                <?php echo $html->find('.detail p._cs_fortune_text', 0)->outertext; ?>
            </div>
        </div>
    </div> 

<section>
    <div class="mainSlide">
        <div><a href="main_ddi.php?type=쥐띠"><img class = "쥐띠" src="../icon/띠/쥐띠.png"></a></div>
        <div><a href="main_ddi.php?type=소띠"><img class = "소띠" src="../icon/띠/소띠.png"></a></div>
        <div><a href="main_ddi.php?type=호랑이띠"><img class = "호랑이띠" src="../icon/띠/호랑이띠.png"></a></div>
        <div><a href="main_ddi.php?type=토끼띠"><img class = "토끼띠" src="../icon/띠/토끼띠.png"></a></div>
        <div><a href="main_ddi.php?type=용띠"><img class = "용띠" src="../icon/띠/용띠.png"></a></div>
        <div><a href="main_ddi.php?type=뱀띠"><img class = "뱀띠" src="../icon/띠/뱀띠.png"></a></div>
        <div><a href="main_ddi.php?type=말띠"><img class = "말띠" src="../icon/띠/말띠.png"></a></div>
        <div><a href="main_ddi.php?type=양띠"><img class = "양띠" src="../icon/띠/양띠.png"></a></div>
        <div><a href="main_ddi.php?type=원숭이띠"><img class = "원숭이띠" src="../icon/띠/원숭이띠.png"></a></div>
        <div><a href="main_ddi.php?type=닭띠"><img class = "닭띠" src="../icon/띠/닭띠.png"></a></div>
        <div><a href="main_ddi.php?type=개띠"><img class = "개띠" src="../icon/띠/개띠.png"></a></div>
        <div><a href="main_ddi.php?type=돼지띠"><img class = "돼지띠" src="../icon/띠/돼지띠.png"></a></div>
      </div>  
</section>    
</body>
</html>