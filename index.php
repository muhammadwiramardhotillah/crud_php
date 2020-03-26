<?php include "connection.php"; ?>
<!DOCTYPE html>
<html>
	<head>
		<title>Page Title</title>
		<link rel="stylesheet" type="text/css" href="styles.css">
	</head>
	<body>
		<h1>This is a Heading</h1>
		<p><a href="add.php" class="button button_style">Add New User</a></p>
		<table id="customers">
			<tr>
				<th>No</th>
				<th>Name</th>
				<th>Email</th>
				<th>Phone</th>
				<th>Action</th>
			</tr>
			<?php 
				$sql = "SELECT * FROM users";
				$result = $conn->query($sql);
				$number = 0;
				if ($result->num_rows > 0) {
					// output data of each row
					while($row = $result->fetch_assoc()) {
						$number++;
			?>			
			<tr>
				<td><?php echo $number; ?></td>
				<td><?php echo $row["name"]; ?></td>
				<td><?php echo $row["email"]; ?></td>
				<td><?php echo $row["phone"]; ?></td>
				<td>
					 <a href="edit.php?user_id=<?php echo $row["user_id"];?>" class="button button_style">Edit</a>
					 <a href="delete.php?user_id=<?php echo $row["user_id"];?>" class="button button_style">Delete</a> 
				</td>
			</tr>
			<?php
					}
				} else {
					echo "<td colspan='5'>0 results</td>";
				}

				$conn->close();
			?>
		</table>
	</body>
</html> 