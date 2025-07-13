<html>
 <head><style>
	.one{ 
    margin-left: 60px;
     padding: 60px; 
  }
  .three{
    margin-left: 90px;
    padding: 50px;
  }
  #l{
	color:black;
  }
#myForm{
	/* width: 400px; */
	height:400px;
  font-family: monospace;
  border-radius: 10px;
  background-color: rgba(145, 58, 64, 0.27);
  box-shadow: 1px 1px 20px 10px rgb(215, 197, 199);
}
#submit{
    font-weight: bold;
    color:black;
    font-size: 15px;
    width: 73%;
    height: 30px;
    margin-left: 39px;
	border-radius: 20px;
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
.wrapper{
   
    width: 400px;
    height: 400px;
    box-shadow: 3px 3px 20px 2px rgba(253, 235, 235, 0.72);
    background-color: rgba(253, 235, 235, 0.07);
	border-radius: 10px;
}
.col-8{
     width: 75%;
    height: 30px;   
}
:hover.col-8{
    scale: 1.08;
    box-shadow: transparent;
}
#red{
	height:500px;
	margin-top:60px;
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
.j{
	position:relative;
	left:40%;
	top:90%;
	z-index: 99;
}
	</style> 

 </head>
 <!-- slider -->
<?php include("header.php"); 
	?>
	
	<section class="slider">
		<div class="home-slider owl-carousel ">
			<div class="slider-item " style="background-image:url(images/bg_1.jpg); background-size:cover;">
				<div class="overlay"></div>
				<div class="container">
					<div class="row no-gutters slider-text align-items-center justify-content-center">
						<div class="col-md-12 ftco-animate">
							<div class="text w-100 mt-5 text-center">
								<span class="subheading">Taste.it Restaurant</h2></span>
								<h1>Cooking Since</h1>
								<span class="subheading-2">1958</span>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="slider-item " style="background-image:url(images/bg_2.jpg);  background-size:cover;">
				<div class="overlay"></div>
				<div class="container">
					<div class="row no-gutters slider-text  align-items-center justify-content-center">
						<div class="col-md-12 ftco-animate">
							<div class="text w-100 mt-5 text-center">
								<span class="subheading">Taste.it Restaurant</h2></span>
								<h1>Best Quality</h1>
								<span class="subheading-2 sub">Food</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
<!-- end of slider -->

 <!-- table booking start -->

	<section class="ftco-section ftco-wrap-about ftco-no-pb ftco-no-pt" id="re">
		<div class="container" >
			<div class="row no-gutters"  >
				<div class="col-sm-4 p-4 p-md-5 d-flex align-items-center justify-content-center bg-danger" id="red" >
				<div class="wrapper">
      <form id="myform"  action="BookTable.php" method="post" enctype="multipart/form-data">
       <u style="color:white;"><h2 style="text-align: center; font-weight: bold;">Book Your Table</h2></u> 

          <div class="col-8" style=" margin: auto;" >
            <input type="text" name="name" placeholder="User Name" class="o" >
            <span style="color:red; font-size:12px;"></span>
          </div><br>
        <div class="col-8" style=" margin: auto;">
          <input type="email" name="email" placeholder="Email"  class="o">
          <span style="color:red; font-size:12px;"></span>

        </div><br>
        
        <div class="col-8" style=" margin: auto;">
          <input type="number" name="number" placeholder="Phone Number"  class="o">

        </div><br>

	   <div class="col-8" style=" margin: auto;">
		   <input type="text" name="checked" class="book_date  o" placeholder="Check-In">
		   <span class="fa fa-calendar" id="fa"></span>
		  </div><br>

		<div class="col-8" style=" margin: auto;">
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
				</div>
				<div class="col-sm-8 wrap-about py-5 ftco-animate img" style="background-image: url(images/about.jpg);">
					<div class="row pb-5 pb-md-0">
						<div class="col-md-12 col-lg-7">
							<div class="heading-section mt-5 mb-4">
								<div class="pl-lg-3 ml-md-5">
									<span class="subheading" style="font-size:90px;">About</span><br>
									<h2 class="mb-4">Welcome to Queen's Restaurant</h2>
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
<!-- end of booking table -->

	<section class="ftco-section ftco-intro" style="background-image: url(images/bg_3.jpg);">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center">
					<span>Now Booking</span>
					<h2>Private Dinners &amp; Happy Hours</h2>
				</div>
			</div>
		</div>
	</section>


<!-- menu card -->
<?php 
 $Q = "SELECT * FROM `dishes` LIMIT 8";
$rn = mysqli_query($conn,$Q);
?>
<style>
	:hover.card{
    scale: 1.08;
	box-shadow: 3px 3px 20px 2px rgba(110, 25, 25, 0.94);

	color:red;
}
.col-0{
	background: rgb(131,58,180);
background: linear-gradient(90deg, rgba(131,58,180,0.5944502801120448) 13%, rgba(252,176,69,1) 100%);
}
.card{
    left:95px;

}
</style>
	<section class="col-0" >
		<div class="row ">
				<div class="one text-center">
				   <span class="subheading" style="font-family: Dancing Script, cursive; font-size:70px;">Specialties</span><br>
					<h2 class="mb-4">Our Menu</h2>
				</div>						
			  <?php
			    while($show=mysqli_fetch_array($rn)){
				?>	
		 <div class="col-4">
				<div class="card" style="width: 14rem;">
                 <img src="<?php echo'images/'. $show['image']; ?>" class="card-img-top" height="180px" width="80px" alt="...">
                    <div class="card-body">
                          <h5 class="card-title"><?php echo $show['name']; ?></h5>
	                           <h5>$<?php echo $show['price']; ?></h5>

                            <p class="card-text"><?php echo $show['discription']; ?></p>
                           <a href="order.php?id=<?php echo $show['Sno']; ?>" class="btn btn-primary">Order</a>
                    </div>
                 </div><br> <br>
							
		</div> 
			<?php } ?>
	</div>   
	</section>
