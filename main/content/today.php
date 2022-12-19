<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
    <style>
    /* body {background-color: #FFFDF5;} */
    .todaybox {
    box-sizing: border-box;
    position: absolute;
    width: 324px;
    height: 72px;
    left: 39px;
    top: 163px;
    background: #FFF1A5;
    border: 4px solid #C98724;
    border-radius: 20px;
    }
    .circle1{
    width: 242px;
    height: 242px;
    left: 71px;
    top: 315px;
    background-color: #fffdf5;
    border-radius: 50%;
    border: 3px solid #C98724;
    position: absolute;
}
    .circle1 img{
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    object-fit: cover;
    background-color:#FFFFFF;
    border-radius:50%;
    }
    .box1 {
    box-sizing: border-box;
    position: absolute;
    width: 205px;
    height: 69px;
    left: 344px;
    top: 280px;
    radius: 20px;
    background: #FFF9D9;
    border: 3px solid #C98724;
    border-radius: 20px;
    }
    .hr1 {
    position: absolute;
    width: 1360px;
    height: 0px;
    left: 35px;
    top: 608px;
    border: 2px solid #B37C3A;
    }
    .circle2{
    width: 273px;
    height: 273px;
    left: 58px;
    top: 670px;
    background-color: #fffdf5;
    border-radius: 50%;
    border: 3px solid #C98724;
    position: absolute;
    }
    .circle2 img{
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    object-fit: cover;
    background-color:#FFFFFF;
    border-radius:50%;    
    }
    .box2 {
    box-sizing: border-box;
    position: absolute;
    width: 205px;
    height: 69px;
    left: 344px;
    top: 654px;
    radius: 20px;
    background: #FFF9D9;
    border: 3px solid #C98724;
    border-radius: 20px;
    }
    .hr2 {
    position: absolute;
    width: 1360px;
    height: 0px;
    left: 35px;
    top: 979px;
    border: 2px solid #B37C3A;
    }
    .circle3{
    width: 250px;
    height: 250px;
    left: 71px;
    top: 1060px;
    background-color: #fffdf5;
    border-radius: 50%;
    border: 3px solid #C98724;
    position: absolute;
}
    .circle3 img{
        position: absolute;
     top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    object-fit: cover;
    background-color:#FFFFFF;
    border-radius:50%;
    }
    .box3 {
    box-sizing: border-box;
    position: absolute;
    width: 205px;
    height: 69px;
    left: 344px;
    top: 1025px;
    radius: 20px;
    background: #FFF9D9;
    border: 3px solid #C98724;
    border-radius: 20px;
    }
    .hr3 {
    position: absolute;
    width: 1360px;
    height: 0px;
    left: 35px;
    top: 1350px;
    border: 2px solid #B37C3A;
    }
    .circle4{
    width: 261px;
    height: 261px;
    left: 65px;
    top: 1423px;
    background-color: #fffdf5;
    border-radius: 50%;
    border: 3px solid #C98724;
    position: absolute;
}
    .circle4 img{
        position: absolute;
     top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    object-fit: cover;
    background-color:#FFFFFF;
    border-radius:50%;
    }
    .box4 {
    box-sizing: border-box;
    position: absolute;
    width: 205px;
    height: 69px;
    left: 344px;
    top: 1396px;
    radius: 20px;
    background: #FFF9D9;
    border: 3px solid #C98724;
    border-radius: 20px;
    }

    .hr4 {
    position: absolute;
    width: 1360px;
    height: 0px;
    left: 35px;
    top: 1721px;
    border: 2px solid #B37C3A;
    }
    .ch{
            font-family: 'Inter';
            font-style: normal; 
            font-size: 42px;
            line-height: 42px;
            color: #ffffff;
            -webkit-text-stroke: 3px #AB6700;
            position: relative;
            text-align: center;
            top : 8px;
            font-weight: 900;
        }

    .ch1{
        font-family: 'Inter';
        font-style: normal;
        font-size: 43px;
        line-height: 52px;
        color: #ffffff;
        -webkit-text-stroke: 3px #AB6700;
        position: relative;
        text-align: center;
        /* letter-spacing: 0.05em; */
        top : 8px;
        font-weight: 900;
        }
    
    </style>
    <body>
    
<main>
    <div class="todaybox"><p class="ch1">
<script>
date = new Date().toLocaleDateString();
document.write(date);
</script>
</p></div>
    <div class="circle1">
        <img src="pic/금전.png" alt="금전">
    </div>
    <div class="box1"><p class="ch">금전운</p></div>
    <div class="hr1"></div>
    <div class="circle2">
        <img src="pic/학업.png" alt="학업"></div>
    <div class="box2"><p class="ch">학업운</p></div>
    <div class="hr2"></div>
    <div class="circle3">
        <img src="pic/직업.png" alt="직업"></div>
    <div class="box3"><p class="ch">직업운</p></div>
    <div class="hr3"></div>
    <div class="circle4">
        <img src="pic/연애.png" alt="연애"></div>
    <div class="box4"><p class="ch">연애운</p></div>
    <div class="hr4"></div>
    </main>
    </body>