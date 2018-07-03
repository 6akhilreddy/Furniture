
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Furniture</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<!--[if ie]><meta content='IE=8' http-equiv='X-UA-Compatible'/><![endif]-->
		
		<!-- bootstrap -->
		<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">      
		<link href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">		
		<link href="themes/css/bootstrappage.css" rel="stylesheet"/>
		
		<!-- global styles -->
		<link href="themes/css/main.css" rel="stylesheet"/>
		<link href="themes/css/jquery.fancybox.css" rel="stylesheet"/>
				
		<!-- scripts -->
		<script src="themes/js/jquery-1.7.2.min.js"></script>
		<script src="bootstrap/js/bootstrap.min.js"></script>				
		<script src="themes/js/superfish.js"></script>	
		<script src="themes/js/jquery.scrolltotop.js"></script>
		<script src="themes/js/jquery.fancybox.js"></script>
		<!--[if lt IE 9]>			
			<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
			<script src="js/respond.min.js"></script>
		<![endif]-->
	</head>
    <body>		
		<div id="top-bar" class="container">
			<div class="row">
				<div class="span4">
				</div>
				<div class="span8">
					<div class="account pull-right">
						<ul class="user-menu">				
						
							<li><a href="logout.php">Logout</a></li>		
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div id="wrapper" class="container">
			<section class="navbar main-menu">
				<div class="navbar-inner main-menu">				
					<a href="index.php" class="logo pull-left"><font size=10>Furniture</font></a>
					<nav id="menu" class="pull-right">
						<ul>
																						
							<li><a href="./products.html">Sofa Set</a></li>			
														
							<li><a href="./products.html">Cots</a></li>
							<li><a href="./products.html">Tables</a></li>
							<li><a href="./products.html">Chairs</a></li>
						</ul>
					</nav>
				</div>
			</section>
			<section class="header_text sub">
			<img class="pageBanner" src="themes/images/pageBanner.png" alt="New products" >
				<h4><span>Product Detail</span></h4>
			</section>
			<section class="main-content">				
				<div class="row">						
					<div class="span9">
						<div class="row">
							<div class="span4">
						
					<?php
					include("Admin/config.php");
					$id =$_GET['id'];
		 			$sql = "select * from furniture where id=$id ";
		 			$result = mysqli_query($con,$sql);
		 			
		 			
		 				while($row = mysqli_fetch_assoc($result))
				{
						$IDstore = $row['image'];
						$Name = $row['name'];
						
						echo "<img src='".$IDstore."' height=500 width=500 />";
						

					
				}																	
												?>
												
											</ul>



								
								<ul class="thumbnails small">								
									<li class="span1">
	
									</li>
								</ul>
							</div>
							<div class="span5">
								<address><font size=5>
									<?php
									$id =$_GET['id'];
		 			$sql = "select * from furniture where id=$id ";
		 			$result = mysqli_query($con,$sql);
		 			
										while($row = mysqli_fetch_assoc($result))
				{
						
						$Name = $row['name'];
						$Brand = $row['brand'];
						$Cost = $row['cost'];
						
						$Color = $row['color'];
						$Size = $row['size'];
						echo "<strong>Name:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong> <span>".$Name."</span><br><strong>Brand:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong> <span>".$Brand."</span><br><strong>Size:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong> <span>".$Size."</span><br><strong>Color:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong> <span>".$Color."</span><br>		</address><h4><strong>Price: RS.".$Cost."</strong></h4>";
						

					
				
							}
							?></font>
							</div>
							<div class="span5">
								<?php
									$id =$_GET['id'];
		 			$sql = "select * from furniture where id=$id ";
		 			$result = mysqli_query($con,$sql);
		 			
										while($row = mysqli_fetch_assoc($result))
				{
						
						$Name = $row['name'];
						$cost = $row['cost'];
					}
						echo "<form  method=post action=buy.php?name=$Name&cost=$cost><br><br><br><button class= btn-inverse type=submit name=buy><font size=5.5>BUY</font></button></form>";
						
						?>		
							</div>							
						</div>
						<div class="row">
							<div class="span9">
								<ul class="nav nav-tabs" id="myTab">
									<li class="active"><a href="#home">Description</a></li>
									<li class=""></li>
								</ul>							 
								<div class="tab-content">

									<div class="tab-pane active" id="home"><font size="4">
			<?php
									$id =$_GET['id'];
		 			$sql = "select * from furniture where id=$id ";
		 			$result = mysqli_query($con,$sql);
		 			
										while($row = mysqli_fetch_assoc($result))
				{

						$Desc = $row['details'];

						echo "$Desc";

					}


									?></font></div>
																	</div>							
							</div>						
							
					</div>
					
				</div>
			</section>			
			<section id="footer-bar">
				<div class="row">
					<div class="span3">
						<h4>Navigation</h4>
						<ul class="nav">
							<li><a href="./index.php">Homepage</a></li>  
							<li><a href="./contact.html">Contact Us</a></li>
							<li><a href="./logout.php">Logout</a></li>							
						</ul>					
					</div>
				
					<div class="span5">
						<p class="logo"><font size="10">Furniture</font></p>
						<p>
						We provide the best and quality furniture for the minimum price.All company furnitures are avalibale with us.</p>
						<br/>
						
					</div>					
				</div>	
		</div>
		<script src="themes/js/common.js"></script>
		<script>
			$(function () {
				$('#myTab a:first').tab('show');
				$('#myTab a').click(function (e) {
					e.preventDefault();
					$(this).tab('show');
				})
			})
			$(document).ready(function() {
				$('.thumbnail').fancybox({
					openEffect  : 'none',
					closeEffect : 'none'
				});
				
				$('#myCarousel-2').carousel({
                    interval: 2500
                });								
			});
		</script>
    </body>
</html>