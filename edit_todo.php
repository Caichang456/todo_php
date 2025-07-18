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
		<?php
			include 'connection.php';
			$id = $_GET['id'];
			$data = mysqli_query($connection,"select * from table_todo where id='$id'");
			while($d = mysqli_fetch_array($data)){ ?>
				<form method="POST">
					<table>
						<tr>
							<td>Title</td>
							<td>
								<input type="hidden" name="id" value="<?php echo $d['id']; ?>">
								<input type="text" name="txt_title" value="<?php echo $d['title']; ?>">
							</td>
						</tr>
						<tr>
							<td>Description</td>
							<td><input type="text" name="txt_description" value="<?php echo $d['description']; ?>"></td>
						</tr>
						<tr>
							<td>Date</td>
							<td><input type="date" name="txt_date" value="<?php echo $d['dt']; ?>"></td>
						</tr>
						<tr>
							<td colspan="2">
								<input type="submit" name="edit_todo" value="Save Todo">
							</td>
						</tr>
					</table>
				</form>
			<?php }
		?>
	</body>
</html>
<?php
	include 'connection.php';
	if (isset($_POST['edit_todo'])) {
		$id = $_POST['id'];
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
			mysqli_query($koneksi,"update table_todo set title='$title', description='$description', dt='$date' where id='$id'");
			header("location: index.php");
		}
	}
?>