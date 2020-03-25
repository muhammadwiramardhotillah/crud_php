<?php 
include "connection.php"; 

$user_id = $_GET['user_id'];

$sql = "SELECT * FROM users WHERE user_id = $user_id";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);


$name = $row['name'];
$email = $row['email'];
$phone = $row['phone'];

?>
<!DOCTYPE html>
<html>
	<head>
		<title>Page Title</title>
		<link rel="stylesheet" type="text/css" href="styles.css">
	</head>
	<body>
		<h1>This is a Heading</h1>
		<p><a href="index.php" class="button button_style">Back</a></p>
		<div>
			<form action="edit-action.php" method="post">
				<label for="name">Name</label>
				<input type="text" id="name" name="name" placeholder="Your name.." value="<?php echo $name; ?>">
				<label for="email">Email</label>
				<input type="text" id="email" name="email" placeholder="Your email.." value="<?php echo $email; ?>">
				<label for="phone">Phone</label>
				<input type="text" id="phone" name="phone" placeholder="Your phone.." value="<?php echo $phone; ?>">
				<input type="hidden" name="user_id" value="<?php echo $row['user_id']; ?>">
				<input type="submit" value="Submit">
			</form>
		</div>
	</body>
</html> 
<?php mysqli_close($conn);?>