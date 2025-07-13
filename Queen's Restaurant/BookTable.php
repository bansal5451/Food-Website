<?php
$conn = mysqli_connect("localhost", "root", "", "queenrestaurant");
if(isset($_POST["btn"])){
    $uname= $_POST['name'];
    $mail= $_POST['email'];
    $num= $_POST['number'];
    $check= $_POST['checked'];
    $time= $_POST['tym'];
    
    // <!-- Check if the table is already booked on the specified date and time -->
    $stmt = $conn->prepare("SELECT * FROM `booking` WHERE date = ? AND time = ?");
    $stmt->bind_param("ss", $check, $time);
    $stmt->execute();
    $result = $stmt->get_result();

    if($result->num_rows > 0) {
    
    ?>
    <script> 
        alert ("Table not available");
    </script>
    <?php
     header("location: index.php");
  }
  else{
    $stmt = $conn->prepare("INSERT INTO `booking`(uname,mail,num,date,time) VALUES(?,?,?,?,?)");
    $stmt->bind_param("sssss", $uname, $mail, $num, $check, $time);

    if ($stmt->execute())
					{ 
                        ?>
					<script> 
						alert ("Your data has been submitted");
					</script>
					<?php
                    header("location: index.php");
                    }
					else{
						echo mysqli_connect_error($conn);
					} 	
	}
}

?>
