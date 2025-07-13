<footer class="ftco-footer ftco-no-pb ftco-section">
			<div class="container">
				<div class="row mb-5">
					<div class="col-md-6 col-lg-3">
						<div class="ftco-footer-widget mb-4">
							<h2 class="ftco-heading-2">Taste.it</h2>
							<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove</p>
							<ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-3">
								<li class="ftco-animate"><a href="#"><span class="fa fa-twitter"></span></a></li>
								<li class="ftco-animate"><a href="#"><span class="fa fa-facebook"></span></a></li>
								<li class="ftco-animate"><a href="#"><span class="fa fa-instagram"></span></a></li>
							</ul>
						</div>
					</div>
					<div class="col-md-6 col-lg-3">
						<div class="ftco-footer-widget mb-4">
							<h2 class="ftco-heading-2">Open Hours</h2>
							<ul class="list-unstyled open-hours text-secondary">
								<li class="d-flex"><span>Monday</span><span>9:00 - 24:00</span></li>
								<li class="d-flex"><span>Tuesday</span><span>9:00 - 24:00</span></li>
								<li class="d-flex"><span>Wednesday</span><span>9:00 - 24:00</span></li>
								<li class="d-flex"><span>Thursday</span><span>9:00 - 24:00</span></li>
								<li class="d-flex"><span>Friday</span><span>9:00 - 02:00</span></li>
								<li class="d-flex"><span>Saturday</span><span>9:00 - 02:00</span></li>
								<li class="d-flex"><span>Sunday</span><span> Closed</span></li>
							</ul>
						</div>
					</div>
					<div class="col-md-6 col-lg-3">
						<div class="ftco-footer-widget mb-4">
							<h2 class="ftco-heading-2">Instagram</h2>
							<div class="thumb d-sm-flex">
								<a href="#" class="thumb-menu img" style="background-image: url(images/insta-1.jpg);">
								</a>
								<a href="#" class="thumb-menu img" style="background-image: url(images/insta-2.jpg);">
								</a>
								<a href="#" class="thumb-menu img" style="background-image: url(images/insta-3.jpg);">
								</a>
							</div>
							<div class="thumb d-flex">
								<a href="#" class="thumb-menu img" style="background-image: url(images/insta-4.jpg);">
								</a>
								<a href="#" class="thumb-menu img" style="background-image: url(images/insta-5.jpg);">
								</a>
								<a href="#" class="thumb-menu img" style="background-image: url(images/insta-6.jpg);">
								</a>
							</div>
						</div>
					</div>
					<?php 
$conn = mysqli_connect("localhost", "root", "", "queenrestaurant");
if(isset($_POST["btn"])){
					$subscibe= $_POST['email'];
					$review= $_POST['rv'];
					$stmt = $conn->prepare("INSERT INTO `review`(subscriber,review) VALUES(?,?)");
                    $stmt->bind_param("ss", $subscibe, $review);

                    if ($stmt->execute())
					{ ?>
					<script> 
						alert ("Your message has been submitted");
					</script>
					<?php
					}
					else{
						echo mysqli_connect_error($conn);
					} 	
				}
				?>
					<div class="col-md-6 col-lg-3">
						<div class="ftco-footer-widget mb-4">
							<h2 class="ftco-heading-2">Newsletter</h2>
							<p>Far far away, behind the word mountains, far from the countries.</p>
							<form class="subscribe-form" method="post">
								<div class="form-group">
								 <input type="email" name="email" class="form-control mb-2 text-center" placeholder="Enter email address">
								 <textarea class="form-control mb-2 text-center" name="rv" placeholder="Write a review"></textarea>
									<button type="submit" name="btn" class="form-control submit px-3">Review and Subscribe </button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
			<div class="container-fluid px-0 bg-primary py-3">
				<div class="row no-gutters">
					<div class="col-md-12 text-center">

						<p class="mb-0"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
							Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
							<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
						</div>
					</div>
				</div>
			</footer>