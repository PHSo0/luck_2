<?php 
?>
<h2>오늘의 운세</h2>
<?php 
session_start();
if (isset($_SESSION['id'])) {
    if($_SESSION['sex']=='female'){
        echo "afds";
        $sex="f";
        $birth = $_SESSION['birth'];
    }else{
        $sex="m";
        $birth = $_SESSION['birth'];
        }
    }
?>
<!-- 생년월일정보 (세션에서 가져오기) -->
<input type="hidden" id="birth" value="<?=$birth?>"/>
<input type="hidden" id="sex" value="<?=$sex?>"/>

<ul>
<li>금전운 : <span id="luck01"></span></li>
<li>학업운 : <span id="luck02"></span></li>
<li>직업운 : <span id="luck03"></span></li>
<li>연애운 : <span id="luck04"></span></li>
</ul>
<?php 

?>
<!-- Jquery 플러그인 -->
<script src="http://code.jquery.com/jquery-latest.min.js"></script>
<script type="text/javascript">
//문서 로드 후 함수 호출
$(document).ready(function(){
	//생년월일 정보 가져오기
	var bir = $("#birth").val();
    var sex = $("#sex").val();
    var birth = bir.replace(/-/gi,"");
	//ajax 통신 - url로 호출해서 데이터 불러오기
	$.ajax({
		url:'https://m.search.naver.com/p/csearch/dcontent/external_api/json_todayunse_v2.naver?_callback=window.__jindo2_callback._fortune_my_0&gender='+sex+'&birth='+birth+'&solarCal=solar&time='
	}).done(function(json){
		console.log('성공');
		//console.log(json);
		//text로 받은 정보를 json 형식으로 변경하기
		json = json.replace("window.__jindo2_callback._fortune_my_0(","");
		json = json.replace(");","");
		// json 의 속성은 "(쌍따옴표)로 묶어주어야 함
		json = json.replace("result","\"result\"");
		json = json.replaceAll("day","\"day\"");
		json = json.replaceAll("title","\"title\"");
		json = json.replaceAll("date","\"date\"");
		json = json.replaceAll("content","\"content\"");
		json = json.replaceAll("tomorrow","\"tomorrow\"");
		json = json.replaceAll("month","\"month\"");
		json = json.replaceAll("userData","\"userData\"");
		json = json.replaceAll("year","\"year\"");
		json = json.replaceAll("constellation","\"constellation\"");
		json = json.replaceAll("resultMSG","\"resultMSG\"");
		
		//console.log(json);
		
		//텍스트를 Json 객체로 변환
		var data = JSON.parse(json);
		console.log(data.result.day.content);
		//2 금전운 ,4 학업운 ,3 직업운 ,1 연애운
		//console.log(data.result.day.content[2].desc);
		//console.log(data.result.day.content[4].desc);
		//console.log(data.result.day.content[3].desc);
		//console.log(data.result.day.content[1].desc);
		
		//document.getElementById("luck01").innerText=data.result.day.content[2].desc;
		// $("#name") = document.getElementById("name")
		// $(".name") = document.querySeletor(".name")
		$("#luck01").text(data.result.day.content[2].desc);
		// $("#luck02").text(data.result.day.content[4].desc);
		// $("#luck03").text(data.result.day.content[3].desc);
		// $("#luck04").text(data.result.day.content[1].desc);
	}).fail(function(xhr,status,err){
		console.log('실패');
	});

});

</script>