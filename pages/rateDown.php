<?php
include_once "config.lib.php";
$rateId = $_POST['rateId'];
$query = "SELECT * FROM NEOdata WHERE TempDesign = '".$rateId."'";
$res = mysql_query($query);
$info = mysql_fetch_array($res);
$countDown = $info['countDown']+1;
$score = floor(($info['countUp']/($info['countUp']+$countDown))*100);
$query1 = "UPDATE NEOdata SET countDown = ".$countDown.", Score=".$score." WHERE TempDesign = '".$rateId."'"; 
$res1=mysql_query($query1);
exit;
?>
