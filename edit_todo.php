<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<title>Todo App</title>
	</head>
	<body>
		<h1>Todo App</h1>
		<a href="index.php">Go Back</a>
		<?php
			include 'koneksi.php';
			$id_todo = $_GET['id_todo'];
			$data = mysqli_query($koneksi,"select * from tb_todo where id_todo='$id_todo'");
			while($d = mysqli_fetch_array($data)){ ?>
				<form action="update_todo.php" method="POST">
					<label>Title</label>
					<input type="hidden" name="id_todo" value="<?php $d['id_todo']; ?>">
					<input type="text" name="title" placeholder="Title" required="required" value="<?php echo $d['title']; ?>"><br>
					<label>Description</label>
					<input type="text" name="description" placeholder="Description" required="required" value="<?php echo $d['description']; ?>"><br>
					<input type="submit" value="Save">
				</form>
			<?php }
		?>
	</body>
</html>