<?php
include "config.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>CRUD</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<?php
	if(isset($_GET["id"]) && !empty($_GET["id"]))
	{
		$sql="SELECT * FROM BOOKS WHERE ID=" .$_GET["id"];
		if($result=mysqli_query($con, $sql))
		{
			if(mysqli_num_rows($result)==1)
			{
				while($row=mysqli_fetch_array($result))
				{
					$name= $row["NAME"];
					$author= $row["AUTHOR"];
					$pages= $row["PAGES"];
					$price= $row["PRICE"];
				}
			}
		}
	}
	if(isset($_POST["id"]) && !empty($_POST["id"]))
	{
		$name=$_POST["name"];
		$author=$_POST["author"];
		$pages=$_POST["pages"];
		$price=$_POST["price"];
		$sql="UPDATE BOOKS SET NAME='$name', AUTHOR='$author', PAGES='$pages', PRICE='$price' WHERE id=". $_POST["id"];
		$result=mysqli_query($con, $sql);
		header("location: index.php");
	}
	?>
	<div class="top">
		<form action="update.php" method="post">
			<div class="head">
			<h2>UPDATE HERE</h2>
			</div>
			<label>BOOK NAME</label>
			<input type="text" name="name" value="<?php echo $name; ?>">
			<label>AUTHOR'S NAME</label>
			<input type="text" name="author" value="<?php echo $author; ?>">
			<label>TOTAL PAGES</label>
			<input type="text" name="pages" value="<?php echo $pages; ?>">
			<label>PRICE</label>
			<input type="text" name="price" value="<?php echo $price; ?>">
			<input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
            <button>UPDATE</button>
		</form>
		<a href="index.php"><button>Back</button></a>
	</div>
</body>
</html>