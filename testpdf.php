<!DOCTYPE html>
<html>
<head>

	<title>PDF</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
</head>
<body>
<br><br>
	<div class="container" ><div class="text-center">
		<br><br>
		<h1 class="btn btn-info">This page will be a pdf.</h1>
		<form id="form1">
			<center>
			<div  id="printableArea">
		
			<h1>Hi, I am Pranta</h1>
			<p>I love Photography</p>
		   </div>
		   </center>

		<input type="button" class="btn btn-primary" id='print' value="Print This"  />
    </form>
</div>
	</div>

</body>
</html>

<!--   <script type="text/javascript"> 
  window.addEventListener("load", window.print());
</script> -->
	<script src='assets/jquery.js'></script>
	<script src="assets/jQuery.print.js"></script>
	<script>

		$(function(){
			$('#print').on('click', function() {
                $.print("#printableArea");
            });
		});
	</script>
<script type="text/javascript">


        $("#btnPrint").live("click", function () {
        	$("#printableArea").addEventListener("load",window.print());
           // window.addEventListener("load", window.print());
        });
</script>