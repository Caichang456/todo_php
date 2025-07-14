<?php
	include_once("config.php");
	$result = mysqli_query($mysqli, "SELECT * FROM tb_todo");
?>
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
				while($todo_data = mysqli_fetch_array($result)){
					echo "<tr>";
					echo "<td>".$todo_data['title']."</td>";
					echo "<td>".$todo_data['description']."</td>";
					echo "<td><a href='edit_todo.php?id_todo=$todo_data['id_todo']'>Edit</a> | <a href='delete_todo.php?id_todo=$todo_data['id_todo']'>Delete</a></td>";
					echo "</tr>";
				}
			?>
		</table>
	</body>
</html>