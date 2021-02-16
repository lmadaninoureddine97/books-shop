
<?php include "nav.php";?>

<?php include "database.php";


echo '<div class="cont">';
echo "<p>discription :</p>";
echo '<div class="book-discription">';
      if(isset($_GET['id'])){
        $id=$_GET['id'];
        $result=mysqli_query($connect,"SELECT *from items where id='$id' ");
        $i=0;
        while($row=mysqli_fetch_array($result)){
        
            
         echo "<span>name : '".$row['name']."'</span>";
         echo "<span>author : '".$row['author']."'</span>";
         echo "<span>quantite : '".$row['quantite']."'</span>";
         echo "<span>publication : '".$row['publication']."'</span>";
        echo "<div class='picture'>";
        echo "<img src='images/".$row['image']."'>";
echo "</div>";

         
      
      
        
        
        }
    }
    
    
echo "</div>";

    
echo "</div>";
?>

