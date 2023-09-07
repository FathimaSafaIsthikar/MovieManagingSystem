<?php
   include('./dbCon/db.php');

    unset ($_SESSION['IS_LOGIN']);
    header("Location: index.php?msg=Logout successful!");
    die();
?>

<?php
    if (isset($_GET["msg"])) {
      $msg = $_GET["msg"];
      echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
      ' . $msg . '
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }
    ?>

<?php
      include("./includes/script.php");
   ?>
