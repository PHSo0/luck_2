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
        
        header('location:../login/joincomplete.php');
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
            $_SESSION['sex'] = $row['sex'];
            $_SESSION['birth'] = $row['birth'];
        header('location:../main/main.php');
        break;

        case 'logout': 
            session_destroy();
            /*unset($_SESSION['id']);*/
            header('location:../main/main.php');
        break;

        case 'QA' :
        $Qtitle = $_POST['Qtitle'];
        $Qcontent = $_POST['Qcontent'];
        $sql = $db -> prepare('INSERT INTO board
            (id, Qtitle, Qcontent) 
            VALUES(:id, :Qtitle, :Qcontent)');

            $sql -> bindParam(':id',$_SESSION['id']);
            $sql -> bindParam(':Qtitle',$Qtitle);
            $sql -> bindParam(':Qcontent',$Qcontent);
            //$db ->beginTransaction();
            $sql -> execute();
            $s = $sql->fetch();
            
            $bNo=$db ->lastInsertId();
            //$db ->commit();   
                   
           
            
		    
           
            
        header('location:../Q&A/board.php?bno='.$bNo);
        break;
        

        case 'QA_view' :
            
    }
?>