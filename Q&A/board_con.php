<?php

require_once("../DB/DB.php");
$bNo = $_GET['bno'];

$sql = $db->prepare('SELECT Qtitle, Qcontent, id from board where no = '.$bNo);
$sql ->execute();
$row = $sql->fetch(PDO::FETCH_ASSOC);
?>
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
            width: 77.5%;
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
.we{
    margin: 15px;
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
        
        <div class="Qtitle"><p class="we"><?php echo $row['Qtitle'];
        ?></p></div>
        <div class="Qcontent"><p class = "we"><?=$row['Qcontent'];?></div>
        <div class = "id_box"> 
        <?php
        echo 'ID : '.$row['id'];
        ?>
        </div>
    </div>




</body>
</html>