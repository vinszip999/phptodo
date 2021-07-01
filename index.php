<?php
include('header.php');
$mysql_host = "localhost";
$mysql_user = "vinszip999";
$mysql_pw = "";
$mysql_db = "vinszip999";

$conn = mysqli_connect($mysql_host, $mysql_user, $mysql_pw, $mysql_db);
mysqli_select_db($conn, $mysql_db) or die('DB 선택 실패');

$limit = 5;
$sql = "select * from `todos` order by `idx` desc limit ".$limit;
$rs = mysqli_query($conn, $sql);

$todos="";
while($row = mysqli_fetch_array($rs)){ # 한 번 호출할 떄마다 한 줄 씩 가지고 옴
	// print_r($row); 
	
	// $complete .= ($row['complete'] == 1) ? '완료' : '미완료';
	if($row['complete'] == 1){
		$complete = '<span class="badge bg-success">완료</span>';
	}else{
		$complete = '<span class="badge bg-danger">미완료</span>';
	}
	$todos .= '<tr><th scope="row">'.$row['idx']
				.'</th><td>'.$row['title']
				.'</td><td>'.$row['wdate']
				.'</td><td>'.$complete.'</td></tr>';
}
?>
<table class="table">
	<thead>
		<tr>
			<th scope="col">#</th>
			<th scope="col">할 일</th>
			<th scope="col">등록 시간</th>
			<th scope="col">완료여부</th>
		</tr>
	</thead>
	<tbody>
	  <?=$todos?>
	</tbody>
</table>

<?php
include('footer.php');
?>