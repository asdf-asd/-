<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>无标题文档</title>
</head>

<body>
	<?php
	$id=$_GET[id];
	include("conn/conn.php");
	$sql=mysql_query("select * from tb_gonggao where id=" .$id);
	$info=mysql_fetch_array($sql);
	?>
	<div>新闻主题：<?php echo $info[title];?>发布时间：<?php echo $info[time];?></div>
	<div><?php echo $info[content];?></div>
    <h1>陈海洋2017742014</h1>
</body>
</html>