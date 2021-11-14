 <?php include "include/database.php"; ?><html>
  <head>
	<title> Dream Destination </title>

	<link href="style.css" rel="stylesheet" type="text/css" />		<link href="bootstrap-3.3.7-dist/css/bootstrap.css" rel="stylesheet" type="text/css" />
	<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	
 
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  
<link href="theme/css/t-datepicker.min.css" rel="stylesheet" type="text/css">
<link href="theme/css/themes/t-datepicker-blue.css" rel="stylesheet" type="text/css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script> <?php include "include/database.php"; ?>
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
			<!-------<li style="margin-right:30px; margin-top:10px;float:right;"> <button type="button" class="btn btn-success btn-mg" data-toggle="modal" data-target="#myModal">Login</button>
			
						
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
					</li> ---------->
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
								<li><a href="tour.php" class="active" > India Tours</a></li>
								<li><a href="trip_details.php"> International Tours</a></li>
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
		
		<!-- Trips_search starts-->
		
		<div style="position:relative;">
			
			<div class="overlay" style="opacity: 0.9; background-color: rgb(15, 25, 25);">
			<img src="images/tour_img2.jpg" style="width:100%">
			
			</div>
		</div>
			<div class="container ">
				<div class="row ">
					<div class="col-md-12">
						<h2 class="heading"> Find deals for any season </h2>
						<p class="text-center "> From cosy country homes to funky city flats</p>
						<div class="btn-group btn-group-justified">
							<div class="btn-group">
								<div class="row">
									
									<div class="col-md-5">
										<div class="container-fluid">
										<!-- 	<i class="fa fa-bed" aria-hidden="true"></i>
											<input class="input-feild" type="text" placeholder="Where are you going?" name="username"> -->                      
										<form method="post" action="search_hotel.php">	                                          <input type="search" name="ss" id="ss" class="input-lg col-md-12" style="background-color:white; border-style: solid;" placeholder="Where are you going?"  >
										                                        </div>
									</div>
									<div class="col-md-3">
											<div class="t-datepicker">
												<div class="t-check-in"></div>
												<div class="t-check-out"></div>
											</div>
									</div>
									<div class="col-md-2">
									  <a href="#demo" class="btn btn-default" data-toggle="collapse">Rooms</a>
									  
									  <br> <br>
									   <div id="demo" class="collapse">
										<div class="input-group">
										  <span class="input-group-btn">
											<button type="button" class="btn btn-danger btn-md btn-number"  data-type="minus" data-field="quant[2]">
												<span class="glyphicon glyphicon-minus"></span>
											</button>
										   </span>
										   
											<input type="text" name="quant[2]" class="form-control input-md input-number" value="10" min="1" max="100">
											<span class="input-group-btn">
											    <button type="button" class="btn btn-success btn-md btn-number" data-type="plus" data-field="quant[2]">
													<span class="glyphicon glyphicon-plus"></span>
									     		</button>
											</span>
										</div>
									
									   </div>
									</div>
									
									<div class="col-md-2">
										<button type="submit" class="btn btn-primary" name="search"> Search </button>
									</div>                                  </form>
								</div>
							</div>	
						</div>
					</div>
				</div>
			</div>
			<!-- Trips_search_content starts-->
			<div class="container" style="margin-top:50px;">
				<div class="row">
					<div class="img-responsive">
						<div class="col-sm-6 ">
							<a href="#" > <img src="images/ooty1.jpg" class="img-thumbnail tourimg" />  </a>
								<div class="text" >
									<h2> OOTY </h2>
									<p> 200+ properties </p> 
								</div>
								
								<div class="text-block">
									<h2 style="font-size:12px; font-family:arial;"> Average price </h2>
									<p> <span class="fa fa-inr"> 3,700 </span> </p>
								</div>
						</div> 
						<div class="col-sm-6 padding">
							<a href="#" > <img src="images/munnar3.jpg"  class="img-thumbnail tourimg"/>  </a>
								<div class="text" >
									<h2> MUNNAR </h2>
									<p> 180 properties </p> 
								</div>
								
								<div class="text-block">
									<h2 style="font-size:12px; font-family:arial;"> Average price </h2>
									<p> <span class="fa fa-inr"> 2,500 </span> </p>
								</div>
						</div>
					</div>
				</div>
					<div class="row " style="margin-top:30px;">
						<div class="image-responsive">
							<div class="col-sm-4">
								<a href="#" > <img src="images/kodaikanal2.jpg" class="img-thumbnail tourimg" />  </a>
									<div class="text" >
										<h2> KODAIKANAL </h2>
										<p> 100 properties </p> 
									</div>
									
									<div class="text-block">
										<h2 style="font-size:12px; font-family:arial;"> Average price </h2>
										<p> <span class="fa fa-inr"> 4,200 </span> </p>
									</div>
							</div>
							<div class="col-sm-4">
								<a href="#" > <img src="images/mysore2.jpg" class="img-thumbnail tourimg" />  </a>
									<div class="text" >
										<h2> MYSORE </h2>
										<p> 200+ properties </p> 
									</div>
									
									<div class="text-block">
										<h2 style="font-size:12px; font-family:arial;"> Average price </h2>
										<p> <span class="fa fa-inr"> 3,000 </span> </p>
									</div>
								
							</div>
							<div class="col-sm-4">
								<a href="#" > <img src="images/coonoor.jpg" class="img-thumbnail tourimg" />  </a>
									<div class="text" >
										<h2> COONOOR </h2>
										<p> 150 properties </p> 
									</div>
									
									<div class="text-block">
										<h2 style="font-size:12px; font-family:arial;"> Average price </h2>
										<p> <span class="fa fa-inr"> 2,700 </span> </p>
									</div>
							</div>
						</div>
					</div>
			</div>
			<br> <br>
			
		
			
			
				
			
			<!-- Get inspiration for your next trip -->	

						<div class="container">
							<h2 class="heading">Get inspiration for your next trip</h2>
							<p class="text-center " style="color:red"> Destinations we love</p>
							<div class="embed-responsive embed-responsive-16by9">
								<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/MGhjvist4gk"></iframe>
							</div>
						</div>
			
		<!-- <div class="container">
			<div class="row">
				<div class="col-md-6 embed-responsive embed-responsive-16by9 ">
					
						<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/tgbNymZ7vqY"></iframe>
					
				</div>
				
				<div class="col-md-6">
					<div class="embed-responsive ">
						<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/tgbNymZ7vqY"></iframe>
					</div>
				</div>
			</div>
		</div> -->
		
		<!-- carousel hey -->	
		<!--	 <div class="container text-center bg-grey">
			     <h2 class="heading">What our customers say</h2>
				<div id="myCarousel" class="carousel slide" data-ride="carousel">
						<ol class="carousel-indicators">
							<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
							<li data-target="#myCarousel" data-slide-to="1" ></li>
							<li data-target="#myCarousel" data-slide-to="2" ></li>
						</ol>
					
					 
					 <div class="carousel-inner" role="listbox">
						<div class="item active">
							 <h4>"This company is the best. I am so happy with the result!"<br>
							 <span>Michael Roe, Vice President, Comment Box</span></h4>
						</div>
						
						<div class="item active">
							<h4>"One word... WOW!!"
							<br><span>John Doe, Salesman, Rep Inc</span>
						</div>
						
						<div class="item active">
							 <h4>"Could I... BE any more happy with this company?"
							 <br><span>Chandler Bing, Actor, FriendsAlot</span></h4>
						</div>
					 </div>
					
					<a class="left carousel-control" href="#mycarousel" role="button" data-slide="prev">
						<span class="glyphicon glyphicon-chevron-left " aria-hidden="true" ></span>
						<span class="sr-only"> previous </span>
					 </a>
					 <a class="right carousel-control" href="#mycarousel" role="button" data-slide="next">
						<span class="glyphicon glyphicon-chevron-right " aria-hidden="true" ></span>
						<span class="sr-only"> next </span>
					 </a>
						
				</div> 
			</div> -->
			
			

			
			
			<!-- carousel hey ends -->
			
			
			<!-- testimonial starts -->

						
			<!-- testimonial ends -->
			
			
			<!-- Trips_search_content ends-->
			
			
		
		
		
		<!-- Trips_search ends-->
		
		
		
		 <!-- footer starts-->
		  <footer >
  <p class="final "> copyright&copy 2019 reserved at Dream Destination </p>
  <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
  
  </footer>
  <!-- footer ends-->
  
