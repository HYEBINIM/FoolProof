<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    session_start();
    $conn = new mysqli("localhost", "server", "00000000", "dataset");
    $sql = "update theme set theme = '" . $_POST['theme'] . "' where id = '1'";
    $res = mysqli_query($conn, $sql);

    $sql00 = "select * from theme where id = '1'";
    $res00 = mysqli_query($conn, $sql00);
    $row00 = mysqli_fetch_array($res00);

    if($row00['theme'] == null){
        $theme = 1;
    }
    ?>
    <script>
        alert('테마<?php echo $theme; ?>로 변경되었습니다.');
        document.location.href = '/page/theme.html';
    </script>
</body>

</html>