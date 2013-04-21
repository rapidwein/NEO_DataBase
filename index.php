<!DOCTYPE html>
<?php
	include_once("./pages/config.lib.php");
	global $loggedIn;
	if(isset($_SESSION['emailId']))
		$loggedIn = 1;	
?>
<html>
  <head>
    <title>NASA Space App NEO</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="./css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="./css/main.css" rel="stylesheet" />
    <script src="./js/jquery-2.0.0.min.js"></script>
    <script src="./js/bootstrap.min.js"></script>
    
    <script type="text/javascript">

		var tableData = new Array();
		var imgData = new Array();
		//$("#title").append("asdasd");
		$.ajax({
			url : './pages/unConfirmed.php',
			type : 'get',
			success : function(data){
				
			tableData = data.split(':');
console.log(tableData[0]);
			if(tableData[1]!=""){	
			$('#listScript').append(tableData[0]);
				imgData = tableData[1].split(';');
			for(i=0;i<imgData.length-1;i++){
	console.log("#imgModal"+imgData[i]);
		
			//$('#imgTag').empty();
			$("#imgModal"+imgData[i]).append("<img class = 'modal-body' src='./img/"+imgData[i]+".jpg' alt = '"+imgData[i]+"' />");
			console.log($('#imgModal'+imgData[i]).html());
				}
			}
		else{
			 $('#listScript').append("<h3 align='center'>Current List of Potential Discoveries</h3><div>This table is empty :X</div>");
		}		
		}
			
		});
		

	function registration(){
		$.ajax({
			url: './pages/registration.php',
			type: 'post',
			data: {'fullName': $('input[name=fullName]').val(), 'emailId':$('input[name=emailId]').val(), 'regPassword':$('input[name=regPassword]').val(), 'confPassword':$('input[name=confPassword]').val(), 'background': $('#background').val()},
			success: function(data){
				if(data=='Success!')
					window.location = "./";
				else{	
					$('#errorMessage').empty();
					$('#errorMessage').append(data);	
				}
			}		
		});
	}
	
	function login(){
		$.ajax({
			url: './pages/login.php',
			type: 'post',
			data: {'emailId':$('input[name=username]').val(), 'password':$('input[name=password]').val()},
			success: function(data){
				if(data){
					$('#loginErrorMessage').empty();
					$('#loginErrorMessage').append(data);	
				}
				else 
					window.location = "./";
			}
		});
	}

    </script>
    
  </head>
  <body>
    <div style='float:left;'>
		<h1 id="title">Hellooo!</h1>
	</div>
    <?php
    if($loggedIn==1 && $_SESSION['views']==1){
		echo "<div id=''>Hello!".$_SESSION['emailId']." <a href='./pages/logout.php'>Logout</a></div>";
		$_SESSION['views']++;
		}
	else if($loggedIn==1 && $_SESSION['views']!=1){
		echo "<div id=''>".$_SESSION['emailId']." <a href='./pages/logout.php'>Logout</a></div>";
		$_SESSION['views']++;
		}	
	else 
		echo "<div id=''><a href='#myModalRegister' role='button' class='btn btn-primary' data-toggle='modal'> REGISTER </a> <a href='#myModalLogin' role='button' class='btn btn-primary' data-toggle='modal'> LOGIN </a></div>";
	?>
	
	<!-- Registration Modal -->
	<div id="myModalRegister" align='center' class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
			<h3 id="myModalLabel">Register</h3>
		</div>
		<div class='logReg' id="regForm">
		<div class="modal-body">
			<table id='regFormDetails'>
			<tr> <td class='inputFields'> Full Name </td> <td class='inputValues'><input name='fullName' type='text' /> </td> </tr>
			<tr> <td class='inputFields'> Email Id </td> <td class='inputValues'><input name='emailId' type='email' /> </td> </tr>
			<tr> <td class='inputFields'> Choose Password </td> <td class='inputValues'><input name='regPassword' type='password' /> </td> </tr>
			<tr> <td class='inputFields'> Confirm Password </td> <td class='inputValues'><input name='confPassword' type='password' /> </td> </tr>
			<tr> <td class='inputFields'> Background </td> <td class='inputValues'><select id='background'> <option value=""> </option> <option value="student">Student</option> <option value="scientist">Scientist</option> <option value="other">Other</option> </select></td> </tr>
			</table>
		</div>
		<div class="modal-footer">
			<!--<button class="btn" data-dismiss="modal" aria-hidden="true">Close</button> -->
			<button class="btn btn-primary" onclick='registration()'>Register</button>
		</div>
		</div>
	<div id="errorMessage"></div>
	</div>

	<div id = "listScript" align='center'></div>

</div>
  
	<!-- Modal -->
	
	<!-- Login Modal -->

	<div id="myModalLogin" align='center' class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
			<h3 id="myModalLabel">Login</h3>
		</div>
		<div class='logReg' id="loginForm"> 
		<div class="modal-body">
			<input name='username' type='text' placeholder='Username' />
			<input name='password' type='password' placeholder='Password' /> 
		</div>
		<div class="modal-footer">
			<!--<button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>-->
			<button class="btn btn-primary" onclick="login()">Login</button>
		</div>
		</div>
		<div id="loginErrorMessage"></div>
	</div>
	<?php
	if($loggedIn==1)
		echo "<div id='publish'><a href='./publish.php'> <button class='btn btn-primary' id='publishButton'> PUBLISH </button> </a> </div>";
	?>
	
  </body>
</html>
