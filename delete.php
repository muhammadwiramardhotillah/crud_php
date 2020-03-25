<?php 
include "connection.php";

$user_id = $_GET['user_id'];

$sql = "DELETE FROM users WHERE user_id = $user_id";

if (mysqli_query($conn, $sql)) {
    header("location: index.php");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>