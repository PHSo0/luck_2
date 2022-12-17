<?php 

?>

<h2>운세 정보</h2>

<?php 
/* 스크래핑 모듈*/
include('simple_html_dom.php');

//운세 종류
$type=$_GET["type"];
//$type = str_replace(' ','%20',$type);
//echo "type : ".$type;
//echo 'https://search.naver.com/search.naver?where=nexearch&sm=tab_etc&qvt=0&query='.$type;

$html = file_get_html('https://search.naver.com/search.naver?where=nexearch&sm=tab_etc&qvt=0&query='.$type.'%20운세');
// 전달받은 운세 종류 출력
echo $type."<br/>";
// 운세 호출 결과 출력
echo $html->find('.detail p._cs_fortune_text',0)->outertext;
//echo $html;

?>
<!-- 클릭시 가져오는 정보 queryString으로 전달 -->
<li>
	<a href="luck.php?type=쥐띠">쥐띠 운세</a>
</li>
<li>
	<a href="luck.php?type=소띠">소띠 운세</a>
</li>
<li>
	<a href="luck.php?type=호랑이띠">호랑이띠 운세</a>
</li>
<li>
	<a href="luck.php?type=물병자리">물병자리 운세</a>
</li>