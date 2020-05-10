<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>张新阳的个人主页</title>
    <style>
        * {
            margin: 0;
            padding: 0;
        }

        body {
            background-image: url('./bg.jpg');
            background-repeat: no-repeat;
        }

        hr {
            border-color: black;
        }

        #box {
            width: 500px;
            margin: auto;
            height: 720px;
            padding: 20px;
            border: 2px solid #333333;
            margin-top: 20px;
            margin-bottom: 20px;
            background-color: rgba(235, 230, 230, 0.64);
        }

        #PersonalDetails {
            height: 300px;
            margin-bottom: 10px;
        }

        #PersonalDetails>#z {
            width: 330px;
            float: left;
        }

        #PersonalDetails>#z>p {
            margin-bottom: 30px;
        }

        #PersonalDetails>#y {
            float: right;
        }

        #PersonalDetails>#y>img {
            width: 150px;
            height: 225px;
        }

        #CharacterSelf-introduction>p {
            text-indent: 2em;
            margin-bottom: 20px;
        }

        ul>li {
            list-style: none;
            margin-bottom: 9px;
        }

        h1 {
            margin-bottom: 20px;
            text-align: center;
        }

        #ListSelf-introduction {
            padding-bottom: 20px;
        }

        #h1,#h2,#h3 {
            background-image: url('./localnav_bg(1).png');
            background-repeat: no-repeat;
        }
        #h1{
            background-position:0px -50px;
        }
        
        #h3{
            background-position:0px -75px;
        }
    </style>
</head>

<body>
    <div id="box">
        <h1>个人主页</h1>
        <div id="PersonalDetails">
            <h3 id="h1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;个人信息</h3>
            <hr><br>
            <div id="z">
            <?php
			include("../conn/conn.php");
			$rs=mysql_query("select * from tb_gerenzhuye");
			$total = mysql_num_rows($rs);
			if($total ==0){
			echo "<div align='center'>暂无新闻公告！</div>";
			}else{
			$rst = mysql_fetch_row($rs)
            ?>
                <p><span>姓名：</span><u><?php echo $rst[1]?></u>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span>年龄：</span><u><?php echo $rst[2]?></u>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span>性别：</span><u><?php echo $rst[3]?></u></p>
                <p><span>学号：</span><u><?php echo $rst[4]?></u></p>
                <p><span>电话：</span><u><?php echo $rst[5]?></u></p>
                <p><span>班级：</span><u><?php echo $rst[6]?></u></p>
                <p><span>家庭住址：</span><u><?php echo $rst[7]?></u></p>
            </div>
            <div id="y">
                <img src="./person.jpg" alt="">
            </div>
        </div>
        <?php
			}
        ?>
        <div id="CharacterSelf-introduction">
            <h3 id="h2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;自我介绍</h3>
            <hr><br>
            <p>我的性格开朗，积极向上，无不良嗜好大学期间参军两年，使我有较强的团队精神和凝聚力，平时喜欢跑跑步，喜欢运动。我生在一个普通家庭，父母恩爱、家庭和睦，幸福美满</p>
        </div>
        <div id="ListSelf-introduction">
            <h3 id="h3">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;兴趣爱好</h3>
            <hr><br>
            <ul>
                <li>兴趣：对编程、计算机感兴趣喜欢研究</li>
                <li>爱好：喜欢跑步、热爱运动，锻炼身体</li>
                <li>特长：意志坚定、吃苦耐劳、有上进心</li>
                <li>喜欢的颜色：黑色-因为显瘦，淡蓝色-因为清新</li>
                <li>喜欢的明星：黄渤、孙红雷、吴京、李沁、金辰、诸葛大力</li>
                <li>喜欢的歌曲：最美的伤口、过客、嚣张、四块五、爱情错觉</li>
            </ul>
        </div>
    </div>
</body>

</html>