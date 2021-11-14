<html>
  <head>
	<title> Dream Destination </title>

	<link href="style.css" rel="stylesheet" type="text/css" />
	<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 
 
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  </head>
	<body>
	    <!-- top header starts-->-
		<div class="top">
			<ul class="num">
				<li >| <a href="#"> <span class="fa fa-phone"> 044-4797654 |</span></a></li>
			</ul>
			 <ul class="nav navbar-nav navbar-right " style="padding:0px;" >
					<!-- <li><a href="#"> <span class="fa fa-twitter"> </span></a></li>
					<li><a href="#"> <span class="fa fa-facebook"> </span></a></li>
					<li><a href="#"> <span class="fa fa-pinterest"> </span></a></li>
					<li><a href="#"> <span class="fa fa-envelope"> ddtrip@gmail.com</span>   </a></li> -->
					<li style="margin-right:30px; margin-top:10px;float:right;"> <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#myModal">Login</button>

						  <!-- Modal -->
						  <div class="modal fade" id="myModal" role="dialog">
								<div class="modal-dialog modal-sm">
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
											<button type="submit" class="btn btn-success btn-xs" style="float:right ">Submit</button>
										  </form>
									</div>
									<div class="modal-footer">
									  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
									</div>
								  </div>
								</div>
							</div>
					</li>
			 </ul>
			
		</div>
		
		<!-- top header ends-->
			
		<!-- menu starts -->
		
		<nav class="navbar navbar-inverse navbar-fixed" data-spy="affix" data-offset-top="45" style="margin-bottom:0px;" >
			<div class="container-fluid " >
			   <div class="navbar-header " >
					 <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mynavbar">
						<span class="icon-bar"> </span>
						<span class="icon-bar"> </span>
						<span class="icon-bar"> </span>
					 </button>
					 <a class="navbar-brand" href="#myPage"> <img src="images/logo.png">  </a>	 
				</div>
				<div class="collapse navbar-collapse "   id="mynavbar">
					<div class="nav navbar-nav navbar-right note " >
						<li class=" head menu" > <a href="index.php" >Home </a> </li>
						<li class=" head menu"> <a href="services.php" >Services </a> </li>
						<li class="dropdown head menu">
							 <a class="dropdown-toggle" data-toggle="dropdown" href="tour.php" >Tours
							 <span class="caret"></span></a>
							 <ul class="dropdown-menu menu">
								<li><a href="#" > India Tours</a></li>
								<li><a href="#"> International Tours</a></li>
							</ul>	
						</li>
						<li class="head menu"> <a href="blog.php" >Blogs </a> </li>
						<li class="head menu"> <a href="portfolio.php" >portfolio </a> </li>
						<li class="head menu"> <a href="contact.php" class="active" >Contact Us </a> </li>
				   </div>
			    </div>
			</div>
		</nav>


		<!-- menu ends -->
		<!-- review starts-->
				<div class="container-fluid">
					<div class="row" style="background:#FFF6E7;">
						<div class="col-lg-3" style="padding:30px;">
							<img style="border-radius:20px; border:2px solid black; width:300px; padding:0px; height:250px;" src="images/01.jpg">
						</div>
						<div class="col-lg-7">
							<h2 style="margin-top:40px; font-family:arial; font-weight:bold;"> ibis Styles Goa Calangute Resort - An AccorHotels Brand</h2>
							
							<p> Survey 166- Naikawaddo-Calangute, Dr Afonso Rd, Calangute, Goa, India</p>
							<p style="font-size:15px; font-family:arial; font-weight:bold;" > Couple Friendly </p>
							<br>
							<pre><center> This is a Non Refundable tariff. Here's the Full Policy</center></pre>
 						</div>
						<div class="col-lg-2">
							
						</div>
						
					</div>
				</div>
		<!---review ends--->
				<!-- traveller info starts--->
				<div class="container">
					<div class="row">
						<div class="col-lg-8">
							<h2 style=" margin-top:40px; font-family:arial; font-weight:bold;"> Traveller Information </h2>
							<br> <br>
							<form class="form-inline">
								<div class="form-group col-md-2">
									<label for="title"> Title </label>
									<select class="form-control  id="title">
											<option> Mr </option>
											<option> Mrs </option>
											<option> Ms </option>
											
									</select>
									
								</div>
								<div class="form-group col-md-5">
									<label for="first"> First Name </label><br>
									<input type="text" style="padding:4px; border-radius:5px; width:100%;" name="name" id="first" placeholder="Enter First Name" required>
								</div>
								<div class="form-group col-md-5">
									<label for="last"> Last Name </label><br>
									<input type="text" style="padding:4px; border-radius:5px; width:100%;" name="name" id="last" placeholder="Enter Last Name" required>
								</div>
								<div class="form-group" style="margin:-100px 0 0 15">
									<label for="email"> Email ID </label><br>
									<input type="email" style="padding:10px; border-radius:5px; width:310%;" name="email" id="email" placeholder="Enter Email ID" required>
								</div>
								<div class="form-group" style="margin:120px 0 0 -200px">
									<label for="contact"> Contact Info </label><br>
									<input type="number" style="padding:10px; border-radius:5px; width:310%;" name="contact" id="contact">
								</div>
								<div class="form-group" style="margin-top:250px; margin-left:-200px;">
									<div class="checkbox">
										<label><input type="checkbox"> I agree to the Hotel Policy & Terms of Serviceof DDTrip.com</label>
									</div>
								</div>
								
								<button type="button" style="margin-top:10px; margin-left:600px;" data-toggle="modal" data-target="#Mymodal" class="btn btn-primary">Submit</button>
								<!-- modal starts--->
										<div class="modal fade col-sm-5" style="text-align:center; Color:red; margin-top:150px; margin-left:30%;" id="Mymodal" role="dialog">
											<div class="modal-content">
												<div class="modal-header">
													<div class="modal-title">
														<h2 style="color:black; font-size:25px; font-family:arial; font-weight:bold;"> Booking Status </h2>
														
													</div>
												</div>
												<div  class="modal-body">
													<h2> Booking is Confirmed. </h2>
													
												</div>
												<div class="modal-footer">
													<button type="button" class="btn btn-default" data-dismiss="modal"> Close </button>
												</div>
											</div>
										</div>
								
								<!-- modal ends--->
								
							</form>
						</div>
						<div class="col-lg-4">
						</div>
					</div>
				</div>
				<!-- traveller info ends--->

		
		 <!-- footer starts-->
		  <footer >
  <p class="final "> copyright&copy 2019 reserved at Dream Destination </p>
  <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
  
  </footer>
  <!-- footer ends-->
  
	
		
		



		





	</body>
</html>