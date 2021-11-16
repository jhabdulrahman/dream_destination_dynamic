<html>

<head>
	<title> Dream Destination </title>

	
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="style.css" rel="stylesheet" type="text/css" />
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>

<body>
	<!-- top header starts-->
	<div class="top">
		<ul class="num">
			<li>| <a href="#"> <span class="fa fa-phone"> 044-4797654 |</span></a></li>
		</ul>
		<ul class="nav navbar-nav navbar-right " style="padding:0px;">
			<!-- <li><a href="#"> <span class="fa fa-twitter"> </span></a></li>
					<li><a href="#"> <span class="fa fa-facebook"> </span></a></li>
					<li><a href="#"> <span class="fa fa-pinterest"> </span></a></li>
					<li><a href="#"> <span class="fa fa-envelope"> ddtrip@gmail.com</span>   </a></li> -->
			<!--	<li style="margin-right:30px; margin-top:10px;float:right;"> <button type="button" class="btn btn-success btn-mg" data-toggle="modal" data-target="#myModal">Login</button>

						
						  <div class="modal fade" id="myModal" role="dialog">
								<div class="modal-dialog modal-mg">
								  <div class="modal-content">
									<div class="modal-header">
									  <button type="button" class="close" data-dismiss="modal">&times;</button>
									  <h4 class="modal-title">Log in</h4>
									</div>
									<div class="modal-body">
									  <form class="form-inline" action="/action_page.php">
											<div class="form-group">
											  <label for="email">Email:</label>
											  <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
											</div>
											<div class="form-group">
											  <label for="pwd">Password:</label>
											  <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
											</div> <br>
											<div class="checkbox">
											  <label><input type="checkbox" name="remember"> Remember me</label>
											</div> <br>
											<button type="submit" class="btn btn-success btn-mg" style="float:right ">Submit</button>
										  </form>
									</div>
									<div class="modal-footer">
									  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
									</div>
								  </div>
								</div>
							</div>
					</li> ---->
		</ul>

	</div>

	<!-- top header ends-->

	<!-- menu starts -->

	<nav class="navbar navbar-inverse navbar-fixed" data-spy="affix" data-offset-top="45" style="margin-bottom:0px;">
		<div class="container-fluid ">
			<div class="navbar-header ">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mynavbar">
					<span class="icon-bar"> </span>
					<span class="icon-bar"> </span>
					<span class="icon-bar"> </span>
				</button>
				<a class="navbar-brand" href="#myPage"> <img src="images/logo.png"> </a>
			</div>
			<div class="collapse navbar-collapse " id="mynavbar">
				<div class="nav navbar-nav navbar-right note ">
					<li class=" head menu"> <a href="index.php">Home </a> </li>
					<li class=" head menu"> <a href="services.php">Services </a> </li>
					<li class="dropdown head menu">
						<a class="dropdown-toggle" data-toggle="dropdown" href="tour.php">Tours
							<span class="caret"></span></a>
						<ul class="dropdown-menu menu">
							<li><a href="tour.php"> India Tours</a></li>
							<li><a href="#"> International Tours</a></li>
						</ul>
					</li>
					<li class="head menu"> <a href="blog.php">Blogs </a> </li>
					<li class="head menu"> <a href="portfolio.php">portfolio </a> </li>
					<li class="head menu"> <a href="contact.php" class="active">Contact Us </a> </li>
				</div>
			</div>
		</div>
	</nav>


	<!-- menu ends -->
	<!-- contact starts-->
	<div style="position: relative; font-family: arial;">
		<img src="images/contact.jpg" style="width: 100%;">

	</div>
	<div class="container ">
		<h2 style="text-align:center; color:#044E80; "><strong>CONTACT </strong></h2>

		<div class="row ">
			<div class="col-lg-6 ">
				<div style="margin-top:70px;">
					<i class="fa fa-map-marker" style="width:30px"></i> Chennai<br>
					<i class="fa fa-phone" style="width:30px"></i>+004 4949432<br>
					<i class="fa fa-envelope" style="width:30px"> </i>ddtrip@mail.com<br>
				</div>
				<br> <br>
				<br> <br>

				<form>
					<div class="form-group">
						<input type="text" name="Name" class="form-control" placeholder=" Name" required>
					</div>
					<div class="form-group">
						<input type="text" name="Email" class="form-control" placeholder="Email" required>
					</div>
					<div class="form-group">
						<input type="text" name="Message" class="form-control" placeholder="Message" required>
						<button class="btn btn-warning align-center" type="Submit" style="margin-top: 10px;"> Submit </button>
					</div>

				</form>
			</div>

			<div class="col-sm-6">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3918.733138210907!2d78.69245761405702!3d10.83172269228401!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3baaf5b1102f81b3%3A0x88b9c5f1b91120c0!2silife+technologies!5e0!3m2!1sen!2sin!4v1563705634236!5m2!1sen!2sin" width="600" height="450" frameborder="0" style="border:0; margin:30px; padding: 30px;" allowfullscreen></iframe>
			</div>

		</div>
	</div>
	<!-- contact ends-->


	<!-- footer starts-->
	<footer>
		<p class="final "> copyright&copy 2019 reserved at Dream Destination </p>
		<button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>

	</footer>
	<!-- footer ends-->

	<script>
		// When the user scrolls down 20px from the top of the document, show the button
		window.onscroll = function() {
			scrollFunction()
		};

		function scrollFunction() {
			if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
				document.getElementById("myBtn").style.display = "block";
			} else {
				document.getElementById("myBtn").style.display = "none";
			}
		}

		// When the user clicks on the button, scroll to the top of the document
		function topFunction() {
			document.body.scrollTop = 0;
			document.documentElement.scrollTop = 0;
		}
	</script>











</body>

</html>