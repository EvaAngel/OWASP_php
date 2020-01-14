<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<?php include 'loginFilter.php';
loginFilter();?>
<?php include 'head.php' ?>
<?php include 'banner.html' ?>
<br><br><br>
<h4 align="center">
<?php
$filename = $_GET['filename'];
if (!empty($filename)) {
    include $filename;
}
?></h4>
<?php include 'floor.php' ?>
</body>
</html>