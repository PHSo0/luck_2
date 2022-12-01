<?php

	require_once("../DB/DB.php");

	

	/* 페이징 시작 */

	//페이지 get 변수가 있다면 받아오고, 없다면 1페이지를 보여준다.

	if(isset($_GET['page'])) {

		$page = $_GET['page'];

	} else {

		$page = 1;

	}

	$result = $db -> prepare('SELECT count(*) AS cnt FROM board ORDER BY no desc');
	$result -> execute();
	$row = $result->fetch(PDO::FETCH_ASSOC);
    
	$allPost = $row['cnt']; //전체 게시글의 수

	

	$onePage = 4; // 한 페이지에 보여줄 게시글의 수.

	$allPage = ceil($allPost / $onePage); //전체 페이지의 수
    if($page < 1 || ($allPage && $page > $allPage)) {

        ?>
        
                <script>
        
                    alert("존재하지 않는 페이지입니다.");
        
                    history.back();
        
                </script>
        
        <?php
        
                exit;
        
            }
    $oneSection = 7; //한번에 보여줄 총 페이지 개수(1 ~ 10, 11 ~ 20 ...)

	$currentSection = ceil($page / $oneSection); //현재 섹션

	$allSection = ceil($allPage / $oneSection); //전체 섹션의 수

	

	$firstPage = ($currentSection * $oneSection) - ($oneSection - 1); //현재 섹션의 처음 페이지

	

	if($currentSection == $allSection) {

		$lastPage = $allPage; //현재 섹션이 마지막 섹션이라면 $allPage가 마지막 페이지가 된다.

	} else {

		$lastPage = $currentSection * $oneSection; //현재 섹션의 마지막 페이지

	}
    $prevPage = (($currentSection - 1) * $oneSection); //이전 페이지, 11~20일 때 이전을 누르면 10 페이지로 이동.

	$nextPage = (($currentSection + 1) * $oneSection) - ($oneSection - 1); //다음 페이지, 11~20일 때 다음을 누르면 21 페이지로 이동.

	

	$paging = '<ul>'; // 페이징을 저장할 변수

	

	//첫 페이지가 아니라면 처음 버튼을 생성

	if($page != 1) { 

		$paging .= '<li class="page page_start"><a href="./index.php?page=1">처음</a></li>';

	}

	//첫 섹션이 아니라면 이전 버튼을 생성

	if($currentSection != 1) { 

		$paging .= '<li class="page page_prev"><a href="./index.php?page=' . $prevPage . '">이전</a></li>';

	}
    for($i = $firstPage; $i <= $lastPage; $i++) {

		if($i == $page) {

			$paging .= '<li class="page current">' . $i . '</li>';

		} else {

			$paging .= '<li class="page"><a href="./index.php?page=' . $i . '">' . $i . '</a></li>';

		}

	}

	

	//마지막 섹션이 아니라면 다음 버튼을 생성

	if($currentSection != $allSection) { 

		$paging .= '<li class="page page_next"><a href="./index.php?page=' . $nextPage . '">다음</a></li>';

	}

	

	//마지막 페이지가 아니라면 끝 버튼을 생성

	if($page != $allPage) { 

		$paging .= '<li class="page page_end"><a href="./index.php?page=' . $allPage . '">끝</a></li>';

	}

	$paging .= '</ul>';

	

	/* 페이징 끝 */
    $currentLimit = ($onePage * $page) - $onePage; //몇 번째의 글부터 가져오는지

	$sqlLimit = ' limit ' . $currentLimit . ', ' . $onePage; //limit sql 구문

	

	$sql = 'select * from board order by no desc' . $sqlLimit; //원하는 개수만큼 가져온다. (0번째부터 20번째까지

	$result = $db->query($sql)
    ?>
	<!DOCTYPE html>
	<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Document</title>
	</head>
	<body>
		<table>
			<tbody>
			<?php

while($row = $result->fetch(PDO::FETCH_ASSOC))

{
?>
			<tr>
			<td><?php echo $row['Qtitle']?></td>
			</tr>
			<?php } ?>
			</tbody>
		</table>

		<div class="paging">

				<?php echo $paging ?>

			</div>
	</body>
	</html>