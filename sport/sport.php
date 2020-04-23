<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>球队</title>
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
			<li><a href="sport.php">球队</a></li>
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
	<div class="all-13">
		<div class="sport-title">
			<span>东部联盟</span>
		</div>
		<div class="sport-ul">
			<ul>
			<li>东南赛区</li>
			<li>中部赛区</li>
			<li>大西洋赛区</li>
			</ul>
		</div>
		<div class="sport-li">
			<ul>
			<li><img src="../css/images/hornets_d83cc8.png" width="50px" height="50px"><span>黄蜂</span>
			<div class="sport-text">
				<span>夏洛特黄蜂成立于1977年，目前战绩为30胜30负</span>
			</div>
			</li>
			<li><img src="../css/images/cavaliers_f4cf30.png" width="50px" height="50px"><span>骑士</span>
			<div class="sport-text">
				<span>克利夫兰成立于1970年，目前战绩为20胜40负</span>
			</div>
			</li>
			<li><img src="../css/images/raptors_7c67f7.png" width="50px" height="50px"><span>猛龙</span>
			<div class="sport-text">
				<span>多伦多猛龙成立于1987年，目前战绩为40胜20负</span>
			</div>	
			</li>
			<li><img src="../css/images/hawks_073193.png" width="50px" height="50px"><span>老鹰</span>
			<div class="sport-text">
				<span>亚特兰大老鹰成立于1967年，目前战绩为10胜50负</span>
			</div>	
			</li>
			<li><img src="../css/images/bulls_c6bdba.png" width="50px" height="50px"><span>公牛</span>
			<div class="sport-text">
				<span>芝加哥公牛成立于1977年，目前战绩为30胜30负</span>
			</div>	
			</li>
			<li><img src="../css/images/knicks_8abc1c.png" width="50px" height="50px"><span>尼克斯</span>
			<div class="sport-text">
				<span>纽约尼克斯成立于1967年，目前战绩为10胜50负</span>
			</div>	
			</li>
			<li><img src="../css/images/wizards_f77a0a.png" width="50px" height="50px"><span>奇才</span>
			<div class="sport-text">
				<span>华盛顿奇才成立于1957年，目前战绩为15胜35负</span>
			</div>	
			</li>
			<li><img src="../css/images/pistons_cf8fd5.png" width="50px" height="50px"><span>活塞</span>
			<div class="sport-text">
				<span>底特律活塞成立于1970年，目前战绩为20胜40负</span>
			</div>	
			</li>
			<li><img src="../css/images/celtics_2b52a5.png" width="50px" height="50px"><span>凯尔特</span>
			<div class="sport-text">
				<span>波士顿凯尔特人成立于1960年，目前战绩为40胜20负</span>
			</div>	
			</li>
			<li><img src="../css/images/magic_2bee2b.png" width="50px" height="50px"><span>魔术</span>
			<div class="sport-text">
				<span>奥兰多魔术成立于1965年，目前战绩为15胜45负</span>
			</div>	
			</li>
			<li><img src="../css/images/pacers_a16e1d.png" width="50px" height="50px"><span>步行者</span>
			<div class="sport-text">
				<span>印第安纳步行者成立于1977年，目前战绩为35胜25负</span>
			</div>	
			</li>
			<li><img src="../css/images/nets_40aa67.png" width="50px" height="50px"><span>篮网</span>
			<div class="sport-text">
				<span>布鲁克林篮网成立于1970年，目前战绩为30胜30负</span>
			</div>	
			</li>
			<li><img src="../css/images/heat_5a819b.png" width="50px" height="50px"><span>热火</span>
			<div class="sport-text">
				<span>迈阿密热火成立于1967年，目前战绩为40胜20负</span>
			</div>	
			</li>
			<li><img src="../css/images/bucks_b35644.png" width="50px" height="50px"><span>雄鹿</span>
			<div class="sport-text">
				<span>密尔沃基雄鹿成立于1977年，目前战绩为55胜5负</span>
			</div>	
			</li>
			<li><img src="../css/images/76ers_085e6e.png" width="50px" height="50px"><span>76人</span>
			<div class="sport-text">
				<span>费城76人成立于1987年，目前战绩为30胜30负</span>
			</div>	
			</li>
			</ul>
		</div>
		<div class="sport-title">
			<span>西部联盟</span>
		</div>
		<div class="sport-ul">
			<ul>
			<li>西北赛区</li>
			<li>西南赛区</li>
			<li>太平洋赛区</li>
			</ul>
		</div>
		<div class="sport-li">
			<ul>
			<li><img src="../css/images/jazz_5286da.png" width="50px" height="50px"><span>爵士</span>
			<div class="sport-text">
				<span>犹他爵士成立于1977年，目前战绩为30胜30负</span>
			</div>	
			</li>
			<li><img src="../css/images/spurs_1a515b.png" width="50px" height="50px"><span>马刺</span>
			<div class="sport-text">
				<span>圣安东尼奥马刺成立于1967年，目前战绩为30胜30负</span>
			</div>	
			</li>
			<li><img src="../css/images/warriors_e7bdd8.png" width="50px" height="50px"><span>勇士</span>
			<div class="sport-text">
				<span>金州勇士成立于1970年，目前战绩为10胜50负</span>
			</div>	
			</li>
			<li><img src="../css/images/rockets_9952e2.png" width="50px" height="50px"><span>火箭</span>
			<div class="sport-text">
				<span>休斯顿火箭成立于1969年，目前战绩为40胜20负</span>
			</div>	
			</li>
			<li><img src="../css/images/thunder_768d92.png" width="50px" height="50px"><span>雷霆</span>
			<div class="sport-text">
				<span>俄克拉荷马城成立于1970年，目前战绩为30胜30负</span>
			</div>	
			</li>
			<li><img src="../css/images/clippers_c1f899.png" width="50px" height="50px"><span>快船</span>
			<div class="sport-text">
				<span>洛杉矶快船成立于1970年，目前战绩为40胜20负</span>
			</div>	
			</li>
			<li><img src="../css/images/kings_071837.png" width="50px" height="50px"><span>国王</span>
			<div class="sport-text">
				<span>萨克拉门托国王成立于1977年，目前战绩为35胜25负</span>
			</div>	
			</li>
			<li><img src="../css/images/trail_blazers_1c70f5.png" width="50px" height="50px"><span>开拓者</span>
			<div class="sport-text">
				<span>波特兰开拓者成立于1975年，目前战绩为35胜25负</span>
			</div>	
			</li>
			<li><img src="../css/images/grizzlies_66e18a.png" width="50px" height="50px"><span>灰熊</span>
			<div class="sport-text">
				<span>孟菲斯灰熊成立于1973年，目前战绩为30胜30负</span>
			</div>	
			</li>
			<li><img src="../css/images/lakers_cdf357.png" width="50px" height="50px"><span>湖人</span>
			<div class="sport-text">
				<span>洛杉矶湖人成立于1975年，目前战绩为50胜10负</span>
			</div>	
			</li>
			<li><img src="../css/images/nuggets_562973.png" width="50px" height="50px"><span>掘金</span>
			<div class="sport-text">
				<span>丹佛掘金成立于1976年，目前战绩为45胜15负</span>
			</div>	
			</li>
			<li><img src="../css/images/pelicans_93bfd8.png" width="50px" height="50px"><span>鹈鹕</span>
			<div class="sport-text">
				<span>新奥尔良鹈鹕成立于1970年，目前战绩为40胜20负</span>
			</div>	
			</li>
			<li><img src="../css/images/suns_fd0119.png" width="50px" height="50px"><span>太阳</span>
			<div class="sport-text">
				<span>菲尼克斯太阳成立于1979年，目前战绩为20胜40负</span>
			</div>	
			</li>
			<li><img src="../css/images/timber_wolves_8af93d.png" width="50px" height="50px"><span>森林狼</span>
			<div class="sport-text">
				<span>明尼苏达森林狼成立于1978年，目前战绩为15胜45负</span>
			</div>	
			</li>
			<li><img src="../css/images/mavericks_0e7b26.png" width="50px" height="50px"><span>独行侠</span>
			<div class="sport-text">
				<span>达拉斯独行侠成立于1970年，目前战绩为40胜20负</span>
			</div>	
			</li>
			</ul>
		</div>
	</div>
	<div class="all-2">
	<h4>要闻<a href="javascript:void(0)" onclick="tran()">换一换</a></h4>
	<div class="all-change" style="display: block">
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
	<div class="sll-1" style="margin:10px 0 0 0 !important">
		<a href="javascript:void(0)" class="change" id="change1"><img src="../css/images/western_logo.png" width="40px" height="30px"/><span>西部排名</span></a>
		<a href="javascript:void(0)"  id="change2"><img src="../css/images/eastern_logo.png" width="40px" height="30px"/><span>东部排名</span></a>
		<table style="width:100%;text-align:center;" border="0" cellspacing="0" cellpadding="0">
			<thead>
			<tr bgcolor="#CCCCCC" style="font-size:15px">
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
Load(1);//默认
function Load(cont)
{
 var a=cont;
 if(a=="1"){
 $.ajax({
   url:"../home/ctable.php",
   data:{key:cont},
   type:"POST",
   dataType:"JSON",
   success: function(data){
    var str = "";
    for(var k in data)
     {
      str +="<tr bgcolor='#CCCCCC'><td align='center' width='20%'>"+data[k].rank+"</td><td align='center' width='40%'><img src='../admin/"+data[k].sportimg+"' width=30px height=23px/><span style='position:relative;top:-6px;'>"+data[k].sportname1+"</span></td><td align='center' width='20%'>"+data[k].sportwin+"</td><td align='center' width='20%'>"+data[k].sportloss+"</td></tr>";
     }
	   $("#nr").html(str);//把数据返回表格
    }
  });
 }
else{
   $.ajax({
   url:"../home/ctable.php",
   data:{key:cont},
   type:"POST",
   dataType:"JSON",
   success: function(data){
    var str = "";
     for(var k in data)
     {
      str +="<tr bgcolor='#CCCCCC'><td align='center' width='20%'>"+data[k].rank+"</td><td align='center' width='40%'><img src='../admin/"+data[k].sportimg+"' width=30px height=23px/><span style='position:relative;top:-6px;'>"+data[k].sportname1+"</span></td><td align='center' width='20%'>"+data[k].sportwin+"</td><td align='center' width='20%'>"+data[k].sportloss+"</td></tr>";
     }
	   $("#nr").html(str);//把数据返回表格
    }
  });
	}
}
	
