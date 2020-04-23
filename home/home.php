<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>体育网站</title>
<link rel="stylesheet" href="../css/comment.css">
</head>
<body>
<?php
  session_start();
?>
<header class="header-user" id="scroll-top">
	<div class="header-top">
		<div class="header-left">
			<a href="home.php">篮球网站</a>
		</div>
		<div class="header-right">
			<a>
			<?php
				if(isset($_SESSION['name']) && $_SESSION['name']!=""){
				echo "欢迎您: <a href='../user/user_center.php'>$_SESSION[name]</a>";
				}
			?>
			<?php
				if(isset($_SESSION['name']) && $_SESSION['name']!=""){
	            echo "<a href='../login/logout.php'>注销离开</a>";
				}
			?>	
			</a>
		</div>
		<div class="header-right">
			<a <?php
			if(isset($_SESSION['name'])){
			   echo "href='home.php'";
			}
			else{
			   echo "href='../login/login.php'";
			}
			?>
			>
  		   <?php
			if(isset($_SESSION['name'])){
		    include("../conn/conn.php");
			$sqlstr="select *from tb_visitor where name='".$_SESSION['name']."'";
			$result=mysqli_query($conn,$sqlstr);
			  while($myrow=mysqli_fetch_array($result)){
			if($myrow[3]){
					echo "<img src='../user/".$myrow[3]."' width='30px' height='30px' style='position:absolute; left:1140px;top:5px; border-radius:25px;'/>";
			}
			else{
			echo "<div class='header-image'>";
			echo "<img src='../css/images/icon.jpg' width='25px' height='25px' style='border-radius:25px' onmousemove=this.title='用户图片未设置'>";
			echo "</div>";
				}
			  }
			}
			else{
				echo "<div class='header-image' onmousemove=this.title='请点击进行登录'>";
				echo "<img src='../css/images/icon_30_user_f91522.png' width='25px' height='25px' alt='无法显示'>";
				echo "</div>";
			}
			?>
			</a>
		</div>
	</div>
</header>
<header class="header-site" id="scroll-ntop">
	<div class="header-bg">
		<div class="logo header-leftsite">
			<img src="../css/images/basketball.png">
		</div>
		<div class="header-leftsite">
			<ul>
			<li><a href="home.php">首页</a></li>
			<li><a href="../information/information.php">新闻</a></li>
			<li><a href="../sport/sport.php">球队</a>
			<div id="addBox1" class="savetips1" style="display:none"></div>
			</li>
			<li><a href="../sportman/sportman.php">球员</a></li>
			<li class="togg"><a id="ccolor" href="javascript:void(0)"><span>▼</span>网站导航</a>
			<div id="sh">
				<div class="sh-1">
				<h4>推荐网站</h4>
				<ul>
				<li>Bootstrap中文网</li>
				<li>菜鸟教程</li>
				<li>哔哩哔哩</li>
				</ul>
				</div>
				<div class="sh-2">
				<h4>推荐网站</h4>
				<ul>
				<li>Bootstrap中文网</li>
				<li>菜鸟教程</li>
				<li>哔哩哔哩</li>
				</ul>
				</div>
			</div>	
			</li>
			</ul> 
		</div>
	</div>
