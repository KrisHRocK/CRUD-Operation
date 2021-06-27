<?php
include "config.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Read</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<?php
	if(isset($_GET["id"]) && !empty($_GET["id"]))
	{
		$sql="SELECT * FROM BOOKS WHERE ID=" .$_GET["id"];
		if($result=mysqli_query($con,$sql))
		{
			if(mysqli_num_rows($result)==1)
			{
				while($row=mysqli_fetch_array($result))
				{
					$name=$row["NAME"];
					$author=$row["AUTHOR"];
					$pages=$row["PAGES"];
					$price=$row["PRICE"];
				}
			}
		}
	}
	else
	{
		echo "Fetching Data Failed";
	}
	?>
	<div class="top">
		<form action="index.php" method="post">
			<div class="head">
			<h2>BOOK DETAILS</h2>
			</div>
			<label>BOOK NAME</label>
			<label class="out"><?php echo $name; ?></label>
			<label>AUTHOR'S NAME</label>
			<label  class="out"><?php echo $author; ?></label>
			<label>TOTAL PAGES</label>
			<label  class="out"><?php echo $pages; ?></label>
			<label>PRICE</label>
			<label  class="out"><?php echo $price; ?></label>
			<a href="index.php"><button>Back</button></a>
		</form>
	</div>
</body>
</html>