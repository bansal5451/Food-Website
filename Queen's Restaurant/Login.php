<?php
// include('header.php');
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
// $conn = mysqli_connect("sql312.infinityfree.com", "if0_38307289", "muskan0005", "if0_38307289_queenrestaurant");
$conn = mysqli_connect("localhost", "root", "", "queenrestaurant");

session_start();

if(isset($_SESSION['username'])){
    header("location:index.php");
   
}
else{
    
if(isset($_POST['btn'])){
    $email=$_POST['mail'];// form's name
    $pass=$_POST['paswrd'];
    
    $queryy="SELECT * FROM signup WHERE email = '$email' AND password = '$pass'";//database name
    // print_r($queryy);
    // die();
    $r=mysqli_query($conn,$queryy);
    // die();

   
    while($f = mysqli_fetch_array($r)){
        $_SESSION['username']=$f['name'];
        $_SESSION['sno']=$f['sno'];
        $_SESSION['email']=$f['email'];

        header("location:index.php");
        // echo"logged in";
        // echo $_SESSION['sno'];
        // die();
   }

}
?>
<html>
<head>
    <title>registration form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"crossorigin="anonymous">
        </script>
         <style>
            #myForm{
                font-family: monospace;
            }
            .btn{
                margin-left: 25%;
                margin-top:30px;
            }
            #o{
                color:black;
                margin-left: 5%;
              
            }
            body{
                background-color: aquamarine;
                margin-left: 35%;
                background:  url('E:\nature2.jpeg') no-repeat;
                margin-top:7%;
            }
           
            .Signup-link {
              margin-left: 20%;
            }
            .wrapper{
                background-color: rgba(182, 189, 202, 0.699);
                width: 400px;
                padding: 10px;
                border-radius: 10px;
                padding: 30px 40px;
            }
            .col-4{
                width: 100%;
                height: 50px;
            }
            .Signup-link a {
                color: black;
                font-weight: bolder;
            }
         </style>
</head>
<body >
    <div class="wrapper" style="border:3px;">
      <form id="myform"  action="" method="post">
      <u><h2 style="text-align: center; font-weight: bold;">Login Form</h2></u> 
        
          <div  class="col-4" style="padding: 25px; margin: auto;" >
          <i class="fas fa-user"></i>
            <input type="email" name="mail"  placeholder="Email" class="form-control" >
          </div>

          <div class="col-4" style="padding: 25px; margin: auto;" >
          <input type="password" name="paswrd" placeholder="Password" class="form-control" id="password">
       </div>
        <button type="submit" class="btn btn-warning" name="btn">Login</button>

       <div class="Signup-link">Not a member? <a href="signup.php">Signup now</a></div>
      </form>
    </div>
</body>
       
</html>
<?php }
    ?>