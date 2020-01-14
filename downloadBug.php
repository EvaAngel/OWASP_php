<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<?php include 'loginFilter.php';
loginFilter(); ?>
<?php include 'head.php' ?>
<?php include 'banner.html' ?>
<br><br><br>
<?php $filename = $_GET['filename'];
$download_path = "download/";
$file="$download_path$filename";
if(!file_exists($file))
{
    die("抱歉，文件不存在");
}
$type=filetype($file);
$today=date("F j,Y,g:i a");
$time=time();
header("Content-type: $type");
header("Content-Disposition: attachment;filename=$filename");
header("Content-Transfer-Encoding: binary");
header('Pragma: no-cache');
header('Expires: 0');
// 发送文件内容
set_time_limit(0);
readfile($file);
?>
<?php include 'floor.php' ?>
</body>
</html>