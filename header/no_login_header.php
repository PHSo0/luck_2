
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
header{
    position : absolute;
    background-color: #393939;
    width : 100%;
    height : 53px; 
}
.header_box1{
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
.header_box2{
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
.header_box3{  
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
.header_box4{
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
        <span class = "header_box1" onclick="location.href='../main/main.php'">오늘의 운세</span>
        <span class = "header_box2" onclick = "location.href='../login/login.php'">로그인 </span>
        <span class = "header_box3" onclick = "location.href = '../login/register.php'">회원가입</span>
        <span class = "header_box4" onclick = "location.href = '../Q&A/require.php'">Q&A</span>
    </header>
</body>
</html>