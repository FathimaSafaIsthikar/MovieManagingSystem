<?php
       include('./dbCon/db.php');
       if(!isset($_SESSION['IS_LOGIN'])){
          header('location:index.php');
          die();
    }  
    
    // the data entered is saved in the db once the submit button is clicked
    if (isset($_POST["submit"])) {
       $title = $_POST['title'];
       $genre = $_POST['genre'];
       $releaseDate = $_POST['releaseDate'];
      
    
       $sql = "INSERT INTO `crud`(`id`, `title`, `genre`, `releaseDate`) VALUES (NULL,'$title','$genre','$releaseDate')";
    
       $result = mysqli_query($con, $sql);
    
       if ($result) {
          header("Location: home.php?msg=New record created successful");
       } else {
          echo "Failed: " . mysqli_error($con);
       }
    }
?>
