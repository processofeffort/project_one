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
 // session_start();
?>
<header class="header-user">
	<div class="header-top" id="htop">
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
<header class="header-site">
	<div class="header-bg" id="ntop">
		<div class="logo header-leftsite">
			<img src="../css/images/basketball.png">
		</div>
		<div class="header-leftsite">
			<ul>
			<li><a href="../home/home.php">首页</a></li>
			<li><a href="../information/information.php">新闻</a></li>
			<li><a id="ccolor1" href="../sport/sport.php">球队</a>			
			</li>
			<li><a href="../sportman/sportman.php">球员</a></li>
			<li onMouseOver="show()" onMouseOut="hide()"><a id="ccolor" href="javascript:void(0)"><span>▼</span>网站导航</a>
			<div id="sh" style="display:none">
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
<div class="login-first">
   <div class="login-bg">
	   <ul>
	   <li>☼</li>
	   <li>用户登陆</li>
	   </ul>
   </div>
   <div class="login-form">
	<div class="login-form1">
	<div class="login-form2">
	<div class="login-content">
	<div class="login-text">登 陆</div>
	<div class="login-sub">
    <form id="form" name="form" method="post" action="../index/index_ok.php" onsubmit="return checkfrom(form)">
	<div class="form-group">
	<input type="text" name="user" id="user" placeholder="账号"/>
	</div>
	<div class="form-group">
	<input type="password" name="pwd" id="pwd" placeholder="密码"/>
	</div>
	<div class="form-group1">
	<input type="radio" name="browser" value="1" checked="checked"/>用户
    <input type="radio" name="browser" value="2" />管理员
	</div>
	<div class="form-word">
    <a href="regist.php">没有账号?立即注册</a></p>
	</div>
	<div class="form-s">
	<input type="submit" name="sub" class="sub" value="登陆"/>
	</div>
    </form>
	</div>
	</div>
	</div>
	</div>
    </div>
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