<?php 

 include("header.php");
if(!isset($_SESSION['name'])){

    header("location:login.php");
}
else{
   ?>

<?php
$nm=4;
if(isset($_GET['page'])){
    $page = $_GET['page'];
  }
  else{
    $page = 1;
  }
  $offset = ($page-1) * $nm;
$qry = "SELECT * FROM `orders`  LIMIT {$offset},{$nm} ";
$s = mysqli_query($conn,$qry);
?>
<style>
    #r{
        position:relative;
        left:630px;
        bottom:180px;
    }
      .btn{
        position:relative;
        left:440px;
    }
    #t{
        position:relative;
        right:330px;
    }
    </style>
            <!-- Recent Order Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="bg-secondary text-center rounded p-4">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <h6 class="mb-0" style="font-size:30px;">Orders</h6>
                        <a href="">Show All</a>
                    </div>
                    <div class="table-responsive">
                        <table class="table text-start align-middle table-bordered table-hover mb-0">
                            <thead>
                                <tr class="text-white">
                                    <th scope="col">Dish Name</th>
                                    <!-- <th scope="col">Invoice</th> -->
                                    <th scope="col">Email ID</th>
                                    <th scope="col">Amount</th>
                                    <th scope="col">Cancel</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                            <?php 
                                     $total = 0;
                                        while($var=mysqli_fetch_array($s)){
                                          // echo $var['Price'] ;
                                          $total += ($var['Price']);
                                        ?>
                                <tr>
                                    <td><?php echo $var['Name']; ?></td>
                                            <td><?php echo $var['Email']; ?></td>
                                            <td><?php echo "$"." ".$var['Price']; ?></td>
                                            <td> <a class='dbtn' href="cancel1.php?id=<?php echo $var['Sr.no']; ?>"> 
                                            <i class="bi bi-x-lg o"></i></a>  </td>
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                        <!-- <span class="q"> Grand Total =  </span>
                                 <span class="r"><?php //echo  "$"." ".$total; ?>
                                </span> -->
                    </div>
                    <?php
                            $pagination = "SELECT * FROM `orders` WHERE 1";
                               $r1 = mysqli_query($conn, $pagination) or die("<script>alert('server down')</script>");
                                if(mysqli_num_rows($r1)>0)
                                 {
                                 $total_records = mysqli_num_rows($r1);
                                 $total_page = ceil($total_records/$nm);
                                  ?>
                            <div class="pagination" >
                                      <?php if ($page>1) {
                                      ?>
                                      <a class="btn btn-outline btn-sm" href="index.php?page=<?php echo $page-1; ?>"> << </a>
                                     <?php }
                                      for($i=1; $i<=$total_page; $i++){
                                       ?>
                                     <a class="btn btn-outline btn-sm" href="index.php?page=<?php echo $i;?>"> <?php echo $i; ?> </a>
                                      <?php } ?>
                                      <?php if($page<$total_page){ ?>
                                     <a class="btn btn-outline btn-sm" href="index.php?page=<?php echo $page+1; ?>"> >> </a>
                                     <?php } ?>
                                
                            </div>
                    <?php } ?>
                </div>
            </div>
            <!-- Recent Orders End -->
            <?php
$nm=4;
if(isset($_GET['page'])){
    $page = $_GET['page'];
  }
  else{
    $page = 1;
  }
$offset = ($page-1) * $nm;
$qry = "SELECT * FROM `contact_us`  LIMIT {$offset},{$nm} ";
$s = mysqli_query($conn,$qry);
?>
 <!-- Widgets Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-12 col-md-6 col-xl-4">
                        <div class="h-100 bg-secondary rounded p-4">
                            <div class="d-flex align-items-center justify-content-between mb-2">
                                <h6 class="mb-0">Messages</h6>
                                <!-- <a href="">Show All</a> -->
                            </div>
                            <?php 
                                        while($var=mysqli_fetch_array($s)){
                                         
                                        ?>
                            <div class="d-flex align-items-center border-bottom  border-light py-3">
                                <i class="bi bi-person-fill rounded-circle flex-shrink-0" style="font-size:40px;"></i>
                                <div class="w-100 ms-3">
                                    <div class="d-flex w-100 justify-content-between">
                                        <h6 class="mb-0"><?php echo $var['name'];?></h6>
                                        <!-- <small>15 minutes ago</small> -->
                                    </div>
                                    <span><?php echo $var['message'];?></span>
                                    <!-- <hr style="color:white;"> -->
                                </div>
                            </div> 
                            <?php }?>
                            <?php
                           $pagination = "SELECT * FROM `contact_us` WHERE 1";
                              $r1 = mysqli_query($conn, $pagination) or die("<script>alert('server down')</script>");
                               if(mysqli_num_rows($r1)>0)
                                {
                                $total_records = mysqli_num_rows($r1);
                                $total_page = ceil($total_records/$nm);
                                 ?>
                           <span class="pagination" id="t">
                                     <?php if ($page>1) {
                                     ?>
                                     <a class="btn btn btn-sm" href="index.php?page=<?php echo $page-1; ?>"> << </a>
                                    <?php }
                                     for($i=1; $i<=$total_page; $i++){
                                      ?>
                                    <a class="btn btn btn-sm" href="index.php?page=<?php echo $i;?>"> <?php echo $i; ?> </a>
                                     <?php } ?>
                                     <?php if($page<$total_page){ ?>
                                    <a class="btn btn btn-sm" href="index.php?page=<?php echo $page+1; ?>"> >> </a>
                                    <?php } ?>
                            </span>
                        <?php } ?>
                        </div>
                    </div>
                            </div>
                        </div>
                    </div>
                </div>

  <!-- total subscribers and visitors -->
 <?php
 $sub = "SELECT * FROM signup";
 $qry = mysqli_query($conn,$sub);
 $total = mysqli_num_rows($qry);
 ?>
                <div class="row g-4">
                    <div class="col-sm-6 col-xl-3" id="r">
                        <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-chart-line fa-3x text-primary"></i>
                            <div class="ms-3">
                                <p class="mb-2">Total Visitors</p>
                                <h6 class="mb-0"><?php echo $total;?></h6>
                            </div>
                        </div>
                    </div>
                    <?php
                      $sub = "SELECT * FROM review";
                     $qry = mysqli_query($conn,$sub);
                      $total = mysqli_num_rows($qry);
                    ?> 
                    <div class="col-sm-6 col-xl-3" id="r">
                        <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-chart-bar fa-3x text-primary"></i>
                            <div class="ms-3">
                                <p class="mb-2">Total Subscribers</p>
                                <h6 class="mb-0"><?php echo $total;?></h6>
                            </div>
                        </div>
                    </div>
                </div>
                            </div>
            <!-- Sale & Revenue End -->

            <!-- Footer Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="bg-secondary rounded-top p-4">
                    <div class="row">
                        <div class="col-12 col-sm-6 text-center text-sm-start">
                            &copy; <a href="#"></a>
                        </div>
                        <div class="col-12 col-sm-6 text-center text-sm-end">
                            <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
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
    <script src="lib/chart/chart.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>
<?php
}
?>