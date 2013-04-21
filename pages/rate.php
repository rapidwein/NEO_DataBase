
<html>
  <head>
    <title>NASA Space App</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="../css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="../css/main.css" rel="stylesheet" />
    <script src="../js/jquery-2.0.0.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
	<script type='text/javascript'>
	$.ajax({
		url : './listScript.php',
		type : 'get',
		success:function(data){
		tableData=data.split(":");
		rateData=tableData[1].split(";");
		$('#rateDiscovery').append(tableData[0]);
		  imgData = tableData[1].split(';');
	console.log(tableData[1]);
                        for(i=0;i<imgData.length-1;i++){
        console.log("#imgModal"+imgData[i]);

                        //$('#imgTag').empty();
                        $("#imgModal"+imgData[i]).append("<img class = 'modal-body' src='../img/"+imgData[i]+".jpg' alt = '"+imgData[i]+"' />");
                        console.log($('#imgModal'+imgData[i]).html());
                                }
		}
	});
function upfunction(rateId){
	console.log(rateId);
	$.ajax({
		url : './rateUp.php',
		type : 'post',
		data : {'rateId' : rateId},
		success:function(data){
			$('#rate'+rateId).empty();
			$('#rate'+rateId).append("Done!");
		}
	});	
	}
function downfunction(rateId){
	  $.ajax({
                url : './rateDown.php',
                type : 'post',
                data : {'rateId' : rateId},
                success:function(){
			$('#rate'+rateId).empty();
                        $('#rate'+rateId).append("Done!");
                }
        });
        		
	}	
	</script>
</head>
<body>
	<div id="rateDiscovery" align='center'>
	
</div>
</body>
</html>
