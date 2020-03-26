<?php 
include "connection.php";

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];

$sql = "INSERT INTO users (name, email, phone)
					VALUES ('$name', '$email', '$phone')";

if ($conn->query($sql) === TRUE) {
    header("location: index.php");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

$conn->close();
?>