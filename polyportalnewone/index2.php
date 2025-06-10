<!DOCTYPE html>
<html>
	<head>
		<title>ESTC POLYTECHNIC</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		<script type="text/javascript" src="css/bootstrap/bootstrap-5.0.1-dist/js/bootstrap.min.js"></script>
		<link rel="stylesheet" type="text/css" href="css/boxstyle.css">
	</head>
	<body class="bg-light text-dark">
	<?php include('header.php') ?>
		<div class="container mt-5">
			<div class="row">
			<a href="index.php" class="btn btn-warning">BACK</a><br /><br />
				<div class="col-md-12">
				</div>
			</div>
			<div class="row text-center ml-5">
				<div class="col">
					<div class="div4 bg-danger shadow"><a href="marks2.php" style="text-decoration: none;font-size: x-large; color: #ffffff;">EXAM</a></div>
				</div>
				<div class="col">
					<div class="div5 bg-info shadow"><a href="record12.php" style="text-decoration: none;font-size: x-large; color: #ffffff;">REPORT</a></div>
				</div>
			</div>
		</div>
	</div>
	<script>
		function myfunc(){
		var person=prompt("Enter ADMIN Password: ");
		if(person=="admin@estc")
		{
			location.replace("form.php");
		}
	}
	function repc(){
		var reportone=prompt("Enter Password: ");
		if(reportone=="admin@reportone")
		{
			location.replace("report.php");
		}
	}
	function feecheck(){
		var feetwo=prompt("Enter Password: ");
		if(feetwo=="admin@feeone")
		{
			location.replace("feeEntry.php");
		}
	}
	</script><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
	<?php include('footer.php'); ?>
	</body>
</html>