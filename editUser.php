<?php
    include('./dbCon/db.php');
    if(!isset($_SESSION['IS_LOGIN'])){
      header('location:index.php');
      die();
    }  
    $id = $_GET["id"];
    
    if (isset($_POST["submit"])) {
      $title = $_POST['title'];
      $genre = $_POST['genre'];
      $releaseDate = $_POST['releaseDate'];
  
    
      $sql = "UPDATE `crud` SET `title`='$title',`genre`='$genre',`releaseDate`='$releaseDate' WHERE id = $id";
    
      $result = mysqli_query($con, $sql);
    
      if ($result) {
        header("Location: home.php?msg=Data updated successful");
      } else {
        echo "Failed: " . mysqli_error($con);
      }
    }
    
?>