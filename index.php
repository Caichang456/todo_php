<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>TODO APPLICATION</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
	</head>
	<body>
		<h1>TODO APPLICATION</h1>
		<form method="POST">
			<table>
				<tr>
					<td>Title</td>
					<td><input type="text" name="txt_title"></td>
				</tr>
				<tr>
					<td>Description</td>
					<td><input type="text" name="txt_description"></td>
				</tr>
				<tr>
					<td>Date</td>
					<td><input type="date" name="txt_date"></td>
				</tr>
				<tr>
					<td colspan="2">
						<input type="submit" name="save_todo" value="Save Todo">
					</td>
				</tr>
			</table>
		</form>
		<br>
		<table width="100%">
			<tr>
				<th>Title</th>
				<th>Description</th>
				<th>Date</th>
				<th>Action</th>
			</tr>
			<?php
				include 'connection.php';
				$data = mysqli_query($connection, "SELECT * FROM table_todo");
				while ($d = mysqli_fetch_array($data)) { ?>
					<tr>
						<td><center><?php echo $d['title']; ?></center></td>
						<td><center><?php echo $d['description']; ?></center></td>
						<td><center><?php echo $d['dt']; ?></center></td>
						<td>
							<center>
								<a href="edit_todo.php?id=<?php echo $d['id']; ?>">Edit</a> |
								<a href="delete_todo.php?id=<?php echo $d['id']; ?>">Delete</a>
							</center>
						</td>
					</tr>
				<?php }
			?>
		</table>
	</body>
</html>
<?php
	include 'connection.php';
	if (isset($_POST['save_todo'])) {
		$title = $_POST['txt_title'];
		$description = $_POST['txt_description'];
		$date = $_POST['txt_date'];
		if ($title == "") {
			echo "Title must not blank!";
		}
		else if ($description == "") {
			echo "Description must not blank!";
		}
		else{
			mysqli_connect($connection, "INSERT INTO table_todo(title, description, dt) VALUES('$title', '$description', '$date')");
			header("location: index.php");
		}
	}
?>