<?php
$conn = mysqli_connect("localhost", "root", "", "queenrestaurant");

$id = $_GET['id'];
$que = "SELECT * FROM `dishes` WHERE Sno  ='$id'";
$runn = mysqli_query($conn,$que); 
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
         integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"crossorigin="anonymous">
         <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"crossorigin="anonymous"></script>

    <style>
  #myForm{
  font-family: monospace;
  border-radius: 10px;
  box-shadow: 1px 1px 20px 10px rgb(34, 6, 34);
}
.btn{
    font-weight: bolder;
    color:black;
    font-size: 17px;
    width: 95%;
    height: 35px;
    margin-left: 9px;
    margin-bottom: 7px;
    /* background-color:pink; */
}
body{
  margin-left: 35%;
}
.wrapper{
   background: transparent;
    width: 400px;
    height: 500px;
    margin-top:20px;
    padding: 10px;
    border-radius: 10px;
    padding: 30px 40px;
    border: 2px solid rgba(10, 5, 5, 0.671);
    backdrop-filter: blur(5px);
    box-shadow: 7px 7px 50px 20px rgba(79, 23, 53, 0.84);
    background-color: rgba(0, 1, 0, 0.2);
}
.col-4{
    width: 100%;
    height: 50px;  
}
:hover.col-4{
    scale: 1.08;
    box-shadow: transparent;
}
img{
  margin-left: 99px;
}
 </style>
</head>
<body  style="background-image: url('istockphoto-920219456-612x612.jpg'); background-size:cover;">
        <?php 
        while($sh=mysqli_fetch_array($runn)){
         ?>
         <div class="wrapper">
         <form id="myform" method="post"  enctype="multipart/form-data">
         <u><h2 style="text-align: center; font-weight: bold;">UPDATE FORM</h2></u>
         <div class="col-4" style="padding: 10px; margin: auto;" >
            <input type="text" name="name" placeholder="<?php echo $sh['name']; ?>" class="form-control">
          </div>

          <div class="col-4" style="padding: 10px; margin: auto;" >
          <input type="email" name="email" placeholder="<?php echo $sh['price']; ?>" class="form-control">
        </div>
        
        <br>   
       <td class="img"><img height="100px" widht="100px" src="./img/<?php echo $sh['image'];?>"></td>
        <br>
        <div class="col-4" style="padding: 10px; margin: auto;" >
          <input type="file" name="pict" class="form-control" placeholder="picture">
       </div><br>
      
       <div class="signup-link">
        <button type="submit" name="ubtn" class="btn btn-light">Save changes</button>
        <?php } ?>
      </div>
    </div>       
</form>
</body>
</html>
<?php 
if(isset($_POST['ubtn'])){
    $name=$_POST['name'];
    $price=$_POST['price'];
    $pic=$_FILES['pict']['name'];
    $temp=$_FILES['pict']['tmp_name'];
    $path = 'img/'. $pic;
    $m= move_uploaded_file($temp,$path);

    $upd="UPDATE dishes SET name='$name',price='$price',pict='$pic' where Sr.no='$id'";
    $rn=mysqli_query($conn,$upd);
    header("location:table.php");
}?>