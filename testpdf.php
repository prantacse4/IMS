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
			<div id="dvContainer">
		
			<h1>Hi, I am Pranta</h1>
			<p>I love Photography</p>
		   </div>

		<input type="button" class="btn btn-primary" value="Print This" id="btnPrint" />
    </form>
</div>
	</div>

</body>
</html>



<script type="text/javascript">
        $("#btnPrint").live("click", function () {
            var divContents = $("#dvContainer").html();
            var printWindow = window.open('', '', 'height=400,width=800');
            printWindow.document.write('<html><head><title>DIV Contents</title>');
            printWindow.document.write('</head><body >');
            printWindow.document.write(divContents);
            printWindow.document.write('</body></html>');
            printWindow.document.close();
            printWindow.print();
        });
</script>