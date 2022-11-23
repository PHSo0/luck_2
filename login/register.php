<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<style>
    body{
    padding : 0%;
    margin : 0%;
    border : none;
    background : #FFFDF5;
    }
    .title {
    width :40%;
    height : 50px;
    font-family: 'Inter';
    font-style: normal;
    font-weight: 700;
    font-size: 24px;
    text-align: center;
    color: #442C2C;
    position : absolute;
    top : 10%;
    left : 30%; 
    line-height: 20px; 
    border : 0px;
    border-bottom: 3px solid #442C2C;
    
}

.joinid {
    width :40%;
    height : 50px;
    font-family: 'Inter';
    font-style: normal;
    font-weight: 700;
    font-size: 24px;
    text-align: center;
    color: #442C2C;
    position : absolute;
    top:23.0%;
    left :14.4%;
    line-height: 20px; 
}

.joinpw{
    width :40%;
    height : 50px;
    font-family: 'Inter';
    font-style: normal;
    font-weight: 700;
    font-size: 24px;
    text-align: center;
    color: #442C2C;
    position : absolute;
    top:33.0%;
    left : 14.5%;
    line-height: 20px; 
}

.pwcheck{
    width :40%;
    height : 50px;
    font-family: 'Inter';
    font-style: normal;
    font-weight: 700;
    font-size: 24px;
    text-align: center;
    color: #442C2C;
    position : absolute;
    top:43.0%;
    left : 14.6%;
    line-height: 20px; 
}

.name{
    width :40%;
    height : 50px;
    font-family: 'Inter';
    font-style: normal;
    font-weight: 700;
    font-size: 24px;
    text-align: center;
    color: #442C2C;
    position : absolute;
    top:53.0%;
    left : 14.2%;
    line-height: 20px; 
}

.sex{
    width :40%;
    height : 50px;
    font-family: 'Inter';
    font-style: normal;
    font-weight: 700;
    font-size: 24px;
    text-align: center;
    color: #442C2C;
    position : absolute;
    top:63.0%;
    left : 13.2%;
    line-height: 20px;
}

.birth{
    width :40%;
    height : 50px;
    font-family: 'Inter';
    font-style: normal;
    font-weight: 700;
    font-size: 24px;
    text-align: center;
    color: #442C2C;
    position : absolute;
    top:63.0%;
    left : 33.2%;
    line-height: 20px;
}

#a{
    position:absolute;
    top:62.5%;
    left:36.8%;
}

.a1{
    color: #442C2C;
    font-size:21px;
    width: 50%;
}

#b{
    position:absolute;
    top:62.5%;
    left:58.8%;
}
.b1{
    border-bottom: 1px solid #727272;
    color: #442C2C;
    background-color: white;
    font-size: 16px;
    font-family: 'inter';
}

#c{
    position:absolute;
    top:72.5%;
    left:35.2%;
}

.c1{
    font-size: 18px;
    font-family: 'inter';
    color:#442C2C;
}

.d1{
    font-size: 24px;
    font-family: 'inter';
    color: white;
}

.button{
    background-color: #442C2C;
    border: none;
    color: white;
    font-size: 24px;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    position: absolute;
    top:80%;
    left:31.8%;
    width: 600px;
    height: 100px;
}

#id{
    position: absolute;
    left: 65%;
    background-color: #FFFDF5;
    border-bottom: 1px solid #727272;
    height: 27px;
}

#pw{
    position: absolute;
    left: 65%;
    background-color: #FFFDF5;
    border-bottom: 1px solid #727272;
    height: 27px;
}

#pwch{
    position: absolute;
    left: 65%;
    background-color: #FFFDF5;
    border-bottom: 1px solid #727272;
    height: 27px;
}

#na{
    position: absolute;
    left: 65%;
    background-color: #FFFDF5;
    border-bottom: 1px solid #727272;
    height: 27px;
}
</style>
</head>
<body> 
    <?php
    include("../header/no_login_header.php");
    ?>
    <form name = "register" action="process.php?mode=register" method = "post">
    <label class="title">회원가입</label> 
    <label class="joinid">아이디<input type="text" name = "id" size="60" id="id"></label>
    <label class="joinpw">비밀번호<input type="password" name = "pw1"size="60" id="pw"></label>
    <label class="pwcheck">비밀번호 확인<input type="password" name = "pw2"size="60" id="pwch"></label>
    <label class="name">이름<input type="text" name = "name" size="60" id="na"></label>
    <label class="sex">성별</label><label class="birth">생년월일</label>

    <div id="a">
    <label class="a1"><input type="radio" name="sex" value ="female">  여성</label>
    <label class="a1"><input type="radio" name="sex" value = "male">  남성</label>
    </div>

    <div id="b">
    <label class="b1"><input type="date" name = "birth"></label>
    </div>

    <div id="c">
    <lable class="c1"><input type="checkbox" name = "check" value = "ok">이용약관 및 개인정보수집 및 이용, 정보 수신에 동의합니다.</label>
    </div>

    <label class="d1"><input type = "submit" class="button">회원가입</label>
    </form>
</body>
</html>