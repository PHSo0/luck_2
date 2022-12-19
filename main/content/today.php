<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
    <style>

    body{
        background-color:#FFFDF5;
    }

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
    left: 4%;
    top: 33%;
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
    width: 1610px;
    height: 0px;
    left: 35px;
    top: 608px;
    border: 2px solid #B37C3A;
    }
    .circle2{
    width: 242px;
    height: 242px;
    left: 4%;
    top: 72%;
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
    width: 1610px;
    height: 0px;
    left: 35px;
    top: 979px;
    border: 2px solid #B37C3A;
    }
    .circle3{
    width: 242px;
    height: 242px;
    left: 4%;
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
    width: 1610px;
    height: 0px;
    left: 35px;
    top: 1350px;
    border: 2px solid #B37C3A;
    }
    .circle4{
    width: 242px;
    height: 242px;
    left: 4%;
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
    width: 1610px;
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

    .textbox1{
        width:1300px;
        height:220px;
        position:absolute;
        left:20.5%;
        top:40%;
        background-color:#FFFDF5;
        font-size:1.2em;
        }

    .textbox2{
        width:1300px;
        height:220px;
        position:absolute;
        left:20.5%;
        top:79%;
        background-color:#FFFDF5;
        font-size:1.2em;
    }

    .textbox3{
        width:1300px;
        height:220px;
        position:absolute;
        left:20.5%;
        top:117%;
        background-color:#FFFDF5;
        font-size:1.2em;
    }

    .textbox4{
        width:1300px;
        height:220px;
        position:absolute;
        left:20.5%;
        top:157%;
        background-color:#FFFDF5;
        font-size:1.2em;
    }

    
    </style>
    <body>
    --오늘의 운세 내용 크롤링--
<?php 
?>
<h2>오늘의 운세</h2>
<?php 
session_start();
if (isset($_SESSION['id'])) {
    if($_SESSION['sex']=='female'){
        echo "afds";
        $sex="f";
        $birth = $_SESSION['birth'];
    }else{
        $sex="m";
        $birth = $_SESSION['birth'];
        }
    }
?>
<!-- 생년월일정보 (세션에서 가져오기) -->
<input type="hidden" id="birth" value="<?=$birth?>"/>
<input type="hidden" id="sex" value="<?=$sex?>"/>
<!-- 금전운, 학업운, 직업운, 연애운 -->
<ul>
<li><span id="luck01"></span></li>
<!-- <li><span id="luck02"></span></li>
<li><span id="luck03"></span></li>
<li><span id="luck04"></span></li> -->
</ul> 
<?php 

?>
<!-- Jquery 플러그인 -->
<script src="http://code.jquery.com/jquery-latest.min.js"></script>
<script type="text/javascript">
//문서 로드 후 함수 호출
$(document).ready(function(){
   //생년월일 정보 가져오기
   var bir = $("#birth").val();
    var sex = $("#sex").val();
    var birth = bir.replace(/-/gi,"");
   //ajax 통신 - url로 호출해서 데이터 불러오기
   $.ajax({
      url:'https://m.search.naver.com/p/csearch/dcontent/external_api/json_todayunse_v2.naver?_callback=window.__jindo2_callback._fortune_my_0&gender='+sex+'&birth='+birth+'&solarCal=solar&time='
   }).done(function(json){
      console.log('성공');
      //console.log(json);
      //text로 받은 정보를 json 형식으로 변경하기
      json = json.replace("window.__jindo2_callback._fortune_my_0(","");
      json = json.replace(");","");
      // json 의 속성은 "(쌍따옴표)로 묶어주어야 함
      json = json.replace("result","\"result\"");
      json = json.replaceAll("day","\"day\"");
      json = json.replaceAll("title","\"title\"");
      json = json.replaceAll("date","\"date\"");
      json = json.replaceAll("content","\"content\"");
      json = json.replaceAll("tomorrow","\"tomorrow\"");
      json = json.replaceAll("month","\"month\"");
      json = json.replaceAll("userData","\"userData\"");
      json = json.replaceAll("year","\"year\"");
      json = json.replaceAll("constellation","\"constellation\"");
      json = json.replaceAll("resultMSG","\"resultMSG\"");
      
      //console.log(json);
      
      //텍스트를 Json 객체로 변환
      var data = JSON.parse(json);
      console.log(data.result.day.content);
      //2 금전운 ,4 학업운 ,3 직업운 ,1 연애운
      //console.log(data.result.day.content[2].desc);
      //console.log(data.result.day.content[4].desc);
      //console.log(data.result.day.content[3].desc);
      //console.log(data.result.day.content[1].desc);
      
      //document.getElementById("luck01").innerText=data.result.day.content[2].desc;
      // $("#name") = document.getElementById("name")
      // $(".name") = document.querySeletor(".name")
       $(".textbox1").text(data.result.day.content[2].desc);
       $(".textbox2").text(data.result.day.content[4].desc);
       $(".textbox3").text(data.result.day.content[3].desc);
       $(".textbox4").text(data.result.day.content[1].desc);
   }).fail(function(xhr,status,err){
      console.log('실패');
   });

});

</script>

<main>
    <div class="todaybox"><p class="ch1">
<script>
date = new Date().toLocaleDateString();
document.write(date);
</script>
</p></div>
    <div class="circle1">
        
        <img src="pic/금전.png" alt="금전"></div>
            <div class="box1"><p class="ch">금전운</p></div>
                <div class="textbox1"></div>
    <div class="hr1"></div>

    <div class="circle2">
        <img src="pic/학업.png" alt="학업"></div>
            <div class="box2"><p class="ch">학업운</p></div>
                <div class="textbox2"></div>
                <div class="hr2"></div>

    <div class="circle3">
        <img src="pic/직업.png" alt="직업"></div>
            <div class="box3"><p class="ch">직업운</p></div>
                <div class="textbox3"></div>
                    <div class="hr3"></div>

    <div class="circle4">
        <img src="pic/연애.png" alt="연애"></div>
            <div class="box4"><p class="ch">연애운</p></div>
                <div class="textbox4"></div>
                    <div class="hr4"></div>
    </main>
    </body>