<!-- 	<script>
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
</script> -->	
<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha384-tsQFqpEReu7ZLhBV2VZlAu7zcOV+rXbYlF2cqB8txI/8aZajjp4Bqd+V6D5IgvKT" crossorigin="anonymous"></script>
<script src="theme/js/t-datepicker.min.js"></script>

<script>
 $(document).ready(function(){
    // Call global the function
    $('.t-datepicker').tDatePicker({
      // options here
    });
  });
  
  $('.btn-number').click(function(e){
    e.preventDefault();
    
    fieldName = $(this).attr('data-field');
    type      = $(this).attr('data-type');
    var input = $("input[name='"+fieldName+"']");
    var currentVal = parseInt(input.val());
    if (!isNaN(currentVal)) {
        if(type == 'minus') {
            
            if(currentVal > input.attr('min')) {
                input.val(currentVal - 1).change();
            } 
            if(parseInt(input.val()) == input.attr('min')) {
                $(this).attr('disabled', true);
            }

        } else if(type == 'plus') {

            if(currentVal < input.attr('max')) {
                input.val(currentVal + 1).change();
            }
            if(parseInt(input.val()) == input.attr('max')) {
                $(this).attr('disabled', true);
            }

        }
    } else {
        input.val(0);
    }
});
$('.input-number').focusin(function(){
   $(this).data('oldValue', $(this).val());
});
$('.input-number').change(function() {
    
    minValue =  parseInt($(this).attr('min'));
    maxValue =  parseInt($(this).attr('max'));
    valueCurrent = parseInt($(this).val());
    
    name = $(this).attr('name');
    if(valueCurrent >= minValue) {
        $(".btn-number[data-type='minus'][data-field='"+name+"']").removeAttr('disabled')
    } else {
        alert('Sorry, the minimum value was reached');
        $(this).val($(this).data('oldValue'));
    }
    if(valueCurrent <= maxValue) {
        $(".btn-number[data-type='plus'][data-field='"+name+"']").removeAttr('disabled')
    } else {
        alert('Sorry, the maximum value was reached');
        $(this).val($(this).data('oldValue'));
    }
    
    
});
$(".input-number").keydown(function (e) {
        // Allow: backspace, delete, tab, escape, enter and .
        if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 190]) !== -1 ||
             // Allow: Ctrl+A
            (e.keyCode == 65 && e.ctrlKey === true) || 
             // Allow: home, end, left, right
            (e.keyCode >= 35 && e.keyCode <= 39)) {
                 // let it happen, don't do anything
                 return;
        }
        // Ensure that it is a number and stop the keypress
        if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
            e.preventDefault();
        }
    });
</script>


		
		



		





	</body>
</html>