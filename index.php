
<?php
session_start();
if(isset($_SESSION["uid"])){
	header("location:profile.php");
}

?>


<!DOCTYPE html>
<html lang="en-US" >
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="web_author" content="Ujjwal Raj 'N' Krishna Kumar N Nimesh Dahal">
		<meta name ="viewport" content="width=device-width initial-scale=1.0">
		<title>APK SHOP</title>
		<link rel="stylesheet"  href="css/bootstrap.min.css"/>
		<link rel="stylesheet" href="css/style.css">
		<script src="js/jquery2.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="main.js"></script>
		<script>
				var msg = 'Welcome To APK-SHOP'
				var clrs = new Array("red","green","blue","pink","yellow","black","gray","navy","cyan","magenta");
				var num_of_clrs=clrs.length
				function changeColor()
				{
					for (i=0; i<msg.length; i++)
					{
						var index=parseInt(Math.random()*num_of_clrs)
						var obj=document.getElementById('colortext' + i)
						obj.style.color=clrs[index]
					}
					setTimeout("changeColor()",150)		
				}
		</script>
		
		<style>
		#preloader{
			position:fixed;
			left:0;
			right:0;
			z-index:999;
			width:100%;
			height:100%;
			overflow:visible;
			background:#99cccc url('product/status.gif') no-repeat center center;
		}
	</style>
		
		
		
		<link rel="icon" type="image" href="product/logo.jpg">
		
		
	</head>
