<!-- 
    session_start();
    if(! isset($_SESSION['id'])){
        include("../header/no_login_header.php");
    } else{
        include("../header/yes_login_header.php");
    }
    ?>

    include("../nav/nav(board).php");
    ?>

    <div id = "QA_content">

    $count=1;
    require_once('../DB/DB.php');
        $stmt = $db -> prepare ('SELECT id FROM register');
        $stmt -> execute();
        $user[] = $stmt -> fetch();
        echo $user[0];
    /*for ($i=1; $i<=$d; $i++) {
        echo "e";
    // if($user['no']==$count && $count%4==1){
    //     echo "<div class = 'board_1'><p class='post'>";
    //     echo $user['Qtitle']."</p></div>";
    //     $count++;
    // } 
    // else if ($user['no']==$count && $count%4 !=1){
    //     echo "<div class = 'board_2'><p class='post'>";
    //     echo $user['Qtitle']."</p></div>";
    // }
}*/

    ?>
<div class = "board_1"> <p class ="post"> <?= $user['Qtitle']?> </p></div>
    <div class = "board_2"> <p class ="post"> </p></div>
    <div class = "board_2"> <p class ="post"> 게시글3 </p></div>
    <div class = "board_2"> <p class ="post"> 게시글4 </p></div> 
    <input type = submit value="글쓰기" class = "sub_button" onclick = "location.href = 'board_submit.php'">



</div>
</body>
</html> -->

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
        .board_1{
            margin : 160px 320px 0px 320px;
            width : 100%;
            height : 84px;  
            text-align: left;
            border-top : 1px solid black;
            border-bottom : 1px solid black;
            position: relative;
            top : 100px;
            display :inline-block;
        }
        .board_2{
            margin : 0px 320px 0px 320px;
            width : 100%;
            height : 84px;  
            text-align: left;
            border-bottom : 1px solid black;
            position: relative;
            top : 100px;
            display :inline-block;
        }
        .post{
            margin:30px;
        }
        .sub_button{
            font-family: 'Inter';
            font-style: normal;
            font-weight: 700;
            font-size: 20px;
            line-height: 24px;
            color: #000000;
            background-color: #FFFDF5;
            margin : 0px 320px 0px 320px;
            height: 84px;  
            position: relative;
            top : 100px;
            display : block;
            margin-left: auto;
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
    include("../nav/nav(board).php");
    ?>
    <div id = "QA_content">

    <table>
    <?php
        require_once('../DB/DB.php');
        $result = $db -> query("SELECT * FROM board ORDER BY no desc");
        $result -> execute();
        $result = $result->fetch();
        $count=1;
        if($result['no']==false){

        }
        else {
            for($i=1; $i<=$result['no']; $i++){
        ?>
        <tbody>
        <?php
        $a = $db -> query("SELECT * FROM board where no=$count");
        $a -> execute();
        $a = $a->fetch();
        if($count %4 ==1){
        ?>
        <tr>
          <td class = "board_1" onclick.href="view.php?no=<?php echo $a['no']?>"><p class="post"><?php echo $a['Qtitle']?></p></td>
        </tr>
        <?php } 
        else {
        ?>
            <tr>
            <td class = "board_2" onclick.href="view.php?no=<?php echo $a['no']?>"><p class="post"><?php echo $a['Qtitle']?></p></td>
          </tr>  
        <?php
        }
        $count++;
    }
}
        ?>
    </tbody> 
    </table> 
    <input type = submit value="글쓰기" class = "sub_button" onclick = "location.href = 'board_submit.php'">





</div>

</body>
</html>