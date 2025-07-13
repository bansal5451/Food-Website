     <?php  include("header.php"); 
	 include("slider.php");
	 ?>

<?php 
 $Q = "SELECT * FROM `breakfast`";
 $rn = mysqli_query($conn,$Q);
?>
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center mb-5 pb-2">
				<div class="col-md-7 text-center heading-section ftco-animate">
					<span class="subheading" style="font-size:60px;">Specialties</span><br>
					<h2 class="mb-4" style="font-size:30px;">Our Menu</h2>
				</div>
			</div>
			
			<!-- BREAKFAST -->
			
			<div class="row">
				<div class="col-md-6 col-lg-4">
					<div class="menu-wrap">
				
						<div class="heading-menu text-center ftco-animate">
							<h3>Breakfast</h3>
							<?php
			               while($show=mysqli_fetch_array($rn)){
				        ?>
						</div>
						
						<div class="menus d-flex ftco-animate">
						   <img src="<?php echo'images/'. $show['image']; ?>" class="menu-img img" height="180px" width="80px" alt="...">
							
							<div class="text">
								<div class="d-flex">
									<div class="one-half">
										<h3><?php echo $show['name']; ?></h3>
									</div>
									<div class="one-forth">
										<span class="price">$<?php echo $show['price']; ?></span>
									</div>
								</div>
								<p><?php echo $show['discription']; ?></p>
								<a href="orderBreakfast.php?id=<?php echo $show['Sno']; ?>"class="btn btn-danger ">order</a>
							</div>
							<?php } ?>
						</div>
						<span class="flat flaticon-bread" style="left: 0;"></span>
						<span class="flat flaticon-breakfast" style="right: 0;"></span>
					 </div> 
				</div>
<!-- BREAKFAST END -->

<!-- LUNCH START -->
<?php 
 $Q = "SELECT * FROM `dishes`";
 $rn = mysqli_query($conn,$Q);
?>
				<div class="col-md-6 col-lg-4">
					<div class="menu-wrap">
						<div class="heading-menu text-center ftco-animate">
							<h3>Lunch</h3>
							<?php
			               while($show=mysqli_fetch_array($rn)){
				        ?>
						</div>
						<div class="menus d-flex ftco-animate">
						<img src="<?php echo'images/'. $show['image']; ?>" class="menu-img img" height="180px" width="80px" alt="...">
							
							<div class="text">
								<div class="d-flex">
									<div class="one-half">
										<h3><?php echo $show['name']; ?></h3>
									</div>
									<div class="one-forth">
										<span class="price">$<?php echo $show['price']; ?></span>
									</div>
								</div>
								<p><?php echo $show['discription']; ?></p>
								<a href="order.php?id=<?php echo $show['Sno']; ?>" class="btn btn-danger ">order</a>
							</div>
							<?php } ?>
						</div>
						<span class="flat flaticon-pizza" style="left: 0;"></span>
						<span class="flat flaticon-chicken" style="right: 0;"></span>
					</div>
				</div>
<!-- LUNCH END -->

<!-- DINNER START -->
<?php 
 $Q = "SELECT * FROM `dinner`";
 $rn = mysqli_query($conn,$Q);
?>
				<div class="col-md-6 col-lg-4">
					<div class="menu-wrap">
						<div class="heading-menu text-center ftco-animate">
							<h3>Dinner</h3>
							<?php
			               while($show=mysqli_fetch_array($rn)){
				        ?>
						</div>
						<div class="menus d-flex ftco-animate">
						<img src="<?php echo'images/'. $show['image']; ?>" class="menu-img img" height="180px" width="80px" alt="...">
							<div class="text">
								<div class="d-flex">
									<div class="one-half">
										<h3><?php echo $show['name']; ?></h3>
									</div>
									<div class="one-forth">
										<span class="price">$<?php echo $show['price']; ?></span>
									</div>
								</div>
								<p>
								<?php echo $show['discription']; ?></p>
								<a href="orderDinner.php?id=<?php echo $show['Sno']; ?>" class="btn btn-danger ">order</a>
							</div>
							<?php } ?>
						</div>
						<span class="flat flaticon-omelette" style="left: 0;"></span>
						<span class="flat flaticon-burger" style="right: 0;"></span>
					</div>
				</div>					
				</div>
			</div>
		</div>
<!-- DINNER END -->
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