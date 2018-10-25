<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="web_author" content="Ujjwal Raj 'N' Krishna Kumar N Nimesh Dahal">
		<title>APK SHOP</title>
		<link rel="stylesheet"  href="css/bootstrap.min.css"/>
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
	<div class = "container-fluid">
		<div class="row">
		<div class="col-md-2"></div>
						<div class="col-md-8" id="signup_msg">
						<!--Alert from signup form-->
						</div>
		<div class="col-md-2"></div>
		</div>
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8">
				<div class="panel panel-primary">
					<div class="panel-heading"><center><font face="harrington">Customer SignUp Form</font></center></div>
					<div class="panel-body">
					
					<form method="POST">
						<div class="row">
							<div class="col-md-6">
								<label for="f_name">First Name</label>
								<input type="text" id="f_name" name="f_name" class="form-control">
							</div>
							<div class="col-md-6">
								<label for="l_name">Last Name</label>
								<input type="text" id="l_name"  name="l_name"class="form-control">
							</div>		
						</div>
						<div class="row">
							<div class="col-md-12">
								<label for="email">Email</label>
								<input type="text" id="email"  name="email"class="form-control">
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<label for="password">Password</label>
								<input type="password" id="password"  name="password"class="form-control">
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<label for="repassword">Re-enter Password</label>
								<input type="password" id="repassword"  name="repassword"class="form-control">
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<label for="mobile">Mobile</label>
								<input type="text" id="mobile"  name="mobile"class="form-control">
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<label for="address1">Address Line 1</label>
								<input type="text" id="address1"  name="address1"class="form-control">
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<label for="address2">Address Line 2</label>
								<input type="text" id="address2"  name="address2"class="form-control">
							</div>
						</div>
						<p><br/></p>
						<div class="row">
							<div class="col-md-12">
								<input  style="float:right;" value="Sign Up" type="button" id="signup_button"  name="signup_button"class="btn btn-success btn-lg">
							</div>
						</div>
						
					</div>
					</form>
						<div class="panel-footer"></div>
				</div>
			</div>
			<div class="col-md-2"></div>
		</div>
		<div class="panel-footer" id="panel-footer"><center>Copyright and maintained by APK-SHOP&copy;2017</center></div>
	</div>
</body>
</html>