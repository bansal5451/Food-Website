<?php
$conn = mysqli_connect("localhost", "root", "", "queenrestaurant");
session_start();
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_SESSION['username'])) {
    header("location:index.php");
    exit(); // It's a good practice to call exit after a header redirect
} else {
    // Initialize error messages
    $nameErr = $emailErr = $numberErr = $passwordErr = $confirmPasswordErr = "";
    $name = $email = $number = $password = $conPswrd = ""; // Initialize variables

    if (isset($_POST['btn'])) {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Check for empty name
            if (trim($_POST["name"]) === "") {
                $nameErr = "*Name is required";
            } else {
                $name = $_POST["name"];
                if(!preg_match("/[a-zA-Z-\.]/",$name)){
                    $nameErr = "*Only letters and white space allowed";
                }
               
            }

            // Check for empty email
            if (trim($_POST["email"]) === "") {
                $emailErr = "*Email is required";
            } else {
                if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
                    $emailErr = "*Invalid email format";
                }
                else{
                    $email = $_POST["email"];
                }
            }

            // Check for empty number
            if (trim($_POST["number"]) === "") {
                $numberErr = "*Number is required";
            } else {
                $number = $_POST["number"];
            }

            // Check for empty password
            if (trim($_POST["password"]) === "") {
                $passwordErr = "*Password is required";
            } 
            else{
                if (!preg_match("/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/",$_POST["password"]) && $_POST["password"]==8) {
                    $passwordErr = "*Password must have 8 characters";
                }
            
            else {
                $password = $_POST["password"];
            }
        }
            // Check for empty confirm password
            if (trim($_POST["confirm_password"]) === "") {
                $confirmPasswordErr = "*Confirm Password is required";
            } else {
                $conPswrd = $_POST["confirm_password"];
            }

            // Check if password and confirm password match
            if ($password !== $conPswrd) {
                $confirmPasswordErr = "*Passwords do not match";
            }
            $stmt = $conn->prepare("SELECT * FROM signup WHERE name = ? AND email = ?");
            $stmt->bind_param("ss", $name, $email);
            $stmt->execute();
            $result = $stmt->get_result();

            if ($result->num_rows > 0) {
                $nameErr= "Name already exist.";
                $emailErr= "Email already exist.";
            }
            else{

            // Proceed if there are no errors
            if (empty($nameErr) && empty($emailErr) && empty($numberErr) && empty($passwordErr) && empty($confirmPasswordErr)) {
                // Handle file upload
                // $photo = $_FILES['pict']['name'];
                // $temp = $_FILES['pict']['tmp_name'];
                // $path = 'img/' . $photo;

                // Move uploaded file
                // if (move_uploaded_file($temp, $path)) {
                    // Use prepared statements to prevent SQL injection
                    $stmt = $conn->prepare("INSERT INTO signup (name, email, number, password, c_pswrd) VALUES (?, ?, ?, ?, ?)");
                    $stmt->bind_param("sssss", $name, $email, $number, $password, $conPswrd);

                    if ($stmt->execute()) {
                        header("location:Login.php");
                        exit(); // Always exit after a redirect
                    } else {
                        echo "Failed to insert data.";
                    }
                    $stmt->close();
               
            }
        }
  
    }
}
?>

<html>
<head>
    <title>Registration Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
         integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"crossorigin="anonymous">
         <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"crossorigin="anonymous"></script>

         <!-- <link rel="stylesheet" href="SDesigning.css"> -->
<style>
#myForm{
  font-family: monospace;
  border-radius: 10px;
  background-color: rgba(237, 239, 243, 0.27);
  /* box-shadow: 1px 1px 20px 10px rgb(20, 36, 69); */
}
.btn{
    font-weight: bold;
    color:black;
    font-size: 15px;
    width: 95%;
    height: 35px;
    margin-left: 9px;
    margin-bottom: 5px;
}

.signup-link {
  margin-left: 19%;
  color: black;
 }
 .signup-link a {
  color: black;
  font-weight: bolder;
  }

.body{
  margin-left: 35%;
}
.wrapper{
   /* background: transparent; */
    width: 400px;
    height: 450px;
    margin-top:60px;
    padding: 10px;
    border-radius: 10px;
    padding: 30px 40px;
    border: 2px solid white;
    /* backdrop-filter: blur(5px); */
    box-shadow: 3px 3px 20px 2px rgba(253, 235, 235, 0.72);
    background-color: rgba(253, 235, 235, 0.07);
}
.col-4{
    width: 100%;
    height: 30px;  
}
:hover.col-4{
    scale: 1.08;
    box-shadow: transparent;
}

 </style>
</head>
<body class="body" style="background-image: url('images/francisco-moreno-Yp8s2MLTGJE-unsplash.jpg'); background-size:cover;">
    <div class="wrapper">
      <form id="myform"  action="" method="post" enctype="multipart/form-data">
       <u style="color:white;"><h2 style="text-align: center; font-weight: bold;">SIGNUP</h2></u> 

          <div class="col-4" style="padding: 10px; margin: auto; " >
            <input type="text" name="name" placeholder="User Name" class="form-control" >
            <span style="color:red; font-size:12px;"> <?php echo $nameErr;?></span>
          </div><br>

        <div class="col-4" style="padding: 10px; margin: auto;">
          <input type="email" name="email" placeholder="Email"  class="form-control">
          <span style="color:red; font-size:12px;"> <?php echo $emailErr;?></span>

        </div><br>
        
        <div class="col-4" style="padding: 10px; margin: auto;">
          <input type="number" name="number" placeholder="number"  class="form-control">
          <span style="color:red; font-size:12px;"> <?php echo $numberErr; ?></span>

        </div><br>

        <div class="col-4" style="padding: 10px; margin: auto;" >
          <input type="password" name="password" class="form-control"  placeholder="password">
          <span style="color:red; font-size:12px;"> <?php echo $passwordErr; ?></span>

       </div><br>
       
       <div class="col-4" style="padding: 10px; margin: auto;" >
          <input type="password" name="confirm_password" class="form-control"  placeholder="confirm password">
          <span style="color:red; font-size:12px;"> <?php echo $confirmPasswordErr; ?></span>
       </div><br>     
       <button type="submit" class="btn btn-secondary" name="btn" id="submit">Create Account</button>

       <div style="color:white;" class="signup-link"><p>Have an account? <a style="color:white;" href="Login.php">Click Here</a></p></div>
      </form>
   </div>
</body>
<?php } ?>
    </html>