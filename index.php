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
		<a href="add_todo.php">ADD</a>
		<table>
			<tr>
				<th>Title</th>
				<th>Description</th>
				<th>Action</th>
			</tr>
			<?php
				include 'koneksi.php';
				$data = mysqli_query($koneksi,"select * from tb_todo");
				while($d = mysqli_fetch_array($data)){ ?>
					<tr>
						<td><?php echo $d['title']; ?></td>
						<td><?php echo $d['description']; ?></td>
						<td>
							<a href="edit_todo.php?id_todo=<?php echo $d['id_todo'];?>">Edit</a> |
							<a href="delete_todo.php?id_todo=<?php echo $d['id_todo'];?>">Delete</a>
						</td>
					</tr>
				<?php }
			?>
		</table>
	</body>
</html>