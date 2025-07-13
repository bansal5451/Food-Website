<?php
$conn = mysqli_connect("localhost", "root", "", "queenrestaurant");
session_start();
$email= $_SESSION['email'];

$x="SELECT * FROM orders WHERE Email = '$email'";
$rr=mysqli_query($conn,$x);
$total=0;
while($var=mysqli_fetch_array($rr)){
    $total += ($var['Price']);
}
// $item=$_POST['qty'];
// $price = $_POST['Price'];
//  $total+=$tp; 

?>
<html>
<head>
<title>Pay through PayPal: www.TestAccount.com</title>

</head>
 <body onLoad="document.forms['paypalForm'].submit();">
<form  name="paypalForm" action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post">
 <input type="hidden" name="cmd" value="_xclick" />
 <input type="hidden" name="business" value="sb-sqxan25114656@business.example.com" />
 <input type="hidden" name="password" value="W656SMRSY4GEYDV5" />
 <!-- <input type="hidden" name="custom" value="1123" />
 <input type="hidden" name="item_name" value="10" /> -->
 <input type="hidden" name="amount" value="<?php echo $total; ?>"/>
 <!-- <input type="hidden" name="rm" value="30" /> -->
 <!-- <input type="hidden" name="return" value="success.php" /> -->
 <input type="hidden" name="cancel_return" value="cancel.php" />
 <input type="hidden" name="cert_id" value="AmtOMfrGlbkvUIEemQaQR85l4R2AAk7vqzHbOBcRP4JSriTeturarJTu" />
</form>
</body>
</html>