<?php
include_once "config.lib.php";
$data ="";
$query = "SELECT * FROM NEOdata WHERE Score>60 AND countUp + countDown >50 ORDER BY Score DESC";
$res = mysql_query($query);
echo "<h3 align = 'center'>Current List Of Potential Discoveries</h3><br /><table class='table table-striped table-bordered table-condensed'><tr><td><div align='center'>TempDesign</div></td><td><div align='center'>Score</div></td><td><div align='center'>Discovery</div></td><td><div align='center'>R.A</div></td><td><div align='center'>Decl.</div></td><td><div align='center'>V</div></td><td><div align='center'>Remarks</div></td>";

while($info = mysql_fetch_array($res)){
		$data.= $info[0].";";
        echo "<tr><td><a href = '#imgModal".$info[0]."' class='btn' data-toggle='modal' id = '".$info[0]."'>".$info[0]."</a>";
echo "<script type ='text/javascript'>
	$('body').append(\" <div id='imgModal$info[0]' class='modal hide fade'><div class='modal-header'><button type='button' class='close' data-dismiss='modal' aria-hidden='true'>x</button></div></div>\");</script>";
echo "</td>";
for($i=1;$i<7;$i++){
                echo "<td><div align='center'>".$info[$i]."</div></td>";
        }
        echo "</tr>";
}

echo "</table>".":".$data;
exit;
?>
