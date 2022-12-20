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
.ddiwrite{
    width:800px;
    height:200px;
    position:absolute;
    top:10%;
    left:150%;
    font-size:1.8em;
}

.prevArrow{
    position:absolute;
    left:-11.5%;
    top:10%;
}

.nextArrow{
    position:absolute;
    left:99.5%;
    top:5%;
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
    if(! isset($_SESSION['id'])){
        include("../no_login/no_login_ddi.php");
    } else{
        include("content/ddi.php");
    }
    ?>
    
</body>
</html>