<?php  include("header.php"); 
include("slider.php");?>
	<section class="ftco-section bg-light">
		<div class="container">
			<div class="row justify-content-center mb-5 pb-2">
				<div class="col-md-7 text-center heading-section ftco-animate">
					<span class="subheading" style="font-size:60px;">Chef</span><br>
					<h2 class="mb-4"style="font-size:30px;">Our Master Chef</h2>
				</div>
			</div>	
			<div class="row">
				<div class="col-md-6 col-lg-3 ftco-animate">
					<div class="staff">
						<div class="img" style="background-image: url(images/chef-4.jpg);"></div>
						<div class="text px-4 pt-2">
							<h3>John Gustavo</h3>
							<span class="position mb-2">CEO, Co Founder</span>
							<div class="faded">
								<p>I am an ambitious workaholic, but apart from that, pretty simple person.</p>
								<ul class="ftco-social d-flex">
									<li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
									<li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
									<li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
									<li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-3 ftco-animate">
					<div class="staff">
						<div class="img" style="background-image: url(images/chef-2.jpg);"></div>
						<div class="text px-4 pt-2">
							<h3>Michelle Fraulen</h3>
							<span class="position mb-2">Head Chef</span>
							<div class="faded">
								<p>I am an ambitious workaholic, but apart from that, pretty simple person.</p>
								<ul class="ftco-social d-flex">
									<li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
									<li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
									<li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
									<li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-3 ftco-animate">
					<div class="staff">
						<div class="img" style="background-image: url(images/chef-3.jpg);"></div>
						<div class="text px-4 pt-2">
							<h3>Alfred Smith</h3>
							<span class="position mb-2">Chef Cook</span>
							<div class="faded">
								<p>I am an ambitious workaholic, but apart from that, pretty simple person.</p>
								<ul class="ftco-social d-flex">
									<li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
									<li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
									<li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
									<li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-3 ftco-animate">
					<div class="staff">
						<div class="img" style="background-image: url(images/chef-1.jpg);"></div>
						<div class="text px-4 pt-2">
							<h3>Antonio Santibanez</h3>
							<span class="position mb-2">Chef Cook</span>
							<div class="faded">
								<p>I am an ambitious workaholic, but apart from that, pretty simple person.</p>
								<ul class="ftco-social d-flex">
									<li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
									<li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
									<li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
									<li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	 <!-- table booking start -->
	 <head>
	 <style>
#submit{
    font-weight: bold;
    color:black;
    font-size: 15px;
    width: 97%;
    height: 30px;
    margin-left: 8px;
	border-radius: 10px;
	background-color:rgb(245, 240, 240);
}

.signup-link {
  /* margin-left: 19%; */
  color: black;
 }
 .signup-link a {
  color: black;
  font-weight: bolder;
  }
.col-15{
     width: 75%;
    height: 30px;   
}
:hover.col-15{
    scale: 1.08;
    box-shadow: transparent;
	
}
#black{
	height:400px;
	width:380px;
	margin-top:90px;
	border-radius: 10px;
}
.o{
	width: 130%;
    height: 30px;
	border-radius: 10px;
	border:black;
    margin-left: -25px;

}
#fa{
	position:relative;
	bottom:22px;
	left:153px;
}
#la{
	position:relative;
	bottom:22px;
	left:153px;
}
	</style> 

 </head>

	 <section class="ftco-section ftco-wrap-about ftco-no-pb ftco-no-pt" id="re">
		<div class="container" >
			<div class="row no-gutters"  >
				<div class="col-sm-4 p-4 p-md-5 d-flex align-items-center justify-content-center bg-dark" id="black" >
				
      <form action="BookTable.php" method="post" enctype="multipart/form-data">
       <u style="color:white;">
		 <h2 style="text-align: center; font-weight: bold; margin-bottom:25px;">Book Your Table</h2>
	   </u> 

          <div class="col-15" style=" margin: auto;" >
            <input type="text" name="name" placeholder="User Name" class="o" >
            <span style="color:red; font-size:12px;"></span>
          </div><br>
        <div class="col-15" style=" margin: auto;">
          <input type="email" name="email" placeholder="Email"  class="o">
          <span style="color:red; font-size:12px;"></span>

        </div><br>
        
        <div class="col-15" style=" margin: auto;">
          <input type="number" name="number" placeholder="Phone Number"  class="o">

        </div><br>

	   <div class="col-15" style=" margin: auto;">
		   <input type="text" name="checked" class="book_date  o" placeholder="Check-In">
		   <span class="fa fa-calendar" id="fa"></span>
		  </div><br>

		<div class="col-15" style=" margin: auto;">
			<select class="o" name="tym">
				<option value="">Time</option>
				<option value="Breakfast">Breakfast</option>
				<option value="Lunch">Lunch</option>
				<option value="Dinner">Dinner</option>
			</select>
			<span class="fa fa-clock-o" id="la"></span>
		</div><br>
         <button type="submit" class="btn" name="btn" id="submit">Book Your Table Now</button>
       </form>

   </div>
  				<div class="col-sm-8 wrap-about py-5 ftco-animate img" style="background-image: url(images/about.jpg);">
  					<div class="row pb-5 pb-md-0">
  						<div class="col-md-12 col-lg-7">
  							<div class="heading-section mt-5 mb-4">
  								<div class="pl-lg-3 ml-md-5">
  									<span class="subheading"style="font-size:60px;">About</span><br>
  									<h2 class="mb-4"style="font-size:30px;">Welcome to Taste.it</h2>
  								</div>
  							</div>
  							<div class="pl-lg-3 ml-md-5">
  								<p>On her way she met a copy. The copy warned the Little Blind Text, that where it came from it would have been rewritten a thousand times and everything that was left from its origin would be the word "and" and the Little Blind Text should turn around and return to its own, safe country. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
			          </div>
			        </div>
			      </div>
			    </div>
			  </div>
			</div>
		</section>

		<?php include("footer.php"); ?>
			<!-- loader -->
			<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


			<script src="js/jquery.min.js"></script>
			<script src="js/jquery-migrate-3.0.1.min.js"></script>
			<script src="js/popper.min.js"></script>
			<script src="js/bootstrap.min.js"></script>
			<script src="js/jquery.easing.1.3.js"></script>
			<script src="js/jquery.waypoints.min.js"></script>
			<script src="js/jquery.stellar.min.js"></script>
			<script src="js/owl.carousel.min.js"></script>
			<script src="js/jquery.magnific-popup.min.js"></script>
			<script src="js/jquery.animateNumber.min.js"></script>
			<script src="js/bootstrap-datepicker.js"></script>
			<script src="js/jquery.timepicker.min.js"></script>
			<script src="js/scrollax.min.js"></script>
			<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
			<script src="js/google-map.js"></script>
			<script src="js/main.js"></script>
			
		</body>
		</html>