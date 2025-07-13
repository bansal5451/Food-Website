<!-- lunch coding -->
 <?php include("header.php");

if (isset($_POST['btn'])) {
    $dish = $_POST['dn'];
    $price = $_POST['num'];

    $photo = $_FILES['image']['name'];
    $temp = $_FILES['image']['tmp_name'];
    $path = 'img/' . $photo;
 // Move uploaded file
      move_uploaded_file($temp, $path); 

      $discription = $_POST['disc'];

      $qury = $conn->prepare("INSERT INTO dishes (name, price, image, discription) VALUES (?, ?, ?, ?)");
      $qury->bind_param("ssss", $dish, $price, $photo, $discription);

      $qury->execute();
      echo"Items Added";
    }
   ?>

   <!-- breakfast coding -->
<?php
if (isset($_POST['butn'])) {
    $dish = $_POST['li'];
    $price = $_POST['numb'];

    $photo = $_FILES['img']['name'];
    $temp = $_FILES['img']['tmp_name'];
    $path = 'img/' . $photo;
 // Move uploaded file
      move_uploaded_file($temp, $path); 

      $discription = $_POST['discrip'];

      $qury = $conn->prepare("INSERT INTO breakfast (name, price, image, discription) VALUES (?, ?, ?, ?)");
      $qury->bind_param("ssss", $dish, $price, $photo, $discription);

      $qury->execute();
      echo"Items Added";
    }
 ?>
 <!-- dinner coding -->
 <?php
 if (isset($_POST['botn'])) {
    $dish = $_POST['dl'];
    $price = $_POST['numbr'];

    $photo = $_FILES['imge']['name'];
    $temp = $_FILES['imge']['tmp_name'];
    $path = 'img/' . $photo;
 // Move uploaded file
      move_uploaded_file($temp, $path); 

      $discription = $_POST['discr'];

      $qury = $conn->prepare("INSERT INTO dinner (name, price, image, discription) VALUES (?, ?, ?, ?)");
      $qury->bind_param("ssss", $dish, $price, $photo, $discription);

      $qury->execute();
      echo"Items Added";
    }
   ?>
   <style>
    .s{
        margin-left: 10px;
        /* margin-top: 50px; */
        /* position:relative; */  
    }
    .btn{
        margin-left:100px;
        margin-top:20px;
    }
    .col-4{
        /* position:realtive; */
        padding-top:20px;
        /* margin-left:10px; */
    }
    </style>
    <div class="row">
            <!--Breakfast Form Start -->  
            <div class="col-4">
             <form class="s" method="post" enctype="multipart/form-data">
                        <div class="bg-secondary rounded h-100 p-4">
                            <h6 class="mb-4" style="font-size: 20px;">Adding Breakfast Food Items</h6>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control"  name="li" id="floatingInput"
                                    placeholder="Dish Name">
                                <label for="floatingInput">Dish Name</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="number" class="form-control" name="numb" id="floatingPassword"
                                    placeholder="Price">
                                <label for="floatingPassword">Price</label>
                            </div>
                            <div class="mb-3">
                                <input  type="file" class="form-control form-control-sm bg-dark" name="img" >
                            </div>
                            <div class="form-floating">
                                <textarea class="form-control" placeholder="Leave a comment here"
                                    id="floatingTextarea" name="discrip" style="height: 150px;"></textarea>
                                <label for="floatingTextarea">Discription</label>
                            </div>
                            <button type="submit" name="butn" class="btn btn-outline-light">Submit</button>    
                    </div>

</form>
</div>
     <!-- Form End -->

            <!-- Lunch Form Start --> 
            <div class="col-4"> 
             <form class="s" method="post" enctype="multipart/form-data">
                        <div class="bg-secondary rounded h-100 p-4">
                            <h6 class="mb-4" style="font-size: 20px;">Adding Lunch Food Items</h6>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control"  name="dn" id="floatingInput"
                                    placeholder="Dish Name">
                                <label for="floatingInput">Dish Name</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="number" class="form-control" name="num" id="floatingPassword"
                                    placeholder="Price">
                                <label for="floatingPassword">Price</label>
                            </div>
                            <div class="mb-3">
                                <input  type="file" class="form-control form-control-sm bg-dark" name="image" >
                            </div>
                            <div class="form-floating">
                                <textarea class="form-control" placeholder="Leave a comment here"
                                    id="floatingTextarea" name="disc" style="height: 150px;"></textarea>
                                <label for="floatingTextarea">Discription</label>
                            </div>
                            <button type="submit" name="btn" class="btn btn-outline-light">Submit</button>
                    </div>

</form>
</div>

     <!-- Form End -->

            <!-- Dinner Form Start -->  
             <div class="col-4">
             <form class="s" method="post" enctype="multipart/form-data">
                        <div class="bg-secondary rounded h-100 p-4">
                            <h6 class="mb-4" style="font-size: 20px;">Adding Dinner Food Items</h6>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control"  name="dl" id="floatingInput"
                                    placeholder="Dish Name">
                                <label for="floatingInput">Dish Name</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="number" class="form-control" name="numbr" id="floatingPassword"
                                    placeholder="Price">
                                <label for="floatingPassword">Price</label>
                            </div>
                            <div class="mb-3">
                                <input  type="file" class="form-control form-control-sm bg-dark" name="imge" >
                            </div>
                            <div class="form-floating">
                                <textarea class="form-control" placeholder="Leave a comment here"
                                    id="floatingTextarea" name="discr" style="height: 150px;"></textarea>
                                <label for="floatingTextarea">Discription</label>
                            </div>
                            <button type="submit" name="botn" class="btn btn-outline-light">Submit</button>
                    </div>

</form>
</div>
</div>
     <!-- Form End -->
            <!-- Footer Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="bg-secondary rounded-top p-4">
                    <div class="row">
                        <div class="col-12 col-sm-6 text-center text-sm-start">
                            &copy; <a href="#">Your Site Name</a>, All Right Reserved. 
                        </div>
                        <div class="col-12 col-sm-6 text-center text-sm-end">
                            Designed By <a href="https://htmlcodex.com">HTML Codex</a>
                            <br>Distributed By: <a href="https://themewagon.com" target="_blank">ThemeWagon</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer End -->
        </div>
        <!-- Content End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- <script src="lib/chart/chart.min.js"></script> -->
    <!-- <script src="lib/easing/easing.min.js"></script> -->
    <!-- <script src="lib/waypoints/waypoints.min.js"></script> -->
    <!-- <script src="lib/owlcarousel/owl.carousel.min.js"></script> -->
    <!-- <script src="lib/tempusdominus/js/moment.min.js"></script> -->
    <!-- <script src="lib/tempusdominus/js/moment-timezone.min.js"></script> -->
    <!-- <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script> -->

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>