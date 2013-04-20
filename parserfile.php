<?php
$text_file = file_get_contents("http://www.minorplanetcenter.net/iau/NEO/neocp.txt"); 
$rows = explode("\n" , $text_file);
array_shift($rows);
foreach($rows as $row => $data){
$row_data = preg_split("/\s+/",$data);
$info[$row]['TempDesign'] = $row_data[0];
$info[$row]['Score'] = $row_data[1];
$info[$row]['Discovery1'] = $row_data[2];
$info[$row]['Discovery2'] = $row_data[3];
$info[$row]['Discovery3'] = $row_data[4];
$info[$row]['R.A'] = $row_data[5];
$info[$row]['Decl.'] = $row_data[6];
$info[$row]['V'] = $row_data[7];
$info[$row]['Updated1'] = $row_data[8];
$info[$row]['Updated2'] = $row_data[9];
$info[$row]['Updated3'] = $row_data[10];
$info[$row]['Updated4'] = $row_data[11];
$info[$row]['Note'] = $row_data[12];
$info[$row]['NObs'] = $row_data[13];
$info[$row]['Arc'] = $row_data[14];
$info[$row]['H'] = $row_data[15];
if($info[$row]['H']==""){
$info[$row]['Note']="-";
$info[$row]['NObs'] = $row_data[12];
$info[$row]['Arc'] = $row_data[13];
$info[$row]['H'] = $row_data[14];

}

echo $info[$row]['TempDesign']."<br />".$info[$row]['Score']."<br/>".$info[$row]['Discovery1']."-".$info[$row]['Discovery2']."-".$info[$row]['Discovery3']."<br/>".$info[$row]['R.A']."<br />".$info[$row]['Decl.']."<br />".$info[$row]['V']."<br />".$info[$row]['Updated1']." ".$info[$row]['Updated2']." ".$info[$row]['Updated3']." ".$info[$row]['Updated4']."<br />".$info[$row]['Note']."<br />".$info[$row]['NObs']."<br />".$info[$row]['Arc']."<br />".$info[$row]['H'];
}

exit;
?>
