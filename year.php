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
<script>
    $(function() {
        $('.mainSlide').slick({
    infinite: true,
  slidesToShow: 6,
  slidesToScroll: 6,
  prevArrow : $('.prevArrow'), 
  nextArrow : $('.nextArrow')
})
    });

</script>

</head>
<body>
    <div class="mainSlide">
        <div><img class = "tiger"src="쥐.png"></div>
        <div><img class = "tiger"src="소.png"></div>
        <div><img class = "tiger"src="호랑이.png"></div>
        <div><img class = "tiger"src="토끼.png"></div>
        <div><img class = "tiger"src="용.png"></div>
        <div><img class = "tiger"src="뱀.png"></div>
        <div><img class = "tiger"src="말.png"></div>
        <div><img class = "tiger"src="양.png"></div>
        <div><img class = "tiger"src="원숭이.png"></div>
        <div><img class = "tiger"src="닭.png"></div>
        <div><img class = "tiger"src="개.png"></div>
        <div><img class = "tiger"src="돼지.png"></div>
      </div>      
</body>
</html>