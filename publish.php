<?php

	include_once("./pages/config.lib.php");
		
	if(!isset($_SESSION['emailId']))
		header('Location: ./');
?>
<html><head>
<title>NASA Space App: Publish</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link href="./css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="./css/main.css" rel="stylesheet" />
    <script src="./js/jquery-2.0.0.min.js"></script>
    <script src="./js/bootstrap.min.js"></script>
    <script type='text/javascript'>
	function publish(){
		$.ajax({
			url: './pages/validatePublish.php',
			type: 'post',
			data: {'neoName': $('input[name=neoName]').val(), 'year':$('input[name=year]').val(), 'month':$('input[name=month]').val(), 'day':$('input[name=day]').val(), 'ra': $('input[name=ra]').val(), 'decl': $('input[name=decl]').val(), 'radius': $('input[name=radius]').val(), 'limit': $('input[name=limit]').val(), 'obs': $('input[name=obs]').val(), 'file': $('input[name=file]').val()},
			success: function(data){
			console.log(data);	
				if(data!='Success!'){
					$('#errorMessage').empty();
					$('#errorMessage').append(data);	
				}
				else
					window.location = "./";
			}		
		});
	}
    </script>
</head>
<body>
<div>
<h2> Publish your finding </h2>	
</div>
<div id='publishForm' align='center'>

<table>
<tr> <td> NEO Name </td> <td> <input name="neoName" type='text' style='width:100px' size="12"> </td> </tr> 
<tr> <td> Discovery Date </td> <td> <input name="year" maxlength="4" size="4" type='text' value="2013"> <input name="month" maxlength="2" size="2" type='text' value="04"> <input name="day" maxlength="5" type='text' size="5" value="21.27"> UT </td> </tr>
<tr> <td> R.A. </td> <td> <input name="ra" maxlength="12" type='text' size="12"> </td> </tr> 
<tr> <td> Decl. </td> <td> <input name="decl" type='text' maxlength="12" size="12"></td> </tr>
<tr> <td> Radius of search </td> <td> <input name="radius" maxlength="5" type='text' size="3" value="15"> arc-minutes </td> </tr>
<tr> <td> Limiting magnitude, <i>V</i> </td> <td> <input name="limit" maxlength="4" type='text' size="4" value="20.0"> </td> </tr>
<tr> <td> No. of Observations </td> <td> <input name="obs" maxlength="3" type='text' size="2" value="1"> </td> </tr>
<tr> <td> Upload image </td> <td> <input type="file" name="file" id="file"> </td> </tr>
<tr> <td colspan='2' align='center'> <input type="submit" class="btn btn-primary" value=" Publish This "> </td> </tr>
</table>

</div>

</div>
<h2>Tips to fill the form</h2>
We hope that the information given below will be useful in helping you to use
the minor-planet checker form properly.
<dl>
<dt><a name="date"><b>NEO Name</b></a>
</dt><dd>The name you wish to give to your finding.</dd><dt><a name="date"><b>Discovery Date</b></a>
</dt><dd>The date to be entered is the UT date of your observation (given to 0.1 or
0.01 of a day).  The default is now.
</dd><dt><a name="pos"><b>Absolute Position (R.A. and Decl.)</b></a>
</dt><dd>The J2000.0 right ascension(R.A.) should be entered in one of the following forms:
HH MM; HH MM.d; HH MM.dd; HH MM SS; HH MM SS.d; or HH MM SS.dd.  HH
represents the hours, MM the minutes, SS the seconds and d/dd any decimal
part of the minutes or seconds.  Leading zeroes are to be given when
any quantity is less than 10.
<p>
The J2000.0 declination(Decl.) should be entered in one of the following forms:
sDD MM; sDD MM.d; sDD MM.dd; sDD MM SS; or sDD MM SS.d.  s represents the
sign (`+' or `-', must be given), DD the degrees, MM the minutes, SS the
seconds and d/dd any decimal part of the minutes or seconds.  Leading
zeroes are to be given when any quantity is less than 10.
</p><p>
Some examples of valid input follow.
</p><ul>
<li>If the position you wish to search around is 7h13.7m, -14°2', you
   would enter `07 13.7' and `-14 02' in the relevant boxes
</li><li>If the position is 14h3m8s, +1°48'.3, you would enter
   `14 03 08' and `+01 48.3'.
</li></ul>
<a name="pos"></a></dd><dt><a name="radius"><b>Radius of search</b></a>
</dt><dd>The default setting of 15 arcminutes is thought to be appropriate for the
standard amateur setup, considering the motion of main-belt asteroids.  It
may be lowered (down to 5 arcminutes) or raised (up to 300 arcminutes) as
desired.  If your
specified radius exceeds the maximum allowable radius, the maximum value will
be used.
<a name="limit"></a></dd><dt><a name="limit"><b>Limiting magnitude</b></a>
</dt><dd>The default setting of <i>V</i> = 20.0 may be changed as necessary.
Note that you should set this value to be at least 1.0 magnitude fainter
than your telescope's limiting magnitude to allow for poorly-known minor-planet
magnitudes.
<p>
<a name="obscode"></a></p></dd></dl>
<p></p><hr><p>
</p>


</center></center>
</div>
</body></html>
