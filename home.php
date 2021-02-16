<style>
    .text p:last-child{
position:absolute;
right:4px;
color:black;
    }
</style>
<?php include "nav.php";?>
<?php include "database.php";?>
<div class="background">

    <div class="after">
    

    </div>
</div>
<div class="text">
<p>read <span>more</span> <span id="books">books</span></p>
    <form action="search.php" method="POST">
         <input type="text" name="search" id="" placeholder="find your books here">
     <button name="submit">search</button>
        </form>
     </div>