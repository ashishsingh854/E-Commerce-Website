<!DOCTYPE HTML>
<html>
	<head>
		<title>Login</title>
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
						<li><a href='home.html'><span class="glyphicon glyphicon-home"></span>Home</a></li>
						<li class='active'><a href='login.html'><span class="glyphicon glyphicon-user"></span>Login</a></li>
						<li><a href='signup.html'><span class="glyphicon glyphicon-log-in"></span> Sign Up</a></li>
					</ul>
				</div>
			</div>
		</nav>
		<div class="content top centered">
		<div class="container">
			<div class="row row-style">
				<div class="col-xs-4">
					<div class="panel panel-primary">
						<div class="panel-heading">LOGIN</div>
						<div class="panel-body">
							<p class="text-warning">Login to make purchase</p>
							<form>
								<input type="email" class="form-group form-control" name="email" placeholder="Email">
								<input type="password" class="form-group form-control" name="password" placeholder="Password">
								<button class="btn btn-primary">Login</button><br><br><br>
							</form>
						</div>
						<div class="panel-footer">Don't have an account? <a href="signup.html">Register</a></div>
					</div>
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