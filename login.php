<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>会员注册Beta</title>
    <style>
        .main{
            /* 设置边框和居中 */
            border: 1px solid #0000FF;
            margin: 0 auto;
            width: 80%;
            max-width:1000px;
            text-align: center;
            padding: 1.5rem 1rem;
            box-shadow: 0 6px 18px rgba(16,24,40,0.06);
            border-radius:8px;
        }
        .red{
            color: red;
        }
    </style>
</head>
<body>
<div class="main">
    <?php
    include 'nav.php';
    ?>
    <form action="postLogin.php" method="post" onsubmit="return check()">
        <table border="1" align="center" style="width: 90%;border-collapse: collapse;max-width: 500px;" cellpadding="10">
            <tr>
                <td align="right">用户名</td>
                <td align="left">
                    <label>
                        <input style="padding: 5px" name="username" placeholder="请输入用户名"><span class="red">*</span>
                    </label>
                </td>
            </tr>
            <tr>
                <td align="right">密码</td>
                <td align="left">
                    <label>
                        <input style="padding: 5px" type="password" name="pw" placeholder="请用数字和字母构成"><span class="red">*</span>
                    </label>
                </td>
            </tr>

            <tr>
                <td align="right">
                    <input style="padding: 5px" type="submit">
                </td>
                <td align="left">
                    <input style="padding: 5px" type="reset">
                </td>
            </tr>
        </table>
    </form>
</div>
<script>
    function check() {
        let username = document.getElementsByName('username')[0].value.trim();
        let usernameReg = /^[a-zA-Z0-9]{3,10}$/;
        if (!usernameReg.test(username)) {
            alert("用户名只能是由大小写字母、数字构成，且长度为3-10");
            return false;
        }
        let pw = document.getElementsByName('pw')[0].value.trim();
        let pwReg = /^[a-zA-Z0-9_\-*]{6,10}$/;
        if (!pwReg.test(pw)) {
            alert("密码只能是由大小写字母、数字、下划线、-和*构成，且长度为6-10");
            return false;
        }
    }
</script>
</body>
</html>

