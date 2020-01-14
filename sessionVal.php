<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<?php
session_start();
session_destroy();
echo "<script>alert('已注销')</script>";
echo "<script>window.location.href='login.php'</script>";
?>
</body>
</html>