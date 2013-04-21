<?php
include_once "config.lib.php";
$rateId = $_POST['rateId'];
$query = "SELECT * FROM NEOdata WHERE TempDesign = '".$rateId."'";
$res = mysql_query($query);
$info = mysql_fetch_array($res);
$countUp = $info['countUp']+1;
$score = floor(($countUp/($info['countDown']+$countUp))*100);
$query1 = "UPDATE NEOdata SET countUp = ".$countUp.", Score =".$score." WHERE TempDesign = '".$rateId."'"; 
$res1=mysql_query($query1);
echo "SUCCESS";
exit;
?>
