
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
        .re{
            font-family: 'Inter';
            font-style: normal;
            font-weight: 700;
            font-size: 40px;
            line-height: 48px;
            color: #000000;
            text-align : center;
            position:relative;
            top : 25%;
            }
            .line{
                box-sizing: border-box;
                position: relative;
                width: 90%;
                height: 455px;
                border: 2px solid #000000;
                margin-left : 7%;
                top:230px;
            }
            .sub_btn{
            font-family: 'Inter';
            font-style: normal;
            font-weight: 700;
            font-size: 32px;
            line-height: 39px;
            border: 2px solid #000000;
            position : relative;
            margin-left : 89.5%;
            top: 250px;
            
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
    include("../nav/nav(require).php");
    ?>
    <div id = "QA_content"><form>
        <p class="re">필요한 정보를 입력해주세요</p>
        <textarea class="line"></textarea>
        <input type="submit" value="보내기" class = "sub_btn" onclick = "location.href = '../Q$A/board_submit.php'">
    </form>
</div>
</body>
</html>