<?php
	include_once("config.php");
	$id_todo = $_GET['id_todo'];
	$result = mysqli_query($mysqli, "SELECT * FROM tb_todo WHERE id_todo=$id_todo");

	while($todo_data = mysqli_fetch_array($result)){
		$title = $todo_data['title'];
		$description = $todo_data['description'];
	}
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
		<a href="index.php">Go Back</a>
		<form action="update_post.php" method="POST">
			<label>Title</label>
			<input type="text" name="txt_tile" placeholder="Title" required="required" value="<?php $title; ?>"><br>
			<label>Description</label>
			<input type="text" name="txt_description" placeholder="Description" required="required" value="<?php $description; ?>"</textarea><br>
			<input type="hidden" name="txt_id_todo" required="required" value="<?php echo $_GET['id_todo']; ?>"
			<input type="submit" value="Save">
		</form>
	</body>
</html>