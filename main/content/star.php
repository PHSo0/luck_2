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
    .starbox {
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

    .starbigbox{
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
    .star{
    width: 200px;
    height: 200px;
    left:5%;
    top:23%;
    border-radius: 50%;
    position: absolute;
}

    .게자리{
        width:200px;
        height:200px;
        border-radius:90px;
    }
    .물고기자리{
        width:200px;
        height:200px;
        border-radius:90px;
    }
    .물병자리{
        width:200px;
        height:200px;
        border-radius:90px;
    }
    .사수자리{
        width:200px;
        height:200px;
        border-radius:90px;
    }
    .사자자리{
        width:200px;
        height:200px;
        border-radius:90px;
    }
    .쌍둥이자리{
        width:200px;
        height:200px;
        border-radius:90px;
    }
    .양자리{
        width:200px;
        height:200px;
        border-radius:90px;
    }
    .염소자리{
        width:200px;
        height:200px;
        border-radius:90px;
    }
    .전갈자리{
        width:200px;
        height:200px;
        border-radius:90px;
    }
    .처녀자리{
        width:200px;
        height:200px;
        border-radius:90px;
    }
    .천칭자리{
        width:200px;
        height:200px;
        border-radius:90px;
    }
    .황소자리{
        width:200px;
        height:200px;
        border-radius:90px;
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

.starwrite{
    width:800px;
    height:200px;
    position:absolute;
    top:-6%;
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
        $('.starSlide').slick({
    infinite: true,
  slidesToShow: 5,
  slidesToScroll: 4,
  prevArrow : $('.prevArrow'), 
  nextArrow : $('.nextArrow')
});
    });

</script>
    
<?php 
/* 스크래핑 모듈*/
include('simple_html_dom.php');
//운세 종류

$type=$_GET["type"];
$html = file_get_html('https://search.naver.com/search.naver?where=nexearch&sm=tab_etc&qvt=0&query='.$type.'%20운세');
?>


<div class="starbox"><p class="ctitle"><?=$type?></p>
        <div class="starbigbox"> 
            <div class = "star">
                <img src = "../icon/별자리/<?=$type?>.png" class="<?= $type ?>" style="object-fit: cover;">
                    <div class="starwrite">
                    <?php echo $html->find('.detail p._cs_fortune_text', 0)->outertext; ?>
                    </div>
            </div>
        </div>
    </div> 

<section>
    <div class="starSlide">
        <div><a href="main_star.php?type=게자리"><img class = "게자리" src="../icon/별자리/게자리.png"></a></div>
        <div><a href="main_star.php?type=물고기자리"><img class = "물고기자리" src="../icon/별자리/물고기자리.png"></a></div>
        <div><a href="main_star.php?type=물병자리"><img class = "물병자리" src="../icon/별자리/물병자리.png"></a></div>
        <div><a href="main_star.php?type=사수자리"><img class = "사수자리" src="../icon/별자리/사수자리.png"></a></div>
        <div><a href="main_star.php?type=사자자리"><img class = "사자자리" src="../icon/별자리/사자자리.png"></a></div>
        <div><a href="main_star.php?type=쌍둥이자리"><img class = "쌍둥이자리" src="../icon/별자리/쌍둥이자리.png"></a></div>
        <div><a href="main_star.php?type=양자리"><img class = "양자리" src="../icon/별자리/양자리.png"></a></div>
        <div><a href="main_star.php?type=염소자리"><img class = "염소자리" src="../icon/별자리/염소자리.png"></a></div>
        <div><a href="main_star.php?type=전갈자리"><img class = "전갈자리" src="../icon/별자리/전갈자리.png"></a></div>
        <div><a href="main_star.php?type=처녀자리"><img class = "처녀자리" src="../icon/별자리/처녀자리.png"></a></div>
        <div><a href="main_star.php?type=천칭자리"><img class = "천칭자리" src="../icon/별자리/천칭자리.png"></a></div>
        <div><a href="main_star.php?type=황소자리"><img class = "황소자리" src="../icon/별자리/황소자리.png"></a></div>
      </div>  

      <div class="btn">
        <div class="prevArrow"><img style="width: 150px; height: 150px;" src="../icon/버튼/왼쪽.png"></div>
        <div class="nextArrow"><img style="width: 150px; height: 160px;"src="../icon/버튼/오른쪽.png"></div>        
    </div>  
</section>    
</body>
</html>