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

    .ddiimgbox{
        width:246px;
        height:249px;
        position:absolute;
        left:2%;
        top:18%;
    }

    .wnl{
        width:200px;
        height:200px;
        border-radius:90px;
        background-color:#C8D7FF;
    }
    .th{
        width:200px;
        height:200px;
        border-radius:90px;
        background-color:gray;
    }
    .ghfkddl{
        width:200px;
        height:200px;
        border-radius:90px;
        background-color:#FFDCB4;
    }
    .ehrl{
        width:200px;
        height:200px;
        border-radius:90px;
        background-color:#FFE7F4;
    }
    .dyd{
        width:200px;
        height:200px;
        border-radius:90px;
        background-color:pink;
    }
    .qoa{
        width:200px;
        height:200px;
        border-radius:90px;
        background-color:yellow;
    }
    .akf{
        width:200px;
        height:200px;
        border-radius:90px;
        background-color:navy;
    }
    .did{
        width:200px;
        height:200px;
        border-radius:90px;
        background-color:#F9FFB7;
    }
    .dnjstnddl{
        width:200px;
        height:200px;
        border-radius:90px;
        background-color:#AEA08B;
    }
    .ekfr{
        width:200px;
        height:200px;
        border-radius:90px;
        background-color:#DAF4D8;
    }
    .ro{
        width:200px;
        height:200px;
        border-radius:90px;
        background-color:yellowgreen;
    }
    .ehowl{
        width:200px;
        height:200px;
        border-radius:90px;
        background-color:skyblue;
    }

    .ctitle{
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
.cbox_img{

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
            <div class="ddiimgbox">
            <div class="cbox_img"> <?php echo "<img src='../icon/띠/$type.png'/>"?></div>
            </div>
        </div>
    </div> 

<section>
    <div class="mainSlide">
        <div><a href="main_ddi.php?type=쥐"><img class = "wnl" src="../icon/띠/쥐.png"></a></div>
        <div><a href="main_ddi.php?type=소"><img class = "th" src="../icon/띠/소.png"></a></div>
        <div><a href="main_ddi.php?type=호랑이"><img class = "ghfkddl" src="../icon/띠/호랑이.png"></a></div>
        <div><a href="main_ddi.php?type=토끼"><img class = "ehrl" src="../icon/띠/토끼.png"></a></div>
        <div><a href="main_ddi.php?type=용"><img class = "dyd" src="../icon/띠/용.png"></a></div>
        <div><a href="main_ddi.php?type=뱀"><img class = "qoa" src="../icon/띠/뱀.png"></a></div>
        <div><a href="main_ddi.php?type=말"><img class = "akf" src="../icon/띠/말.png"></a></div>
        <div><a href="main_ddi.php?type=양"><img class = "did" src="../icon/띠/양.png"></a></div>
        <div><a href="main_ddi.php?type=원숭이"><img class = "dnjstnddl" src="../icon/띠/원숭이.png"></a></div>
        <div><a href="main_ddi.php?type=닭"><img class = "ekfr" src="../icon/띠/닭.png"></a></div>
        <div><a href="main_ddi.php?type=개"><img class = "ro" src="../icon/띠/개.png"></a></div>
        <div><a href="main_ddi.php?type=돼지"><img class = "ehowl" src="../icon/띠/돼지.png"></a></div>
      </div>  
</section>    
</body>
</html>