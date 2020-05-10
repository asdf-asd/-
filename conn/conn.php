<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>无标题文档</title>
</head>
<?php
$conn=mysql_connect("localhost","root","123456")or die ("连接MySQL出现错误");
mysql_select_db("db_shop",$conn)or die ("false");
mysql_query("set character set'utf8'");
?>
</body>
</html>