<?php
    session_start();
    require_once('../DB/DB.php');

    switch ($_GET['mode']){
        case 'register':
            $id = $_POST['id'];
            $pw1 = $_POST['pw1'];
            $pw2 = $_POST['pw2'];
            $name = $_POST['name'];
            $sex = $_POST['sex'];
            $birth = $_POST['birth'];
            $check = $_POST['check'];
        
            $sql = $db -> prepare('INSERT INTO register
            (id, pw, name, sex, birth) 
            VALUE(:id, :pw, :name, :sex, :birth)');

            $sql -> bindParam(':id',$id);
            $sql -> bindParam(':pw',$pw1);
            $sql -> bindParam(':name',$name);
            $sql -> bindParam(':sex',$sex);
            $sql -> bindParam(':birth',$birth);

            if($pw1 != $pw2){
                errMsg("비밀번호가 일치하지 않습니다.");
            }    
            if($check != "ok") {
                errMsg("이용약관에 동의해 주십시오");
            }

            $sql -> execute();
        
        header('location:../main/main.php');
        break;

        case 'login':
            $id = $_POST['id'];
            $pw = $_POST['pw'];

            $sql = $db -> prepare("SELECT * FROM register WHERE id=:id");
            $sql -> bindParam("id",$id);
            $sql -> execute();
            $row = $sql -> fetch();

            if(!$id){
                errMsg("아이디를 입력해주세요.");
            } elseif(!isset($row['id'])){
              errMsg('존재하지 않는 아이디입니다.');
            } elseif(!$pw){
              errMsg('비밀번호를 입력해주세요.');
            } elseif($pw != $row['pw']){
              errMsg('비밀번호가 일치하지 않습니다.');
            }     

            $_SESSION['id'] = $row['id'];
            $_SESSION['name'] = $row['name'];

        header('location:../main/main.php');
        break;

        case 'logout':
            session_destroy();

            header('location:../main/main.php');
        break;
    }
?>