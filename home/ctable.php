<?php
include("DBDA.class.php");
$db = new DBDA();
$key = $_POST["key"];
$sql = "select * from tb_western1 where site='".$key."' order by rank";
echo $db->JSONQuery($sql);
?>
