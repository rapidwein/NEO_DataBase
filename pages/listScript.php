<?php
include_once "config.lib.php";
$query = "SELECT * FROM NEOdata WHERE Score!='NULL' ORDER BY Score DESC";
$res = mysql_query($query);
echo "<table><tr><td><div align='center'>TempDesign</div></td><td><div align='center'>Score</div></td><td><div align='center'>Discovery</div></td><td><div align='center'>R.A</div></td><td><div align='center'>Decl.</div></td><td><div align='center'>V</div></td><td><div align='center'>Updated</div></td><td><div align='center'>Note</div></td><td><div align='center'>NObs</div></td><td><div align='center'>Arc</div></td><td><div align='center'>H</div></td>";

while($info = mysql_fetch_array($res)){
	echo "<tr><td><input type='checkbox' value='".$info[0]."' />".$info[0]."</td>";
	for($i=1;$i<sizeof($info);$i++){
		echo "<td><div align='center'>".$info[$i]."</div></td>";
	}
	echo "</tr>";
}

echo "</table>";
exit;
?>
