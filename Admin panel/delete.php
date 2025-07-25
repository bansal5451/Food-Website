<?php
$conn = mysqli_connect("localhost", "root", "", "queenrestaurant");
// Get the ID from the POST request and sanitize it
$id = isset($_POST['id']) ? intval($_POST['id']) : 0;
// Prepare the SQL statement to prevent SQL injection
$qry = "DELETE FROM dishes WHERE `Sno` = ?";
$stmt = mysqli_prepare($conn, $qry);
if ($stmt) {
    // Bind the parameter
    mysqli_stmt_bind_param($stmt, "i", $id);
    
    // Execute the statement
    if (mysqli_stmt_execute($stmt)) {
        echo 'data deleted';
    } else {
        echo 'failed to delete data';
    }
    // Close the statement
    mysqli_stmt_close($stmt);
} else {
    echo 'failed to prepare statement';
}

// Close the database connection
mysqli_close($conn);
?>