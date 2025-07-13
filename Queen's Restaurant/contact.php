<?php  include("header.php"); 
include("slider.php");?>

<section class="ftco-section contact-section bg-light">
  <div class="container">
    <div class="row d-flex contact-info">
      <div class="col-md-12">
        <h2 class="h4 font-weight-bold">Contact Information</h2>
      </div>
      <div class="w-100"></div>
      <div class="col-md-3 d-flex">
       <div class="dbox">
         <p><span>Address:</span> 198 West 21th Street, Suite 721 New York NY 10016</p>
       </div>
     </div>
     <div class="col-md-3 d-flex">
       <div class="dbox">
         <p><span>Phone:</span> <a href="tel://1234567920">+ 1235 2355 98</a></p>
       </div>
     </div>
     <div class="col-md-3 d-flex">
       <div class="dbox">
         <p><span>Email:</span> <a href="mailto:info@yoursite.com">info@yoursite.com</a></p>
       </div>
     </div>
     <div class="col-md-3 d-flex">
       <div class="dbox">
         <p><span>Website</span> <a href="#">yoursite.com</a></p>
       </div>
     </div>
   </div>
 </div>
</section>
<?php 
if(isset($_POST["btn"])){
  $uname= $_POST['name'];
  $mail= $_POST['email'];
  $sub= $_POST['subject'];
  $msg= $_POST['message'];
 
 $stmt = $conn->prepare("INSERT INTO `contact_us`(name,email,subject,message) VALUES(?,?,?,?)");
 $stmt->bind_param("ssss", $uname, $mail, $sub, $msg);
 $stmt->execute();
$result = $stmt->get_result();


}
?>
<section class="ftco-section ftco-no-pt contact-section">
 <div class="container">
  <div class="row d-flex align-items-stretch no-gutters">
   <div class="col-md-6 p-5 order-md-last">
    <h2 class="h4 mb-5 font-weight-bold">Contact Us</h2>
    <form method="post">
      <div class="form-group">
        <input type="text" name="name" class="form-control" placeholder="Your Name">
      </div>
      <div class="form-group">
        <input type="email"name="email" class="form-control" placeholder="Your Email">
      </div>
      <div class="form-group">
        <input type="text"name="subject" class="form-control" placeholder="Subject">
      </div>
      <div class="form-group">
        <textarea name="message"  class="form-control" placeholder="Message"></textarea>
      </div>
      <div class="form-group">
        <button type="submit" name="btn" value="Send Message" class="btn btn-primary py-3 px-5">Send Message</button>
      </div>
    </form>
  </div>
  <div class="col-md-6 d-flex align-items-stretch">
    <div id="map"></div>
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