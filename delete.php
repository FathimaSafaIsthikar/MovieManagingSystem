<?php
include ('./dbCon/db.php');
$id = $_GET["id"];
$sql = "DELETE FROM `crud` WHERE id = $id";
$result = mysqli_query($con, $sql);

if ($result) {
  header("Location: home.php?msg=Data Deleted Successful");
} else {
  echo "Failed: " . mysqli_error($con);
}

?>