var c1=document.getElementById("change1");
var c2=document.getElementById("change2");
c1.onclick=function(){
	c1.className="change";
	c2.className="";
	Load(1);
}
c2.onclick=function(){
	c2.className="change";
	c1.className="";
	Load(2);
}

$(".togg").hover(function(){
	$("#sh").slideDown();
	document.getElementById("ccolor").style.color="gray";
},function(){
	$("#sh").stop(true,false).slideUp();
	document.getElementById("ccolor").style.color="black";
})
	
var spanall = document.getElementsByClassName("sport-li")[0];
var sportall = spanall.getElementsByClassName("sport-text");
for(var i=0;i<sportall.length;i++){
	sportall[i].addEventListener("foucs",function(){
		this.style.opacity=1;
	},false)
}

var contentArray = document.getElementsByClassName("all-change");
for(var i=0;i<contentArray.length;i++){
	contentArray[i].setAttribute("index",i);
}	
function tran(){
	if(contentArray[0].getAttribute("index")==0&&contentArray[0].style.display=="block"){
		contentArray[1].style.display="block";
		contentArray[0].style.display="none";
		console.log(1);
	}else if(contentArray[1].getAttribute("index")==1&&contentArray[1].style.display=="block"){
		contentArray[2].style.display="block";
		contentArray[1].style.display="none";
		console.log(2);
	}else{
		contentArray[0].style.display="block";
		contentArray[2].style.display="none";
		console.log(3);
	}
}
	
</script>
</body>
</html>