<?php
include "config.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Create</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<?php
	if(isset($_POST['create']))
	{
		$name= $_POST['name'];
		$author= $_POST['author'];
		$pages= $_POST['pages'];
		$price= $_POST['price'];
		$sql="INSERT INTO BOOKS(ID, NAME, AUTHOR, PAGES, PRICE) VALUES('', '$name', '$author', '$pages', '$price')";
		$result=mysqli_query($con, $sql);
		header('Location:index.php');
		exit;
	}
	else
	{
		echo "Enter The Valid Data";
	}
	?>
	<div class="top">
		<form action="create.php" method="post">
			<div class="head">
			<h2>CREATE BOOK</h2>
			</div>
			<label>BOOK NAME</label>
			<input type="text" name="name" required="" placeholder="Enter the Book name">
			<label>AUTHOR'S NAME</label>
			<input type="text" name="author" required="" placeholder="Enter the Author's name">
			<label>TOTAL PAGES</label>
			<input type="text" name="pages" required="" placeholder="Enter the Pages name">
			<label>PRICE</label>
			<input type="text" name="price" required="" placeholder="Enter the Price name">
			<button name="create">CREATE</button>
		</form>
	</div>
</body>
</html>