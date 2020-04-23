<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>球员信息</title>
<link rel="stylesheet" href="../css/comment.css">
</head>
<body>
<?php
  session_start();
?>
<header class="header-user">
	<div class="header-top" id="scroll-top">
		<div class="header-left">
			<a href="../home/home.php">篮球网站</a>
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
			   echo "href='../home/home.php'";
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
			<li><a href="../home/home.php">首页</a></li>
			<li><a href="../information/information.php">新闻</a></li>
			<li><a id="ccolor1" href="../sport/sport.php">球队</a></li>
			<li><a href="sportman.php">球员</a></li>
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
	<div class="all-10">
		<h3 style="display:inline">球员数据</h3>
		<a href="#" onClick="putvalue()"><img src="../css/images/icon_20_search_white_c5c442.png"></a>
		<input type="text" class="inputvalue" placeholder="请输入球员姓名">
	</div>
	<div class="all-11">
	<select id="opt" class="ot" onchange="func()">
	<option value="0">根据球队查询</option>
	<option value="1">勇士</option>
	<option value="5">火箭</option>
	<option value="3">热火</option>
	<option value="2">湖人</option>
	<option value="4">骑士</option>
	</select>
	</div>
	<div class="all-12">
		<table style="width:100%" border="0" cellspacing="0" cellpadding="0">
			<tr style="background:#1B11FC;text-align:center;font-size:20px">
			<td style="border-right:1px solid #F4EDED">球员</td>
			<td>球队</td>
			<td>位置</td>
			<td>身高</td>
			<td>体重</td>
			<td>经验</td>
			<td>国籍</td>
			</tr>
			<tbody id="nl"></tbody>
		</table>
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
<script>
function func(){
 //获取被选中的option标签
 var vs = $('select  option:selected').val();
 Load(vs);
}
function putvalue(){
  var vs = $('.inputvalue').val();
  Load(vs);
	console.log(vs);
}
Load(0);//默认
function Load(cont)
{
 var a=cont;
 $.ajax({
   url:"csport.php",
   data:{key:cont},
   type:"POST",
   dataType:"JSON",
   success: function(data){
    var str = "";
    for(var k in data)
     {
      str +="<tr bgcolor='#CCCCCC'><td width='20%' style='border-bottom:1px solid #F4EDED;border-right:1px solid #F4EDED'><img src='../admin/"+data[k].photoname+"' width=50px height=50px style='border-radius:50px;background:gray;margin:10px 20px 0 20px;'/><span style='display:inline-block;position:relative;top:-20px;'>"+data[k].sportname+"</span></td><td align='center' style='border-bottom:1px solid #F4EDED'>"+data[k].sportteam+"</td><td align='center' style='border-bottom:1px solid #F4EDED'>"+data[k].sportcontrol+"</td><td align='center' style='border-bottom:1px solid #F4EDED'>"+data[k].sporttall+"</td><td align='center' style='border-bottom:1px solid #F4EDED'>"+data[k].sportheight+"</td><td align='center' style='border-bottom:1px solid #F4EDED'>"+data[k].sportgoal+"</td><td align='center' style='border-bottom:1px solid #F4EDED'>"+data[k].sportcountry+"</td></tr>";
     }
	   $("#nl").html(str);//把数据返回表格
    }
  });
}	
</script>
</body>
</html>