<?php
    include('./dbCon/db.php');

    if(!isset($_SESSION['IS_LOGIN'])){
        header('location:index.php');
        die();
    }  
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <?php
      include("./includes/header.php");
   ?>       
  <title>Manage Movies</title>
</head>
<body>
  <?php
     include "./adminHeader.php";
     include "./sidebar.php";
     include_once('./dbCon/db.php');
  ?>

  <nav class="navbar navbar-light justify-content-center fs-3 mb-5" style="background-color: #FF8C00;">
    Movie Management
  </nav>

  <div class="container">
    <?php
    if (isset($_GET["msg"])) {
      $msg = $_GET["msg"];
      echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
      ' . $msg . '
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }
    ?>
    
    <a href="add-new.php" onMouseOver="this.style.color='#FF8C00'" onMouseOut="this.style.color='#fff'" class="btn btn-dark mb-3">Add New Movie</a>
    <!-- display Movies coding start-->
    <table class="table table-hover text-center">
      <thead class="table-dark">
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Title</th>
          <th scope="col">Genre</th>
          <th scope="col">Release Date</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $sql = "SELECT * FROM `crud`";
        $result = mysqli_query($con, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
        ?>
          <tr>
            <td><?php echo $row["id"] ?></td>
            <td><?php echo $row["title"] ?></td>
            <td><?php echo $row["genre"] ?></td>
            <td><?php echo $row["releaseDate"] ?></td>
            <td>
              <a href="edit.php?id=<?php echo $row["id"] ?>" class="link-dark"><i class="fa-solid fa-pen-to-square fs-5 me-3" onMouseOver="this.style.color='#FF8C00'" onMouseOut="this.style.color='#000'"></i></a>
              <a href="delete.php?id=<?php echo $row["id"] ?>" class="link-dark"><i class="fa-solid fa-trash fs-5" onMouseOver="this.style.color='#FF8C00'" onMouseOut="this.style.color='#000'"></i></a>
            </td>
          </tr>
        <?php
        }
        ?>
      </tbody>
    </table>
    <!-- display Movies coding end-->
  </div>

  <?php
      include("./includes/footer.php");
   ?>
   </body>

</html>
