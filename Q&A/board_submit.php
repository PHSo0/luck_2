<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<style>
#QA_content{
            height: 863px;
            width: 83%;
            background-color: #FFFDF5;
            position: absolute;
            top: 53px;
            left: 294px;
        }
.Qtitle{
    width : 70%;
    height : 64px;
    border : 2px solid #000000;
    background-color: #fffdf5; 
    font-family: 'Inter';
    font-style: normal;
    font-weight: 400;
    font-size: 25px;
    line-height: 30px;
    position : absolute;
    top : 40px;
    margin-left: 12%;
}
.Qcontent{
    width : 70%;
    height : 662px;
    border : 2px solid #000000;
    background-color: #FFFDF5;
    font-family: 'Inter';
    font-style: normal;
    font-weight: 400;
    font-size: 25px;
    line-height: 30px;
    position : absolute;
    top : 120px;
    margin-left : 12%;
}
.id_box{
    background-color: #FFFDF5;
    font-family: 'Inter';
    font-style: normal;
    font-weight: 400;
    font-size: 25px;
    line-height: 30px;
    position : absolute;
    bottom : 90px;
    right : 20%;
}
.su_btn{
    font-family: 'Inter';
    font-style: normal;
    font-weight: 700;
    font-size: 32px;
    line-height: 39px;
    border: 2px solid #000000;
    position : relative;
    margin-left: 75%;
    margin-top : 800px;
}
</style>
</head>
<body>
<?php 
    session_start();
    if(! isset($_SESSION['id'])){
        include("../header/no_login_header.php");
    } else{
        include("../header/yes_login_header.php");
    }
    ?>
    <?php
    include("../nav/nav(board).php");
    ?>
<div id = "QA_content">
<form action = "../login/process.php?mode=QA" method = "post">
<input type = "text" class = "Qtitle" placeholder="제목입력" name = "Qtitle">
<textarea class = "Qcontent" name = "Qcontent" ></textarea>
<div class = "id_box"> 
<?php
    echo $_SESSION['id'];
?>
</div>
<input type = "submit" value = "보내기" class = "su_btn">
</form>
</div>

</body>
</html>