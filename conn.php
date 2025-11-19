<?php
// 第一步
$conn = mysqli_connect("localhost","root","root","member3");
if(!$conn){
    echo "Error!";
    exit;
}
// 第二步
mysqli_query($conn,"set names utf8");