<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="join.css">
</head>
<body>
    <form>
    <?php
    include("no_login_header.php");
    ?>
    <label class="title">회원가입</label> 
    <label class="joinid">아이디<input type="text" size="60" id="id"></label>
    <label class="joinpw">비밀번호<input type="password" size="60" id="pw"></label>
    <label class="pwcheck">비밀번호 확인<input type="password" size="60" id="pwch"></label>
    <label class="name">이름<input type="text" size="60" id="na"></label>
    <label class="sex">성별</label><label class="birth">생년월일</label>

    <div id="a">
    <label class="a1"><input type="radio" name="aaa">  여성</label>
    <label class="a1"><input type="radio" name="aaa">  남성</label>
    </div>

    <div id="b">
    <label class="b1"><input type="date"></label>
    </div>

    <div id="c">
    <input type="checkbox"><lable class="c1">  이용약관 및 개인정보수집 및 이용, 정보 수신에 동의합니다.</label>
    </div>

    <button class="button"><label class="d1">회원가입</label></button>
    </form>
</body>
</html>