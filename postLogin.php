<?php
$username = trim($_POST['username']);
$usernameReg = "/^[a-zA-Z0-9]{3,10}$/";
if(!preg_match($usernameReg,$username)) {
    echo "<script>alert('（来自后端）用户名只能是由大小写字母、数字构成，且长度为3-10！');history.back();</script>";
    exit;
}
$pw = trim($_POST['pw']);
$pwReg = "/^[a-zA-Z0-9_\-*]{6,10}$/";
if(!preg_match($pwReg,$pw)) {
    echo "<script>alert('（来自后端）密码只能是由大小写字母、数字、下划线、-和*构成，且长度为6-10');history.back();</script>";
    exit;
}
$pw = md5($pw);
$conn = mysqli_connect("localhost","root","root","member3");
include 'conn.php';
$sql = "select * from userinfo where username = '$username' and pw = '$pw'";
$result = mysqli_query($conn,$sql);
if(mysqli_num_rows($result)){
    echo "<script>alert('登录成功！');history.back();</script>";
}
else{
    echo "<script>alert('用户名或密码错误！');history.back();</script>)";
}
