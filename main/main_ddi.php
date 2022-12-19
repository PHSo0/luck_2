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