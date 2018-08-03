<?php
    // echo "数据库连接页面";
    $server="127.0.0.1";//主机
    $db_username="zjwdb_6244232";//你的数据库用户名
    $db_password="Ananke0211";//你的数据库密码

    $con=mysqli_connect($server,$db_username,$db_password,'zjwdb_6244232');//链接数据库
    // echo mysqli_get_host_info($con).PHP_EOL;
    if(!$con){
        die("can't connect".mysqli_error());//如果链接失败输出错误
        // echo "数据库连接失败";
    }
    else {
        // echo mysqli_get_host_info($con).PHP_EOL;
        // echo "数据库连接成功";
    }
    // 
    //mysqli_select_db('spiders', $con);//选择数据库（我的是test）
    
?>