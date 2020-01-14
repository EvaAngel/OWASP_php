
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<?php

function loginFilter()
{
    session_start();
    if ($_SESSION['user'] == null) {
        echo "<script>alert('您没有权限访问')</script>";
        echo "<script>window.location.href='login.php'</script>";
    }
}

?>
</body>
</html>