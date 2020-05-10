<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>无标题文档</title>
</head>

<body>
	<div id="biaoti">新闻中心：</div>
	<?php
		include("conn/conn.php");
	$rs=mysql_query("select * from tb_gonggao order by id desc limit 0,7");
	$total = mysql_num_rows($rs);
	if($total ==0){
		echo "<div align='center'>暂无新闻公告！</div>";
	}else{
		while($rst = mysql_fetch_row($rs)){
	?>
	<div id="xinwen">
		<img src="images/circle.gif" width="10" height="10">
		<a href="gonggao.php?id=<?php echo $rst[0]?>"><?php echo $rst[1]?></a>
	</div>
	
	<?php	
		}
	}
	?>
    <h1>陈海洋2017742014</h1>
</body>
</html>