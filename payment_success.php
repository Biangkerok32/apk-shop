<?php
session_start();
if(!isset($_SESSION["uid"])){
	header("location: index.php");

}

$trx_id = $_GET["tx"];
$p_st = $_GET["st"];
$amt = $_GET["amount"];
$cc = $_GET["cc"];
$cm = $_GET["cm"];
$c_mt = $_COOKIE["ta"];
if($_COOKIE["ta"] == $amount && $p_st == "completed" && $cm == $_SESSION["uid"]){
	echo "";
}

?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="UFT-8">
		<title>APK SHOP</title>
		<link rel="stylesheet" href="css/bootstrap.min.css"/>
		<link rel="stylesheet" href="css/style.css">
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
				<a href="#" class="navbar-brand" style=color:yellow;>APK SHOP</a>
				
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
						<h1><font face="algerian">Thank You!</font></h1>
						<hr/>
						<p>Hello <?php echo $_SESSION["name"];?>,Your payment process is 
						successfully completed and your transaction id is<b></b><br/>
						you can continue your shopping <br/><p>
						<a href="index.php" class="btn btn-success btn-lg">Continue Shopping</a>
						</div>
					
				</div>
				</div>
			<div class="col-md-2"></div>
			</div>
		</div>
		<br/>
		<br/>
		<br/>
		<br/>
		<br/>
		<br/>
		<br/>
		<br/>
		<br/>
		<br/>
		<br/>
		<br/>
		<div class="panel-footer">
		<div ><center>Copyright and maintained by APK-SHOP&copy;2017</center></div>
		</div>
	</body>
</html>