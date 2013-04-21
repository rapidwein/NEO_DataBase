<?php
//listScript
include_once "config.lib.php";
//$userId = $_SESSION['emailId'];
$userId = "me2@gmail.com";
$data="";
$query = "SELECT * FROM NEOdata WHERE userId!='".$userId."'";
$res = mysql_query($query);
echo "<h3 align ='center'>Rate Discoveries of other Astronomers</h3><table class='table table-striped table-bordered table-condensed'><tr><td><div align='center'>TempDesign</div></td><td><div align='center'>Score</div></td><td><div align='center'>Discovery</div></td><td><div align='center'>R.A</div></td><td><div align='center'>Decl.</div></td><td><div align='center'>V</div></td><td><div align='center'>Remarks</div></td><td><div align='center'>NObs</div></td><td><div align='center'>Arc</div></td><td><div align='center'>Discoverer</div></td><td><div align='center'>Rate</div></td>";

while($info = mysql_fetch_array($res)){
	
        $data.= $info[0].";";
        echo "<tr><td><a href = '#imgModal".$info[0]."' class='btn' data-toggle='modal' id = '".$info[0]."'>".$info[0]."</a>";
echo "<script type ='text/javascript'>
        $('body').append(\" <div id='imgModal$info[0]' class='modal hide fade'><div class='modal-header'><button type='button' class='close' data-dismiss='modal' aria-hidden='true'>x</button></div></div>\");</script>";
echo "</td>";	
for($i=1;$i<10;$i++){
		echo "<td><div align='center'>".$info[$i]."</div></td>";
$temp = "'".$info[0]."'";
		if($i==9){
			
			echo "<td>";
		if($info['countUp']!=0||$info['countDown']!=0)
		echo "<div id='rate".$info[0]."'></div>";
		
else
echo "<div id='rate".$info[0]."'><a id ='up".$info[0]."' href ='#' onclick="."upfunction(".$temp.")".">Up</a>/<a id ='down".$info[0]."' href='#' onclick="."downfunction(".$temp.")".">Down</a></div>";

echo "</td>";	
		}
	}
	echo "</tr>";
}

echo "</table>:".$data;
exit;
?>
