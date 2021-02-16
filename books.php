 
 <!-- <style>
    .container{
    width: 70%;
    margin: auto;
}
 .container .cards{
     width:100%;
   position:absolute;
   left:50%;
   top:50%;
   transform:translate(-50%,-50%);
     display:flex;
     flex-wrap: wrap;

    
 }
     .container .cards .card {
      
    margin-right:20px;
    margin-bottom:20px;
     }
 </style>
  -->
  <!-- <head>
      <link rel="stylesheet" href="style.css">
  </head> -->
 <?php include "nav.php";?>
 

<?php
include_once 'database.php';




$result = mysqli_query($connect,"SELECT * FROM items");
?>
<div class="container">
<div class="cards">
<p>our books:</p>
<?php
if(mysqli_num_rows($result) > 0){
    $i=0;
    while($row=mysqli_fetch_array($result)){
        $id=$row['id'];
       
        echo "<div class='card'>";
        echo "<img src='images/".$row['image']."'>";
        echo "'<a href='discription.php?id=".$id."'>".$row['name']."</a>'";
        echo " </div>" ;
     
       
    }
   
}

?>

</div>

</div>


 


