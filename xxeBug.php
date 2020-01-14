<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <script type="text/javascript" src="http://code.jquery.com/jquery.min.js"></script>

</head>
<body>
<?php include 'loginFilter.php';
loginFilter(); ?>
<?php include 'head.php' ?>
<?php include 'banner.html' ?>
<br><br><br>
<table align="center">
    <tr>
        <td>
            <button onclick="send()">提交</button>
        </td>
    </tr>
</table>

<?php include 'floor.php' ?>
<script>
    function send() {
        var params = "<user>" +
            "<name>fuxin</name>" +
            "<age>18</age>" +
            "</user>";
        $.ajax({
            type: "post",
            url: "dealXML.php",
            dataType: "text/xml",
            data: params,
            success: function (msg) {
                alert(msg);
            }
        });
    }

</script>
</body>

</html>