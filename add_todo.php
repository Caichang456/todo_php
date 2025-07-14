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
		<form action="save_post.php" method="POST">
			<label>Title</label>
			<input type="text" name="txt_tile" placeholder="Title" required="required"><br>
			<label>Description</label>
			<textarea placeholder="Description" name="txt_description"></textarea><br>
			<input type="submit" value="Save">
		</form>
	</body>
</html>