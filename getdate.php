<?php
session_start();
$conn = new mysqli("localhost", "server", "00000000", "dataset");

$date = array();

for ($count = 1; $count <= 19; $count++) {
    //가장 최근 검사값
    $sql = "select * from result1 where mc_num='" . sprintf('%03d', $count) . "'  order by id desc limit 1";
    $res = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($res);

    ${'date' . $count} = $row['date'];
    ${'time' . $count} = $row['time'];

    array_push($date, ${'date' . $count});
    array_push($date, ${'time' . $count});
}

echo json_encode($date);