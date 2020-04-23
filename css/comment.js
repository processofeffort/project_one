// JavaScript Document
//当滚动条的位置处于距顶部100像素以下时，跳转链接出现，否则消失
$(function () {
    $(window).scroll(function(){
        if ($(window).scrollTop()>400){
            $("#pic").fadeIn(1000);
        }
        else
        {
            $("#pic").fadeOut(1000);
        }
    });
    //当点击跳转链接后，回到页面顶部位置
    $("#pic").click(function(){
        $('body,html').animate({scrollTop:0},1000);
        return false;
    });
});
//获取页面向上或者向左卷曲出去的距离的值
function getScroll() {
   return {
     left: window.pageXOffset || document.documentElement.scrollLeft || document.body.scrollLeft||0,
     top: window.pageYOffset || document.documentElement.scrollTop || document.body.scrollTop || 0
   };
 }
 //滚动事件
 window.onscroll=function () {
   //向上卷曲出去的距离和最上面的div的高度对比
   if(getScroll().top>=document.getElementById("scroll-top").offsetHeight){
     //设置第二个div的类样式
    document.getElementById("scroll-ntop").className="header-site fixed";
     //设置第三个div的marginTop的值
     document.getElementById("content-top").style.marginTop= document.getElementById("scroll-ntop").offsetHeight+"px";
   }else{
     document.getElementById("scroll-ntop").className="header-site";
      document.getElementById("content-top").style.marginTop="10px";
    }
  };
 //获取最外面的div
  var box = document.getElementById("box");
  //获取相框
  var screen = box.children[0];
  //获取相框的宽度
  var imgWidth = screen.offsetWidth;
  //获取ul
  var ulObj = screen.children[0];
  //获取ul中的所有的li
  var list = ulObj.children;
  //获取ol
  var olObj = screen.children[1];
  //焦点的div
  var arr = document.getElementById("arr");

  var pic = 0;//全局变量
  //创建小按钮----根据ul中的li个数
  for (var i = 0; i < list.length; i++) {
    //创建li标签,加入到ol中
    var liObj = document.createElement("li");
    olObj.appendChild(liObj);
    liObj.innerHTML = (i + 1);
    //在每个ol中的li标签上添加一个自定义属性,存储索引值
    liObj.setAttribute("index", i);
    //注册鼠标进入事件
    liObj.onmouseover = function () {
      //先干掉所有的ol中的li的背景颜色
      for (var j = 0; j < olObj.children.length; j++) {
        olObj.children[j].removeAttribute("class");
      }
      //设置当前鼠标进来的li的背景颜色
      this.className = "current";
      //获取鼠标进入的li的当前索引值
      pic = this.getAttribute("index");
      //移动ul
      animate(ulObj, -pic * imgWidth);
    };
  }
  //设置ol中第一个li有背景颜色
  olObj.children[0].className = "current";


  //克隆一个ul中第一个li,加入到ul中的最后=====克隆
  ulObj.appendChild(ulObj.children[0].cloneNode(true));

  //自动播放
 var timeId= setInterval(clickHandle,3000);

  //鼠标进入到box的div显示左右焦点的div
  box.onmouseover = function () {
    arr.style.display = "block";
    //鼠标进入废掉之前的定时器
    clearInterval(timeId);
  };
  //鼠标离开到box的div隐藏左右焦点的div
  box.onmouseout = function () {
    arr.style.display = "none";
    //鼠标离开自动播放
    timeId= setInterval(clickHandle,3000);
  };
  //右边按钮
  document.getElementById("right").onclick =clickHandle;
  function clickHandle() {
    //如果pic的值是5,恰巧是ul中li的个数-1的值,此时页面显示第六个图片,而用户会认为这是第一个图,
    //所以,如果用户再次点击按钮,用户应该看到第二个图片
    if (pic == list.length - 1) {
      //如何从第6个图,跳转到第一个图
      pic = 0;//先设置pic=0
      ulObj.style.left = 0 + "px";//把ul的位置还原成开始的默认位置
    }
    pic++;//立刻设置pic加1,那么此时用户就会看到第二个图片了
    animate(ulObj, -pic * imgWidth);//pic从0的值加1之后,pic的值是1,然后ul移动出去一个图片
    //如果pic==5说明,此时显示第6个图(内容是第一张图片),第一个小按钮有颜色,
    if (pic == list.length - 1) {
      //第五个按钮颜色干掉
      olObj.children[olObj.children.length - 1].className = "";
      //第一个按钮颜色设置上
      olObj.children[0].className = "current";
    } else {
      //干掉所有的小按钮的背景颜色
      for (var i = 0; i < olObj.children.length; i++) {
        olObj.children[i].removeAttribute("class");
      }
      olObj.children[pic].className = "current";
    }

  };
  //左边按钮
  document.getElementById("left").onclick = function () {
    if (pic == 0) {
      pic = 5;
      ulObj.style.left = -pic * imgWidth + "px";
    }
    pic--;
    animate(ulObj, -pic * imgWidth);
    //设置小按钮的颜色---所有的小按钮干掉颜色
    for (var i = 0; i < olObj.children.length; i++) {
      olObj.children[i].removeAttribute("class");
    }
    //当前的pic索引对应的按钮设置颜色
    olObj.children[pic].className = "current";

  };

  //设置任意的一个元素,移动到指定的目标位置
  function animate(element, target) {
    clearInterval(element.timeId);
    //定时器的id值存储到对象的一个属性中
    element.timeId = setInterval(function () {
      //获取元素的当前的位置,数字类型
      var current = element.offsetLeft;
      //每次移动的距离
      var step = 10;
      step = current < target ? step : -step;
      //当前移动到位置
      current += step;
      if (Math.abs(current - target) > Math.abs(step)) {
        element.style.left = current + "px";
      } else {
        //清理定时器
        clearInterval(element.timeId);
        //直接到达目标
        element.style.left = target + "px";
      }
    }, 10);
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

//东西部排名
Load(1);//默认
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
function Load(cont)
{
 if(cont=="1"){
 $.ajax({
   url:"ctable.php",
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
   url:"ctable.php",
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

//底部左右框显示
var tll = document.getElementById("tll");
var arr1 = document.getElementById("arr1");
  tll.onmouseover = function () {
    arr1.style.display = "block";
  };
  tll.onmouseout = function () {
    arr1.style.display = "none";
  };
//网站导航hover	
$(".togg").hover(function(){
	$("#sh").slideDown();
	document.getElementById("ccolor").style.color="gray";
},function(){
	$("#sh").stop(true,false).slideUp();
	document.getElementById("ccolor").style.color="black";
})

function show1(){
	    $('#addBox1').text("开发中...");
        $('#addBox1').show().delay(1000).fadeOut();
		return false;
}


function showtext(){
	var infornum = document.getElementsByName("infor");
	var infornum1 = document.getElementsByName("infor1");
	if(infornum[0].style.display=="none"){
		for(var i=0;i<infornum.length;i++){
		infornum[i].style.display="inline-block";
	}	
	}
	else if(infornum[0].style.display=="inline-block"&&infornum1[0].style.display=="none"){
		for(var i=0;i<infornum1.length;i++){
		infornum1[i].style.display="inline-block";
	}
	document.getElementsByClassName("btn")[0].innerHTML="加载完毕";
	document.getElementsByClassName("btn")[0].disabled="disabled";
	}
}