<?php
    
   include("loginSigninUser.php");
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge" /> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <title>BayLanka Movie Management System</title>
        <!--Bootstrap-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <!--unicons css external stylesheet-->
        <link rel="stylesheet" href="https://unicons.iconscout.com/release/v2.1.6/css/unicons.css">
        <link href="CSS/indexstyle.css" type="text/css" rel="stylesheet"  />
        
    </head>
    <body>
        
    <?php
    if (isset($_GET["msg"])) {
      $msg = $_GET["msg"];
      echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
      ' . $msg . '
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }
    ?>
        <!--header start-->
        <header class="header">
            <nav class="navbar navbar-expand-lg bg-dark">
            <div class="container-fluid">
                
                <!-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button> -->
                <!-- <div class="collapse navbar-collapse" id="navbarSupportedContent"> -->
                <div class="container-fluid">
                                <a style="color:#FF8C00;font-size:35px" class="navbar-brand" href="#">
                                <img src="Images/img2.png" alt="Logo" width="100" height="100"  class="d-inline-block align-text-top">
                                    <hr>MOVIE MANAGEMENT SYSTEM
                                </a>
                            </div>
                            <button class="button" id="form-open">Login</button>
                <!-- </div> -->
            </div>
            </nav>
        </header>
        <!--header end-->
        <!--home start-->
        <section class="home">
            <!--form start-->
            <div class="form_container">
                <i class="uil uil-times form_close "></i>
                <!--login form start-->
                <div class="form login_form">
                    <form action="index.php" method="POST">
                        <h2>Login</h2>
                        <!--enter email start-->
                        <div class="input_box">
                            <input type="email" name="email" placeholder="Enter your email" required/>
                            <i class="uil uil-envelope-alt email"></i>
                        </div>
                        <!--enter email end-->
                        <!--enter password start-->
                        <div class="input_box">
                            <input type="password" name="password" placeholder="Enter your password" required/>
                            <i class="uil uil-lock password"></i>
                            <!-- <i class="uil uil-eye-slash pw_hide"></i> -->
                        </div>
                        <!--enter password end-->
                        <!--check/remember me start-->
                        <div class="option_field">
                            <!-- <a href="#" class="forgot_pw">Forgot Password?</a> -->
                        </div>
                        <!--check/remember me end-->
                        <!--Login Button start-->
                        <button class="button" name="login">Login</button>
                        <!--Login Button end-->
                        <!--Login Signup start-->
                        <div class="login_signup">
                            Don't have an account? <a href="#" id="signup">Signup</a>
                        </div>
                        <!--Login Signup end-->
                    </form>

                    <?php
                       include("./dataStoreFiles/UserInfoStore.php");
                    ?>

                </div>
                <!--login form end-->
                <!--signup form start-->
                <div class="form signup_form">
                    <form action="#" method="POST">
                        <h2>Signup</h2>
                        <!--enter name start-->
                        <div class="input_box">
                            <input type="text" placeholder="Enter name" name="name" required/>
                            <i class="uil uil-user email"></i>
                            <!-- <i class="uil uil-eye-slash pw_hide"></i> -->
                        </div>
                        <!--enter name end-->
                        <!--enter email start-->
                        <div class="input_box">
                            <input type="email" placeholder="Enter your email" name="email" required/>
                            <i class="uil uil-envelope-alt email"></i>
                        </div>
                        <!--enter email end-->
                        <!--enter create password start-->
                        <div class="input_box">
                            <input type="password" name="password" placeholder="Create password" required/>
                            <i class="uil uil-lock password"></i>
                        </div>
                        <!--enter create password end-->
                        <!--Login Button start-->
                        <button class="button" name="signup">Signup Now</button>
                        <!--Login Button end-->
                        <!--Login Signup start-->
                        <div class="login_signup">
                            Already have an account? <a href="#" id="login">Login</a>
                        </div>
                        <!--Login Signup end-->
                    </form>
                </div>
                <!--signup form end-->
            </div>
            <!--form end-->
        </section>
        <!--home end-->
        <!-- javascript start -->
        <script src="JS/index.js"></script>
        <!-- javascript end -->
        <!-- Bootstrap -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

    </body>
</html>

