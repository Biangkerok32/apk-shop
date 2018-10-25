<?php

session_start();
if(isset($_SESSION["uid"])){
	header("location:index.php");
	
}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>APK SHOP</title>
		<link rel="stylesheet" href="css/bootstrap.min.css" />
		<script src="js/jquery2.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="main.js"></script>
		<style>
		table tr td {padding:10px;}
		</style>
		<link rel="icon" type="image" href="product/logo.jpg">
	</head>
	<body>
		<div class="navbar navbar-inverse navbar-fixed-top navbar-stacked">
		<div class="container-fluid">
			<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			</button>
				<a href="#" class="navbar-brand" style=color:yellow;><font face="algerian">APK SHOP</font></a>
				
			</div>
			<div class="collapse navbar-collapse" id="navbar-collapse">
			<ul class="nav navbar-nav">
				<li><a href="index.php"><span class="glyphicon glyphicon-home" style=color:yellow;>Home</a></li>
				<li><a href="#"><span class="glyphicon glyphicon-modal-window" style=color:yellow;>Product</a></li>
			</ul>
		</div>
	</div>
	</div>
		<p><br/></p>
		<p><br/></p>
		<p><br/></p>
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-2"></div>
				<div class="col-md-8">
				<div class="panel panel-default">
					<div class="panel-heading"></div>
					<div class="panel-body">
						<h1><font face="harrington">Customer Order details</font></h1>
						<hr/>
						<div class="row">
							<div class="col-md-6">
							<img style="float:right;" src="product/4.jpg" class="img-thumbnail"/>
							</div>
							<div class="col-md-6">
								<table>
									<tr><td>Product Name</td><td><b>Sony Camera</b></td></tr>
									<tr><td>Product Price</td><td><b>$500</b></td></tr>
									<tr><td>Quantity</td><td><b>3</b></td></tr>
									<tr><td>Payment</td><td><b>Completed</b></td></tr>
									<tr><td>Transaction Id</td><td><b>RTSH5415SHSHYD87D25S</b></td></tr>
								</table>
							</div>
						</div>
					</div>
					<div class="panel-footer"></div>
				</div>
			</div>
			<div class="col-md-2"></div>
			</div>
		</div>
		<div class=" navbar-info navbar-fixed-bottom">
		<div class="container-fluid">	
			<div class="navbar-footer">
			<center>Copyright and maintained by APK-SHOP&copy;2017</center>
			</div>
		
	</div>
	</div>
	</body>
</html>