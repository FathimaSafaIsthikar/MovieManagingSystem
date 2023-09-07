<!-- Sidebar -->
<div class="sidebar" onMouseOver="this.style.color='#FF8C00'" onMouseOut="this.style.color='#fff'" id="mySidebar">
<div class="side-header">
    <img src="./Images/logo.png" width="120" height="120" > 
    <h5 style="margin-top:10px;"><?php echo "Hello, ".$_SESSION['UNAME']; ?></h5>
</div>

<hr style="border:1px solid; background-color:#8a7b6d; border-color:#3B3131;">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
    <a href="./index.php" ><i class="fa fa-home"></i> Dashboard</a>
    <a href="./home.php" ><i class="fa fa-users"></i> Manage Movies</a>
 
  <!---->
</div>
 
<div id="main">
    <button style="background-color:#000" onMouseOver="this.style.color='#FF8C00'" onMouseOut="this.style.color='#fff'"  class="openbtn" onclick="openNav()"><i class="fa fa-home"></i></button>
</div>




