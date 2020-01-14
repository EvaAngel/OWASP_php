<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<?php include 'head.php' ?>
<br><br>
<form method="post">
    <table align="center">
        <tr>
            <td>用户名：</td>
            <td><input type="text" name="name"/></td>
        </tr>
        <tr>
            <td>密码：</td>
            <td><input type="password" name="password"/></td>
        </tr>
        <tr>
            <td><input type="submit" value="提交"/></td>
            <td><input type="reset" value="重置"/></td>
        </tr>
    </table>
</form>
<?php
$link = mysqli_connect('127.0.0.1', 'root', '', 'ctf-platform');
if (!$link) {
    die('数据库链接失败' . mysql_error());
} else {
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $query = "select * from ctf_person where username='{$_POST['name']}' and password='{$_POST['password']}'";
        $result = mysqli_query($link, $query);
        if (mysqli_num_rows($result) == 1) {
            echo "<script>alert('登录成功')</script>";
            session_start();
            $_SESSION['user']=$_POST['name'];
            echo "<script>window.location.href='main.php'</script>";
            //echo "登录成功";
        } else {
            echo "<script>alert('登录失败')</script>";
            echo "<script>window.location.href='login.php'</script>";
        }
        //echo "登录失败";
    } else {
        //echo "post请求未通过";
    }
}


?>
<?php include 'floor.php' ?>
</body>
</html>