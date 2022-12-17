<?php
include("simple_html_dom.php");

$type = $_GET["type"];

$type = str_replace(" ", "%20", $type);
$html = file_get_html('https://search.naver.com/search.naver?where=nexearch&sm=tab_etc&qvt=0&query='.$type);
echo $html->find('.detail p._cs_fortune_text', 0)->outertext;

?>