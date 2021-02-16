
<?php include "nav.php"?>
<?php

if(isset($_POST["submit"])){

$search=$_POST['search'];
$connect=mysqli_connect("localhost","root","","shop");
$query="SELECT * FROM items WHERE name ='$search'";
$ser=mysqli_query($connect,$query);
$i=0;
?>
<div class="container">
<div class="cards">
    <?php
while($row=mysqli_fetch_array($ser)){

 $id=$row['id'];
       
        echo "<div class='card'>";
        echo "<img src='images/".$row['image']."'>";
        echo "'<a href='discription.php?id=".$id."'>".$row['name']."</a>'";
        echo " </div>" ;
        $i++;
     

}

}
?>
</div>

</div>
