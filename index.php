<!DOCTYPE html>
<html>
<head>



<style>

</style>

<link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>

<?php 
    // initialize errors variable
	$errors = "";

	// connect to database  - how do i do this??
	

	// insert a quote if submit button is clicked
	if (isset($_POST['submit'])) {
		if (empty($_POST['task'])) {
			$errors = "You must fill in the task";
		}else{
			$task = $_POST['task'];
			$sql = "INSERT INTO tasks (task) VALUES ('$task')";
			mysqli_query($db, $sql);
			header('location: index.php');
		}
	}	

	// ...
?>

<h1>Task List</h1>

<h3>ToDo</h3>



<form method="post" action="index.php" class="input_form">
		<input type="text" name="task" class="task_input">
		<div class="btn-group" data-toggle="buttons">
				<label class="btn active">
				<input type="checkbox" checked autocomplete="off"> Priority
				</label>
		</div>
		
		<button type="submit" name="submit" id="add_btn" class="add_btn">Add Task</button>
</form>



<h3>Completed</h3>

</body>
</html>