<!-- menu card end -->

	<section class="ftco-section testimony-section" style="background-image: url(images/bg_5.jpg);">
		<div class="overlay"></div>
		<div class="container">
			<div class="row justify-content-center mb-3 pb-2">
				<div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
					<span class="subheading" style="font-size:60px;">Testimony</span><br>
					<h2 class="mb-4" style="font-size:30px;">Happy Customer</h2>
				</div>
			</div>
			<div class="row ftco-animate justify-content-center">
				<div class="col-md-7">
					<div class="carousel-testimony owl-carousel ftco-owl">
						<div class="item">
							<div class="testimony-wrap text-center">
								<div class="text p-3">
									<p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
									<div class="user-img mb-4" style="background-image: url(images/person_1.jpg)">
										<span class="quote d-flex align-items-center justify-content-center">
											<i class="fa fa-quote-left"></i>
										</span>
									</div>
									<p class="name">John Gustavo</p>
									<span class="position">Customer</span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Chef -->
	<section class="ftco-section bg-light">
		<div class="container">
			<div class="row justify-content-center mb-5 pb-2">
				<div class="col-md-7 text-center heading-section ftco-animate">
					<span class="subheading" style="font-size:70px;">Chef</span><br>
					<h2 class="mb-4">Our Master Chef</h2>
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

	<section class="ftco-section ftco-no-pt ftco-no-pb">
		<div class="container">
			<div class="row d-flex">
				<div class="col-md-6 d-flex">
					<div class="img img-2 w-100 mr-md-2" style="background-image: url(images/bg_6.jpg);"></div>
					<div class="img img-2 w-100 ml-md-2" style="background-image: url(images/bg_4.jpg);"></div>
				</div>
				<div class="col-md-6 ftco-animate makereservation p-4 p-md-5">
					<div class="heading-section ftco-animate mb-5">
						<span class="subheading" style="font-size:60px;">This is our secrets</span><br>
						<h2 class="mb-4" style="font-size:30px;">Perfect Ingredients</h2>
						<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.
						</p>
						<p><a href="#" class="btn btn-primary">Learn more</a></p>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="ftco-section bg-light">
		<div class="container">
			<div class="row justify-content-center mb-5 pb-2">
				<div class="col-md-7 text-center heading-section ftco-animate">
					<span class="subheading" style="font-size:70px;">Blog</span><br>
					<h3 class="mb-4" >Recent Blog</h3>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4 ftco-animate">
					<div class="blog-entry">
						<a href="#" class="block-20" style="background-image: url('images/image_1.jpg');">
						</a>
						<div class="text px-4 pt-3 pb-4">
							<div class="meta">
								<div><a href="#">August 3, 2020</a></div>
								<div><a href="#">Admin</a></div>
							</div>
							<h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
							<p class="clearfix">
								<a href="#" class="float-left read btn btn-primary">Read more</a>
								<a href="#" class="float-right meta-chat"><span class="fa fa-comment"></span> 3</a>
							</p>
						</div>
					</div>
				</div>
				<div class="col-md-4 ftco-animate">
					<div class="blog-entry">
						<a href="#" class="block-20" style="background-image: url('images/image_2.jpg');">
						</a>
						<div class="text px-4 pt-3 pb-4">
							<div class="meta">
								<div><a href="#">August 3, 2020</a></div>
								<div><a href="#">Admin</a></div>
							</div>
							<h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
							<p class="clearfix">
								<a href="#" class="float-left read btn btn-primary">Read more</a>
								<a href="#" class="float-right meta-chat"><span class="fa fa-comment"></span> 3</a>
							</p>
						</div>
					</div>
				</div>
				<div class="col-md-4 ftco-animate">
					<div class="blog-entry">
						<a href="#" class="block-20" style="background-image: url('images/image_3.jpg');">
						</a>
						<div class="text px-4 pt-3 pb-4">
							<div class="meta">
								<div><a href="#">August 3, 2020</a></div>
								<div><a href="#">Admin</a></div>
							</div>
							<h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
							<p class="clearfix">
								<a href="#" class="float-left read btn btn-primary">Read more</a>
								<a href="#" class="float-right meta-chat"><span class="fa fa-comment"></span> 3</a>
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="ftco-section ftco-no-pt ftco-no-pb ftco-intro bg-danger">
		<div class="container py-5">
			<div class="row py-2">
				<div class="col-md-12 text-center">
					<h2 style="font-family: Dancing Script, cursive; font-size:70px;">We Make Delicious &amp; Nutritious Food</h2>
					<a href="#re" class="btn btn-white btn-outline-white">Book A Table Now</a>
				</div>
			</div>
		</div>
	</section>

	<!-- footer -->
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
	<?php //} ?>