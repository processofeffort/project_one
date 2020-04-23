<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ok</title>
</head>
<body>
<?php
  session_start();
  include("../conn/conn.php");
  $name=$_POST['user'];
  $pwd=$_POST['pwd'];
  $se=$_POST['browser'];
  if($se=="1"){
  $sql=mysqli_query($conn,"select *from tb_visitor where name='".$name."' and password='".$pwd."'");
  }else{
	    $sql=mysqli_query($conn,"select *from tb_admin where name='".$name."' and password='".$pwd."'");
	  }
   if (!$sql) {
		printf("Error: %s\n", mysqli_error($conn));
		exit();
}
  if(mysqli_num_rows($sql)>0){
	  $_SESSION['name']=$name;
	  $_SESSION['time']=time();
	  echo $_SESSION['time'];
	  if($se=="1"){
	  echo "<script>alert('登录成功！');location='../home/home.php';</script>";
	  echo "";
	  }else{
		   echo "<script>alert('登录成功！');location='../admin/admin_insert.php';</script>";
		  }
	  }else{
		    echo "<script>alert('用户名或密码错误！');location='../login/login.php';</script>";
		  }
?>
</body>
</html>