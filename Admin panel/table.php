<?php include("header.php");
$qry = "SELECT * FROM `dishes`";
$s = mysqli_query($conn,$qry);
   ?>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    
<style>
    
    .o{
        margin-left:21%;
        font-weight:bold;
        color:red;
      font-size:30px;
    }
    .h{
        color: blue;
    }
    </style>
         <!-- lunch table -->
                    <div class="col-12">
                        <div class="bg-secondary rounded h-100 p-4">
                            <h6 style="text-align:center; font-size:40px; font-family: Dancing Script, cursive;" class="mb-4"> Lunch Responsive Table</h6>
                            <div class="table-responsive">
                                <table class="table table-dark table-striped">
                                    <thead>

                                        <tr>
                                            <th scope="col">Sr No</th>
                                            <th scope="col">Dish Name</th>
                                            <th scope="col">Price</th>
                                            <th scope="col">Image</th>
                                            <th scope="col">Discription</th>
                                            <th scope="col">Delete</th>
                                            <th scope="col">Update</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php 
                                        while($var=mysqli_fetch_array($s)){
                                        
                                        
                                        ?>
                                        <tr>
                                            <th scope="row"><?php echo $var['Sno']; ?></th>

                                            <td><?php echo $var['name']; ?></td>
                                            <td><?php echo "$"." ".$var['price']; ?></td>
                                            <td><img height = "50px" width= "50px" src="<?php echo'img/'.$var['image']; ?>"></td>
                                            <td><?php echo $var['discription']; ?></td>
                                            <td> <a class='dbtn' data-id="<?php echo $var['Sno']; ?>"> 
                                            <i class="bi bi-trash3 o"></i></a>  </td>
                                                 <td> <a href="update.php?id=<?php echo $var['Sno']; ?>">
                                                  <i class="bi bi-box-arrow-up o h"></button></td>    
                                                </tr>
                                        </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
<hr style="color:white;"></hr>           
           <!-- Breakfast Table -->
<?php 
$qry = "SELECT * FROM `breakfast`";
$s = mysqli_query($conn,$qry);
 ?>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>

      
                    <div class="col-12">
                        <div class="bg-secondary rounded h-100 p-4">
                            <h6 style="text-align:center;font-size:40px; font-family: Dancing Script, cursive;"  class="mb-4"> Breakfast Responsive Table</h6>
                            <div class="table-responsive">
                                <table class="table table-dark table-striped-columns">
                                    <thead>

                                        <tr>
                                            <th scope="col">Sr No</th>
                                            <th scope="col">Dish Name</th>
                                            <th scope="col">Price</th>
                                            <th scope="col">Image</th>
                                            <th scope="col">Discription</th>
                                            <th scope="col">Delete</th>
                                            <th scope="col">Update</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php 
                                        while($var=mysqli_fetch_array($s)){
                                        
                                        
                                        ?>
                                        <tr>
                                            <th scope="row"><?php echo $var['Sno']; ?></th>

                                            <td><?php echo $var['name']; ?></td>
                                            <td><?php echo "$"." ".$var['price']; ?></td>
                                            <td><img height = "50px" width= "50px" src="<?php echo'img/'.$var['image']; ?>"></td>
                                            <td><?php echo $var['discription']; ?></td>
                                            <td> <a class='dbtn' data-id="<?php echo $var['Sno']; ?>"> <i class="bi bi-trash3 o"></i> </a</td>    
                                                 <td> <a href="update.php?id=<?php echo $var['Sno']; ?>">
                                                  <i class="bi bi-box-arrow-up o h"></button></td>    
                                                </tr>
                                        </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
<hr style="color:white;"></hr>                   
    <!-- Dinner table -->
<?php 
$qry = "SELECT * FROM `dinner`";
$s = mysqli_query($conn,$qry);
   ?>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>

       
                    <div class="col-12">
                        <div class="bg-secondary rounded h-100 p-4">
                            <h6 style="text-align:center;font-size:40px; font-family: Dancing Script; font-family:cursive;"  class="mb-4"> Dinner Responsive Table</h6>
                            <div class="table-responsive">
                                <table class="table table-dark table-striped">
                                    <thead>

                                        <tr>
                                            <th scope="col">Sr No</th>
                                            <th scope="col">Dish Name</th>
                                            <th scope="col">Price</th>
                                            <th scope="col">Image</th>
                                            <th scope="col">Discription</th>
                                            <th scope="col">Delete</th>
                                            <th scope="col">Update</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php 
                                        while($var=mysqli_fetch_array($s)){
                                        
                                        
                                        ?>
                                        <tr>
                                            <th scope="row"><?php echo $var['Sno']; ?></th>

                                            <td><?php echo $var['name']; ?></td>
                                            <td><?php echo "$"." ".$var['price']; ?></td>
                                            <td><img height = "50px" width= "50px" src="<?php echo'img/'.$var['image']; ?>"></td>
                                            <td><?php echo $var['discription']; ?></td>
                                            <td> <a class='dbtn' data-id="<?php echo $var['Sno']; ?>">
                                                 <i class="bi bi-trash3 o"></i> </a</td>    
                                                 <td> <a href="update.php?id=<?php echo $var['Sno']; ?>">
                                                  <i class="bi bi-box-arrow-up o h"></button></td>    
                                                </tr>
                                        </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
<!-- <hr style="color:white;"></hr>-->
            <!-- Table End -->


            <!-- Footer Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="bg-secondary rounded-top p-4">
                    <div class="row">
                        <div class="col-12 col-sm-6 text-center text-sm-start">
                            &copy; <a href="#">Your Site Name</a>, All Right Reserved. 
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
         
        <!-- // delete data -->
         <script>
          $(document).ready(function() {
    $(document).on("click", ".dbtn", function() {
        if (!confirm("Are you sure you want to delete this record?")) {
            return; // Exit if the user cancels
        }

        var u_id = $(this).data('id');
        var element = this;

        $.ajax({
            url: "delete.php",
            type: "POST", // Use uppercase for consistency
            data: {
                id: u_id
            },
            success: function(data) {
                // Check if the response is a success message
                if (data.trim() === 'data deleted') { // Use trim() to avoid whitespace issues
                    $(element).closest('tr').fadeOut(2000);
                } else {
                    alert("Can't delete record: " + data); // Show the error message from the server
                }
            },
            error: function(xhr, status, error) {
                alert("An error occurred: " + error);
            }
        });
    });
});
            </script>

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