</header>
<div class="content-first" id="content-top">
	<div class="all" id="box">
	<div class="screen">
	<ul>
	<li><img src="../css/images/1.jpg" width="100%" height="80%"></li>	
	<li><img src="../css/images/2.jpg" width="100%" height="80%"></li>	
	<li><img src="../css/images/3.jpg" width="100%" height="80%"></li>	
	<li><img src="../css/images/4.jpg" width="100%" height="80%"></li>	
	</ul>
	<ol>
    </ol>
	</div>
	<div id="arr">
		<span id="left">&lt;</span>
		<span id="right">&gt;</span>
	</div>
	</div>
	<div class="all-1">
	<div class="all-bg">
		<img src="../css/images/warriors_e7bdd8.png">
	</div>
	<a class="fifth" href="javascript:void(0)"><img src="../css/images/100.jpg" width="90px" height="70px"><span>大学教练讲述：状元热门艾顿前景</span></a>
	<a class="fifth" href="javascript:void(0)"><img src="../css/images/101.jpg" width="90px" height="70px"><span>詹姆斯孤军奋战面对金州四巨头</span></a>
	<a class="fifth" href="javascript:void(0)"><img src="../css/images/102.jpg" width="90px" height="70px"><span>特雷-杨选秀前只为四支球队试训</span></a>
	<a class="fifth" href="javascript:void(0)"><img src="../css/images/6.jpg" width="90px" height="70px"><span>G2勒布朗詹姆斯对位斯蒂芬库里</span></a>
	</div>
	<div class="all-2">
	<h4>要闻<a id="content-change" href="javascript:void(0)" onClick="tran()">换一换</a></h4>
	<div class="all-change" style="display:block">
	<a href="#">KD：我想在35岁退役 纪录不能定义我的生涯</a><br/>
	<a href="#">格林：抢篮板要靠全队努力 阵容深度是优势</a><br/>
	<a href="#">杜兰特：任务尚未完成 夺冠容不得片刻懈怠</a><br/>
	<a href="#">JR：詹姆斯无论怎样都被批评 G3要做改变</a><br/>
	<a href="#">库里：伊戈如能复出 我们的轮换将回到正轨</a><br/>
	<a href="#">詹姆斯：回到主场期待挑战 盼能把握住胜机</a><br/>
	<a href="#">科尔：伊戈接近康复 或将在G3中完成复出</a><br/>
	<a href="#">罗德尼-胡德：在骑士队打球的压力超乎想象</a><br/>
	<a href="#">乐福：防守库里非常困难 回到主场不容有失</a><br/>
	<a href="#">专栏：拼尽全力还输 詹皇失去比赛乐趣了？</a><br/>
	<a href="#">与考辛斯再续前缘吧！小刺客回复网友：好啊</a><br/>
	<a href="#">麦基：随时做好准备 G2出任首发是我的荣幸</a><br/>
	<a href="#">曝伊戈已摆脱膝伤疼痛 或将在总决赛G3复出</a><br/>
	<a href="#">勇士GM：克莱不断自我催眠 让自己忘却伤病</a><br/>	
	</div>
	<div class="all-change" style="display:none">
	<a href="#">专栏：拼尽全力还输 詹皇失去比赛乐趣了？</a><br/>
	<a href="#">与考辛斯再续前缘吧！小刺客回复网友：好啊</a><br/>
	<a href="#">麦基：随时做好准备 G2出任首发是我的荣幸</a><br/>
	<a href="#">曝伊戈已摆脱膝伤疼痛 或将在总决赛G3复出</a><br/>
	<a href="#">勇士GM：克莱不断自我催眠 让自己忘却伤病</a><br/>	
	<a href="#">KD：我想在35岁退役 纪录不能定义我的生涯</a><br/>
	<a href="#">格林：抢篮板要靠全队努力 阵容深度是优势</a><br/>
	<a href="#">杜兰特：任务尚未完成 夺冠容不得片刻懈怠</a><br/>
	<a href="#">JR：詹姆斯无论怎样都被批评 G3要做改变</a><br/>
	<a href="#">库里：伊戈如能复出 我们的轮换将回到正轨</a><br/>
	<a href="#">詹姆斯：回到主场期待挑战 盼能把握住胜机</a><br/>
	<a href="#">科尔：伊戈接近康复 或将在G3中完成复出</a><br/>
	<a href="#">罗德尼-胡德：在骑士队打球的压力超乎想象</a><br/>
	<a href="#">乐福：防守库里非常困难 回到主场不容有失</a><br/>
	</div>
	<div class="all-change" style="display:none">
	<a href="#">库里：伊戈如能复出 我们的轮换将回到正轨</a><br/>
	<a href="#">詹姆斯：回到主场期待挑战 盼能把握住胜机</a><br/>
	<a href="#">科尔：伊戈接近康复 或将在G3中完成复出</a><br/>
	<a href="#">KD：我想在35岁退役 纪录不能定义我的生涯</a><br/>
	<a href="#">格林：抢篮板要靠全队努力 阵容深度是优势</a><br/>
	<a href="#">杜兰特：任务尚未完成 夺冠容不得片刻懈怠</a><br/>
	<a href="#">JR：詹姆斯无论怎样都被批评 G3要做改变</a><br/>
	<a href="#">罗德尼-胡德：在骑士队打球的压力超乎想象</a><br/>
	<a href="#">乐福：防守库里非常困难 回到主场不容有失</a><br/>
	<a href="#">专栏：拼尽全力还输 詹皇失去比赛乐趣了？</a><br/>
	<a href="#">与考辛斯再续前缘吧！小刺客回复网友：好啊</a><br/>
	<a href="#">麦基：随时做好准备 G2出任首发是我的荣幸</a><br/>
	<a href="#">曝伊戈已摆脱膝伤疼痛 或将在总决赛G3复出</a><br/>
	<a href="#">勇士GM：克莱不断自我催眠 让自己忘却伤病</a><br/>	
	</div>
	</div>
