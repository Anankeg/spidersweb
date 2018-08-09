<?php
function my_sqli()
{
    // echo "数据库连接页面";
    $server = "127.0.0.1"; //主机
    $db_username = "zjwdb_6244232"; //你的数据库用户名
    $db_password = "Ananke0211"; //你的数据库密码

    $con = mysqli_connect($server, $db_username, $db_password, 'zjwdb_6244232'); //链接数据库
    // echo mysqli_get_host_info($con).PHP_EOL;
    if (!$con) {
        die("can't connect" . mysqli_error()); //如果链接失败输出错误
        // echo "数据库连接失败";
    } else {
        return $con;
        // echo mysqli_get_host_info($con).PHP_EOL;
        // echo "数据库连接成功";
    }
    //
    //mysqli_select_db('spiders', $con);//选择数据库（我的是test）
}

//方法：插入元组
function insert($name, $password, $phone, $email, $token, $token_exptime, $regtime)
{
    $con = my_sqli();
    mysqli_query($con, "set names utf8"); //utf8 设为对应的编码
    $sql = "insert into account(id,username,password,phone,email,`token`,`token_exptime`,`regtime`) values (null,'$name','$password','$phone','$email','$token','$token_exptime','$regtime');"; //向数据库插入表单传来的值的sql
    // echo $addaccount;
    $result = mysqli_query($con, $sql); //执行sql
    return $result;
}

//方法：查询数据库行数
function getrows($tablename)
{
    $con = my_sqli();
    mysqli_query($con, "set names utf8"); //utf8 设为对应的编码
    $sql = "select * from goods;";
    $res = mysqli_query($con, $sql);
    $rows = mysqli_num_rows($res); //获取行数
    if ($rows) {
        return $rows;
    } else {
        return 0;
    }

}

//查询数据库列数
function getcolums($tablename)
{
    $con = my_sqli();
    mysqli_query($con, "set names utf8"); //utf8 设为对应的编码
    $sql = "select * from '.$tablename.';";
    $res = mysqli_query($con, $sql);
    $colums = mysqli_num_fields($res); //获取行数
    if ($colums) {
        return $colums;
    } else {
        return 0;
    }

}

//查询数据库中从$start开始的$limit条元组
function getdata($tablename,$condition,$start,$limit)
{
    $con = my_sqli();
    mysqli_query($con, "set names utf8"); //utf8 设为对应的编码
    $sql = "select id,name,`desc`,price from goods order by '.$condition.' desc limit $start,$limit;";
    $res = mysqli_query($con,$sql);
    return $res;
}

//从数据库中查询某列
function getid($tablename)
{
    $con = my_sqli();
    mysqli_query($con, "set names utf8"); //utf8 设为对应的编码
    $sql = "select id from '.$tablename.';";
    $res = mysqli_query($con, $sql);
    if ($res) {
        return $res;
    } else {
        return "id empty";
    }

}