<?php
	require 'common.php';
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Lifestyle Store</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<link href="css/home.css" rel="stylesheet" type="text/css"/>
	</head>
	<body>
		<!--nav class='navbar navbar-inverse navbar-fixed-top'>
			<div class='container'>
				<div class='navbar-header'>
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a href='#' class='navbar-brand'>Lifestyle Store</a>
				</div>
				<div class="collapse navbar-collapse" id="myNavbar">
					<ul class='nav navbar-nav navbar-right'>
						<li class='active'><a href='#'><span class="glyphicon glyphicon-home"></span>Home</a></li>
						<li><a href='login.html'><span class="glyphicon glyphicon-user"></span>Login</a></li>
						<li><a href='signup.html'><span class="glyphicon glyphicon-log-in"></span> Sign Up</a></li>
					</ul>
				</div>
			</div>
		</nav-->
		<?php
			include 'header.php';
		?>
		<div class=content>
			<div id="banner-image">
				<div class="container">
					<div id="banner-content"><a href="products.html" class="btn btn-danger btn-lg active">Shop Now</a></div>
				</div>
			</div>
			<div class=container>
				<div class="col-md-4 col-sm-7">
					<a href='#'class="thumbnail">
						<img src='camera.jpg'>
						<div class=caption>
							<h2>Cameras</h2>
							<p>Choose among the best available in the world.</p>
						</div>
					</a>
				</div>
				<div class="col-md-4 col-sm-7">
					<a href='#' class="thumbnail">
						<img src='watch.jpg'>
						<div class=caption>
							<h2>Watches</h2>
							<p>Original watches from the best brands.</p>
						</div>
					</a>
				</div>
				<div class="col-md-4 col-sm-7">
					<a href='#' class="thumbnail">
						<img src='shirt.jpg'>
						<div class=caption>
							<h2>Shirts</h2>
							<p>Our exquisite collection of shirts.</p>
						</div>
					</a>
				</div>
			</div>
		</div>
		<footer>
			<div class=container>
				<center>Copyright © Lifestyle Store. All Rights Reserved | Contact Us: +91 90000 00000</center>
			</div>
		</footer>
	</body>
</html>