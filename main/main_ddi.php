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
<<<<<<< HEAD
img{
    width : 100px;
    height : 100px;
}
section{
    background-color: #fffdf5;
    width :100%;
    height: 793px;
    position : absolute;
    top : 123px;
}
</style>


</head>
=======
    body{
        background-color: #FFFDF5;
    }

.tiger{
    width : 100px;
    height : 100px;
}

section{
    width :100%;
    height: 793px;
    position : absolute;
    top : 123px;
}
    .ddibox {
    box-sizing: border-box;
    position: absolute;
    width: 324px;
    height: 72px;
    left:5%;
    top:16%;
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
</style>
</head>

>>>>>>> 3873b920e41dd159830a13815e7b071ae4f07008
<body>
<script>
    $(function() {
        $('.mainSlide').slick({
    infinite: true,
  slidesToShow: 6,
  slidesToScroll: 6,
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
<<<<<<< HEAD
=======

<div class="ddibox">
        <div class="ddibigbox">
            <div class="ddiimgbox">
                <img src="../호랑이.png" width="250px" height="250px">
            </div>
        </div>
    </div> 

>>>>>>> 3873b920e41dd159830a13815e7b071ae4f07008
<section>
    <div class="mainSlide">
        <div><img class = "tiger"src="../icon/띠/쥐.png"></div>
        <div><img class = "tiger"src="../icon/띠/소.png"></div>
        <div><img class = "tiger"src="../icon/띠/호랑이.png"></div>
        <div><img class = "tiger"src="../icon/띠/토끼.png"></div>
        <div><img class = "tiger"src="../icon/띠/용.png"></div>
        <div><img class = "tiger"src="../icon/띠/뱀.png"></div>
        <div><img class = "tiger"src="../icon/띠/말.png"></div>
        <div><img class = "tiger"src="../icon/띠/양.png"></div>
        <div><img class = "tiger"src="../icon/띠/원숭이.png"></div>
        <div><img class = "tiger"src="../icon/띠/닭.png"></div>
        <div><img class = "tiger"src="../icon/띠/개.png"></div>
        <div><img class = "tiger"src="../icon/띠/돼지.png"></div>
      </div>  
</section>    
</body>
</html>