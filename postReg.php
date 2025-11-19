<?php
header("Content-type: text/html; charset=utf-8");
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
$rpw = trim($_POST['rpw']);
if($pw !== $rpw) {
    echo "<script>alert('（来自后端）重复密码必须和密码一致！');history.back();</script>";
    exit;
}
$email = trim($_POST['email']);
if($email){
    $emailReg = "/^[a-zA-Z0-9_\-]+@([a-zA-Z0-9]+\.)+(com|cn|net|org)$/";
    if(!preg_match($emailReg,$email)){
      echo "<script>alert('（来自后端）邮箱格式不对！');history.back();</script>";
     exit;
    }
}
$sex = $_POST['sex'];
$fav = $_POST['fav'];
/*if($fav){
    $fav = implode("，",$fav);
}
if(!strlen($username)){
    echo "<script>alert('用户名必须填写！');history.back();</script>";
    exit;
}
if(!strlen($pw)){
    echo "<script>alert('密码必须填写！');history.back();</script>";
    exit;
}
if($pw !== $rpw){
    echo "<script>alert('重复密码必须和密码一致！');history.back();</script>";
    exit;
}*/
$pw = md5($pw);
$conn = mysqli_connect("localhost","root","root","member3");
include 'conn.php';

// 判断用户名是否被占用
$sql = "select * from userinfo where username = '$username'";
$result = mysqli_query($conn,$sql);
// 判断$result这个结果集里是否有记录
if(mysqli_num_rows($result)){
    echo "此用户名已被占用";
    exit;
}
// 第三步
$sql = "insert into userinfo (username, pw, email, sex, fav) values ('$username','$pw','$email','$sex','$fav')";
// 第四步
$result = mysqli_query($conn,$sql);
// 调试
echo $sql . "<br>";
echo mysqli_error($conn);
// 给出反馈
if($result){
    echo "Insert Data Successful!";
}
else{
    echo "Insert Data Error!";
}