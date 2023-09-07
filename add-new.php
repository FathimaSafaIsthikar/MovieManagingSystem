<?php
   include("add-newUser.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <?php
      include "./includes/header.php";
   ?>
   <title>Add new Movie</title>
</head>
<body>
   <?php
      include "./adminHeader.php";
      include "./sidebar.php";
      include_once('./dbCon/db.php');
    ?>
   <!-- nav bar start -->
   <nav class="navbar navbar-light justify-content-center fs-3 mb-5" style="background-color: #FF8C00;">
      ADD NEW MOVIE
   </nav>
   <!-- nav bar end -->
   <!-- form start -->
   <div class="container">
      <div class="text-center mb-4">
         <h3>Add New Movie</h3>
         <p class="text-muted">Complete the form below to add a new Movie</p>
      </div>
      <div class="container d-flex justify-content-center">
         <form action="add-new.php" method="post" style="width:50vw; min-width:300px;">
            <div class="row mb-2">
               <div class="col">
                  <label class="form-label">Title:</label>
                  <input type="text" class="form-control" name="title" placeholder="Munich" required>
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
                  <!-- <input type="text" class="form-control" name="genre" placeholder="Action" required> -->
               </div>
            </div>
            <div class="row mb-2">
               <div class="mb-2">
               <label class="form-label">Release Date:</label>
               <input type="number" class="form-control" name="releaseDate" value="<?php echo $row['releaseDate'] ?>" required>
            </div>
      
            

            <div>
               <button type="submit" class="btn" style="background-color:#000;color:#fff;" onMouseOver="this.style.color='#FF8C00'" onMouseOut="this.style.color='#fff'" name="submit">Save</button>
               <a href="home.php" style="background-color:#000;color:#fff;" onMouseOver="this.style.color='#FF8C00'" onMouseOut="this.style.color='#fff'" class="btn">Cancel</a>
            </div>
         </form>

      <!--store data to text file -->
      <?php
         include("./dataStoreFiles/personalInforStore.php");
      ?>

      </div>
   </div>
   <!-- form end -->
   <?php
   
      include("./includes/footer.php");
   ?>
</body>

</html>