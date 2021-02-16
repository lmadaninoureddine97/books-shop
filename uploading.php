<?php include "database.php";

?>

<?php 


if(isset($_POST['submit'])){
    $target="images/".basename($_FILES["image"]["name"]);

    $name=$_POST['name'];
    $author=$_POST['author'];
    $image=$_FILES['image']["name"];
    $prix=$_POST['prix'];
    $quantite=$_POST['quantite'];
    $publication=$_POST['publication'];


    $sql="INSERT INTO items(name,author, image,prix,quantite,publication) values('$name', '$author','$image','$prix','$quantite','$publication') ";
    mysqli_query($connect,$sql);
    if(move_uploaded_file($_FILES["image"]['tmp_name'],$target)){
        header("location:books.php");

        echo "items added";

    }else{
        echo "somethig went wrong".mysqli_error($connect);
  
}
}
?>