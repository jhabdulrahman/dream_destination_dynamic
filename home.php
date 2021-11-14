<html>
  <head>
	<title> Dream Destination </title>

	<link href="style.css" rel="stylesheet" type="text/css" />
	<link href="bootstrap-3.3.7-dist/css/bootstrap.css" rel="stylesheet" type="text/css" />
	<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script type="text/javascript" src="js/jquery.min.js"></script>
<link rel="stylesheet" href="css/slimbox2.css" type="text/css" media="screen" />
<script type="text/JavaScript" src="js/slimbox2.js"></script> 
<script type="text/JavaScript" src="bootstrap-3.3.7-dist/js/bootstrap.js"></script> 
<script type="text/JavaScript" src="js/bootstrap.js"></script> 
 
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <?php include "include/database.php"; ?>
  </head>
	<body>
	    <!-- top header starts-->
		<div class="top">
			<ul class="num">
				<li >| <a href="#"> <span class="fa fa-phone"> 044-4797654 |</span></a></li>
			</ul>
			 <ul class="nav navbar-nav navbar-right " style="padding:0px;" >
					<!-- <li><a href="#"> <span class="fa fa-twitter"> </span></a></li>
					<li><a href="#"> <span class="fa fa-facebook"> </span></a></li>
					<li><a href="#"> <span class="fa fa-pinterest"> </span></a></li>
					<li><a href="#"> <span class="fa fa-envelope"> ddtrip@gmail.com</span>   </a></li> -->
					
					<!-- register modal starts-->
					
								<!-- <div class="modal-fade" id="Mymodal1" role="dialog">
									<div class="modal-dialog modal-mg">
										<div class="modal-content">
											<div class="modal-header">
												<button type="button" class="close" data-dismiss="modal">&times;</button>
												<h4 class="modal-title"> Register Form </h4>
											</div>
											<div class="modal-body">
												<form class="form-inline" action="/action_page.php">
													<div class="form-group">
														<label for="name"> Name: </label>
														<input type="text" class="form-control" id="name" placeholder="Full Name" name="Name">
													</div>
													
													<div class="form-group">
														<label for="email"> Email: </label>
														<input type="email" class="form-control" id="email" placeholder="Email Address" name="Email">
													</div>
													
													<div class="form-group">
														<label for="number"> Phone Number: </label>
														<input type="number" class="form-control" id="number" placeholder="Phone Number" name="number">
													</div>
													
													<div class="form-group">
														<label for="password"> Create Password: </label>
														<input type="pwt" class="form-control" id="pwt" placeholder="Create Password" name="pwt">
													</div>
													
													<div class="form-group">
														<label for="password"> Repeat Password: </label>
														<input type="pwt" class="form-control" id="pwt" placeholder="Repeat Password" name="pwt">
													</div>
											</div>
										</div>
									</div>
								</div> -->
								<!-- Modal -->
			<!--		<li style="margin-right:30px; margin-top:10px; float:right;"> <button type="button" class="btn btn-info btn-mg" data-toggle="modal" data-target="#Mymodal1">Register</button>				
						<div class="modal fade" id="Mymodal1" style="background:black; background: rgba(0, 0, 0, 0.7);" role="dialog">
							<div class="modal-dialog modal-md">
								<div class="modal-content">
									<div class="modal-header">
									  <button type="button" class="close" data-dismiss="modal">&times;</button>
									  <h4 class="modal-title heading" >Register Form</h4>
									</div>
								<div class="modal-body">
									
									    <form class="form-inline" name="form1" method="post" action="programs/register_program.php"  enctype="multipart/form-data">
											<div class="container">
												<div class="row">
												<div class="col-xs-12">
													<div class="form-group">
														<label for="email">Name &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;</label>
														<input type="text" class="form-control" id="name" placeholder="Full Name" name="name">
													</div>
												</div> <br> <br> <br>
												<div class="col-xs-12">
													<div class="form-group">
														<label for="email">Email &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</label>
														<input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
													</div> 
												</div>  <br> <br> <br>
												
													
												<div class="col-xs-12">
													<div class="form-group">
														<label for="number">Number &nbsp; &nbsp; &nbsp; &nbsp;</label>
														<input type="number" class="form-control" id="number" placeholder="Mobile Number" name="number">
													</div> <br> <br> <br>
												</div>
												<div class="col-xs-12">
											
													<div class="form-group">
														<label for="pwd">Password &nbsp; &nbsp; &nbsp;</label>
														<input type="password" class="form-control" id="pwd" placeholder="Create password" name="pwd">
													</div> <br> <br> <br>
												</div>
												<div class="col-xs-12">
													<div class="checkbox">
														<label><input type="checkbox" name="remember"> Remember me</label>
														
													</div> 
												</div>
													
													
												</div>
											</div>										
										
										
											
									<div class="modal-footer">
									<button type="submit" name="register1" class="btn btn-success btn-mg" style="float:left">Submit</button> 
									  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
									  
									</div>
									</form>
								</div>
								</div>
							</div>
						</div>
						
	

					</li>  ---->
							<!-- register modal ends-->
					
		 <!------ <li style="margin-right:30px; margin-top:10px; float:right;"> <button type="button" class="btn btn-success btn-mg" data-toggle="modal" data-target="#myModal">Login</button>
						
						
						  <div class="modal fade" id="myModal" style="background:black; background:black; background:rgba(0, 0, 0, 0.7);" role="dialog">
								<div class="modal-dialog modal-mg">
								  <div class="modal-content">
									<div class="modal-header">
									  <button type="button" class="close" data-dismiss="modal">&times;</button>
									  <h4 class="modal-title heading">Log in</h4>
									</div>
									<div class="modal-body">
									  <form class="form-inline" action="programs/login_program.php" method="post">
											<div class="form-group">
											  <label for="email">Email:</label>
											  <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
											</div>
											<div class="form-group">
											  <label for="pwd">Password:</label>
											  <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
											</div> <br> <br> 
											<div class="checkbox">
											  <label><input type="checkbox" name="remember"> Remember me</label>
											</div> <br>
											<button type="submit" class="btn btn-success btn-mg" name="s1" style="float:left; margin-top:45px; ">Submit</button> 
										  </form>
									</div>
									<div class="modal-footer">
									  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
									</div>
								  </div>
								</div>
							</div>
							
					</li> -------------->
					<li> <a href="index.php" style="padding:7px; margin-right:30px; margin-top:7px;" class="btn btn-warning btn-md"> Logout </a> </li>
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
								<li><a href="hotel.php"> International Tours</a></li>
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
		<!--slider starts-->
		<div id="myCarousel" class="carousel slide" data-ride="carousel">
			<!-- Indicators -->
			<ol class="carousel-indicators">
			  <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			  <li data-target="#myCarousel" data-slide-to="1"></li>
			  <li data-target="#myCarousel" data-slide-to="2"></li>
			</ol>

			<!-- Wrapper for slides -->
			<div class="carousel-inner img01" role="listbox">
			  <div class="item active">
				<img  src="images/slider1.jpg"  alt="New York" width="100%" height="650">
				<div class="carousel-caption">
				  <h3>New York</h3>
				  <p>The atmosphere in New York is lorem ipsum.</p>
				</div>      
		      </div>

			  <div class="item">
				<img  src="images/slider3.jpg" alt="Chicago" width="100%" height="600">
				<div class="carousel-caption">
				  <h3>Chicago</h3>
				  <p>Thank you, Chicago - A night we won't forget.</p>
				</div>      
			  </div>
			
			  <div class="item">
				<img  src="images/img1.jpg" alt="Los Angeles" width="100%" height="600">
				<div class="carousel-caption">
				  <h3>Honnymoon</h3>
				  <p>You sholud make your bright and better! you must trip with us</p>
				</div>      
			  </div>
			</d`iv>

			<!-- Left and right controls -->
			<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
			  <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
			  <span class="sr-only">Previous</span>
			</a>
			<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
			  <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
			  <span class="sr-only">Next</span>
			</a>
		</div>
		
		
		
		<!--slider ends-->
		<!--about starts-->
		<div class="container text-center">
			<div class="row">
				<div class="col-sm-6">
					<h3 class="h3"> Amazing Places To Enjoy<br>Your Travel </h3>
					<p class="p"> Dream Destinations makes planning your trip easier by allowing you to find a book all of the extras you need, we offer the best products suitable for your journey all in one place, as well as providing all the useful information required to make your holiday run smoothly from start to finish.  Destination believes in making the right deal on packages with top-notch extra premium luxury hotels across the globe, an unmatched personalized  service that make you want to literally live out of your suitcases.</p>
				    <br><button class="btn btn-warning btn-sm">Read More</button>
				</div>
				<div class="col-sm-6">
				<img src="images/istock.jpg" class="image-responsive"/>
				
				</div>
			</div>

		</div>
		
		<!--about ends-->
		<br> <br>
		<!--about2 starts-->
		<div class="container text-center">
			<div class="row">
				<div class="col-sm-6">
					<img class=" image-responsive" src="images/twf.jpg" />
				
				</div>
				<div class="col-sm-6">
					<h3 class="h3"> Client Satisfaction Is Our Main Priority </h3>
					<p class="p"> t does not matter whether you are a seasoned traveler or if you have to clean a layer of dust from your suitcase, planning a holiday requires a time and attention. Dream Destinations makes planning your trip easier by allowing you to find a book all of the extras you need, we offer the best products suitable for your journey all in one place, as well as providing all the useful information required to make your holiday run smoothly from start to finish.</p>
				    <br><button class="btn btn-warning btn-sm">Read More</button>
				</div>

			</div>
		</div>
		<br> <br> 
		<!--about2 ends-->
		<!-- pp starts-->
		<h2 class="heading"> Popular Packages</h2>
		<div class="container ">
			<div class="row image-responsive" >
				<div class="col-md-4 img1 " >
			<a href="images/pp1.jpg" rel="lightbox[portfolio]">	<img   src="images/pp1.jpg" /></a>
				<!-- <button class="btn" > View Details </button> -->
				</div>
				
				<div class="col-md-4 img1 img-responsive">
					<a href="images/pp2.jpg" rel="lightbox[portfolio]">	<img   src="images/pp2.jpg" /></a>
				</div>
				
				<div class="col-md-4 img1">
					<a href="images/pp3.jpg" rel="lightbox[portfolio]">	<img   src="images/pp3.jpg" /></a> 
				</div>
			</div>
		</div>
		<div class="container ">
			<div class="row image-responsive">
				<div class="col-md-4 img1">
				<a href="images/pp4.jpg" rel="lightbox[portfolio]">	<img   src="images/pp4.jpg" /></a> 
				</div>
				
				<div class="col-md-4 img1">
			<a href="images/pp5.jpg" rel="lightbox[portfolio]">	<img   src="images/pp5.jpg" /></a> 
				</div>
				
				<div class="col-md-4 img1">
		<a href="images/pp6.jpg" rel="lightbox[portfolio]">	<img   src="images/pp6.jpg" /></a> 
				</div>
				
			</div>
		</div>
		<div class="text-center ">
		<button class="btn btn-warning btn-sm ">Read More</button>
		</div>
		<!-- pp ends-->
		<!-- blog starts-->
		<h2 class="heading"> Our Blogs</h2>
		<p style="font-family:vijaya; text-align:center; font-size:20px;" > Don't miss latest news & events from us </p> 
		<div class="container">
			<div class="row blogs1 ">
			
				<div class="blogs thumbnail col-lg-4">
					<img style="text-align:center;" src="images/blog1.jpg" />
					<h4 style=" text-align:center; color:black;"> Let us show travelling with kids is absoultely Possible </h4>
					<pre> Date: 25-04-1999 </pre> <br>
					<p style="color:#2A7FFF; text-align:center;">Dream Destinations makes planning your trip easier by allowing you to find a book all of the extras you need, we offer the best products suitable for your journey all in one place, as well as providing all the useful information required to make your holiday run smoothly from start to finish. </p>
				</div>
				<div class="blogs thumbnail col-lg-4">
					<img src="images/blog2.jpg" />
					<h4 style=" text-align:center; color:black;"> Take the honnymoon planning stress off your shoulders </h4>
					<pre> Date: 25-04-1999 </pre> <br>
					<p style="color:#2A7FFF; text-align:center;">Dream Destinations makes planning your trip easier by allowing you to find a book all of the extras you need, we offer the best products suitable for your journey all in one place, as well as providing all the useful information required to make your holiday run smoothly from start to finish. </p>
				</div>
				<div class="blogs  thumbnail col-lg-4">
					<img src="images/blog3.jpg" />
					<h4 style=" text-align:center; color:black;"> Let us show travelling with kids is absoultely Possible </h4>
					<pre> Date: 25-04-1999 </pre> <br>
					<p  style="color:#2A7FFF; text-align:center;">Dream Destinations makes planning your trip easier by allowing you to find a book all of the extras you need, we offer the best products suitable for your journey all in one place, as well as providing all the useful information required to make your holiday run smoothly from start to finish. </p>
				</div>
				
				
			</div>	
                <div class="text-center ">
					<button class="btn btn-warning btn-sm ">Read More</button>
				</div>			
		</div>
		
		<!-- blog ends-->
		<!-- portfolio starts-->
		<h2 class="heading"> portfolio </h2>
		<img src="images/portfolio.jpg" style="width:100%;" />
		 <div class="text-center ">
					<button class="btn btn-warning btn-sm ">Read More</button>
				</div>	
		<!-- portfolio ends-->
		
		
		
		<!-- contact starts -->
<div id="contact" class="container bg-grey">
  <h2 class="text-center">CONTACT</h2>
  <div class="row">
    <div class="col-sm-5">
      <p>Contact us and we'll get back to you within 24 hours.</p>
      <p><span class="glyphicon glyphicon-map-marker"></span> Chennai, US</p>
      <p><span class="glyphicon glyphicon-phone"></span> +004 4949432</p>
      <p><span class="glyphicon glyphicon-envelope"></span> ddtrip@mail.com</p>
    </div>
    <div class="col-sm-7 slideanim">
      <div class="row">
        <div class="col-sm-6 form-group">
          <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
        </div>
      </div>
      <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea><br>
      <div class="row">
        <div class="col-sm-12 form-group">
          <button class="btn btn-default pull-right" type="submit">Send</button>
        </div>
      </div>
    </div>
  </div>
</div>

  <!-- contact ends -->
  <!-- footer starts-->
  <footer >
  <p class="final "> copyright&copy 2019 reserved at Dream Destination </p>
  <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
  
  </footer>
  <!-- footer ends-->
  
	<script>
// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

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
