<?php

$conn = new mysqli("localhost", "server", "00000000", "dataset");

setcookie('date_count', $_POST["date_count"], time() + 10, '/');
setcookie('item_no', $_POST["item_no"], time() + 10, '/');

$yDate = $_POST["date_count"];

$i_no = $_POST["item_no"];

?>

<!DOCTYPE html>
<html lang="ko">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="chrome">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="/css/table line hidden.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="/css/그래프.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link href="/css/NG of daily.css" rel="stylesheet" type="text/css">
	<script src="/js/graph.js"></script>
	<title>그래프 페이지</title>
</head>

<body>

	<div class="container" style="width: 100%;">
		<canvas id="myChart" style ="width:99.5vw; height:73vh; margin-left:-303px;"></canvas>
	</div>
	<script>
		var 불량수량 = 0;
		var ctx = document.getElementById('myChart');
		var myChart = new Chart(ctx, {
			type: 'bar',
			data: {
				labels: ['월평균', '01월 불량수량', '02월 불량수량', '03월 불량수량', '04월 불량수량', '05월 불량수량', '06월 불량수량', '07월 불량수량', '08월 불량수량', '09월 불량수량', '10월 불량수량', '11월 불량수량', '12월 불량수량'],
				datasets: [{
					label: '월간 불량 수량',
					data: [<?php if ($i_no <= 5) {
								$sql = "select * from result1 where date >= '" . $yDate . "0101' and date <= '" . $yDate . "1231' and index1 ='" . $i_no . "' and conclusion1 >= 2 order by id";
							} else {
								$sql = "select * from result1 where date >= '" . $yDate . "0101' and date <= '" . $yDate . "1231' and conclusion1 >=2 order by id";
							}
							$res = mysqli_query($conn, $sql);
							for ($ngcountT = 0; $row = mysqli_fetch_array($res); $ngcountT++) {
							}
							$aveNgT = $ngcountT / 12;
							echo number_format($aveNgT, 2); ?>, //월 평균 및 합계 수량 카운트
						<?php if ($i_no <= 5) {
							$sql = "select * from result1 where date >= '" . $yDate . "0101' and date <= '" . $yDate . "0131' and index1 ='" . $i_no . "' and conclusion1 >= 2 order by id";
						} else {
							$sql = "select * from result1 where date >= '" . $yDate . "0101' and date <= '" . $yDate . "0131' and conclusion1 >=2 order by id";
						}
						$res = mysqli_query($conn, $sql);
						for ($ngcount01 = 0; $row = mysqli_fetch_array($res); $ngcount01++) {
						}
						echo $ngcount01; ?>, //01월 합계 수량 카운트
						<?php if ($i_no <= 5) {
							$sql = "select * from result1 where date >= '" . $yDate . "0201' and date <= '" . $yDate . "0231' and index1 ='" . $i_no . "' and conclusion1 >= 2 order by id";
						} else {
							$sql = "select * from result1 where date >= '" . $yDate . "0201' and date <= '" . $yDate . "0229' and conclusion1 >=2 order by id";
						}
						$res = mysqli_query($conn, $sql);
						for ($ngcount02 = 0; $row = mysqli_fetch_array($res); $ngcount02++) {
						}
						echo $ngcount02; ?>, //02월 합계 수량 카운트
						<?php if ($i_no <= 5) {
							$sql = "select * from result1 where date >= '" . $yDate . "0301' and date <= '" . $yDate . "0331' and index1 ='" . $i_no . "' and conclusion1 >= 2 order by id";
						} else {
							$sql = "select * from result1 where date >= '" . $yDate . "0301' and date <= '" . $yDate . "0331' and conclusion1 >=2 order by id";
						}
						$res = mysqli_query($conn, $sql);
						for ($ngcount03 = 0; $row = mysqli_fetch_array($res); $ngcount03++) {
						}
						echo $ngcount03; ?>, //03월 합계 수량 카운트
						<?php if ($i_no <= 5) {
							$sql = "select * from result1 where date >= '" . $yDate . "0401' and date <= '" . $yDate . "0431' and index1 ='" . $i_no . "' and conclusion1 >= 2 order by id";
						} else {
							$sql = "select * from result1 where date >= '" . $yDate . "0401' and date <= '" . $yDate . "0430' and conclusion1 >=2 order by id";
						}
						$res = mysqli_query($conn, $sql);
						for ($ngcount04 = 0; $row = mysqli_fetch_array($res); $ngcount04++) {
						}
						echo $ngcount04; ?>, //04월 합계 수량 카운트
						<?php if ($i_no <= 5) {
							$sql = "select * from result1 where date >= '" . $yDate . "0501' and date <= '" . $yDate . "0531' and index1 ='" . $i_no . "' and conclusion1 >= 2 order by id";
						} else {
							$sql = "select * from result1 where date >= '" . $yDate . "0501' and date <= '" . $yDate . "0531' and conclusion1 >=2 order by id";
						}
						$res = mysqli_query($conn, $sql);
						for ($ngcount05 = 0; $row = mysqli_fetch_array($res); $ngcount05++) {
						}
						echo $ngcount05; ?>, //05월 합계 수량 카운트
						<?php if ($i_no <= 5) {
							$sql = "select * from result1 where date >= '" . $yDate . "0601' and date <= '" . $yDate . "0631' and index1 ='" . $i_no . "' and conclusion1 >= 2 order by id";
						} else {
							$sql = "select * from result1 where date >= '" . $yDate . "0601' and date <= '" . $yDate . "0630' and conclusion1 >=2 order by id";
						}
						$res = mysqli_query($conn, $sql);
						for ($ngcount06 = 0; $row = mysqli_fetch_array($res); $ngcount06++) {
						}
						echo $ngcount06; ?>, //06월 합계 수량 카운트
						<?php if ($i_no <= 5) {
							$sql = "select * from result1 where date >= '" . $yDate . "0701' and date <= '" . $yDate . "0731' and index1 ='" . $i_no . "' and conclusion1 >= 2 order by id";
						} else {
							$sql = "select * from result1 where date >= '" . $yDate . "0701' and date <= '" . $yDate . "0731' and conclusion1 >=2 order by id";
						}
						$res = mysqli_query($conn, $sql);
						for ($ngcount07 = 0; $row = mysqli_fetch_array($res); $ngcount07++) {
						}
						echo $ngcount07; ?>, //07월 합계 수량 카운트
						<?php if ($i_no <= 5) {
							$sql = "select * from result1 where date >= '" . $yDate . "0801' and date <= '" . $yDate . "0831' and index1 ='" . $i_no . "' and conclusion1 >= 2 order by id";
						} else {
							$sql = "select * from result1 where date >= '" . $yDate . "0801' and date <= '" . $yDate . "0831' and conclusion1 >=2 order by id";
						}
						$res = mysqli_query($conn, $sql);
						for ($ngcount08 = 0; $row = mysqli_fetch_array($res); $ngcount08++) {
						}
						echo $ngcount08; ?>, //08월 합계 수량 카운트
						<?php if ($i_no <= 5) {
							$sql = "select * from result1 where date >= '" . $yDate . "0901' and date <= '" . $yDate . "0931' and index1 ='" . $i_no . "' and conclusion1 >= 2 order by id";
						} else {
							$sql = "select * from result1 where date >= '" . $yDate . "0901' and date <= '" . $yDate . "0930' and conclusion1 >=2 order by id";
						}
						$res = mysqli_query($conn, $sql);
						for ($ngcount09 = 0; $row = mysqli_fetch_array($res); $ngcount09++) {
						}
						echo $ngcount09; ?>, //09월 합계 수량 카운트
						<?php if ($i_no <= 5) {
							$sql = "select * from result1 where date >= '" . $yDate . "1001' and date <= '" . $yDate . "1031' and index1 ='" . $i_no . "' and conclusion1 >= 2 order by id";
						} else {
							$sql = "select * from result1 where date >= '" . $yDate . "1001' and date <= '" . $yDate . "1031' and conclusion1 >=2 order by id";
						}
						$res = mysqli_query($conn, $sql);
						for ($ngcount10 = 0; $row = mysqli_fetch_array($res); $ngcount10++) {
						}
						echo $ngcount10; ?>, //10월 합계 수량 카운트
						<?php if ($i_no <= 5) {
							$sql = "select * from result1 where date >= '" . $yDate . "1101' and date <= '" . $yDate . "1131' and index1 ='" . $i_no . "' and conclusion1 >= 2 order by id";
						} else {
							$sql = "select * from result1 where date >= '" . $yDate . "1101' and date <= '" . $yDate . "1130' and conclusion1 >=2 order by id";
						}
						$res = mysqli_query($conn, $sql);
						for ($ngcount11 = 0; $row = mysqli_fetch_array($res); $ngcount11++) {
						}
						echo $ngcount11; ?>, //11월 합계 수량 카운트
						<?php if ($i_no <= 5) {
							$sql = "select * from result1 where date >= '" . $yDate . "1201' and date <= '" . $yDate . "1231' and index1 ='" . $i_no . "' and conclusion1 >= 2 order by id";
						} else {
							$sql = "select * from result1 where date >= '" . $yDate . "1201' and date <= '" . $yDate . "1231' and conclusion1 >=2 order by id";
						}
						$res = mysqli_query($conn, $sql);
						for ($ngcount12 = 0; $row = mysqli_fetch_array($res); $ngcount12++) {
						}
						echo $ngcount12; ?>, //12월 합계 수량 카운트
					],
					backgroundColor: ['rgba(255, 99, 132, 0.2)', 'rgba(255, 99, 132, 0.2)', 'rgba(54, 162, 235, 0.2)', 'rgba(54, 162, 235, 0.2)', 'rgba(255, 206, 86, 0.2)', 'rgba(255, 206, 86, 0.2)', 'rgba(75, 192, 192, 0.2)', 'rgba(75, 192, 192, 0.2)', 'rgba(153, 102, 255, 0.2)', 'rgba(153, 102, 255, 0.2)', 'rgba(255, 159, 64, 0.2)', 'rgba(255, 159, 64, 0.2)', 'rgba(255, 159, 164, 0.2)', 'rgba(255, 159, 164, 0.2)'],
					borderColor: ['rgba(255, 99, 132, 1)', 'rgba(255, 99, 132, 1)', 'rgba(54, 162, 235, 1)', 'rgba(54, 162, 235, 1)', 'rgba(255, 206, 86, 1)', 'rgba(255, 206, 86, 1)', 'rgba(75, 192, 192, 1)', 'rgba(75, 192, 192, 1)', 'rgba(153, 102, 255, 1)', 'rgba(153, 102, 255, 1)', 'rgba(255, 159, 64, 1)', 'rgba(255, 159, 64, 1)', 'rgba(255, 159, 164, 1)', 'rgba(255, 159, 164, 1)', 'rgba(255, 159, 164, 1)'],
					borderWidth: 1
				}]
			},
			options: {
				responsive: false,
				scales: {
					yAxes: [{
						ticks: {
							beginAtZero: true
						}
					}]
				}
			}
		});
	</script>
	<table width=99.5% style="text-align: center;">
		<thead>
			<tr class="alert-primary text-dark border border-secondary">
				<th>구 분</th>
				</th>
				<th>01월</th>
				<th>02월</th>
				<th>03월</th>
				<th>04월</th>
				<th>05월</th>
				<th>06월</th>
				<th>07월</th>
				<th>08월</th>
				<th>09월</th>
				<th>10월</th>
				<th>11월</th>
				<th>12월</th>
				<th class="bg-warning border border-secondary text-dark">월평균</th>
				<th class="bg-warning border border-secondary text-dark">합 계</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<th class="alert-secondary border border-secondary border border-secondary">총 검사수량</th>
				<td>
					<div id="01월 검사수량"></div>
				</td>
				<td>
					<div id="02월 검사수량"></div>
				</td>
				<td>
					<div id="03월 검사수량"></div>
				</td>
				<td>
					<div id="04월 검사수량"></div>
				</td>
				<td>
					<div id="05월 검사수량"></div>
				</td>
				<td>
					<div id="06월 검사수량"></div>
				</td>
				<td>
					<div id="07월 검사수량"></div>
				</td>
				<td>
					<div id="08월 검사수량"></div>
				</td>
				<td>
					<div id="09월 검사수량"></div>
				</td>
				<td>
					<div id="10월 검사수량"></div>
				</td>
				<td>
					<div id="11월 검사수량"></div>
				</td>
				<td>
					<div id="12월 검사수량"></div>
				</td>
				<td class="alert-warning border border-secondary">
					<div id="월평균 검사수량"></div>
				</td>
				<td class="alert-warning border border-secondary">
					<div id="년간 검사수량"></div>
				</td>
			</tr>
			<tr>
				<th class="alert-secondary border border-secondary">불량수량</th>
				<td>
					<div id="01월 불량수량"></div>
				</td>
				<td>
					<div id="02월 불량수량"></div>
				</td>
				<td>
					<div id="03월 불량수량"></div>
				</td>
				<td>
					<div id="04월 불량수량"></div>
				</td>
				<td>
					<div id="05월 불량수량"></div>
				</td>
				<td>
					<div id="06월 불량수량"></div>
				</td>
				<td>
					<div id="07월 불량수량"></div>
				</td>
				<td>
					<div id="08월 불량수량"></div>
				</td>
				<td>
					<div id="09월 불량수량"></div>
				</td>
				<td>
					<div id="10월 불량수량"></div>
				</td>
				<td>
					<div id="11월 불량수량"></div>
				</td>
				<td>
					<div id="12월 불량수량"></div>
				</td>
				<td class="alert-warning border border-secondary">
					<div id="월평균 불량수량"></div>
				</td>
				<td class="alert-warning border border-secondary">
					<div id="년간 불량수량"></div>
				</td>
				</span>
			</tr>
			<tr>
				<th class="alert-secondary border border-secondary">불량률</th>
				<td>
					<div id="01월 불량률">
				</td>
				<td>
					<div id="02월 불량률">
				</td>
				<td>
					<div id="03월 불량률">
				</td>
				<td>
					<div id="04월 불량률">
				</td>
				<td>
					<div id="05월 불량률">
				</td>
				<td>
					<div id="06월 불량률">
				</td>
				<td>
					<div id="07월 불량률">
				</td>
				<td>
					<div id="08월 불량률">
				</td>
				<td>
					<div id="09월 불량률">
				</td>
				<td>
					<div id="10월 불량률">
				</td>
				<td>
					<div id="11월 불량률">
				</td>
				<td>
					<div id="12월 불량률">
				</td>
				<td class="alert-warning border border-secondary">
					<div id="월평균 불량률"></div>
				</td>
				<td class="alert-warning border border-secondary">
					<div id="년간 불량률"></div>
				</td>
				</span>
			</tr>
			<tr>
				<th class="alert-secondary border border-secondary border border-secondary">LVDT불량</th>
				<td>
					<div id="01월 LVDT불량">
				</td>
				<td>
					<div id="02월 LVDT불량">
				</td>
				<td>
					<div id="03월 LVDT불량">
				</td>
				<td>
					<div id="04월 LVDT불량">
				</td>
				<td>
					<div id="05월 LVDT불량">
				</td>
				<td>
					<div id="06월 LVDT불량">
				</td>
				<td>
					<div id="07월 LVDT불량">
				</td>
				<td>
					<div id="08월 LVDT불량">
				</td>
				<td>
					<div id="09월 LVDT불량">
				</td>
				<td>
					<div id="10월 LVDT불량">
				</td>
				<td>
					<div id="11월 LVDT불량">
				</td>
				<td>
					<div id="12월 LVDT불량">
				</td>
				<td class="alert-warning border border-secondary">
					<div id="월평균 LVDT불량"></div>
				</td>
				<td class="alert-warning border border-secondary">
					<div id="년간 LVDT불량"></div>
				</td>
			</tr>
			<tr>
				<th class="alert-secondary border border-secondary border border-secondary">동심 불량</th>
				<td>
					<div id="01월 동심불량"></div>
				</td>
				<td>
					<div id="02월 동심불량"></div>
				</td>
				<td>
					<div id="03월 동심불량"></div>
				</td>
				<td>
					<div id="04월 동심불량"></div>
				</td>
				<td>
					<div id="05월 동심불량"></div>
				</td>
				<td>
					<div id="06월 동심불량"></div>
				</td>
				<td>
					<div id="07월 동심불량"></div>
				</td>
				<td>
					<div id="08월 동심불량"></div>
				</td>
				<td>
					<div id="09월 동심불량"></div>
				</td>
				<td>
					<div id="10월 동심불량"></div>
				</td>
				<td>
					<div id="11월 동심불량"></div>
				</td>
				<td>
					<div id="12월 동심불량"></div>
				</td>
				<td class="alert-warning border border-secondary">
					<div id="월평균 동심불량"></div>
				</td>
				<td class="alert-warning border border-secondary">
					<div id="년간 동심불량"></div>
				</td>
			</tr>
			<tr>
				<th class="alert-secondary border border-secondary">조도 불량</th>
				<td>
					<div id="01월 조도불량"></div>
				</td>
				<td>
					<div id="02월 조도불량"></div>
				</td>
				<td>
					<div id="03월 조도불량"></div>
				</td>
				<td>
					<div id="04월 조도불량"></div>
				</td>
				<td>
					<div id="05월 조도불량"></div>
				</td>
				<td>
					<div id="06월 조도불량"></div>
				</td>
				<td>
					<div id="07월 조도불량"></div>
				</td>
				<td>
					<div id="08월 조도불량"></div>
				</td>
				<td>
					<div id="09월 조도불량"></div>
				</td>
				<td>
					<div id="10월 조도불량"></div>
				</td>
				<td>
					<div id="11월 조도불량"></div>
				</td>
				<td>
					<div id="12월 조도불량"></div>
				</td>
				<td class="alert-warning border border-secondary">
					<div id="월평균 조도불량"></div>
				</td>
				<td class="alert-warning border border-secondary">
					<div id="년간 조도불량"></div>
				</td>
			</tr>
			<!-- <tr>
				<th class="alert-secondary border border-secondary">BURR</th>
				<td>
					<div id="01월 BURR수량"></div>
				</td>
				<td>
					<div id="02월 BURR수량"></div>
				</td>
				<td>
					<div id="03월 BURR수량"></div>
				</td>
				<td>
					<div id="04월 BURR수량"></div>
				</td>
				<td>
					<div id="05월 BURR수량"></div>
				</td>
				<td>
					<div id="06월 BURR수량"></div>
				</td>
				<td>
					<div id="07월 BURR수량"></div>
				</td>
				<td>
					<div id="08월 BURR수량"></div>
				</td>
				<td>
					<div id="09월 BURR수량"></div>
				</td>
				<td>
					<div id="10월 BURR수량"></div>
				</td>
				<td>
					<div id="11월 BURR수량"></div>
				</td>
				<td>
					<div id="12월 BURR수량"></div>
				</td>
				<td class="alert-warning border border-secondary">
					<div id="월평균 BURR수량"></div>
				</td>
				<td class="alert-warning border border-secondary">
					<div id="년간 BURR수량"></div>
				</td>
			</tr>
			<tr>
				<th class="alert-secondary border border-secondary">이물</th>
				<td>
					<div id="01월 이물수량"></div>
				</td>
				<td>
					<div id="02월 이물수량"></div>
				</td>
				<td>
					<div id="03월 이물수량"></div>
				</td>
				<td>
					<div id="04월 이물수량"></div>
				</td>
				<td>
					<div id="05월 이물수량"></div>
				</td>
				<td>
					<div id="06월 이물수량"></div>
				</td>
				<td>
					<div id="07월 이물수량"></div>
				</td>
				<td>
					<div id="08월 이물수량"></div>
				</td>
				<td>
					<div id="09월 이물수량"></div>
				</td>
				<td>
					<div id="10월 이물수량"></div>
				</td>
				<td>
					<div id="11월 이물수량"></div>
				</td>
				<td>
					<div id="12월 이물수량"></div>
				</td>
				<td class="alert-warning border border-secondary">
					<div id="월평균 이물수량"></div>
				</td>
				<td class="alert-warning border border-secondary">
					<div id="년간 이물수량"></div>
				</td>
			</tr>
			<tr>
				<th class="alert-secondary border border-secondary">크랙</th>
				<td>
					<div id="01월 크랙수량"></div>
				</td>
				<td>
					<div id="02월 크랙수량"></div>
				</td>
				<td>
					<div id="03월 크랙수량"></div>
				</td>
				<td>
					<div id="04월 크랙수량"></div>
				</td>
				<td>
					<div id="05월 크랙수량"></div>
				</td>
				<td>
					<div id="06월 크랙수량"></div>
				</td>
				<td>
					<div id="07월 크랙수량"></div>
				</td>
				<td>
					<div id="08월 크랙수량"></div>
				</td>
				<td>
					<div id="09월 크랙수량"></div>
				</td>
				<td>
					<div id="10월 크랙수량"></div>
				</td>
				<td>
					<div id="11월 크랙수량"></div>
				</td>
				<td>
					<div id="12월 크랙수량"></div>
				</td>
				<td class="alert-warning border border-secondary">
					<div id="월평균 크랙수량"></div>
				</td>
				<td class="alert-warning border border-secondary">
					<div id="년간 크랙수량"></div>
				</td>
			</tr>
			<tr>
				<th class="alert-secondary border border-secondary">플로우 마크</th>
				<td>
					<div id="01월 FW수량"></div>
				</td>
				<td>
					<div id="02월 FW수량"></div>
				</td>
				<td>
					<div id="03월 FW수량"></div>
				</td>
				<td>
					<div id="04월 FW수량"></div>
				</td>
				<td>
					<div id="05월 FW수량"></div>
				</td>
				<td>
					<div id="06월 FW수량"></div>
				</td>
				<td>
					<div id="07월 FW수량"></div>
				</td>
				<td>
					<div id="08월 FW수량"></div>
				</td>
				<td>
					<div id="09월 FW수량"></div>
				</td>
				<td>
					<div id="10월 FW수량"></div>
				</td>
				<td>
					<div id="11월 FW수량"></div>
				</td>
				<td>
					<div id="12월 FW수량"></div>
				</td>
				<td class="alert-warning border border-secondary">
					<div id="월평균 FW수량"></div>
				</td>
				<td class="alert-warning border border-secondary">
					<div id="년간 FW수량"></div>
				</td>
			</tr>
			<tr>
				<th class="alert-secondary border border-secondary">싱크마크</th>
				<td>
					<div id="01월 SINK수량"></div>
				</td>
				<td>
					<div id="02월 SINK수량"></div>
				</td>
				<td>
					<div id="03월 SINK수량"></div>
				</td>
				<td>
					<div id="04월 SINK수량"></div>
				</td>
				<td>
					<div id="05월 SINK수량"></div>
				</td>
				<td>
					<div id="06월 SINK수량"></div>
				</td>
				<td>
					<div id="07월 SINK수량"></div>
				</td>
				<td>
					<div id="08월 SINK수량"></div>
				</td>
				<td>
					<div id="09월 SINK수량"></div>
				</td>
				<td>
					<div id="10월 SINK수량"></div>
				</td>
				<td>
					<div id="11월 SINK수량"></div>
				</td>
				<td>
					<div id="12월 SINK수량"></div>
				</td>
				<td class="alert-warning border border-secondary">
					<div id="월평균 SINK수량"></div>
				</td>
				<td class="alert-warning border border-secondary">
					<div id="년간 SINK수량"></div>
				</td>
			</tr>
			<tr>
				<th class="alert-secondary border border-secondary">휨/변형</th>
				<td>
					<div id="01월 휨수량"></div>
				</td>
				<td>
					<div id="02월 휨수량"></div>
				</td>
				<td>
					<div id="03월 휨수량"></div>
				</td>
				<td>
					<div id="04월 휨수량"></div>
				</td>
				<td>
					<div id="05월 휨수량"></div>
				</td>
				<td>
					<div id="06월 휨수량"></div>
				</td>
				<td>
					<div id="07월 휨수량"></div>
				</td>
				<td>
					<div id="08월 휨수량"></div>
				</td>
				<td>
					<div id="09월 휨수량"></div>
				</td>
				<td>
					<div id="10월 휨수량"></div>
				</td>
				<td>
					<div id="11월 휨수량"></div>
				</td>
				<td>
					<div id="12월 휨수량"></div>
				</td>
				<td class="alert-warning border border-secondary">
					<div id="월평균 휨수량"></div>
				</td>
				<td class="alert-warning border border-secondary">
					<div id="년간 휨수량"></div>
				</td>
			</tr>
			<tr>
				<th class="alert-secondary border border-secondary">웰드라인</th>
				<td>
					<div id="01월 웰드수량"></div>
				</td>
				<td>
					<div id="02월 웰드수량"></div>
				</td>
				<td>
					<div id="03월 웰드수량"></div>
				</td>
				<td>
					<div id="04월 웰드수량"></div>
				</td>
				<td>
					<div id="05월 웰드수량"></div>
				</td>
				<td>
					<div id="06월 웰드수량"></div>
				</td>
				<td>
					<div id="07월 웰드수량"></div>
				</td>
				<td>
					<div id="08월 웰드수량"></div>
				</td>
				<td>
					<div id="09월 웰드수량"></div>
				</td>
				<td>
					<div id="10월 웰드수량"></div>
				</td>
				<td>
					<div id="11월 웰드수량"></div>
				</td>
				<td>
					<div id="12월 웰드수량"></div>
				</td>
				<td class="alert-warning border border-secondary">
					<div id="월평균 웰드수량"></div>
				</td>
				<td class="alert-warning border border-secondary">
					<div id="년간 웰드수량"></div>
				</td>
			</tr>
			<tr>
				<th class="alert-secondary border border-secondary">기타불량</th>
				<td>
					<div id="01월 기타수량"></div>
				</td>
				<td>
					<div id="02월 기타수량"></div>
				</td>
				<td>
					<div id="03월 기타수량"></div>
				</td>
				<td>
					<div id="04월 기타수량"></div>
				</td>
				<td>
					<div id="05월 기타수량"></div>
				</td>
				<td>
					<div id="06월 기타수량"></div>
				</td>
				<td>
					<div id="07월 기타수량"></div>
				</td>
				<td>
					<div id="08월 기타수량"></div>
				</td>
				<td>
					<div id="09월 기타수량"></div>
				</td>
				<td>
					<div id="10월 기타수량"></div>
				</td>
				<td>
					<div id="11월 기타수량"></div>
				</td>
				<td>
					<div id="12월 기타수량"></div>
				</td>
				<td class="alert-warning border border-secondary">
					<div id="월평균 기타수량"></div>
				</td>
				<td class="alert-warning border border-secondary">
					<div id="년간 기타수량"></div>
				</td> -->
			</tr>
		</tbody>
		<script>
			var i1
			i1 = document.getElementById('01월 검사수량');
			i1.innerText = '<?php if ($i_no <= 5) {
								$sql01 = "select * from result1 where date >= '" . $yDate . "0101' and date <= '" . $yDate . "0131' and index1 ='" . $i_no . "' order by id";
							} else {
								$sql01 = "select * from result1 where date >= '" . $yDate . "0101' and date <='" . $yDate . "0131' order by id";
							}
							$res = mysqli_query($conn, $sql01);
							for ($totalwork01 = 0; $row = mysqli_fetch_array($res); $totalwork01++) {
							}
							echo number_format($totalwork01, 0); ?>'; //01월 단순 합계 총 수량 
			i1 = document.getElementById('02월 검사수량');
			i1.innerText = '<?php if ($i_no <= 5) {
								$sql02 = "select * from result1 where date >= '" . $yDate . "0201' and date <= '" . $yDate . "0231' and index1 ='" . $i_no . "' order by id";
							} else {
								$sql02 = "select * from result1 where date >= '" . $yDate . "0201' and date <='" . $yDate . "0231' order by id";
							}
							$res = mysqli_query($conn, $sql02);
							for ($totalwork02 = 0; $row = mysqli_fetch_array($res); $totalwork02++) {
							}
							echo number_format($totalwork02, 0); ?>'; //02월 단순 합계 총 수량 
			i1 = document.getElementById('03월 검사수량');
			i1.innerText = '<?php if ($i_no <= 5) {
								$sql03 = "select * from result1 where date >= '" . $yDate . "0301' and date <= '" . $yDate . "0331' and index1 ='" . $i_no . "' order by id";
							} else {
								$sql03 = "select * from result1 where date >= '" . $yDate . "0301' and date <='" . $yDate . "0331' order by id";
							}
							$res = mysqli_query($conn, $sql03);
							for ($totalwork03 = 0; $row = mysqli_fetch_array($res); $totalwork03++) {
							}
							echo number_format($totalwork03, 0); ?>'; //03월 단순 합계 총 수량 
			i1 = document.getElementById('04월 검사수량');
			i1.innerText = '<?php if ($i_no <= 5) {
								$sql04 = "select * from result1 where date >= '" . $yDate . "0401' and date <= '" . $yDate . "0431' and index1 ='" . $i_no . "' order by id";
							} else {
								$sql04 = "select * from result1 where date >= '" . $yDate . "0401' and date <='" . $yDate . "0431' order by id";
							}
							$res = mysqli_query($conn, $sql04);
							for ($totalwork04 = 0; $row = mysqli_fetch_array($res); $totalwork04++) {
							}
							echo number_format($totalwork04, 0); ?>'; //04월 단순 합계 총 수량 
			i1 = document.getElementById('05월 검사수량');
			i1.innerText = '<?php if ($i_no <= 5) {
								$sql05 = "select * from result1 where date >= '" . $yDate . "0501' and date <= '" . $yDate . "0531' and index1 ='" . $i_no . "' order by id";
							} else {
								$sql05 = "select * from result1 where date >= '" . $yDate . "0501' and date <='" . $yDate . "0531' order by id";
							}
							$res = mysqli_query($conn, $sql05);
							for ($totalwork05 = 0; $row = mysqli_fetch_array($res); $totalwork05++) {
							}
							echo number_format($totalwork05, 0); ?>'; //05월 단순 합계 총 수량 
			i1 = document.getElementById('06월 검사수량');
			i1.innerText = '<?php if ($i_no <= 5) {
								$sql06 = "select * from result1 where date >= '" . $yDate . "0601' and date <= '" . $yDate . "0631' and index1 ='" . $i_no . "' order by id";
							} else {
								$sql06 = "select * from result1 where date >= '" . $yDate . "0601' and date <='" . $yDate . "0631' order by id";
							}
							$res = mysqli_query($conn, $sql06);
							for ($totalwork06 = 0; $row = mysqli_fetch_array($res); $totalwork06++) {
							}
							echo number_format($totalwork06, 0); ?>'; //06월 단순 합계 총 수량 
			i1 = document.getElementById('07월 검사수량');
			i1.innerText = '<?php if ($i_no <= 5) {
								$sql07 = "select * from result1 where date >= '" . $yDate . "0701' and date <= '" . $yDate . "0731' and index1 ='" . $i_no . "' order by id";
							} else {
								$sql07 = "select * from result1 where date >= '" . $yDate . "0701' and date <='" . $yDate . "0731' order by id";
							}
							$res = mysqli_query($conn, $sql07);
							for ($totalwork07 = 0; $row = mysqli_fetch_array($res); $totalwork07++) {
							}
							echo number_format($totalwork07, 0); ?>'; //07월 단순 합계 총 수량 
			i1 = document.getElementById('08월 검사수량');
			i1.innerText = '<?php if ($i_no <= 5) {
								$sql08 = "select * from result1 where date >= '" . $yDate . "0801' and date <= '" . $yDate . "0831' and index1 ='" . $i_no . "' order by id";
							} else {
								$sql08 = "select * from result1 where date >= '" . $yDate . "0801' and date <='" . $yDate . "0831' order by id";
							}
							$res = mysqli_query($conn, $sql08);
							for ($totalwork08 = 0; $row = mysqli_fetch_array($res); $totalwork08++) {
							}
							echo number_format($totalwork08, 0); ?>'; //08월 단순 합계 총 수량 
			i1 = document.getElementById('09월 검사수량');
			i1.innerText = '<?php if ($i_no <= 5) {
								$sql09 = "select * from result1 where date >= '" . $yDate . "0901' and date <= '" . $yDate . "0931' and index1 ='" . $i_no . "' order by id";
							} else {
								$sql09 = "select * from result1 where date >= '" . $yDate . "0901' and date <='" . $yDate . "0931' order by id";
							}
							$res = mysqli_query($conn, $sql09);
							for ($totalwork09 = 0; $row = mysqli_fetch_array($res); $totalwork09++) {
							}
							echo number_format($totalwork09, 0); ?>'; //09월 단순 합계 총 수량 
			i1 = document.getElementById('10월 검사수량');
			i1.innerText = '<?php if ($i_no <= 5) {
								$sql10 = "select * from result1 where date >= '" . $yDate . "1001' and date <= '" . $yDate . "1031' and index1 ='" . $i_no . "' order by id";
							} else {
								$sql10 = "select * from result1 where date >= '" . $yDate . "1001' and date <='" . $yDate . "1031' order by id";
							}
							$res = mysqli_query($conn, $sql10);
							for ($totalwork10 = 0; $row = mysqli_fetch_array($res); $totalwork10++) {
							}
							echo number_format($totalwork10, 0); ?>'; //10월 단순 합계 총 수량 
			i1 = document.getElementById('11월 검사수량');
			i1.innerText = '<?php if ($i_no <= 5) {
								$sql11 = "select * from result1 where date >= '" . $yDate . "1101' and date <= '" . $yDate . "1131' and index1 ='" . $i_no . "' order by id";
							} else {
								$sql11 = "select * from result1 where date >= '" . $yDate . "1101' and date <='" . $yDate . "1131' order by id";
							}
							$res = mysqli_query($conn, $sql11);
							for ($totalwork11 = 0; $row = mysqli_fetch_array($res); $totalwork11++) {
							}
							echo number_format($totalwork11, 0); ?>'; //11월 단순 합계 총 수량 
			i1 = document.getElementById('12월 검사수량');
			i1.innerText = '<?php if ($i_no <= 5) {
								$sql12 = "select * from result1 where date >= '" . $yDate . "1201' and date <= '" . $yDate . "1231' and index1 ='" . $i_no . "' order by id";
							} else {
								$sql12 = "select * from result1 where date >= '" . $yDate . "1201' and date <='" . $yDate . "1231' order by id";
							}
							$res = mysqli_query($conn, $sql12);
							for ($totalwork12 = 0; $row = mysqli_fetch_array($res); $totalwork12++) {
							}
							echo number_format($totalwork12, 0); ?>'; //12월 단순 합계 총 수량 
			i1 = document.getElementById('월평균 검사수량');
			i1.innerText = '<?php $yTotal = ($totalwork01 + $totalwork02 + $totalwork03 + $totalwork04 + $totalwork05 + $totalwork06 + $totalwork07 + $totalwork08 + $totalwork09 + $totalwork10 + $totalwork11 + $totalwork12);
							$yave = $yTotal / 12;
							echo number_format($yave, 2); ?>'; //이미계산한거 합에 평균 구함
			i1 = document.getElementById('년간 검사수량');
			i1.innerText = '<?php echo number_format($yTotal, 0); ?>';

			i1 = document.getElementById('01월 불량수량');
			i1.innerText = '<?php echo $ngcount01; ?>';
			i1 = document.getElementById('02월 불량수량');
			i1.innerText = '<?php echo $ngcount02; ?>';
			i1 = document.getElementById('03월 불량수량');
			i1.innerText = '<?php echo $ngcount03; ?>';
			i1 = document.getElementById('04월 불량수량');
			i1.innerText = '<?php echo $ngcount04; ?>';
			i1 = document.getElementById('05월 불량수량');
			i1.innerText = '<?php echo $ngcount05; ?>';
			i1 = document.getElementById('06월 불량수량');
			i1.innerText = '<?php echo $ngcount06; ?>';
			i1 = document.getElementById('07월 불량수량');
			i1.innerText = '<?php echo $ngcount07; ?>';
			i1 = document.getElementById('08월 불량수량');
			i1.innerText = '<?php echo $ngcount08; ?>';
			i1 = document.getElementById('09월 불량수량');
			i1.innerText = '<?php echo $ngcount09; ?>';
			i1 = document.getElementById('10월 불량수량');
			i1.innerText = '<?php echo $ngcount10; ?>';
			i1 = document.getElementById('11월 불량수량');
			i1.innerText = '<?php echo $ngcount11; ?>';
			i1 = document.getElementById('12월 불량수량');
			i1.innerText = '<?php echo $ngcount12; ?>';
			i1 = document.getElementById('월평균 불량수량');
			i1.innerText = '<?php echo number_format($aveNgT, 2); ?>';
			i1 = document.getElementById('년간 불량수량');
			i1.innerText = '<?php echo $ngcountT; ?>';

			i1 = document.getElementById('01월 불량률');
			i1.innerText = '<?php $ng01_percent = ($ngcount01 / $totalwork01) * 100;
							echo number_format($ng01_percent, 2); ?>';
			i1 = document.getElementById('02월 불량률');
			i1.innerText = '<?php $ng02_percent = ($ngcount02 / $totalwork02) * 100;
							echo number_format($ng02_percent, 2); ?>';
			i1 = document.getElementById('03월 불량률');
			i1.innerText = '<?php $ng03_percent = ($ngcount03 / $totalwork03) * 100;
							echo number_format($ng03_percent, 2); ?>';
			i1 = document.getElementById('04월 불량률');
			i1.innerText = '<?php $ng04_percent = ($ngcount04 / $totalwork04) * 100;
							echo number_format($ng04_percent, 2); ?>';
			i1 = document.getElementById('05월 불량률');
			i1.innerText = '<?php $ng05_percent = ($ngcount05 / $totalwork05) * 100;
							echo number_format($ng05_percent, 2); ?>';
			i1 = document.getElementById('06월 불량률');
			i1.innerText = '<?php $ng06_percent = ($ngcount06 / $totalwork06) * 100;
							echo number_format($ng06_percent, 2); ?>';
			i1 = document.getElementById('07월 불량률');
			i1.innerText = '<?php $ng07_percent = ($ngcount07 / $totalwork07) * 100;
							echo number_format($ng07_percent, 2); ?>';
			i1 = document.getElementById('08월 불량률');
			i1.innerText = '<?php $ng08_percent = ($ngcount08 / $totalwork08) * 100;
							echo number_format($ng08_percent, 2); ?>';
			i1 = document.getElementById('09월 불량률');
			i1.innerText = '<?php $ng09_percent = ($ngcount09 / $totalwork09) * 100;
							echo number_format($ng09_percent, 2); ?>';
			i1 = document.getElementById('10월 불량률');
			i1.innerText = '<?php $ng10_percent = ($ngcount10 / $totalwork10) * 100;
							echo number_format($ng10_percent, 2); ?>';
			i1 = document.getElementById('11월 불량률');
			i1.innerText = '<?php $ng11_percent = ($ngcount11 / $totalwork11) * 100;
							echo number_format($ng11_percent, 2); ?>';
			i1 = document.getElementById('12월 불량률');
			i1.innerText = '<?php $ng12_percent = ($ngcount12 / $totalwork12) * 100;
							echo number_format($ng12_percent, 2); ?>';
			i1 = document.getElementById('월평균 불량률');
			i1.innerText = '<?php $sumAveNg = ($ng01_percent + $ng02_percent + $ng03_percent + $ng04_percent + $ng05_percent + $ng06_percent + $ng07_percent + $ng08_percent + $ng09_percent + $ng10_percent + $ng11_percent + $ng12_percent) / 12;
							echo number_format($sumAveNg, 2); ?>';
			i1 = document.getElementById('년간 불량률');
			i1.innerText = '<?php $mAveNg = $ngcountT / $yTotal * 100;
							echo number_format($mAveNg, 2); ?>';

			i1 = document.getElementById('01월 LVDT불량');
			i1.innerText = '<?php if ($i_no <= 5) {
								$sql = "select * from result1 where date >= '" . $yDate . "0101' and date <= '" . $yDate . "0131' and index1 ='" . $i_no . "' and conclusion1 =20 order by id";
							} else {
								$sql = "select * from result1 where date >= '" . $yDate . "0101' and date <= '" . $yDate . "0131' and conclusion1 = 20 order by id";
							}
							$res = mysqli_query($conn, $sql);
							for ($spc_total01 = 0; $row = mysqli_fetch_array($res); $spc_total01++) {
							}
							echo number_format($spc_total01, 0); ?>';
			i1 = document.getElementById('02월 LVDT불량');
			i1.innerText = '<?php if ($i_no <= 5) {
								$sql = "select * from result1 where date >= '" . $yDate . "0201' and date <= '" . $yDate . "0231' and index1 ='" . $i_no . "' and conclusion1 =20 order by id";
							} else {
								$sql = "select * from result1 where date >= '" . $yDate . "0201' and date <= '" . $yDate . "0231' and conclusion1 = 20 order by id";
							}
							$res = mysqli_query($conn, $sql);
							for ($spc_total02 = 0; $row = mysqli_fetch_array($res); $spc_total02++) {
							}
							echo number_format($spc_total02, 0); ?>';
			i1 = document.getElementById('03월 LVDT불량');
			i1.innerText = '<?php if ($i_no <= 5) {
								$sql = "select * from result1 where date >= '" . $yDate . "0301' and date <= '" . $yDate . "0331' and index1 ='" . $i_no . "' and conclusion1 =20 order by id";
							} else {
								$sql = "select * from result1 where date >= '" . $yDate . "0301' and date <= '" . $yDate . "0331' and conclusion1 = 20 order by id";
							}
							$res = mysqli_query($conn, $sql);
							for ($spc_total03 = 0; $row = mysqli_fetch_array($res); $spc_total03++) {
							}
							echo number_format($spc_total03, 0); ?>';
			i1 = document.getElementById('04월 LVDT불량');
			i1.innerText = '<?php if ($i_no <= 5) {
								$sql = "select * from result1 where date >= '" . $yDate . "0401' and date <= '" . $yDate . "0431' and index1 ='" . $i_no . "' and conclusion1 =20 order by id";
							} else {
								$sql = "select * from result1 where date >= '" . $yDate . "0401' and date <= '" . $yDate . "0431' and conclusion1 = 20 order by id";
							}
							$res = mysqli_query($conn, $sql);
							for ($spc_total04 = 0; $row = mysqli_fetch_array($res); $spc_total04++) {
							}
							echo number_format($spc_total04, 0); ?>';
			i1 = document.getElementById('05월 LVDT불량');
			i1.innerText = '<?php if ($i_no <= 5) {
								$sql = "select * from result1 where date >= '" . $yDate . "0501' and date <= '" . $yDate . "0531' and index1 ='" . $i_no . "' and conclusion1 =20 order by id";
							} else {
								$sql = "select * from result1 where date >= '" . $yDate . "0501' and date <= '" . $yDate . "0531' and conclusion1 = 20 order by id";
							}
							$res = mysqli_query($conn, $sql);
							for ($spc_total05 = 0; $row = mysqli_fetch_array($res); $spc_total05++) {
							}
							echo number_format($spc_total05, 0); ?>';
			i1 = document.getElementById('06월 LVDT불량');
			i1.innerText = '<?php if ($i_no <= 5) {
								$sql = "select * from result1 where date >= '" . $yDate . "0601' and date <= '" . $yDate . "0631' and index1 ='" . $i_no . "' and conclusion1 =20 order by id";
							} else {
								$sql = "select * from result1 where date >= '" . $yDate . "0601' and date <= '" . $yDate . "0631' and conclusion1 = 20 order by id";
							}
							$res = mysqli_query($conn, $sql);
							for ($spc_total06 = 0; $row = mysqli_fetch_array($res); $spc_total06++) {
							}
							echo number_format($spc_total06, 0); ?>';
			i1 = document.getElementById('07월 LVDT불량');
			i1.innerText = '<?php if ($i_no <= 5) {
								$sql = "select * from result1 where date >= '" . $yDate . "0701' and date <= '" . $yDate . "0731' and index1 ='" . $i_no . "' and conclusion1 =20 order by id";
							} else {
								$sql = "select * from result1 where date >= '" . $yDate . "0701' and date <= '" . $yDate . "0731' and conclusion1 = 20 order by id";
							}
							$res = mysqli_query($conn, $sql);
							for ($spc_total07 = 0; $row = mysqli_fetch_array($res); $spc_total07++) {
							}
							echo number_format($spc_total07, 0); ?>';
			i1 = document.getElementById('08월 LVDT불량');
			i1.innerText = '<?php if ($i_no <= 5) {
								$sql = "select * from result1 where date >= '" . $yDate . "0801' and date <= '" . $yDate . "0831' and index1 ='" . $i_no . "' and conclusion1 =20 order by id";
							} else {
								$sql = "select * from result1 where date >= '" . $yDate . "0801' and date <= '" . $yDate . "0831' and conclusion1 = 20 order by id";
							}
							$res = mysqli_query($conn, $sql);
							for ($spc_total08 = 0; $row = mysqli_fetch_array($res); $spc_total08++) {
							}
							echo number_format($spc_total08, 0); ?>';
			i1 = document.getElementById('09월 LVDT불량');
			i1.innerText = '<?php if ($i_no <= 5) {
								$sql = "select * from result1 where date >= '" . $yDate . "0901' and date <= '" . $yDate . "0931' and index1 ='" . $i_no . "' and conclusion1 =20 order by id";
							} else {
								$sql = "select * from result1 where date >= '" . $yDate . "0901' and date <= '" . $yDate . "0931' and conclusion1 = 20 order by id";
							}
							$res = mysqli_query($conn, $sql);
							for ($spc_total09 = 0; $row = mysqli_fetch_array($res); $spc_total09++) {
							}
							echo number_format($spc_total09, 0); ?>';
			i1 = document.getElementById('10월 LVDT불량');
			i1.innerText = '<?php if ($i_no <= 5) {
								$sql = "select * from result1 where date >= '" . $yDate . "1001' and date <= '" . $yDate . "1031' and index1 ='" . $i_no . "' and conclusion1 =20 order by id";
							} else {
								$sql = "select * from result1 where date >= '" . $yDate . "1001' and date <= '" . $yDate . "1031' and conclusion1 = 20 order by id";
							}
							$res = mysqli_query($conn, $sql);
							for ($spc_total10 = 0; $row = mysqli_fetch_array($res); $spc_total10++) {
							}
							echo number_format($spc_total10, 0); ?>';
			i1 = document.getElementById('11월 LVDT불량');
			i1.innerText = '<?php if ($i_no <= 5) {
								$sql = "select * from result1 where date >= '" . $yDate . "1101' and date <= '" . $yDate . "1131' and index1 ='" . $i_no . "' and conclusion1 =20 order by id";
							} else {
								$sql = "select * from result1 where date >= '" . $yDate . "1101' and date <= '" . $yDate . "1131' and conclusion1 = 20 order by id";
							}
							$res = mysqli_query($conn, $sql);
							for ($spc_total11 = 0; $row = mysqli_fetch_array($res); $spc_total11++) {
							}
							echo number_format($spc_total11, 0); ?>';
			i1 = document.getElementById('12월 LVDT불량');
			i1.innerText = '<?php if ($i_no <= 5) {
								$sql = "select * from result1 where date >= '" . $yDate . "1201' and date <= '" . $yDate . "1231' and index1 ='" . $i_no . "' and conclusion1 =20 order by id";
							} else {
								$sql = "select * from result1 where date >= '" . $yDate . "1201' and date <= '" . $yDate . "1231' and conclusion1 = 20 order by id";
							}
							$res = mysqli_query($conn, $sql);
							for ($spc_total12 = 0; $row = mysqli_fetch_array($res); $spc_total12++) {
							}
							echo number_format($spc_total12, 0); ?>';
			i1 = document.getElementById('월평균 LVDT불량');
			i1.innerText = '<?php $spcYtotal = $spc_total01 + $spc_total02 + $spc_total03 + $spc_total04 + $spc_total05 + $spc_total06 + $spc_total07 + $spc_total08 + $spc_total09 + $spc_total10 + $spc_total11 + $spc_total12;
							$spcAve = $spcYtotal / 12;
							echo number_format($spcAve, 2) ?>';
			i1 = document.getElementById('년간 LVDT불량');
			i1.innerText = '<?php echo $spcYtotal; ?>';

			i1 = document.getElementById('01월 동심불량');
			i1.innerText = '<?php if ($i_no <= 5) {
								$sql = "select * from result1 where date >= '" . $yDate . "0101' and date <= '" . $yDate . "0131' and index1 ='" . $i_no . "' and conclusion1 = 21 order by id";
							} else {
								$sql = "select * from result1 where date >= '" . $yDate . "0101' and date <= '" . $yDate . "0131' and conclusion1 = 21 order by id";
							}
							$res = mysqli_query($conn, $sql);
							for ($shape_ng01 = 0; $row = mysqli_fetch_array($res); $shape_ng01++) {
							}
							echo number_format($shape_ng01, 0); ?>'; //01월
			i1 = document.getElementById('02월 동심불량');
			i1.innerText = '<?php if ($i_no <= 5) {
								$sql = "select * from result1 where date >= '" . $yDate . "0201' and date <= '" . $yDate . "0231' and index1 ='" . $i_no . "' and conclusion1 = 21 order by id";
							} else {
								$sql = "select * from result1 where date >= '" . $yDate . "0201' and date <= '" . $yDate . "0231' and conclusion1 = 21 order by id";
							}
							$res = mysqli_query($conn, $sql);
							for ($shape_ng02 = 0; $row = mysqli_fetch_array($res); $shape_ng02++) {
							}
							echo number_format($shape_ng02, 0); ?>'; //02월
			i1 = document.getElementById('03월 동심불량');
			i1.innerText = '<?php if ($i_no <= 5) {
								$sql = "select * from result1 where date >= '" . $yDate . "0301' and date <= '" . $yDate . "0331' and index1 ='" . $i_no . "' and conclusion1 = 21 order by id";
							} else {
								$sql = "select * from result1 where date >= '" . $yDate . "0301' and date <= '" . $yDate . "0331' and conclusion1 = 21 order by id";
							}
							$res = mysqli_query($conn, $sql);
							for ($shape_ng03 = 0; $row = mysqli_fetch_array($res); $shape_ng03++) {
							}
							echo number_format($shape_ng03, 0); ?>'; //03월
			i1 = document.getElementById('04월 동심불량');
			i1.innerText = '<?php if ($i_no <= 5) {
								$sql = "select * from result1 where date >= '" . $yDate . "0401' and date <= '" . $yDate . "0431' and index1 ='" . $i_no . "' and conclusion1 = 21 order by id";
							} else {
								$sql = "select * from result1 where date >= '" . $yDate . "0401' and date <= '" . $yDate . "0431' and conclusion1 = 21 order by id";
							}
							$res = mysqli_query($conn, $sql);
							for ($shape_ng04 = 0; $row = mysqli_fetch_array($res); $shape_ng04++) {
							}
							echo number_format($shape_ng04, 0); ?>'; //04월
			i1 = document.getElementById('05월 동심불량');
			i1.innerText = '<?php if ($i_no <= 5) {
								$sql = "select * from result1 where date >= '" . $yDate . "0501' and date <= '" . $yDate . "0531' and index1 ='" . $i_no . "' and conclusion1 = 21 order by id";
							} else {
								$sql = "select * from result1 where date >= '" . $yDate . "0501' and date <= '" . $yDate . "0531' and conclusion1 = 21 order by id";
							}
							$res = mysqli_query($conn, $sql);
							for ($shape_ng05 = 0; $row = mysqli_fetch_array($res); $shape_ng05++) {
							}
							echo number_format($shape_ng05, 0); ?>'; //05월
			i1 = document.getElementById('06월 동심불량');
			i1.innerText = '<?php if ($i_no <= 5) {
								$sql = "select * from result1 where date >= '" . $yDate . "0601' and date <= '" . $yDate . "0631' and index1 ='" . $i_no . "' and conclusion1 = 21 order by id";
							} else {
								$sql = "select * from result1 where date >= '" . $yDate . "0601' and date <= '" . $yDate . "0631' and conclusion1 = 21 order by id";
							}
							$res = mysqli_query($conn, $sql);
							for ($shape_ng06 = 0; $row = mysqli_fetch_array($res); $shape_ng06++) {
							}
							echo number_format($shape_ng06, 0); ?>'; //06월
			i1 = document.getElementById('07월 동심불량');
			i1.innerText = '<?php if ($i_no <= 5) {
								$sql = "select * from result1 where date >= '" . $yDate . "0701' and date <= '" . $yDate . "0731' and index1 ='" . $i_no . "' and conclusion1 = 21 order by id";
							} else {
								$sql = "select * from result1 where date >= '" . $yDate . "0701' and date <= '" . $yDate . "0731' and conclusion1 = 21 order by id";
							}
							$res = mysqli_query($conn, $sql);
							for ($shape_ng07 = 0; $row = mysqli_fetch_array($res); $shape_ng07++) {
							}
							echo number_format($shape_ng07, 0); ?>'; //07월
			i1 = document.getElementById('08월 동심불량');
			i1.innerText = '<?php if ($i_no <= 5) {
								$sql = "select * from result1 where date >= '" . $yDate . "0801' and date <= '" . $yDate . "0831' and index1 ='" . $i_no . "' and conclusion1 = 21 order by id";
							} else {
								$sql = "select * from result1 where date >= '" . $yDate . "0801' and date <= '" . $yDate . "0831' and conclusion1 = 21 order by id";
							}
							$res = mysqli_query($conn, $sql);
							for ($shape_ng08 = 0; $row = mysqli_fetch_array($res); $shape_ng08++) {
							}
							echo number_format($shape_ng08, 0); ?>'; //08월
			i1 = document.getElementById('09월 동심불량');
			i1.innerText = '<?php if ($i_no <= 5) {
								$sql = "select * from result1 where date >= '" . $yDate . "0901' and date <= '" . $yDate . "0931' and index1 ='" . $i_no . "' and conclusion1 = 21 order by id";
							} else {
								$sql = "select * from result1 where date >= '" . $yDate . "0901' and date <= '" . $yDate . "0931' and conclusion1 = 21 order by id";
							}
							$res = mysqli_query($conn, $sql);
							for ($shape_ng09 = 0; $row = mysqli_fetch_array($res); $shape_ng09++) {
							}
							echo number_format($shape_ng09, 0); ?>'; //09월
			i1 = document.getElementById('10월 동심불량');
			i1.innerText = '<?php if ($i_no <= 5) {
								$sql = "select * from result1 where date >= '" . $yDate . "1001' and date <= '" . $yDate . "1031' and index1 ='" . $i_no . "' and conclusion1 = 21 order by id";
							} else {
								$sql = "select * from result1 where date >= '" . $yDate . "1001' and date <= '" . $yDate . "1031' and conclusion1 = 21 order by id";
							}
							$res = mysqli_query($conn, $sql);
							for ($shape_ng10 = 0; $row = mysqli_fetch_array($res); $shape_ng10++) {
							}
							echo number_format($shape_ng10, 0); ?>'; //10월
			i1 = document.getElementById('11월 동심불량');
			i1.innerText = '<?php if ($i_no <= 5) {
								$sql = "select * from result1 where date >= '" . $yDate . "1101' and date <= '" . $yDate . "1131' and index1 ='" . $i_no . "' and conclusion1 = 21 order by id";
							} else {
								$sql = "select * from result1 where date >= '" . $yDate . "1101' and date <= '" . $yDate . "1131' and conclusion1 = 21 order by id";
							}
							$res = mysqli_query($conn, $sql);
							for ($shape_ng11 = 0; $row = mysqli_fetch_array($res); $shape_ng11++) {
							}
							echo number_format($shape_ng11, 0); ?>'; //11월
			i1 = document.getElementById('12월 동심불량');
			i1.innerText = '<?php if ($i_no <= 5) {
								$sql = "select * from result1 where date >= '" . $yDate . "1201' and date <= '" . $yDate . "1231' and index1 ='" . $i_no . "' and conclusion1 = 21 order by id";
							} else {
								$sql = "select * from result1 where date >= '" . $yDate . "1201' and date <= '" . $yDate . "1231' and conclusion1 = 21 order by id";
							}
							$res = mysqli_query($conn, $sql);
							for ($shape_ng12 = 0; $row = mysqli_fetch_array($res); $shape_ng12++) {
							}
							echo number_format($shape_ng12, 0); ?>'; //12월
			i1 = document.getElementById('월평균 동심불량');
			i1.innerText = '<?php $shape_ngT = $shape_ng01 + $shape_ng02 + $shape_ng03 + $shape_ng04 + $shape_ng05 + $shape_ng06 + $shape_ng07 + $shape_ng08 + $shape_ng09 + $shape_ng10 + $shape_ng11 + $shape_ng12;
							$shape_ngAve = $shape_ngT / 12;
							echo number_format($shape_ngAve, 2); ?>';
			i1 = document.getElementById('년간 동심불량');
			i1.innerText = '<?php echo $shape_ngT; ?>';

			i1 = document.getElementById('01월 조도불량');
			i1.innerText = '<?php if ($i_no <= 5) {
								$sql = "select * from result1 where date >= '" . $yDate . "0101' and date <= '" . $yDate . "0131' and index1 ='" . $i_no . "' and conclusion1 = 22 order by id";
							} else {
								$sql = "select * from result1 where date >= '" . $yDate . "0101' and date <= '" . $yDate . "0131' and conclusion1 = 22 order by id";
							}
							$res = mysqli_query($conn, $sql);
							for ($light_ng01 = 0; $row = mysqli_fetch_array($res); $light_ng01++) {
							}
							echo number_format($light_ng01, 0); ?>'; //01월
			i1 = document.getElementById('02월 조도불량');
			i1.innerText = '<?php if ($i_no <= 5) {
								$sql = "select * from result1 where date >= '" . $yDate . "0201' and date <= '" . $yDate . "0231' and index1 ='" . $i_no . "' and conclusion1 = 22 order by id";
							} else {
								$sql = "select * from result1 where date >= '" . $yDate . "0201' and date <= '" . $yDate . "0231' and conclusion1 = 22 order by id";
							}
							$res = mysqli_query($conn, $sql);
							for ($light_ng02 = 0; $row = mysqli_fetch_array($res); $light_ng02++) {
							}
							echo number_format($light_ng02, 0); ?>'; //02월
			i1 = document.getElementById('03월 조도불량');
			i1.innerText = '<?php if ($i_no <= 5) {
								$sql = "select * from result1 where date >= '" . $yDate . "0301' and date <= '" . $yDate . "0331' and index1 ='" . $i_no . "' and conclusion1 = 22 order by id";
							} else {
								$sql = "select * from result1 where date >= '" . $yDate . "0301' and date <= '" . $yDate . "0331' and conclusion1 = 22 order by id";
							}
							$res = mysqli_query($conn, $sql);
							for ($light_ng03 = 0; $row = mysqli_fetch_array($res); $light_ng03++) {
							}
							echo number_format($light_ng03, 0); ?>'; //03월
			i1 = document.getElementById('04월 조도불량');
			i1.innerText = '<?php if ($i_no <= 5) {
								$sql = "select * from result1 where date >= '" . $yDate . "0401' and date <= '" . $yDate . "0431' and index1 ='" . $i_no . "' and conclusion1 = 22 order by id";
							} else {
								$sql = "select * from result1 where date >= '" . $yDate . "0401' and date <= '" . $yDate . "0431' and conclusion1 = 22 order by id";
							}
							$res = mysqli_query($conn, $sql);
							for ($light_ng04 = 0; $row = mysqli_fetch_array($res); $light_ng04++) {
							}
							echo number_format($light_ng04, 0); ?>'; //04월
			i1 = document.getElementById('05월 조도불량');
			i1.innerText = '<?php if ($i_no <= 5) {
								$sql = "select * from result1 where date >= '" . $yDate . "0501' and date <= '" . $yDate . "0531' and index1 ='" . $i_no . "' and conclusion1 = 22 order by id";
							} else {
								$sql = "select * from result1 where date >= '" . $yDate . "0501' and date <= '" . $yDate . "0531' and conclusion1 = 22 order by id";
							}
							$res = mysqli_query($conn, $sql);
							for ($light_ng05 = 0; $row = mysqli_fetch_array($res); $light_ng05++) {
							}
							echo number_format($light_ng05, 0); ?>'; //05월
			i1 = document.getElementById('06월 조도불량');
			i1.innerText = '<?php if ($i_no <= 5) {
								$sql = "select * from result1 where date >= '" . $yDate . "0601' and date <= '" . $yDate . "0631' and index1 ='" . $i_no . "' and conclusion1 = 22 order by id";
							} else {
								$sql = "select * from result1 where date >= '" . $yDate . "0601' and date <= '" . $yDate . "0631' and conclusion1 = 22 order by id";
							}
							$res = mysqli_query($conn, $sql);
							for ($light_ng06 = 0; $row = mysqli_fetch_array($res); $light_ng06++) {
							}
							echo number_format($light_ng06, 0); ?>'; //06월
			i1 = document.getElementById('07월 조도불량');
			i1.innerText = '<?php if ($i_no <= 5) {
								$sql = "select * from result1 where date >= '" . $yDate . "0701' and date <= '" . $yDate . "0731' and index1 ='" . $i_no . "' and conclusion1 = 22 order by id";
							} else {
								$sql = "select * from result1 where date >= '" . $yDate . "0701' and date <= '" . $yDate . "0731' and conclusion1 = 22 order by id";
							}
							$res = mysqli_query($conn, $sql);
							for ($light_ng07 = 0; $row = mysqli_fetch_array($res); $light_ng07++) {
							}
							echo number_format($light_ng07, 0); ?>'; //07월
			i1 = document.getElementById('08월 조도불량');
			i1.innerText = '<?php if ($i_no <= 5) {
								$sql = "select * from result1 where date >= '" . $yDate . "0801' and date <= '" . $yDate . "0831' and index1 ='" . $i_no . "' and conclusion1 = 22 order by id";
							} else {
								$sql = "select * from result1 where date >= '" . $yDate . "0801' and date <= '" . $yDate . "0831' and conclusion1 = 22 order by id";
							}
							$res = mysqli_query($conn, $sql);
							for ($light_ng08 = 0; $row = mysqli_fetch_array($res); $light_ng08++) {
							}
							echo number_format($light_ng08, 0); ?>'; //08월
			i1 = document.getElementById('09월 조도불량');
			i1.innerText = '<?php if ($i_no <= 5) {
								$sql = "select * from result1 where date >= '" . $yDate . "0901' and date <= '" . $yDate . "0931' and index1 ='" . $i_no . "' and conclusion1 = 22 order by id";
							} else {
								$sql = "select * from result1 where date >= '" . $yDate . "0901' and date <= '" . $yDate . "0931' and conclusion1 = 22 order by id";
							}
							$res = mysqli_query($conn, $sql);
							for ($light_ng09 = 0; $row = mysqli_fetch_array($res); $light_ng09++) {
							}
							echo number_format($light_ng09, 0); ?>'; //09월
			i1 = document.getElementById('10월 조도불량');
			i1.innerText = '<?php if ($i_no <= 5) {
								$sql = "select * from result1 where date >= '" . $yDate . "1001' and date <= '" . $yDate . "1031' and index1 ='" . $i_no . "' and conclusion1 = 22 order by id";
							} else {
								$sql = "select * from result1 where date >= '" . $yDate . "1001' and date <= '" . $yDate . "1031' and conclusion1 = 22 order by id";
							}
							$res = mysqli_query($conn, $sql);
							for ($light_ng10 = 0; $row = mysqli_fetch_array($res); $light_ng10++) {
							}
							echo number_format($light_ng10, 0); ?>'; //10월
			i1 = document.getElementById('11월 조도불량');
			i1.innerText = '<?php if ($i_no <= 5) {
								$sql = "select * from result1 where date >= '" . $yDate . "1101' and date <= '" . $yDate . "1131' and index1 ='" . $i_no . "' and conclusion1 = 22 order by id";
							} else {
								$sql = "select * from result1 where date >= '" . $yDate . "1101' and date <= '" . $yDate . "1131' and conclusion1 = 22 order by id";
							}
							$res = mysqli_query($conn, $sql);
							for ($light_ng11 = 0; $row = mysqli_fetch_array($res); $light_ng11++) {
							}
							echo number_format($light_ng11, 0); ?>'; //11월
			i1 = document.getElementById('12월 조도불량');
			i1.innerText = '<?php if ($i_no <= 5) {
								$sql = "select * from result1 where date >= '" . $yDate . "1201' and date <= '" . $yDate . "1231' and index1 ='" . $i_no . "' and conclusion1 = 22 order by id";
							} else {
								$sql = "select * from result1 where date >= '" . $yDate . "1201' and date <= '" . $yDate . "1231' and conclusion1 = 22 order by id";
							}
							$res = mysqli_query($conn, $sql);
							for ($light_ng12 = 0; $row = mysqli_fetch_array($res); $light_ng12++) {
							}
							echo number_format($light_ng12, 0); ?>'; //12월
			i1 = document.getElementById('월평균 조도불량');
			i1.innerText = '<?php $light_ngT = $light_ng01 + $light_ng02 + $light_ng03 + $light_ng04 + $light_ng05 + $light_ng06 + $light_ng07 + $light_ng08 + $light_ng09 + $light_ng10 + $light_ng11 + $light_ng12;
							$light_ngAve = $light_ngT / 12;
							echo number_format($light_ngAve, 2); ?>';
			i1 = document.getElementById('년간 조도불량');
			i1.innerText = '<?php echo $light_ngT; ?>';


			// i1 = document.getElementById('01월 BURR수량');
			// i1.innerText = '';
			// i1 = document.getElementById('02월 BURR수량');
			// i1.innerText = '';
			// i1 = document.getElementById('03월 BURR수량');
			// i1.innerText = '';
			// i1 = document.getElementById('04월 BURR수량');
			// i1.innerText = '';
			// i1 = document.getElementById('05월 BURR수량');
			// i1.innerText = '';
			// i1 = document.getElementById('06월 BURR수량');
			// i1.innerText = '';
			// i1 = document.getElementById('07월 BURR수량');
			// i1.innerText = '';
			// i1 = document.getElementById('08월 BURR수량');
			// i1.innerText = '';
			// i1 = document.getElementById('09월 BURR수량');
			// i1.innerText = '';
			// i1 = document.getElementById('10월 BURR수량');
			// i1.innerText = '';
			// i1 = document.getElementById('11월 BURR수량');
			// i1.innerText = '';
			// i1 = document.getElementById('12월 BURR수량');
			// i1.innerText = '';
			// i1 = document.getElementById('월평균 BURR수량');
			// i1.innerText = '';
			// i1 = document.getElementById('년간 BURR수량');
			// i1.innerText = '';

			// i1 = document.getElementById('01월 이물수량');
			// i1.innerText = '';
			// i1 = document.getElementById('02월 이물수량');
			// i1.innerText = '';
			// i1 = document.getElementById('03월 이물수량');
			// i1.innerText = '';
			// i1 = document.getElementById('04월 이물수량');
			// i1.innerText = '';
			// i1 = document.getElementById('05월 이물수량');
			// i1.innerText = '';
			// i1 = document.getElementById('06월 이물수량');
			// i1.innerText = '';
			// i1 = document.getElementById('07월 이물수량');
			// i1.innerText = '';
			// i1 = document.getElementById('08월 이물수량');
			// i1.innerText = '';
			// i1 = document.getElementById('09월 이물수량');
			// i1.innerText = '';
			// i1 = document.getElementById('10월 이물수량');
			// i1.innerText = '';
			// i1 = document.getElementById('11월 이물수량');
			// i1.innerText = '';
			// i1 = document.getElementById('12월 이물수량');
			// i1.innerText = '';
			// i1 = document.getElementById('월평균 이물수량');
			// i1.innerText = '';
			// i1 = document.getElementById('년간 이물수량');
			// i1.innerText = '';

			// i1 = document.getElementById('01월 크랙수량');
			// i1.innerText = '';
			// i1 = document.getElementById('02월 크랙수량');
			// i1.innerText = '';
			// i1 = document.getElementById('03월 크랙수량');
			// i1.innerText = '';
			// i1 = document.getElementById('04월 크랙수량');
			// i1.innerText = '';
			// i1 = document.getElementById('05월 크랙수량');
			// i1.innerText = '';
			// i1 = document.getElementById('06월 크랙수량');
			// i1.innerText = '';
			// i1 = document.getElementById('07월 크랙수량');
			// i1.innerText = '';
			// i1 = document.getElementById('08월 크랙수량');
			// i1.innerText = '';
			// i1 = document.getElementById('09월 크랙수량');
			// i1.innerText = '';
			// i1 = document.getElementById('10월 크랙수량');
			// i1.innerText = '';
			// i1 = document.getElementById('11월 크랙수량');
			// i1.innerText = '';
			// i1 = document.getElementById('12월 크랙수량');
			// i1.innerText = '';
			// i1 = document.getElementById('월평균 크랙수량');
			// i1.innerText = '';
			// i1 = document.getElementById('년간 크랙수량');
			// i1.innerText = '';

			// i1 = document.getElementById('01월 FW수량');
			// i1.innerText = '';
			// i1 = document.getElementById('02월 FW수량');
			// i1.innerText = '';
			// i1 = document.getElementById('03월 FW수량');
			// i1.innerText = '';
			// i1 = document.getElementById('04월 FW수량');
			// i1.innerText = '';
			// i1 = document.getElementById('05월 FW수량');
			// i1.innerText = '';
			// i1 = document.getElementById('06월 FW수량');
			// i1.innerText = '';
			// i1 = document.getElementById('07월 FW수량');
			// i1.innerText = '';
			// i1 = document.getElementById('08월 FW수량');
			// i1.innerText = '';
			// i1 = document.getElementById('09월 FW수량');
			// i1.innerText = '';
			// i1 = document.getElementById('10월 FW수량');
			// i1.innerText = '';
			// i1 = document.getElementById('11월 FW수량');
			// i1.innerText = '';
			// i1 = document.getElementById('12월 FW수량');
			// i1.innerText = '';
			// i1 = document.getElementById('월평균 FW수량');
			// i1.innerText = '';
			// i1 = document.getElementById('년간 FW수량');
			// i1.innerText = '';

			// i1 = document.getElementById('01월 SINK수량');
			// i1.innerText = '';
			// i1 = document.getElementById('02월 SINK수량');
			// i1.innerText = '';
			// i1 = document.getElementById('03월 SINK수량');
			// i1.innerText = '';
			// i1 = document.getElementById('04월 SINK수량');
			// i1.innerText = '';
			// i1 = document.getElementById('05월 SINK수량');
			// i1.innerText = '';
			// i1 = document.getElementById('06월 SINK수량');
			// i1.innerText = '';
			// i1 = document.getElementById('07월 SINK수량');
			// i1.innerText = '';
			// i1 = document.getElementById('08월 SINK수량');
			// i1.innerText = '';
			// i1 = document.getElementById('09월 SINK수량');
			// i1.innerText = '';
			// i1 = document.getElementById('10월 SINK수량');
			// i1.innerText = '';
			// i1 = document.getElementById('11월 SINK수량');
			// i1.innerText = '';
			// i1 = document.getElementById('12월 SINK수량');
			// i1.innerText = '';
			// i1 = document.getElementById('월평균 SINK수량');
			// i1.innerText = '';
			// i1 = document.getElementById('년간 SINK수량');
			// i1.innerText = '';

			// i1 = document.getElementById('01월 휨수량');
			// i1.innerText = '';
			// i1 = document.getElementById('02월 휨수량');
			// i1.innerText = '';
			// i1 = document.getElementById('03월 휨수량');
			// i1.innerText = '';
			// i1 = document.getElementById('04월 휨수량');
			// i1.innerText = '';
			// i1 = document.getElementById('05월 휨수량');
			// i1.innerText = '';
			// i1 = document.getElementById('06월 휨수량');
			// i1.innerText = '';
			// i1 = document.getElementById('07월 휨수량');
			// i1.innerText = '';
			// i1 = document.getElementById('08월 휨수량');
			// i1.innerText = '';
			// i1 = document.getElementById('09월 휨수량');
			// i1.innerText = '';
			// i1 = document.getElementById('10월 휨수량');
			// i1.innerText = '';
			// i1 = document.getElementById('11월 휨수량');
			// i1.innerText = '';
			// i1 = document.getElementById('12월 휨수량');
			// i1.innerText = '';
			// i1 = document.getElementById('월평균 휨수량');
			// i1.innerText = '';
			// i1 = document.getElementById('년간 휨수량');
			// i1.innerText = '';

			// i1 = document.getElementById('01월 웰드수량');
			// i1.innerText = '';
			// i1 = document.getElementById('02월 웰드수량');
			// i1.innerText = '';
			// i1 = document.getElementById('03월 웰드수량');
			// i1.innerText = '';
			// i1 = document.getElementById('04월 웰드수량');
			// i1.innerText = '';
			// i1 = document.getElementById('05월 웰드수량');
			// i1.innerText = '';
			// i1 = document.getElementById('06월 웰드수량');
			// i1.innerText = '';
			// i1 = document.getElementById('07월 웰드수량');
			// i1.innerText = '';
			// i1 = document.getElementById('08월 웰드수량');
			// i1.innerText = '';
			// i1 = document.getElementById('09월 웰드수량');
			// i1.innerText = '';
			// i1 = document.getElementById('10월 웰드수량');
			// i1.innerText = '';
			// i1 = document.getElementById('11월 웰드수량');
			// i1.innerText = '';
			// i1 = document.getElementById('12월 웰드수량');
			// i1.innerText = '';
			// i1 = document.getElementById('월평균 웰드수량');
			// i1.innerText = '';
			// i1 = document.getElementById('년간 웰드수량');
			// i1.innerText = '';

			// i1 = document.getElementById('01월 기타수량');
			// i1.innerText = '';
			// i1 = document.getElementById('02월 기타수량');
			// i1.innerText = '';
			// i1 = document.getElementById('03월 기타수량');
			// i1.innerText = '';
			// i1 = document.getElementById('04월 기타수량');
			// i1.innerText = '';
			// i1 = document.getElementById('05월 기타수량');
			// i1.innerText = '';
			// i1 = document.getElementById('06월 기타수량');
			// i1.innerText = '';
			// i1 = document.getElementById('07월 기타수량');
			// i1.innerText = '';
			// i1 = document.getElementById('08월 기타수량');
			// i1.innerText = '';
			// i1 = document.getElementById('09월 기타수량');
			// i1.innerText = '';
			// i1 = document.getElementById('10월 기타수량');
			// i1.innerText = '';
			// i1 = document.getElementById('11월 기타수량');
			// i1.innerText = '';
			// i1 = document.getElementById('12월 기타수량');
			// i1.innerText = '';
			// i1 = document.getElementById('월평균 기타수량');
			// i1.innerText = '';
			// i1 = document.getElementById('년간 기타수량');
			// i1.innerText = '';
		</script>
	</table>
</body>

</html>