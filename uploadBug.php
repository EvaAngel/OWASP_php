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

<form action="upload_file.php" method="post"
      enctype="multipart/form-data">
    <table align="center">
        <tr>
            <td><label for="file">Filename:</label></td>
            <td><input type="file" name="file" id="file"><br></td>
            <td><input type="submit" name="submit" value="Submit"></td>
        </tr>
        <table>
</form>


<?php include 'floor.php' ?>
</body>
</html>
