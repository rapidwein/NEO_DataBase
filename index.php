<!DOCTYPE html>
<html>
  <head>
    <title>NASA Space App</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="./css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="./css/main.css" rel="stylesheet" />
    <script src="./js/jquery-2.0.0.min.js"></script>
    <script src="./js/bootstrap.min.js"></script>
    
    <script type="text/javascript">
		//$("#title").append("asdasd");
    </script>
    
  </head>
  <body>
    <div style='float:left;'>
		<h1 id="title">Hellooo!</h1>
	</div>
    <div id="">
		<a href="#myModalRegister" role="button" class="btn" data-toggle="modal"> REGISTER </a>
		<a href="#myModalLogin" role="button" class="btn" data-toggle="modal"> LOGIN </a>
	</div>
	
	<!-- Modal -->
	<div id="myModalRegister" align='center' class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
			<h3 id="myModalLabel">Register</h3>
		</div>
		<form class='logReg' name="regForm" action='./pages/registration.php' method="POST" enctype="multipart/form-data">
		<div class="modal-body">
			<table id='regFormDetails'>
			<tr> <td class='inputFields'> Full Name </td> <td class='inputValues'><input name='fullName' type='text' /> </td> </tr>
			<tr> <td class='inputFields'> Email Id </td> <td class='inputValues'><input name='emailId' type='email' /> </td> </tr>
			<tr> <td class='inputFields'> Choose Password </td> <td class='inputValues'><input name='regPassword' type='password' /> </td> </tr>
			<tr> <td class='inputFields'> Confirm Password </td> <td class='inputValues'><input name='confPassword' type='password' /> </td> </tr>
			<tr> <td class='inputFields'> Background </td> <td class='inputValues'><select name='background'> <option value=""> </option> <option value="student">Student</option> <option value="scientist">Scientist</option> <option value="other">Other</option> </select></td> </tr>
			</table>
		</div>
		<div class="modal-footer">
			<!--<button class="btn" data-dismiss="modal" aria-hidden="true">Close</button> -->
			<button class="btn btn-primary" type="submit">Register</button>
		</div>
		</form>
	</div>
	
	<!-- Modal -->
	<div id="myModalLogin" align='center' class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
			<h3 id="myModalLabel">Login</h3>
		</div>
		<form class='logReg' name="loginForm" action='./pages/login.php' method="POST" enctype="multipart/form-data"> 
		<div class="modal-body">
			<input name='username' type='text' placeholder='Username' />
			<input name='password' type='password' placeholder='Password' /> 
		</div>
		<div class="modal-footer">
			<!--<button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>-->
			<button class="btn btn-primary" type="submit">Login</button>
		</div>
		</form>
	</div>
	
  </body>
</html>
