<!DOCTYPE html>
<html>
<body>

<?php
include 'config.php';
//    echo config.php;
//    连接数据库
    $con = mysqli_connect(HOST,USER,PSD,DATABASE);

    if (mysqli_connect_errno($con))
    {
        echo "连接 MySQL 失败: " . mysqli_connect_error();
    }
//      选择数据库
    mysqli_select_db(mysqli_connect(),"DATABASE");
//      书写sql命令
    $sql = "select * from `thistorydata`";
//      返回结果集
    $rst = mysqli_query($con,$sql);
    if (!$rst) {
        printf("Error: %s\n", mysqli_error($con));
        exit();
    }
    while($row = mysqli_fetch_assoc($rst)){
        echo '<pre>';
        print_r($row) ;
        echo '<pre>';
    }


?>

</body>
</html>
