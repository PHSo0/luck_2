<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">

    
<style>
*{
    padding:0px;
    margin:0px;
    border:none;

}
.QA_nav{
    background-color: #CFCCC9;
    position: absolute;
    width: 294px;
    height: 863px;
    left: 0px;
    top: 53px;

}
.nav_box1{
    position: absolute;
    width: 171px;
    height: 50.77px;
    left: 22px;
    top: 100px;
    
    font-family: 'Inter';
    font-style: normal;
    font-weight: 300;
    font-size: 20px;
    line-height: 24px;
    display: flex;
    align-items: center;
   

}
.nav_box2{
position: absolute;
width: 175px;
height: 27.5px;
left: 22px;
top: 167px;

font-family: 'Inter';
font-style: normal;
font-weight: 400;
font-size: 18px;
line-height: 22px;
display: flex;
align-items: center;

}
.nav_box3{
    position: absolute;
width: 169px;
height: 35.96px;
left: 22px;
top: 212px;

font-family: 'Inter';
font-style: normal;
font-weight: 700;
font-size: 18px;
line-height: 22px;
display: flex;
align-items: center;

}
.nav_box4{
    position: absolute;
width: 145px;
height: 35.96px;
left: 22px;
top: 265px;

font-family: 'Inter';
font-style: normal;
font-weight: 400;
font-size: 18px;
line-height: 22px;
display: flex;
align-items: center;

}

</style>
</head>
<body>
<nav class = "QA_nav">
    
       <span class = "nav_box1">Q&A</span>
       <span class = "nav_box2" onclick="location.href ='../Q&A/require.php'">요구사항 및 개선사항</span>
       <span class = "nav_box3" onclick="location.href ='../Q&A/employ.php'">채용문의</span>
       <span class = "nav_box4" onclick="location.href ='../Q&A/board.php'">게시판 문의</span>
</nav>
</body>
</html>