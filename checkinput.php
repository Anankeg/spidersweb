<?php
//  include_once "connect.php";
//方法：判断是否为空
function checkEmpty($username, $password, $verifycode, $url)
{
    if ($username == null || $password == null) {
        echo '<html><head><Script Language="JavaScript">alert("用户名或密码为空");</Script></head></html>' . "<meta http-equiv=\"refresh\" content=\"0;url='$url'\">";
    } else {
        if ($verifycode == null) {
            echo '<html><head><Script Language="JavaScript">alert("验证码为空");</Script></head></html>' . "<meta http-equiv=\"refresh\" content=\"0;url='$url'\">";
        } else {
            return true;
        }
    }
}

//注册页面判空
function checkregEmpty($username, $password, $phone, $email, $verifycode, $url)
{
    if ($username == null || $password == null) {
        echo '<html><head><Script Language="JavaScript">alert("用户名或密码为空");</Script></head></html>' . "<meta http-equiv=\"refresh\" content=\"0;url='$url'\">";
    }else {
        if($phone == null||$email==null){
        echo '<html><head><Script Language="JavaScript">alert("手机号或邮箱为空");</Script></head></html>' . "<meta http-equiv=\"refresh\" content=\"0;url='$url'\">";            
        }else{
            if ($verifycode == null) {
            echo '<html><head><Script Language="JavaScript">alert("验证码为空");</Script></head></html>' . "<meta http-equiv=\"refresh\" content=\"0;url='$url'\">";
        } else {
            return true;
        }
        }
        
    }
}

//方法：检查验证码是否正确
function checkVerifycode($verifycode, $code, $url)
{
    if ($verifycode == $code) {
        return true;
    } else {
      //  echo "验证码：".$code;
        echo '<html><head><Script Language="JavaScript">alert("验证码错误");</Script></head></html>' . "<meta http-equiv=\"refresh\" content=\"0;url='$url'\">";
    }
}

//方法：查询用户是否在数据库中
function checkUser($username, $password, $url)
{

    // $conn = new Mysql();
    $con = my_sqli();
    $sql = "select * from account where phone='$username' and password='$password'";
    $result = mysqli_query($con, $sql);
    $rows = mysqli_fetch_array($result, MYSQLI_ASSOC); //返回一个数值
    if ($rows) {
        return $rows;
    } else {
        echo '<html><head><Script Language="JavaScript">alert("用户不存在");</Script></head></html>' . "<meta http-equiv=\"refresh\" content=\"0;url='$url'\">";
    }
    mysqli_close(); //关闭数据库
}

//方法：注册查询用户是否存在
function checkregUser($username, $password, $url)
{

    // $conn = new Mysql();
    $con = my_sqli();
    $sql = "select * from account where phone='$username' and password='$password'";
    $result = mysqli_query($con, $sql);
    $rows = mysqli_fetch_array($result, MYSQLI_ASSOC); //返回一个数值
    if ($rows) {
        echo '<html><head><Script Language="JavaScript">alert("用户已存在");</Script></head></html>' . "<meta http-equiv=\"refresh\" content=\"0;url='$url'\">";
    } else {
        return true;
    }
    mysqli_close(); //关闭数据库
}

//方法：手机格式验证
function checkPhoneNum($phonenumber, $url)
{
    $preg = "/^1[34578]{1}\d{9}$/";
    if (preg_match($preg, $phonenumber)) {
        return true; //验证通过
    } else {
        echo '<html><head><Script Language="JavaScript">alert("手机号码格式有误");</Script></head></html>' . "<meta http-equiv=\"refresh\" content=\"0;url='$url'\">"; //手机号码格式不对
    }
}

//方法：邮箱格式验证
function checkEmail($email, $url)
{
    $preg = '/^(\w{1,25})@(\w{1,16})(\.(\w{1,4})){1,3}$/';
    if (preg_match($preg, $email)) {
        return true;
    } else {
        echo '<html><head><Script Language="JavaScript">alert("邮箱格式有误");</Script></head></html>' . "<meta http-equiv=\"refresh\" content=\"0;url='$url'\">";
    }
}

//方法：邮箱激活验证
function checkEmailstatus($phone, $password, $url)
{
    // $conn = new Mysql();
    $con = my_sqli();
    $sql = "select regstatus from account where phone='$phone' and password='$password';";
    $result = mysqli_query($con, $sql);
    $rows = mysqli_fetch_array($result); //返回一个数值
    echo $rows['regstatus'];
    if ($rows['regstatus'] == '1') {
        return true;
    } else {
        echo $rows['regstatus'];
        echo '<html><head><Script Language="JavaScript">alert("邮箱未激活");</Script></head></html>' . "<meta http-equiv=\"refresh\" content=\"0;url='$url'\">";
    }
    mysqli_close(); //关闭数据库
}

//方法：phone未注册

