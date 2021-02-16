<?php include "nav.php";?>
<?php include "database.php"?>
<?php include "uploading.php"?>
<head>
<link rel="stylesheet" href="style.css">
  
</head>

<div class="inputs">
    <form action="uploading.php" method="POST" enctype="multipart/form-data">
    <input type="hidden" name="size" value="100000">
    <label for="">name</label><br>
    <input type="text" name="name"><br>
    <label for="">author</label><br>
    <input type="text" name="author"><br>
    <label for="">image:</label><br>
    <input type="file" name="image"><br>
    <label for="">prix:</label><br>
    <input type="text" name="prix"><br>
    <label for="">quantite:</label><br>
    <input type="text" name="quantite"><br>
    <label for="">publication:</label><br>
    <input type="date" name="publication"><br>
    <input type="submit" name="submit">
    </form>
    </div>
