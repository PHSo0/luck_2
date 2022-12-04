<?php

	require_once("../DB/DB.php");

	

	/* 페이징 시작 */

	//페이지 get 변수가 있다면 받아오고, 없다면 1페이지를 보여준다.

	if(isset($_GET['page'])) {

		$page = $_GET['page'];

	} else {

		$page = 1;

	}

	$result = $db -> prepare('SELECT count(*) AS cnt  FROM board ORDER BY no desc');
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

	if($page != 1 || $page==1) { 

		$paging .= '<li class="p_post"><a href="./board.php?page=1'.'?bno='.'"><</a></li>';

	}

	//첫 섹션이 아니라면 이전 버튼을 생성

	if($currentSection != 1) { 

		$paging .= '<li class="p_post"><a href="./board.php?page=' . $prevPage .'"><</a></li>';

	}
    for($i = $firstPage; $i <= $lastPage; $i++) {

		if($i == $page) {

			$paging .= '<li class="p_post_current">' . $i . '</li>';

		} else {

			$paging .= '<li class="p_post"><a href="./board.php?page=' . $i .'">' . $i . '</a></li>';

		}

	}

	

	//마지막 섹션이 아니라면 다음 버튼을 생성

	if($currentSection != $allSection) { 

		$paging .= '<li class="p_post"><a href="./board.php?page=' . $nextPage . '">></a></li>';

	}

	

	//마지막 페이지가 아니라면 끝 버튼을 생성

	 if($page != $allPage|| $page == $allPage) { 

		$paging .= '<li class="p_post"><a href="./board.php?page=' . $allPage .'">></a></li>';

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
		<style>
        #QA_content{
            height: 863px;
            width: 77.5%;
            background-color: #FFFDF5;
            position: absolute;
            top: 53px;
            left: 294px;
        }
        .board_1{
            margin : 0px 320px 0px 320px;
            width : 100%;
            height : 84px;  
            text-align: left;
            /* border-top : 1px solid black;
            border-bottom : 1px solid black; */
            position: relative;
            top : 100px;
            display :inline-block;
			box-shadow: 
			0 1px 0 0 black, 
			0 1px 0 0 black inset;
			
        }
        .sub_button{
            font-family: 'Inter';
            font-style: normal;
            font-weight: 700;
            font-size: 20px;
            line-height: 24px;
            color: #000000;
            background-color: #FFFDF5;
            margin : 0px 320px 0px 320px;
            height: 84px;  
            position: relative;
            top : 102px;
            display : block;
            margin-left: auto;
        }
        .num_div{
            width: 55%;
            height: 80px;
            margin : 0px 320px 0px 320px;
            position: absolute;
            bottom: 50px;
			text-align:center;
        }
		.post{
            margin:30px;
			font-family: 'Inter';
			font-style: normal;
			font-weight: 400;
			font-size: 15px;
			line-height: 18px;
        }
		
        .p_post{
            font-family: 'Inter';
            font-style: normal;
            font-weight: 400;
            font-size: 20px;
            line-height: 24px;
			list-style: none;
			color:black;
			display : inline-block;
			margin-left : 10px;
			margin-right:10px;
        }
		.p_post_current{
			font-family: 'Inter';
            font-style: normal;
            font-weight: 700;
            font-size: 20px;
            line-height: 24px;
			list-style: none;
			color:black;
			display : inline-block;
			margin-left : 10px;
			margin-right:10px;
		}
		.c{
			margin-top : 160px;
			border-collapse:collapse;
			
		}
		a{
			text-decoration: none;
			color : black;
			
		}
    </style>
	</head>
	<body>
	<?php
    session_start();
    if(! isset($_SESSION['id'])){
        include("../header/no_login_header.php");
    } else{
        include("../header/yes_login_header.php");
    }
    include("../nav/nav(board).php");
    ?>
	<div id = "QA_content">
		<table class="c">
			<tbody>
			<?php
$count=1;
while($row = $result->fetch(PDO::FETCH_ASSOC))

{
?>
			<tr style="padding : 30%;">
			<td class = "board_1">	
			<p class="post" onclick="location.href='board_con.php?bno=<?=$row['no']?>'">
				<?php echo $row['Qtitle'];?></p></td>
			</tr>
			<?php 	
		}
		?>
			</tbody>
		</table>
		<input type = submit value="글쓰기" class = "sub_button" onclick = "location.href = 'board_submit.php'">

		<div class="num_div">

				<?php echo $paging ?>

			</div>
</div>
	</body>
	</html>