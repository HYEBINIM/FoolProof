<?php
session_start();
$conn = new mysqli("localhost", "server", "00000000", "dataset");

// header('Refresh: 1');

$sql001 = "select * from result1 where mc_num='001'  order by id desc limit 1";
$res001 = mysqli_query($conn, $sql001);
$row001 = mysqli_fetch_array($res001);


$_SESSION['data1'] = $row001['data1'];
echo $_SESSION['data1'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>
    <script type="text/javascript">
        $.ajax({

            type: 'POST',

            url: '/index.html',

            data: {
                name: '홍길동',
                phone: '010-1234-1234'
            },

            error: function() {

                alert('통신실패');

            },

            success: function(result) {

                alert(result);

            }

        });
    </script>
</head>

<body>
</body>

</html>