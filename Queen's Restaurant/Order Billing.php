 <?php  include("header.php");
include("slider.php");
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

$email= $_SESSION['email'];
$qry = "SELECT * FROM `orders`  WHERE Email = '$email' LIMIT {$offset},{$nm} ";
$s = mysqli_query($conn,$qry);
?>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>    
<style>
    
    .o{
        margin-left:21%;
        /* font-weight:bolder; */
        color:red;
      font-size:30px;
        }
    .h{
        color: blue;
    }
    .q{
        position:relative;
        left:160px;
        color:black;
        font-size:20px;
        font-weight:bold;
    }
    .r{
        position:relative;
        left:180px;
        color:black;
        font-size:20px;
        font-weight:bold;
    }
    #e{
        height:auto;
        position:relative;
        top:50px;
        left:350px;
    }
    .col-6{
        height:500px;
    }
    #butn{
        position:relative;
        left:470px;
    }
    .btn{
        position:relative;
        left:200px;
    }
    /* .pagination {
  display: inline-block;
} */
/* .pagination a {
  color: black;
  float: left;
  padding: 8px 16px;
  text-decoration: none;
} */
    </style>
         <!-- Order-->
                    <div class="col-6">
                        <div class="bg-secondary rounded p-4" id="e">
                            <h6 style="text-align:center; font-size:40px; font-family: Dancing Script, cursive;" class="mb-4"> Order Billing</h6>
                            <div class="table-responsive">
                                <table class="table table-dark table-striped">
                                    <thead>
                                        <tr>
                                            <!-- <th scope="col">Sr No</th> -->
                                            <th scope="col">Dish Name</th>
                                            <th scope="col">Email</th>
                                            <th scope="col">Price</th>
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
                                            <!-- <th scope="row"><?php //echo $var['Sr.no']; ?></th> -->
                                            <td><?php echo $var['Name']; ?></td>
                                            <td><?php echo $var['Email']; ?></td>
                                            <td><?php echo "$"." ".$var['Price']; ?></td>
                                            <!-- <td><img height = "50px" width= "50px" src="<?php //echo'img/'.$var['image']; ?>"></td> -->
                                            <td> <a class='dbtn' href="cancel.php?id=<?php echo $var['Sr.no']; ?>"> 
                                            <i class="bi bi-x-lg o"></i></a>  </td>        
                                        </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>  
                                <a href="pay2.php" type="submit" name="butn" id="butn" class="btn btn-outline-light btn-sm">Pay Now</a> 
                                <span class="q"> Grand Total =  </span>
                                 <span class="r"><?php echo  "$"." ".$total; ?>
                                </span>
                            </div>
                            <?php
                            $pagination = "SELECT * FROM `orders` WHERE 1";
                               $r1 = mysqli_query($conn, $pagination) or die("<script>alert('server down')</script>");
                                if(mysqli_num_rows($r1)>0)
                                 {
                                 $total_records = mysqli_num_rows($r1);
                                 $total_page = ceil($total_records/$nm);
                                  ?>
                            <div class="pagination">
                                      <?php if ($page>1) {
                                      ?>
                                      <a class="btn btn-outline btn-sm" href="Order Billing.php?page=<?php echo $page-1; ?>"> << </a>
                                     <?php }
                                      for($i=1; $i<=$total_page; $i++){
                                       ?>
                                     <a class="btn btn-outline btn-sm" href="Order Billing.php?page=<?php echo $i;?>"> <?php echo $i; ?> </a>
                                      <?php } ?>
                                      <?php if($page<$total_page){ ?>
                                     <a class="btn btn-outline btn-sm" href="Order Billing.php?page=<?php echo $page+1; ?>"> >> </a>
                                     <?php } ?>
                                
                            </div>
                             <?php }
                             ?>
                        </div>
                    </div>

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