</div>
<div class="content-second">
	<div class="sll">
		<a class="first"><img src="../css/images/100.jpg" width="420px" height="314px"><span>大学教练讲述：状元热门艾顿前景如何?</span></a>
		<a class="first"><img src="../css/images/104.jpg" width="420px" height="314px"><span>詹姆斯：回到主场期待挑战 盼能把握胜机</span></a>
		<a class="second"><img src="../css/images/105.jpg" width="279px" height="183px"><span>杜兰特：拿下第一场心情很不错</span></a>
		<a class="second"><img src="../css/images/106.jpg" width="279px" height="183px"><span>史密斯：我以为教练会暂停</span></a>
		<a class="second"><img src="../css/images/103.jpg" width="279px" height="183px"><span>格林：我只是尽我全力在比赛</span></a>	
	</div>
	<div class="sll-1">
		<a href="javascript:void(0)" class="change" id="change1"><img src="../css/images/western_logo.png" width="40px" height="30px"/><span>西部排名</span></a>
		<a href="javascript:void(0)"  id="change2"><img src="../css/images/eastern_logo.png" width="40px" height="30px"/><span>东部排名</span></a>
		<table style="width:100%;text-align:center;" border="0" cellspacing="0" cellpadding="0">
			<thead>
			<tr bgcolor="#CCCCCC">
			<td>排名</td>
			<td>队名</td>
			<td>胜</td>
			<td>负</td>
			</tr>
			</thead>
			<tbody id="nr">
			</tbody>
		</table>
	</div>
</div>
<div class="content-third">
	<div class="tll" id="tll">
		<a class="third">
		<img src="../css/images/148230948.jpg">
		<span>2018-06-07 15:21</span>
		<p>视频-杜兰特集锦 狂砍43分破纪录</p>
		</a>
		<a class="third">
		<img src="../css/images/148231225.jpg">
		<span>2018-06-07 12:17</span>
		<p>视频-詹姆斯集锦 三双33+10+11</p>
		</a>
		<a class="third">
		<img src="../css/images/148231116.jpg">
		<span>2018-06-07 13:22</span>
		<p>视频-库里集锦 16投3中得11分</p>
		</a>
		<a class="third">
		<img src="../css/images/148234416.jpg">
		<span>2018-06-07 16:11</span>
		<p>视频-乐福集锦 强势出手砍下20+13</p>
		</a>
		<a class="third">
		<img src="../css/images/148230948.jpg">
		<span>2018-06-07 15:21</span>
		<p>视频-杜兰特集锦 狂砍43分破纪录</p>
		</a>
		<a class="third">
		<img src="../css/images/148231225.jpg">
		<span>2018-06-07 12:17</span>
		<p>视频-詹姆斯集锦 三双33+10+11</p>
		</a>
		<a class="third">
		<img src="../css/images/148231116.jpg">
		<span>2018-06-07 13:22</span>
		<p>视频-库里集锦 16投3中得11分</p>
		</a>
		<a class="third">
		<img src="../css/images/148234416.jpg">
		<span>2018-06-07 16:11</span>
		<p>视频-乐福集锦 强势出手砍下20+13</p>
		</a>
		<div id="arr1">
		<span id="left1">&lt;</span>
		<span id="right1">&gt;</span>
	</div>
	</div>
</div>
<div class="pic" id="pic">
	<a href="javascript:void(0)"><img src="../css/images/up.gif" width="30px" height="30px"></a>
</div>
<footer>
	<div class="foot">
		<div class="foot-color">
			<p>该网站主要介绍有关于NBA的各种信息</p>
			<p>例如：球队最新情况、各种最新视频、文章分析</p>
			<p>后续功能逐步完善，敬请期待</p>
			<p>Copyright © 2019-2020 Xiong</p>
		</div>
	</div>
</footer>
<script type="text/javascript" src="../css/js.js"></script>
<script type="text/javascript" src="../css/comment.js"></script>
</body>
</html>