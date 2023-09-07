<?php
 include("editUser.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <?php
      include "./includes/header.php";
   ?>
  <title>Update Movie</title>
</head>
<body>
  <?php
      include "./adminHeader.php";
      include "./sidebar.php";
      include_once ('./dbCon/db.php');
  ?>
  <nav class="navbar navbar-light justify-content-center fs-3 mb-5" style="background-color: #FF8C00;">
    Update Movie
  </nav>

  <div class="container">
    <div class="text-center mb-4">
      <h3>Update Movie Information</h3>
      <p class="text-muted">Click update after changing any information</p>
    </div>

    <?php
    $sql = "SELECT * FROM `crud` WHERE id = $id LIMIT 1";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_assoc($result);
    ?>

    <div class="container d-flex justify-content-center">
      <form action="" method="post" style="width:50vw; min-width:300px;">
        <div class="row mb-2">
          <div class="col">
            <label class="form-label">Title:</label>
            <input type="text" class="form-control" name="title" value="<?php echo $row['title'] ?>">
          </div>

          <div class="col">
          <label class="form-label">Genre:</label>
                  <select class="form-control" name="genre" id="genre" required>
                     <option>--Select--</option>
                     <option value="Action">Action</option>
                     <option value="Adventure">Adventure</option>
                     <option value="Animation">Animation</option>
                     <option value="Sci-Fi">Sci-Fi</option>
                     <option value="Thriller">Thriller</option>
                     <option value="Comic">Comic</option>
                     <option value="Drama">Drama</option>
                  </select>
                </div>
        </div>
        <div class="row mb-2">
          <div class="col">
              <label class="form-label">Release Date:</label>
              <input type="number" class="form-control" name="releaseDate" value="<?php echo $row['releaseDate'] ?>">
            </div>
        
        
        <div>
          <button type="submit" style="background-color:#000;color:#fff;" onMouseOver="this.style.color='#FF8C00'" onMouseOut="this.style.color='#fff'" class="btn" name="submit">Update</button>
          <a href="home.php" style="background-color:#000;color:#fff;" onMouseOver="this.style.color='#FF8C00'" onMouseOut="this.style.color='#fff'" class="btn">Cancel</a>
        </div>
      </form>
    </div>
  </div>

  <?php
      include("./includes/footer.php");
   ?>
</body>

</html>