<?php
$host = 'localhost';
$user = 'root';
$pass = 'root';
$db   = 'member3';

// 尝试连接
$conn = mysqli_connect($host, $user, $pass, $db);

// 检查连接是否成功
if ($conn) {
    echo "<h2>✅ 数据库连接成功！</h2>";
    echo "已连接到数据库: <strong>$db</strong>";
} else {
    echo "<h2>❌ 数据库连接失败！</h2>";
    echo "错误信息: " . mysqli_connect_error();
}

