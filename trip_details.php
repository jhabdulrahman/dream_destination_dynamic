 <?php include "include/database.php"; ?>
 <html>

 <head>
 	<title> TRIP Details </title>
 	
 	<link href="bootstrap-3.3.7-dist/css/bootstrap.css" rel="stylesheet" type="text/css" />
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
 			<li>&nbsp; &nbsp; |<a href="#"> <span class="fa fa-phone"> 044-4797654 |</span></a></li>
 		</ul>
 		<ul class="nav navbar-nav navbar-right " style="padding:0px;">
 			<!-- <li><a href="#"> <span class="fa fa-twitter"> </span></a></li>
					<li><a href="#"> <span class="fa fa-facebook"> </span></a></li>
					<li><a href="#"> <span class="fa fa-pinterest"> </span></a></li>
					<li><a href="#"> <span class="fa fa-envelope"> ddtrip@gmail.com</span>   </a></li> -->
 			<!---- <li style="margin-right:30px; margin-top:10px;float:right;"> <button type="button" class="btn btn-success btn-mg" data-toggle="modal" data-target="#myModal">Login</button>

						  
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
					</li>  ----->
 		</ul>

 	</div>

 	<!-- top header ends-->

 	<!-- menu starts -->

 	<!-- <nav class="navbar navbar-inverse navbar-fixed" data-spy="affix" data-offset-top="45" style="margin-bottom:0px;" >
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
						<li class=" head menu" > <a href="index.html" >Home </a> </li>
						<li class=" head menu"> <a href="services.html" >Services </a> </li>
						<li class="dropdown head menu">
							 <a class="dropdown-toggle" data-toggle="dropdown" href="tour.html" >Tours
							 <span class="caret"></span></a>
							 <ul class="dropdown-menu menu">
								<li><a href="tour.html" > India Tours</a></li>
								<li><a href="#"> International Tours</a></li>
							</ul>	
						</li>
						<li class="head menu"> <a href="blog.html" >Blogs </a> </li>
						<li class="head menu"> <a href="portfolio.html" >portfolio </a> </li>
						<li class="head menu"> <a href="contact.html" class="active" >Contact Us </a> </li>
				   </div>
			    </div>
			</div>
		</nav> -->



 	<!-- Accommodation Starts -->
 	<div class="container">
 		<div class="row">
 			<div class="col-sm-3 " style="background-color:#383838; margin-top:30px; padding:20px;">
 				<h3 style="color:#FFAA2A; margin-top:20px; font-family:arial; font-size:25px; border-bottom:2px dashed yellow; width:34%;"><strong> Search </strong> </h3> <br>
 				<form action="search_hotel.php" method="POST">

 					<div class="form-group">

 						<p style="color:#fafafa; margin-top:10px;  font-size:15px; font-family:arial;"> Destination/property name: </p>
 						<input type="text" name="Name" class="form-control" required /> <br>
 						<p style="color:#fafafa; margin-top:10px;  font-size:15px; font-family:arial;"> Check-in date </p>
 						<input type="date" class="form-control" /> <br>



 						<p style="color:#fafafa;  margin-top:10px;  font-size:15px; font-family:arial;"> Check-out date</p>
 						<input type="date" class="form-control" /><br>

 						<br>
 						<select class="form-control ">
 							<option>1 adult</option>
 							<option>2 adults</option>
 							<option>3 adults</option>
 							<option>4 adults</option>
 							<option>5 adults</option>
 							<option>6 adults</option>
 							<option>7 adults</option>
 							<option>8 adults</option>
 							<option>9 adults</option>
 							<option>10 adults</option>
 							<option>11 adults</option>
 							<option>12 adults</option>
 						</select>

 						<br> <br>
 						<select class="form-control ">
 							<option>No Children</option>
 							<option>1 Child </option>
 							<option>2 Children</option>
 							<option>3 Children</option>
 							<option>4 Children</option>
 							<option>5 Children</option>
 							<option>6 Children</option>
 							<option>7 Children</option>
 							<option>8 Children</option>
 							<option>9 Children</option>
 							<option>10 Children</option>

 						</select>
 						<br> <br>

 						<select class="form-control ">

 							<option>1 room </option>
 							<option>1 room </option>
 							<option>2 rooms</option>
 							<option>3 rooms</option>
 							<option>4 rooms</option>
 							<option>5 rooms</option>
 							<option>6 rooms</option>
 							<option>7 rooms</option>
 							<option>8 rooms</option>
 							<option>9 rooms</option>
 							<option>10 rooms</option>

 						</select>
 						<br>
 						<button style="margin:10px 10px 0px 160px;" type="button" class="btn-info btn-lg"> Search </button>
 					</div>
 					<br>
 					<hr style="color:white;"> <br>


 				</form>

 				<div class="form-group" style="background:#ffffff; padding:30px; margin:0px ; border-radius:10px;">

 					<h3><strong> Filter by </strong></h3>
 					<hr style="color:#0C0D16;">
 					<h4 style="color:#027959;"> Location Score </h4>
 					<div class="checkbox">
 						<label><input type="checkbox" value="">Excellent Location</label>
 					</div>

 					<div class="checkbox">
 						<label><input type="checkbox" value="">Very Good Location</label>
 					</div>

 					<div class="checkbox">
 						<label><input type="checkbox" value="">Good Location</label>
 					</div>

 					<div class="checkbox">
 						<label><input type="checkbox" value="">Plansant Location</label>
 					</div>



 					<br>

 					<h4 style="color:#027959;"> Popular Filters </h4>
 					<div class="checkbox">
 						<label><input type="checkbox" value="">Resorts</label>
 					</div>

 					<div class="checkbox">
 						<label><input type="checkbox" value="">Villa</label>
 					</div>

 					<div class="checkbox">
 						<label><input type="checkbox" value="">Home stays</label>
 					</div>

 					<div class="checkbox">
 						<label><input type="checkbox" value="">Villa</label>
 					</div>

 					<div class="checkbox">
 						<label><input type="checkbox" value="">Guest Houses</label>
 					</div>



 					<br>

 					<h4 style="color:#027959;"> Recommended For You </h4>
 					<div class="checkbox">
 						<label><input type="checkbox" value="">Holliday Homes</label>
 					</div>

 					<div class="checkbox">
 						<label><input type="checkbox" value="">Form Stays</label>
 					</div>

 					<br>

 					<h4 style="color:#027959;"> Star Rating </h4>
 					<div class="checkbox">
 						<label><input type="checkbox" value="">5 Star</label>
 					</div>

 					<div class="checkbox">
 						<label><input type="checkbox" value="">3 Star</label>
 					</div>

 					<div class="checkbox">
 						<label><input type="checkbox" value="">Unrated</label>
 					</div>

 				</div>



 			</div>
 			<?php
				$id = $_GET["id"];
				if (isset($id)) {
					$result = mysql_query("select * from hotel where hplace='$id' ");

					$n = mysql_num_rows($result);
					if ($n >= 1) {
						while ($row = mysql_fetch_array($result)) {

				?>

 						<div class=" col-sm-9" style="margin-top:25px;">
 							<div class="thumbnail" style="background:#E9F0FA; padding:15px;">
 								<div class="row">
 									<div class="col-md-4">
 										<img src="<?php echo $row["himg"]; ?>">
 									</div>
 									<div class="col-md-8">

 										<h4><strong><?php echo $row["hname"]; ?> </strong> </h4>
 										<a href="#"><?php echo $row["hplace"]; ?> </a> <a href="#"> show on map </a>
 										<p style="padding:20px; margin:10px; color:#0C0D16;"> <?php echo $row["haddress"]; ?> </p>
 										<div style="margin:-170px 20px 0px 350px">
 											<h4><strong> Review score</strong> </h4>
 											<button class="btn btn-primary btn-sm"> <Strong> <?php echo $row["hrate"]; ?></strong> </button>
 											<button class="btn btn-info btn-md"> Show Price </button>
 										</div>

 										<div class="alert alert-info" style="margin:120px 0px -20px 0px;">
 											<Strong> Still interested in S.K Cottage? Enter your dates and book before it's too late.</strong>
 										</div>

 									</div>
 								</div>
 							</div>
 						</div>
 			<?php
						}
					}
				}   ?>

 			<!--		<div class="thumbnail" style="background:#E9F0FA; padding:15px;">
								<div class="row" >
									<div class="col-md-4">
										<img src="images/trip_img2.jpg"/>
									</div>
									<div class="col-md-8">
										
											<h4><strong> Hotel City Palace</strong> </h4>
											 <a href="#"> Ooty</a> <a href="#" > show on map </a>
											 <p style="padding:20px; margin:10px; color:#0C0D16;">Hotel City Palace is situated in Ooty, within 600 metres of Ooty Lake and a 3-minute walk of Ooty bus station and railway station. </p>
											 <div style="margin:-170px 20px 0px 350px">
												<h4 style="margin-top:25px;"><strong> Review score</strong> </h4>
												<button class="btn btn-primary btn-sm"> <Strong> 6.9 </strong> </button> 
												<button class="btn btn-info btn-md"> Show Price </button>
											 </div>
											<div class="alert alert-info" style="margin:110px 0px -20px 0px;">
												<Strong> Still interested in Hotel City Palace? Enter your dates and book before it's too late.</strong>
											 </div>
										 
									</div>
								</div>
							</div>
							
								<div class="thumbnail" style="background:#E9F0FA; padding:15px;">
								<div class="row" >
									<div class="col-md-4">
										<img src="images/trip_img3.jpg"/>
									</div>
									<div class="col-md-8">
										
											<h4><strong> Smile stone residency</strong> </h4>
											 <a href="#"> Ooty</a> <a href="#" > show on map </a>
											 <p style="padding:20px; margin:10px; color:#0C0D16;"> Reservation possible without a credit card Booked 2 times in the last 6 hours Last booked 1 hour ago</p>
											 <div style="margin:-170px 20px 0px 350px">
												<h4 style="margin-top:25px;"><strong> Review score</strong> </h4>
												<button class="btn btn-primary btn-sm"> <Strong> 6.9 </strong> </button> 
												<button class="btn btn-info btn-md"> Show Price </button>
											 </div>
											<div class="alert alert-info" style="margin:110px 0px -20px 0px;">
												<Strong> Still interested in Hotel City Palace? Enter your dates and book before it's too late.</strong>
											 </div>
										 
									</div>
								</div>
							</div>
							
							 <div class="thumbnail" style="background:#E9F0FA; padding:15px;">
								<div class="row" >
									<div class="col-md-4">
										<img src="images/trip_img4.jpg"/>
									</div>
									<div class="col-md-8">
										
											<h4><strong> Kasa Luxury Inn</strong> </h4>
											 <a href="#"> Kodaikanal</a> <a href="#" > show on map </a>
											 <p style="padding:20px; margin:10px; color:#0C0D16;"> Located in Kodaikānāl, 5 km from Bear Shola Falls, Kasa Luxury Inn provides accommodation with a restaurant, free WiFi, a 24-hour front desk, and room service.</p>
											 <div style="margin:-170px 20px 0px 350px">
												<h4 style="margin-top:25px;"><strong> Review score</strong> </h4>
												<button class="btn btn-primary btn-sm"> <Strong> 6.9 </strong> </button> 
												<button class="btn btn-info btn-md"> Show Price </button>
											 </div>
											<div class="alert alert-info" style="margin:110px 0px -20px 0px;">
												<Strong> Still interested in Hotel City Palace? Enter your dates and book before it's too late.</strong>
											 </div>
										 
									</div>
								</div>
							</div>   
							
							 <div class="thumbnail" style="background:#E9F0FA; padding:15px;">
								<div class="row" >
									<div class="col-md-4">
										<img src="images/trip_img4.jpg"/>
									</div>
									<div class="col-md-8">
										
											<h4><strong> Western Valley Homestays</strong> </h4>
											 <a href="#"> Kodaikanal</a> <a href="#" > show on map </a>
											 <p style="padding:20px; margin:10px; color:#0C0D16;">Jc Grand is a 2-minute walk from Coakkers Walk, Kodaikanal Lake and Bryant Park. This property features free parking, a 24-hour front desk and air-conditioned rooms with a cable TV.</p>
											 <div style="margin:-170px 20px 0px 350px">
												<h4 style="margin-top:25px;"><strong> Review score</strong> </h4>
												<button class="btn btn-primary btn-sm"> <Strong> 6.9 </strong> </button> 
												<button class="btn btn-info btn-md"> Show Price </button>
											 </div>
											<div class="alert alert-info" style="margin:110px 0px -20px 0px;">
												<Strong> Still interested in Western Valley Homestays? Enter your dates and book before it's too late.</strong>
											 </div>
										 
									</div>
								</div>
							</div>  ----->












 		</div>

 	</div>


 	<!-- Accommodation ends -->



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
 	<script type="text/javascript">
 		$(function() {
 			$('#datetimepicker6').datetimepicker();
 			$('#datetimepicker7').datetimepicker({
 				useCurrent: false //Important! See issue #1075
 			});
 			$("#datetimepicker6").on("dp.change", function(e) {
 				$('#datetimepicker7').data("DateTimePicker").minDate(e.date);
 			});
 			$("#datetimepicker7").on("dp.change", function(e) {
 				$('#datetimepicker6').data("DateTimePicker").maxDate(e.date);
 			});
 		});
 	</script>











 </body>

 </html>