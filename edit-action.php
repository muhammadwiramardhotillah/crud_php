<?php 
include "connection.php";

$user_id = $_POST['user_id'];
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];

$sql = "UPDATE users SET name = '$name', 
						 email = '$email', 
						 phone = '$phone'
					 WHERE user_id = $user_id";

if ($conn->query($sql) === TRUE) {
    header("location: index.php");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

$conn->close();
?>