<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
            padding : 0px;
            margin : 0px;
            border : none;
        }
        .content{
            /*background-color: yellowgreen; #fffdf5;*/
            width :100%;
            height: 793px;
            position : absolute;
            top : 123px;
            text-align:center;
        }

        #talk_a{
            width:23%;
            height:491px;
            background-color: #E4FFDD;
            border-radius: 20px;
            display:inline-block;
            margin:8px 20px 0px 0px;
        }
        #talk_b{
            width:23%;
            height:491px;
            background-color: #FFF4D9;
            border-radius: 20px;
            display:inline-block;
            margin:8px 20px 0px 0px;
        }
        #talk_c{
            width:23%;
            height:491px;
            background-color: #FFDDDD;
            border-radius: 20px;
            display:inline-block;
            margin:8px 20px 0px 0px;
        }
        #talk_d{
            width:23%;
            height:491px;
            background-color: #DDEFFF;
            border-radius: 20px;
            display:inline-block;
            margin:8px 5px 0px 0px;
        }

        #snow{
            width: 65%;
            height: 250px; 
            border-radius: 70%;
            overflow: hidden;
            border: 3px solid #AAFFB8;
            margin:20px 80px 0px 65px;
            background-color: #FFFFFF;
        }
        #sun{
            width: 65%;
            height: 250px; 
            border-radius: 70%;
            overflow: hidden;
            border: 3px solid #FFD8AA;
            margin:20px 80px 0px 65px;
            background-color: #FFFFFF;
        }
        #light{
            width: 65%;
            height: 250px; 
            border-radius: 70%;
            overflow: hidden;
            border: 3px solid #ffb6b6;
            margin:20px 80px 0px 65px;
            background-color: #FFFFFF;
        }
        #cloud{
            width: 65%;
            height: 250px; 
            border-radius: 70%;
            overflow: hidden;
            border: 3px solid #849FFF;
            margin:20px 80px 0px 65px;
            background-color: #FFFFFF;
        }

        #real_a{
            margin:0px 10px 0px -10px;
        }
        #real_b{
            margin:0px 10px 0px -10px;
        }
        #real_c{
            margin:0px 10px 0px -10px;
        }
        #real_d{
            margin:0px 10px 0px -10px;
        }

        .text_a{
            font-family: 'Inter';
            font-style: normal;
            font-size: 60px;
            line-height: 73px;
            text-align: center;
            color: #177100;
            margin-top : 50px;
        }
        .text_b{
            font-family: 'Inter';
            font-style: normal;
            font-size: 60px;
            line-height: 73px;
            text-align: center;
            color: #735300;
            margin-top : 50px;
        }
        .text_c{
            font-family: 'Inter';
            font-style: normal;
            font-size: 60px;
            line-height: 73px;
            text-align: center;
            color: #730000;
            margin-top : 50px;
        }
        .text_d{
           font-family: 'Inter';
            font-style: normal;
            font-size: 60px;
            line-height: 73px;
            text-align: center;
            color: #001973; 
            margin-top : 50px;
        }

        .text_e{
            font-family: 'Inter';
            font-style: normal;
            font-weight: 700;
            font-size: 60px;
            line-height: 73px;
            text-align: center;
            color: #AB6700;
            text-align:center;
            margin-top:750px;
        }
    </style>
</head>

<body>

<div class='content'>
    <div id="talk_a">
        <div id="snow">
            <img id="real_a" src="../../icon/talk/응원.png">
        </div>
        <p class="text_a">응원의 말</p>
    </div>

    <div id="talk_b">
        <div id="sun">
            <img id="real_b" src="../../icon/talk/칭찬.png">
        </div>
            <p class="text_b">칭찬의 말</p>
    </div>

    <div id="talk_c">
        <div id="light">
            <img id="real_c" src="../../icon/talk/잔소리.png">
        </div>
            <p class="text_c">잔소리</p>
    </div>

    <div id="talk_d">
        <div id="cloud">
            <img id="real_d" src="../../icon/talk/위로.png">
        </div>
            <p class="text_d">위로의 말</p>
    </div>
</div>

<p class="text_e">오늘은 어떤 말이 듣고 싶나요?</p>
</body>
</html>