<body>
	
	<div id="preloader">
		
	</div>
	
	<a href="#" class="back-to-top" style="display: block;">Back to Top</a>
	<div class="navbar navbar-inverse navbar-fixed-top navbar-stacked">
		<div class="container-fluid">
			<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			</button>
				<a href="index.php" class="navbar-brand" style=color:yellow;><font face="algerian">APK SHOP</font></a>
				
			</div>
			<div class="collapse navbar-collapse" id="navbar-collapse">
			<ul class="nav navbar-nav">
				<li><a href="index.php" style=color:yellow;><span class="glyphicon glyphicon-home"  ></span>Home</a></li>
				<li><a href="#" class="dropdown-toggle" data-toggle="dropdown" style=color:yellow;><span class="glyphicon glyphicon-modal-window" ></span>Product</a>
				<div class="dropdown-menu" style="width:400px;">
					<div class="panel-heading">
						<div class="row container">
							<div class="col-md-2">
								<div id="get_category">
								</div>
							</div>
								<div class="col-md-2">
									
										<!--<div class="nav nav-pills">
										<li class="active"><a href="#"><h4>Categories</h4></a></li>
										<li><a href="#">Categories</a></li>
										<li><a href="#">Categories</a></li>
										<li><a href="#">Categories</a></li>
										<li><a href="#">Categories</a></li>
										</div>-->
									<div id="get_brand">
									</div>
										<!--<div class="nav nav-pills">
										<li class="active"><a href="#"><h4>Brand</h4></a></li>
										<li><a href="#">Categories</a></li>
										<li><a href="#">Categories</a></li>
										<li><a href="#">Categories</a></li>
										<li><a href="#">Categories</a></li>
										</div>-->
								</div>
						</div>
					</div>
				</div>
				</li>
				<li style="width:300px;left:10px;top:10px;"><input type="text" class="form-control" id="search"></li>
				<li style="top:10px;left:20px;"><button class="btn btn-warning" id="search_btn" >Search</button></li>
				<li  style="left:120px;">
				<body onload="changeColor()">
	
		<div id="text" style="font-size:large; font-family: 'cityscape font'; font-weight:bold;text-align:center; padding-top:15px;">
			<script>
			for (var i=0; i<msg.length; i++)
			{
				document.write("<span id ='colortext" + i + "'>" + msg.charAt(i) + "</span>");
			}
			</script>
		</div>

	</body>
				</li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<li><a href="#" class="dropdown-toggle" data-toggle="dropdown" style=color:yellow;><span class="glyphicon glyphicon-shopping-cart"></span>Cart<span class="badge">0</span></a>
					<div class="dropdown-menu" style="width:400px;">
						<div class="panel panel-success">
							<div class="panel-heading">
								<div class="row">
									<div class="col-md-3">Sl.No</div>
									<div class="col-md-3">Product Image</div>
									<div class="col-md-3">Product Name</div>
									<div class="col-md-3">Price in $</div>
								</div>
							</div>
							<div class="panel-body"></div>
							<div class="panel-footer"></div>
						</div>
					</div>
				</li>
				<li><a href="#" class="dropdown-toggle" data-toggle="dropdown" style=color:yellow;><span class="glyphicon glyphicon-user">SignIn</a>
					<ul class="dropdown-menu">
						<div style="width:300px;">
							<div class="panel panel-primary">
								<div class="panel-heading">Login</div>
								<div class="panel-heading">
									<label for="email">Email</label>
									<input type="email" class="form-control" id="email" required/>
									<label for="email">Password</label>
									<input type="password" class="form-control" id="password" required/>
									<p><br></p>
									<a href="changepsd.php" style="color:white; list-style:none;">Forgotten Password?</a><input type="submit" class="btn btn-success" style="float:right;" id="login" value="Login">
								</div>
								<div class="panel-footer" id="e_msg"></div>
							</div>
						</div>
					</ul>
				</li>
				<li><a href="customer_registration.php" style=color:yellow;><span class="glyphicon glyphicon-user">SignUp</a></li>
			</ul>
		</div>
	</div>
	</div>
	
	<p><br></p>
	
	
	
	

		<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <!--<ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
	<li data-target="#carousel-example-generic" data-slide-to="3"></li>
	<li data-target="#carousel-example-generic" data-slide-to="4"></li>
	<li data-target="#carousel-example-generic" data-slide-to="5"></li>
  </ol>-->

  <!-- Wrapper for slides -->
  <!-- Carousel image source starts here -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="product/carousel/1.jpg" alt="">
      <div class="carousel-caption">
	  
      </div>
    </div>
	
    <div class="item">
      <img src="product/carousel/2.jpg" alt="">
      <div class="carousel-caption">
      </div>
    </div>
	
	<div class="item">
      <img src="product/carousel/3.jpg" alt="">
      <div class="carousel-caption">
      </div>
    </div>
	
	<div class="item">
      <img src="product/carousel/4.jpg" alt="">
      <div class="carousel-caption">
      </div>
    </div>
	
	<div class="item">
      <img src="product/carousel/5.jpg" alt="">
      <div class="carousel-caption">
      </div>
    </div>
	
	<div class="item">
      <img src="product/carousel/6.jpg" alt="">
      <div class="carousel-caption">
      </div>
    </div>
	
	<div class="item">
      <img src="product/carousel/7.jpg" alt="">
      <div class="carousel-caption">
      </div>
    </div>
	
	<div class="item">
      <img src="product/carousel/9.jpg" alt="">
      <div class="carousel-caption">
      </div>
    </div>
	
	<div class="item">
      <img src="product/carousel/10.jpg" alt="">
      <div class="carousel-caption">
      </div>
    </div>
	
	<div class="item">
      <img src="product/carousel/11.jpg" alt="">
      <div class="carousel-caption">
      </div>
    </div>
    
  </div>
	 <!-- End of the Carousel image source -->
  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
	<p><br></p>
	
	<img alt="Shop with confidence" src="product/carousel/8.jpg" height="250px" width="1150px" data-a-hires="product/carousel/8.jpg">
	<img id="staticImage" width="190px" height="220px" src="product/10.jpg">
	<p><br></p>
	<div class="container-fluid">
		<div class="row">
			
			<div class="col-md-12">
				<div class="panel panel-danger">
					<div class="panel-heading"><center><h4><b><font face="harrington">Products</font></b></h4></center></div>
					 <div class="panel-body">
						<div id="get_product">
							<!--Here we get product jquery Ajax Request-->
						</div>
						<!--<div class="col-md-4">
							<div class="panel panel-warning">
								<div class="panel-heading">Samsung Galaxy</div>
								<div class="panel-body">
								<img src="product/4.jpg"/>
								</div>
								<div class="panel-heading">$.700.00
								<button style="float:right;" class="btn btn-danger btn-xs">AddToCart</button>
								</div>
							</div>
						</div>-->
					</div>
					
			<div class="col-md-1"></div>		
		</div>
	</div>
	</div>
	</div>
	
  <div class="container">
    <hr class="footer-divider">
		<footer class="clear-fix" >
		<div class="container">
			<div class="row">
				<div class="col-sm-2">
					<div class="footer-links">
						<div class="footer-header-bottom-margin"><h5>COMPANY INFORMATION</h5></div>
						<ul class="list-unstyled">
							<li><a href="about.php">About APK SHOP</a></li>
							
							<li><a href="#">Customer Speak</a></li>
							<li><a href="#">FAQs</a></li>
							<li><a href="#">Terms & Conditions</a></li>
							<li><a href="#">Privacy Policy</a></li>
							<li><a href="contactus.php">Contact Us</a></li>
						</ul>
					</div>
				</div>
				<div class="col-sm-2">
					<div class="footer-links">
						<div class="footer-header-bottom-margin"><h5>Shop @ APK</h5></div>
						<ul class="list-unstyled">
							<li><a href="#">Shop By Category</a></li>
							<li><a href="#">Shop By Manufacturer</a></li>
							<li><a href="#">Offers</a></li>
							<li><a href="#">Returns/Refunds</a></li>
						</ul>
					</div>
				</div>
				<div class="col-sm-2">
						<div class="footer-links">
						<div class="footer-header-bottom-margin"><h5>YOUR APK-SHOP ACCOUNT</h5></div>
						<ul class="list-unstyled">
							<li><a href="customer_registration.php">Register at APK SHOP</a></li>
							<li><a href="#">Track Your Order</a></li>
							<li><a href="#">Check Your Reward Points</a></li>
							
						</ul>
						</div>
				</div>
				<div class="col-sm-2">
						<div class="footer-links">
						<div class="footer-header-bottom-margin"><h5>Get in touch</h5></div>
						<ul class="list-unstyled list-inline">
							<li><a href="#" ><i class="fa fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#"><i class="fa fa-google"></i></a></li>
							<li><a href="#"><i class="fa fa-tumblr"></i></a></li>
						</ul>
						</div>
				</div>
				<div class="col-sm-4">
						<div class="footer-links text-center">
						<a href="#"><h5>News Letter</h5></a>
						<div class="row">
							<div class="col-md-12">
								<input type="text" id="email"  placeholder="email" >
								<br/>
								<br/>
								<a href="newsletter.php"><input   value="subscribe" type="button" class="btn btn-success btn-lg"></a>
							</div>
						</div>
						<br/>
						
								<ul class="list-unstyled list-unstyled">
								
						</ul>
						</div>
				</div>
			</div>
		</div>
</footer>
<div class="panel-footer" id="panel-footer"><center>Copyright and maintained by APK-SHOP&copy;2017</center></div>
  </div>


<script type="text/javascript">
// create the back to top button
$('body').prepend('<a href="#" class="back-to-top">Back to Top</a>');

var amountScrolled = 300;

$(window).scroll(function() {
	if ( $(window).scrollTop() > amountScrolled ) {
		$('a.back-to-top').fadeIn('slow');
	} else {
		$('a.back-to-top').fadeOut('slow');
	}
});

$('a.back-to-top, a.simple-back-to-top').click(function() {
	$('html, body').animate({
		scrollTop: 0
	}, 700);
	return false;
});
</script>
<script src="http://code.jquery.com/jquery-latest.min.js"></script>
	<script>
		jQuery(document).ready(function($){
			$(window).load(function(){
				$('#preloader').delay(4500).fadeOut('slow',function(){
					$(this).remove();
				});
			});
		});
	</script>

</body>
</html>
