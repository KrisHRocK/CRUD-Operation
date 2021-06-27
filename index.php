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
	<div class="top">
		<a href="create.php"><button>Create New Books</button></a>
	</div>
	<div class="bottom">
	<?php
	$sql="SELECT * FROM BOOKS";
	if($result=mysqli_query($con, $sql))
	{
		if(mysqli_num_rows($result)>0)
		{	
			echo '<table class="container">';
				echo "<thead>";
					echo "<tr>";
					echo "<th>ID</th>";
					echo "<th>NAME</th>";
					echo "<th>AUTHOR</th>";
					echo "<th>PAGES</th>";
					echo "<th>PRICE</th>";
					echo "<th colspan='3'>Action</th>";
					echo "</tr>";
				echo "</thead>";
				echo "<tbody>";
					$i=1;
					while ($row=mysqli_fetch_array($result))
					{
					echo "<tr>";
					echo "<td>" .$i. "</td>";
					echo "<td>" .$row['NAME']. "</td>";
					echo "<td>" .$row['AUTHOR']. "</td>";
					echo "<td>" .$row['PAGES']. "</td>";
					echo "<td>" .$row['PRICE']. "</td>";
					echo "<td><a href='read.php?id=".$row['ID']."'>Read</a></td>";
					echo "<td><a href='update.php?id=".$row['ID']."'>Update</a></td>";
					echo '<td><a href="delete.php?id='. $row['ID'] .'" title="Delete Record">Delete</a></td>';
					echo "<tr>";
					$i++;
					}
				echo "</tbody>";
			echo "</table>";
		}
	}
	?>
	</div>
</body>
</html>