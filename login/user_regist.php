<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>用户注册</title>
</head>
<body>
<?php
//连接数据库
  $host="";
  $userName="";
  $password="";
  $dbName="";
  $conn = mysqli_connect($host,$userName,$password,$dbName);
  mysqli_query($conn,"set names utf8");
  if(isset($_POST['sub'])){
	  $name= $_POST['user'];
	  $password= $_POST['pwd'];
	  $check_query ="select name from tb_visitor where name='$name'";
	  if(mysql_fetch_array($check_query)){
   echo '错误：用户名 ',$name,' 已存在。<a href="javascript:history.back(-1);">返回</a>';
   exit;
   }else{
	  $sqlstr1="insert into tb_visitor(name,password) values('".$name."','".$password."')";
	$word=mysqli_query($conn,$sqlstr1);	
	if($word){
	    echo "<script>alert('注册成功');location='login.php';</script>";
  }else{
	  echo "<script>alert('注册失败，请重新注册');location='regist.php';</script>";} }  } ?>
</body>
</html>