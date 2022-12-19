<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="//code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script> 

<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />

<script>
$( document ).ready( function() {
	
    $('.mainSlide').slick({
  infinite: true,
  slidesToShow: 3,
  slidesToScroll: 3
});
	
  } );
</script>
</head>
<style>
    body{
        background-color:#FFFDF5;
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
<body>
    
    <div class="ddibox">
        <div class="ddibigbox">
            <div class="ddiimgbox">
                <img src="../호랑이.png">
            </div>
        </div>
    </div> 
    
</body>
</html>