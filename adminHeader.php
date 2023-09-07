<?php
   if(!isset($_SESSION)) 
   { 
       session_start(); 
   } 
   include_once "./dbCon/db.php";
?>
       
 <!-- nav -->
 <nav  class="navbar navbar-expand-lg bg-dark px-5" >
    
    <a class="navbar-brand ml-5" href="./index.php">
        <img src="./Images/img2.png" width="100" height="100" >
    </a>
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0"></ul>
    
    <div class="user-cart">  
        <?php           
        if(isset($_SESSION['user_id'])){
          ?>
          <a href="" style="text-decoration:none;">
            <i class="fa fa-user mr-5" style="font-size:30px; color:#fff;" aria-hidden="true"></i>
         </a>
          <?php
        } else {
            ?>
            <a href="logout.php" style="text-decoration:none;">
                    <i class="fa fa-sign-in mr-5" onMouseOver="this.style.color='#FF8C00'" onMouseOut="this.style.color='#fff'" style="font-size:30px; color:#fff;" aria-hidden="true"></i>
            </a>

            <?php
        } ?>
    </div>  
</nav>

