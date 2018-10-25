<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>APK SHOP</title>
		<link rel="stylesheet"  href="css/bootstrap.min.css"/>
		<link rel="stylesheet" href="css/style.css">
		<script src="js/jquery2.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="main.js"></script>
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
	<center>
	<div class="container-fluid">
	<center>
	<div class="row">
			<div class="col-md-3"></div>
			<div class="col-md-6">
				<div class="panel panel-primary">
					<div class="panel-heading"><font face="harrington">Change your password!!</font></div>
					<div class="panel-body">
						<form name="frmChange" method="post" action="" onSubmit="return validatePassword()">
							<div style="width:500px;">
							<div class="message"><?php if(isset($message)) { echo $message; } ?></div>
							<table border="0" cellpadding="5" cellspacing="0" width="500" align="center" class="tblSaveForm">
							
							<tr>
							<td width=""><label>Current Password</label></td>
							<td width=""><input type="password" name="currentPassword" class="txtField"/><span id="currentPassword"  class="required"></span></td>
							</tr>
							<tr>
							<td><label>New Password</label></td>
							<td><input type="password" name="newPassword" class="txtField"/><span id="newPassword" class="required"></span></td>
							</tr>
							<td><label>Confirm Password</label></td>
							<td><input type="password" name="confirmPassword" class="txtField"/><span id="confirmPassword" class="required"></span></td>
							</tr>
							<tr>
							<td colspan="2"><input type="submit" name="submit" value="Submit" class="btnSubmit"></td>
							</tr>
							</table>
							</div>
		</form>

					
						
				</div>
			</div>
			<div class="col-md-2"></div>
		</div>
</div>

</div>
</center>
	<div class=" navbar navbar-fixed-bottom ">
		<div class="container-fluid">
			<div class="navbar-footer">
			<div class="panel-footer" id="panel-footer"><center>Copyright and maintained by APK-SHOP&copy;2017</center></div>	
			</div>
			
	</div>
	</div>
</body>
</html>