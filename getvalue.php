<?php
session_start();
$conn = new mysqli("localhost", "server", "00000000", "dataset");

$data = array();

for ($count = 1; $count <= 19; $count++) {
    //가장 최근 검사값
    $sql = "select * from result1 where mc_num='" . sprintf('%03d', $count) . "'  order by id desc limit 1";
    $res = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($res);

    //분해능
    $sql01 = "select * from cr1 where id='" . $count . "'";
    $res01 = mysqli_query($conn, $sql01);
    $row01 = mysqli_fetch_array($res01);

    //최소값 최대값
    $sql02 = "select * from dr1 where id='" . $count . "'";
    $res02 = mysqli_query($conn, $sql02);
    $row02 = mysqli_fetch_array($res02);

    //편차
    $sql08 = "select * from er1 where id='" . $count . "'";
    $res08 = mysqli_query($conn, $sql08);
    $row08 = mysqli_fetch_array($res08);

    $division1 = $row01['a0'];
    $division2 = $row01['a1'];
    $division3 = $row01['a2'];
    $division4 = $row01['a3'];
    $division5 = $row01['a4'];
    $division6 = $row01['a5'];
    $division7 = $row01['a6'];
    $division8 = $row01['a7'];
    $division9 = $row01['a8'];

    $diff_value1 = $row08['a0'];
    $diff_value2 = $row08['a1'];
    $diff_value3 = $row08['a2'];
    $diff_value4 = $row08['a3'];
    $diff_value5 = $row08['a4'];
    $diff_value6 = $row08['a5'];
    $diff_value7 = $row08['a6'];
    $diff_value8 = $row08['a7'];
    $diff_value9 = $row08['a8'];

    $min1 = $row02['a0'];
    $min2 = $row02['a2'];
    $min3 = $row02['a4'];
    $min4 = $row02['a6'];
    $min5 = $row02['a8'];
    $min6 = $row02['a10'];
    $min7 = $row02['a12'];
    $min8 = $row02['a14'];
    $min9 = $row02['a16'];

    $max1 = $row02['a1'];
    $max2 = $row02['a3'];
    $max3 = $row02['a5'];
    $max4 = $row02['a7'];
    $max5 = $row02['a9'];
    $max6 = $row02['a11'];
    $max7 = $row02['a13'];
    $max8 = $row02['a15'];
    $max9 = $row02['a17'];

    //회전금형호기
    if ($count == '11' || $count == '12' || $count == '13' || $count == '14' || $count == '15') {
        $data1 = $row['data1']; //고정
        $data2 = $row['data2']; //이동
        $data3 = $row['data3']; //회전
        $data4 = $row['data7']; //호퍼
        $data5 = $row['data4']; //냉인
        $data6 = $row['data5']; //냉아
        $data7 = $row['data6']; //온인
        $data8 = ""; //온아
        $data9 = $row['data8']; //작동

        ${'res' . $count . '_1'} = number_format((($data1 / $division1) + $diff_value1), 2);
        ${'res' . $count . '_2'} = number_format((($data2 / $division2) + $diff_value2), 2);
        ${'res' . $count . '_3'} = number_format((($data3 / $division3) + $diff_value3), 2);
        ${'res' . $count . '_4'} = number_format((($data4 / $division4) + $diff_value4), 2);
        ${'res' . $count . '_5'} = number_format((($data5 / $division5) + $diff_value5), 2);
        ${'res' . $count . '_6'} = number_format((($data6 / $division6) + $diff_value6), 2);
        ${'res' . $count . '_7'} = number_format((($data7 / $division7) + $diff_value7), 2);
        ${'res' . $count . '_8'} = number_format((($data7 / $division8) + $diff_value8), 2); //온아
        ${'res' . $count . '_9'} = number_format((($data9 / $division9) + $diff_value9), 2);


        if ($data1 == null || $data1 == '-1' || $data1 == "") {
            ${'res' . $count . '_1'} = "ㅡ";
        }
        if ($data2 == null || $data2 == '-1' || $data2 == "") {
            ${'res' . $count . '_2'} = "ㅡ";
        }
        if ($data3 == null || $data3 == '-1' || $data3 == "") {
            ${'res' . $count . '_3'} = "ㅡ";
        }
        if ($data4 == null || $data4 == '-1' || $data4 == "") {
            ${'res' . $count . '_4'} = "ㅡ";
        }
        if ($data5 == null || $data5 == '-1' || $data5 == "") {
            ${'res' . $count . '_5'} = "ㅡ";
        }
        if ($data6 == null || $data6 == '-1' || $data6 == "") {
            ${'res' . $count . '_6'} = "ㅡ";
        }
        if ($data7 == null || $data7 == '-1' || $data7 == "") {
            ${'res' . $count . '_7'} = "ㅡ";
        }
        if ($data7 == null || $data7 == '-1' || $data7 == "") {
            ${'res' . $count . '_8'} = "ㅡ";
        }
        if ($data9 == null || $data9 == '-1' || $data9 == "") {
            ${'res' . $count . '_9'} = "ㅡ";
        }

        //미리보기
        // echo $count . "호기";
        // echo "<br>";
        // echo "<br>";
        // echo ${'res' . $count . '_1'};
        // echo "<br>";
        // echo ${'res' . $count . '_2'};
        // echo "<br>";
        // echo ${'res' . $count . '_3'};
        // echo "<br>";
        // echo ${'res' . $count . '_4'};
        // echo "<br>";
        // echo ${'res' . $count . '_5'};
        // echo "<br>";
        // echo ${'res' . $count . '_6'};
        // echo "<br>";
        // echo ${'res' . $count . '_7'};
        // echo "<br>";
        // echo ${'res' . $count . '_8'};
        // echo "<br>";
        // echo ${'res' . $count . '_9'};
        // echo "<br>";
        // echo "========";
        // echo "<br>";
        array_push($data, ${'res' . $count . '_1'});
        array_push($data, ${'res' . $count . '_2'});
        array_push($data, ${'res' . $count . '_3'});
        array_push($data, ${'res' . $count . '_4'});
        array_push($data, ${'res' . $count . '_5'});
        array_push($data, ${'res' . $count . '_6'});
        array_push($data, ${'res' . $count . '_7'});
        array_push($data, ${'res' . $count . '_8'});
        array_push($data, ${'res' . $count . '_9'});
    } else {
        $data1 = $row['data1']; //고정
        $data2 = $row['data2']; //이동
        $data3 = ""; //회전
        $data4 = $row['data7']; //호퍼
        $data5 = $row['data3']; //냉인
        $data6 = $row['data4']; //냉아
        $data7 = $row['data5']; //온인
        $data8 = $row['data6']; //온아
        $data9 = $row['data8']; //작동유

        ${'res' . $count . '_1'} = number_format((($data1 / $division1) + $diff_value1), 2);
        ${'res' . $count . '_2'} = number_format((($data2 / $division2) + $diff_value2), 2);
        ${'res' . $count . '_3'} = "ㅡ"; //회전
        ${'res' . $count . '_4'} = number_format((($data4 / $division4) + $diff_value4), 2);
        ${'res' . $count . '_5'} = number_format((($data5 / $division5) + $diff_value5), 2);
        ${'res' . $count . '_6'} = number_format((($data6 / $division6) + $diff_value6), 2);
        ${'res' . $count . '_7'} = number_format((($data7 / $division7) + $diff_value7), 2);
        ${'res' . $count . '_8'} = number_format((($data8 / $division8) + $diff_value8), 2);
        ${'res' . $count . '_9'} = number_format((($data9 / $division9) + $diff_value9), 2);

        if ($data1 == null || $data1 == '-1' || $data1 == "") {
            ${'res' . $count . '_1'} = "ㅡ";
        }
        if ($data2 == null || $data2 == '-1' || $data2 == "") {
            ${'res' . $count . '_2'} = "ㅡ";
        }
        if ($data3 == null || $data3 == '-1' || $data3 == "") {
            ${'res' . $count . '_3'} = "ㅡ";
        }
        if ($data4 == null || $data4 == '-1' || $data4 == "") {
            ${'res' . $count . '_4'} = "ㅡ";
        }
        if ($data5 == null || $data5 == '-1' || $data5 == "") {
            ${'res' . $count . '_5'} = "ㅡ";
        }
        if ($data6 == null || $data6 == '-1' || $data6 == "") {
            ${'res' . $count . '_6'} = "ㅡ";
        }
        if ($data7 == null || $data7 == '-1' || $data7 == "") {
            ${'res' . $count . '_7'} = "ㅡ";
        }
        if ($data8 == null || $data8 == '-1' || $data8 == "") {
            ${'res' . $count . '_8'} = "ㅡ";
        }
        if ($data9 == null || $data9 == '-1' || $data9 == "") {
            ${'res' . $count . '_9'} = "ㅡ";
        }

        //미리보기
        // echo $count . "호기";
        // echo "<br>";
        // echo ${'res' . $count . '_1'};
        // echo "<br>";
        // echo ${'res' . $count . '_2'};
        // echo "<br>";
        // echo ${'res' . $count . '_3'};
        // echo "<br>";
        // echo ${'res' . $count . '_4'};
        // echo "<br>";
        // echo ${'res' . $count . '_5'};
        // echo "<br>";
        // echo ${'res' . $count . '_6'};
        // echo "<br>";
        // echo ${'res' . $count . '_7'};
        // echo "<br>";
        // echo ${'res' . $count . '_8'};
        // echo "<br>";
        // echo ${'res' . $count . '_9'};
        // echo "<br>";
        // echo "===============";
        // echo "<br>";
        array_push($data, ${'res' . $count . '_1'});
        array_push($data, ${'res' . $count . '_2'});
        array_push($data, ${'res' . $count . '_3'});
        array_push($data, ${'res' . $count . '_4'});
        array_push($data, ${'res' . $count . '_5'});
        array_push($data, ${'res' . $count . '_6'});
        array_push($data, ${'res' . $count . '_7'});
        array_push($data, ${'res' . $count . '_8'});
        array_push($data, ${'res' . $count . '_9'});
    }

    for ($color = 1; $color <= 9; $color++) {
        //데이터 없음(회색)
        if (${'res' . $count . '_' . $color} == "ㅡ") {
            array_push($data, 'grey');
        }
        //최소(파랑)
        else if (${'res' . $count . '_' . $color} < ${'min' . $color}) {
            array_push($data, '#3867D6');
        }
        //적정(초록)
        else if (${'res' . $count . '_' . $color} >= ${'min' . $color} && ${'res' . $count . '_' . $color} <= ${'max' . $color}) {
            array_push($data, '#20BF6B');
        }
        //최대(빨강)
        else if (${'res' . $count . '_' . $color} > ${'max' . $color}) {
            array_push($data, '#F03434');
        }
        //에러(노랑)
        else {
            array_push($data, 'yellow');
        }
    }
}

echo json_encode($data);

//코멘트
//한눈에 보이므로 호기 상태를 볼 필요가 없다고 판단함
//검사시간을 통해 현재시간과 비교해 검사 상태만 표시해주면 될듯