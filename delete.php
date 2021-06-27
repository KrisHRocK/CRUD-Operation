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
        if(isset($_POST["ID"]) && !empty($_POST["ID"]))
        {
            $sql = "DELETE FROM BOOKS WHERE id =" .$_POST["ID"];
            mysqli_query($con, $sql);
            header("location:index.php");
        }
    ?>
    <div class="top">
        <form action="delete.php" method="post">
            <div class="head">
            <h2>DELETE BOOK</h2>
            </div>
            <input type="hidden" name="ID" value="<?php echo $_GET["id"]; ?>"/>
            <p>Are you sure you want to delete?</p>
            <button>Yes</button>
        </form>
        <a href="index.php"><button>No</button></a>
    </div>
</body>
</html>