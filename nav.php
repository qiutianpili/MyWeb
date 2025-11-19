<style>
    h1,h2{
        margin: 50px 0;
    }
    h1{
        font-size: 2rem;
        color: #222;
        /* 文字阴影：水平偏移 垂直偏移 模糊半径 颜色 */
        text-shadow: 2px 2px 4px rgba(0,0,0,0.4);
    }
    /* 使 h2 的链接一行显示 */
    .main h2{
        display: flex;
        justify-content: center;
        align-items: flex-start;
        gap: 1.25rem; /* 链接之间的水平间距 */
        flex-wrap: wrap; /* 小屏幕允许换行 */
        padding: 0;
        margin: 15px 0;
        list-style: none;
    }

    .main h2 a{
        display: flex;
        flex-direction: column; /* 中文在上，英文在下 */
        align-items: center;
        justify-content: center;
        gap: 0.25rem;
        margin: 0; /* 使用 gap 控制间距，不额外加右边距 */
        color: blue;
        text-decoration: none;
        /* 为导航链接添加更细的文字阴影 */
        text-shadow: 1px 1px 2px rgba(0,0,0,0.25);
    }
    .main h2 a .en{
        display: block;
        font-size: 0.7rem;
        color: #6b7280;
        margin-top: 4px;
    }
    .main h2 a:last-child{
        margin-right: 0;
    }
    .main h2 a:hover{
        color:brown;
    }
    .nav{
        text-align: center;
        color: brown;
        font-weight: 600;
        margin-top: 6px;
        margin-bottom: 18px;
    }
    .current{
        color:brown;
        text-decoration: underline;
    }
</style>
<h1>会员注册管理系统</h1>
<h2>
    <?php
    $navID = $_GET['navID'] ?? 1;
    ?>
    <a href="index.php?navID=1" <?php if($navID == 1){echo 'class="current"';} ?>>回到首页</a>
    <a href="reg.php?navID=2" <?php if($navID == 2){echo 'class="current"';} ?>>会员注册</a>
    <a href="login.php?navID=3" <?php if($navID == 3){echo 'class="current"';} ?>>会员登录</a>
    <a href="#">资料修改</a>
    <a href="#">后台管理</a>
</h2>
<?php
echo '<div class="nav">当前栏目：' . ($navID == 1 ? '首页' : ($navID == 2 ? '会员注册' : ($navID == 3 ? '会员登录' : '首页'))) . '</div>';
?>