<!DOCTYPE HTML>
<html>
	<head>
		<title>Settings</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<link href="css/home.css" rel="stylesheet" type="text/css"/>
	</head>
	<body>
		<nav class='navbar navbar-inverse navbar-fixed-top'>
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
						<li><a href='cart.html'><span class="glyphicon glyphicon-shopping-cart"></span> Cart</a></li>
						<li class='active'><a href='settings.html'><span class="glyphicon glyphicon-cog"></span> Settings</a></li>
						<li><a href=''><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
					</ul>
				</div>
			</div>
		</nav>
		<div class="content top">
		<div class="container">
			<div class="row row-style">
				<div class="col-xs-4">
					<h2>Change Password</h2>
					<form>
						<input type="password" class="form-group form-control" name="old" placeholder="Old Password">
						<input type="password" class="form-group form-control" name="new" placeholder="New Password">
						<input type="password" class="form-group form-control" name="renew" placeholder="Re-type New Password">
						<button class="btn btn-primary">Change</button>
					</form>
				</div>
			</div>
		</div>
		</div>
		<footer>
			<div class="container">
				<center>Copyright © Lifestyle Store. All Rights Reserved | Contact Us: +91 90000 00000</center>
			</div>
		</footer>
	</body>
</html>