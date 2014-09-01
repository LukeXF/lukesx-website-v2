<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="">
		<meta name="author" content="">
		<link rel="icon" href="assets/favicon.ico">

		<title>Luke Brown Development</title>

		<!-- Bootstrap core CSS -->
		<link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
		<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
		<link href="assets/css/style.css" rel="stylesheet">


		<link rel="stylesheet" type="text/css" href="assets/css/component.css" />
		<script src="assets/js/modernizr.custom.js"></script>


		<link href='http://fonts.googleapis.com/css?family=Lato:300,400' rel='stylesheet' type='text/css'>

		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
		<script type="text/javascript" src="assets/js/script.js"></script>



	</head>
	<body>


		<!-- Main jumbotron for a primary marketing message or call to action -->
		<div class="jumbotron top">
			<div class="container">
				<div class="row"> 
					<div class="col-md-6 col-md-offset-3">	
						<h1>Luke Brown Development						
						<?php
						// set correct path!
						require_once('getTwitterFollowers.php');
						// change screen name to yours
						getTwitterFollowers('DiamondXF');
						?></h1>
					</div>
				</div>
			</div>
		</div>


		<div class="navbar navbar-default" role="navigation">
			<div class="container-fluid">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".cl-effect-5">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand navbar-toggle" data-toggle="collapse" href="#">Navigation ></a>
				</div>
			</div>

			<section class="color-grey">
				<div class="container">
					<nav class="navbar-collapse collapse cl-effect-5">
						<a href="#p1"><span data-hover="Home">Home</span></a>
						<a href="#p2"><span data-hover="Work">Work</span></a>
						<a href="#p3"><span data-hover="Play">Play</span></a>
						<a href="#p4"><span data-hover="Info">Info</span></a>
					</nav>
				</div>
			</section>
		</div>

		<div class="container">


			<div id="rounded">
				<div id="main" class="container">
		
				    <div class="clear"></div>
	    
					<div id="pageContent">
						
						<?php include 'pages/1.html' ?>

	    			</div>
	    
	    			<div class="clear"></div>

	    		</div>
				
			</div> <!-- /rounded -->
		</div> <!-- /container -->



		<div class="jumbotron bottom">
			<div class="container">
				<div class="row"> 
					<div class="col-md-6 col-md-offset-3">
					</div>
				</div>
			</div>
		</div>


		<!-- Bootstrap core JavaScript
		================================================== -->
		<!-- Placed at the end of the document so the pages load faster -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		<script src="http://getbootstrap.com/dist/js/bootstrap.min.js"></script>
	</body>
</html>