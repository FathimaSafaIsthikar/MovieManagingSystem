<?php
    include('./dbCon/db.php');

    if(!isset($_SESSION['IS_LOGIN'])){
        header('location:index.php');
        die();
    }  
?>
<!DOCTYPE html>
<html>
<head>
  <title>Dashboard</title>
  <head>
    <?php
     include "./includes/header.php";
    ?>
</head>
</head>
<body >
    <?php
        include "./adminHeader.php";
        include "./sidebar.php";
        include_once('./dbCon/db.php');
    ?>
    <div id="main-content" class="container allContent-section py-4">
        <div class="row">
            <div class="col-sm-3">
                <div class="card" style="background-color:#000">
                    <i class="fa fa-users  mb-2" style="font-size: 70px;"></i>
                    <h4 style="color:white;">Total User Accounts Created</h4>
                    <h5 style="color:white;">
                    <?php
                        $sql="SELECT * from users";
                        $result=$con-> query($sql);
                        $count=0;
                        if (!empty($result) && $result->num_rows > 0){
                            while ($row=$result-> fetch_assoc()) {
                    
                                $count=$count+1;
                            }
                        }
                        echo $count;
                    ?></h5>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card" style="background-color:#000">
                    <i class="fa fa-users  mb-2" style="font-size: 70px;"></i>
                    <h4 style="color:white;">Total Movies</h4>
                    <h5 style="color:white;">
                    <?php
                        $sql="SELECT * from crud";
                        $result=$con-> query($sql);
                        $count=0;
                        if (!empty($result) && $result->num_rows > 0){
                            while ($row=$result-> fetch_assoc()) {
                    
                                $count=$count+1;
                            }
                        }
                        echo $count;
                    ?></h5>
                </div>
            </div>
        
        </div>
        
    </div>  
    <?php
     
      include("./includes/footer.php");
      
    

   ?>
</body>
 
</html>