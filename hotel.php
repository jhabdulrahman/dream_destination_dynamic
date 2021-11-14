<html lang="en">
  <head>
	<title> Dream Destination </title>

	<link href="style.css" rel="stylesheet" type="text/css" />
		<link href="bootstrap-3.3.7-dist/css/bootstrap.css" rel="stylesheet" type="text/css" />
	<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <meta name="description" content="Clip carousel">
    <meta name="keywords" content="clip responsive jQuery plugin Greensock Gsap animation carousel">
  
    <link rel="stylesheet" href="fontello/css/fontello.css">
    <link rel="stylesheet" href="style_hotel.css">
	<style>
		table, th, td
		{
			border: 1px solid black;
			border-collapse: collapse;
			text-align:center;
			padding:15px;
  
		}
		.affix 
		{
			top: 0;
			width:100%;
			z-index: 9999 !important;
		}
	</style>
	
	
	
  </head>
	<body>
	    <!-- top header starts-->
		<div class="top">
			<ul class="num">
				<li >&nbsp; &nbsp; |<a href="#"> <span class="fa fa-phone"> 044-4797654 |</span></a></li>
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
						<li class=" head menu" > <a href="index.php" class="active" >Home </a> </li>
						<li class="head menu"> <a href="services.php" >Services </a> </li>
						<li class="dropdown head menu">
							 <a class="dropdown-toggle" data-toggle="dropdown" href="tour.php">Tours
							 <span class="caret"></span></a>
							 <ul class="dropdown-menu menu">
								<li><a href="tour.php" > India Tours</a></li>
								<li><a href="trip_detials.php"> International Tours</a></li>
							</ul>	
						</li>
						<li class="head menu"> <a href="blog.php" >Blogs </a> </li>
						<li class="head menu"> <a href="portfolio.php" >portfolio </a> </li>
						<li class="head menu"> <a href="contact.php" >Contact Us </a> </li>
				   </div>
			    </div>
			</div>
		</nav>


		<!-- menu ends -->
			
		<!-- search starts--->
		
				<div class="container">
					<div class="row" >
						<div class="col-sm-3" style="background-color:#383838; margin-top:30px; padding:20px;" >
							<h3 style="color:#FFAA2A; margin-top:20px; font-family:arial; font-size:20px;"><strong> Search </strong> </h3>
							<form>
								<div class="form-group">
										
										<p style="color:#fafafa; margin-top:10px;  font-size:15px; font-family:arial;"> Destination/property name: </p>
										<input type="text" name="Name" class="form-control"  required />  <br>
											<p style="color:#fafafa; margin-top:10px;  font-size:15px; font-family:arial;"> Check-in date </p>
											<input type="date" class="form-control" />  <br>
												
										
										
											<p style="color:#fafafa;  margin-top:10px;  font-size:15px; font-family:arial;"> Check-out date</p>
											<input type="date" class="form-control" /><br>
												
										<br> 
										 <select class="form-control " >
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
										 <select class="form-control " >
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
									
										 <select class="form-control " >
										
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
								<br> <hr style="color:white;"> <br>
								
								
							</form>
					</div>
					<div class="col-sm-9" style="Padding:30px;">
						<section class="section-intro">
					
							<div class="container">
								<div class="photo-slider-wrap">
									<div class="photo-slider">
										<div class="back-img active" style="background-image: url('imgs/ootyr01.jpg')">
											<div class="caption">
												Lorem ipsum 1
											</div>
										</div>
										<div class="back-img" style="background-image: url('imgs/ootyr02.jpg')">
											<div class="caption">
												Lorem ipsum 2
											</div>
										</div>
										<div class="back-img" style="background-image: url('imgs/ootyr03.jpg')">
											<div class="caption">
												Lorem ipsum 3
											</div>
										</div>
										<div class="back-img" style="background-image: url('imgs/ootyr04.jpg')">
											<div class="caption">
												Lorem ipsum 4
											</div>
										</div>
									</div>

									<div class="slider-arrow slide-next" id="slide-next">
										<i class="icon icon-right-open-big"></i>
									</div>
									<div class="slider-arrow slide-prev" id="slide-prev">
										<i class="icon icon-left-open-big"></i>
									</div>
								</div>
	
								<div class="photo-slider-thumb">
									<div>
										<div class="back-img" style="background-image: url('imgs/ootyr01.jpg')">
											<div class="caption">
												Tulips Elkhill Resorts
											</div>
										</div>
									</div>
									<div>
										<div class="back-img" style="background-image: url('imgs/ootyr02.jpg')">
											<div class="caption">
												Tulips Elkhill Resorts
											</div>
										</div>
									</div>
									<div>
										<div class="back-img" style="background-image: url('imgs/ootyr03.jpg')">
											<div class="caption">
												Tulips Elkhill Resorts
											</div>
										</div>
									</div>
									<div>
										<div class="back-img" style="background-image: url('imgs/ootyr04.jpg')">
											<div class="caption">
												Tulips Elkhill Resorts
											</div>
										</div>
									</div>
								</div>

							</div>
						</section>
					</div>
				</div>
			</div>
			<br> <br> <br>
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<table cellpadding="30" cellspacing="20" border="1" width="100%" class="table-responsive">
						
								<tr style="background:#4C76B2; color:white;">
									<th> ROOM TYPE </th>
									<th> OPTIONS </th>
									<th> INCLUDED IN THIS PRICE </th>
									<th> PRICE </th>
							
								</tr>
								<tr>
									<td style="background:#EDEDED;"> <img style="padding:10px; border-radius:10px; border:2px solid black;" src="imgs/tripimg4.jpg" /> 
									<br><br>
										<ul style="list-style-type:none;">
											<li>Room Size: 144 sq.ft. </li><br>
											<li>Bed Type: King Bed </li><br>
											<li>View: Garden View </li><br>
											<li>Air Conditioning (Room controlled) </li><br>
											<li>Free WI-FI</li><br>
										</ul>
									</td>
									<td> <ul style="list-style-type:none;">
											<li>Room Only </li><br>
											<li>Non-refundable </li><br>
											<li>Breakfast </li><br>
											
										</ul>
									</td>
									<td> <ul style="list-style-type:none;">
											<li>FREE Breakfast</li><br>
											<li>Accommodation</li><br>
																						
										</ul>
									</td>
									<td> <ul style="list-style-type:none;">
											<li>INR 2,000</li>
											<li><p style="color:red; font-size:15px;">per night</p></li><br>
											<br> 
											<li> <button type="submit" class="btn btn-primary"><a href="review.php" style="color:#fff; border-radius:5px; text-decoration:none;">  I'll reserve </a></button> </li>
																						
										</ul>
									</td>
								</tr>
								
								<tr>
									<td style="background:#EEEDED;"> <img style="padding:10px; border-radius:10px;  border:2px solid black;" src="imgs/tripimg4.jpg"> 
									<br><br>
										<ul style="list-style-type:none;">
											<li>Room Size: 144 sq.ft. </li><br>
											<li>Bed Type: King Bed </li><br>
											<li>View: Garden View </li><br>
											<li>Air Conditioning (Room controlled) </li><br>
											<li>Free WI-FI</li><br>
										</ul>
									</td>
									<td> <ul style="list-style:none;">
											<li>Room Only </li><br>
											<li>Non-refundable </li><br>
											<li>Breakfast </li><br>
											
										</ul>
									</td>
									<td> <ul style="list-style-type:none;">
											<li>FREE Breakfast</li><br>
											<li>Accommodation</li><br>
																						
										</ul>
									</td>
									<td><ul style="list-style-type:none;">
											<li>INR 2,000</li>
											<li><p style="color:red; font-size:15px;">per night</p></li><br>
											<br> 
											<li> <button type="submit" class="btn btn-primary" ><a href="review.php" style="color:#fff; border-radius:5px; text-decoration:none;">  I'll reserve </a></button> </li>
																						
										</ul>
									</td>
								</tr>
								
							
						</table>
					</div>
				</div>
			</div>
			
		<!-- search ends---->
		
		
		 <!-- footer starts-->
		  <footer >
  <p class="final "> copyright&copy 2019 reserved at Dream Destination </p>
  <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
  
  </footer>
  <!-- footer ends-->
  
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.20.3/TweenMax.min.js"></script>
<script src="js/jquery-3.2.0.min.js"></script>
<script src="build/clip_carousel.js"></script>


	</body>
</html>