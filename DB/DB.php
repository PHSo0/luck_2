<?php
    $dns = "mysql:host=localhost;dbname=user;charset=utf8";
    $username="root";
    $pw="";

    try {
            $db = new PDO($dns, $username, $pw);
            //errMsg('접속성공 축하합니다!');
        } catch (PDOException $th) {
            echo '접속실패 : ' . $th->getMessage();
        }
        function errMsg($msg){
            echo "<script>
                window.alert('$msg');
                history.back(1);
            </script>";
            exit;
        }
        
        

?>