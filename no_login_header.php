<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<style>
*{
    padding : 0px;
    margin : 0px;
    border : none;
}
body{
    background-color: #fffdf5;
}
header{
    position : fixed;
    background-color: #393939;
    width : 100%;
    height : 53px; 
}
.box1{
    position: absolute;
    width: 20%;
    height: 24px;
    left: 2%;
    top: 14px;
    color : #ffffff;
    font-family: 'Inter';
    font-style: normal;
    font-weight: 400;
    font-size: 20px;
    line-height: 24px;

}
.box2{
    position: absolute;
    width: auto;
    height: 24px;
    top: 14px;
    right: 14%;
    color : #ffffff;
    font-family: 'Inter';
    font-style: normal;
    font-weight: 400;
    font-size: 20px;
    line-height: 24px;
}
.box3{  
    position: absolute;
    width: auto;
    height: 24px;
    right : 7%;
    top: 14px;
    color : #ffffff;
    font-family: 'Inter';
    font-style: normal;
    font-weight: 400;
    font-size: 20px;
    line-height: 24px;
}
.box4{
    position: absolute;
    width: auto;
    height: 24px;
    right : 2%;
    top: 14px;
    color : #ffffff;
    font-family: 'Inter';
    font-style: normal;
    font-weight: 400;
    font-size: 20px;
    line-height: 24px;
}

</style>
</head>
<body>
    <!--로그인을 하지 않은 경우의 헤더파일 (백그라운드 색 포함)-->
    <header>
        <span class = "box1">오늘의 운세</span>
        <span class = "box2">로그인 </span>
        <span class = "box3">회원가입</span>
        <span class = "box4">Q&A</span>
    </header>
</body>
</html>