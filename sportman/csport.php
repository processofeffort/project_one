<?php
include("../home/DBDA.class.php");
$db = new DBDA();
$key = $_POST["key"];
if(preg_match('/^[\x{4e00}-\x{9fa5}]+$/u',$key)>0){
	$sql = "select * from sportman where sportname like '%{$key}%'";
}else if($key==0){
	$sql = "select * from sportman";
}
else{
	$sql = "select * from sportman where site='".$key."'";
}echo $db->JSONQuery($sql);
?>
