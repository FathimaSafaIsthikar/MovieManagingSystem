<?php

include('./dbCon/db.php');

if(isset($_SESSION['IS_LOGIN'])){
    header('location:Dashboard.php');
    die();
}  

// hashing and de-hashing used for password encrypt and decrypt in signup form
if(isset($_POST['signup'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $password=$_POST['password'];

    // entered data in the signup form is saved in the database
    if(mysqli_num_rows(mysqli_query($con,"select * from users 
    where email='$email'"))>0) {
        header("Location: index.php?msg=Email already in use!");
    } else{
        $password=password_hash($password,PASSWORD_DEFAULT);
        mysqli_query($con,"insert into users(name,email,password) values('$name','$email','$password')");
        header("Location: index.php?msg=Successfully SignedIn!");
    }
} 
//data entered in login form is retreived and compares from db and lets the user login
if(isset($_POST['login'])) {
    $email=mysqli_real_escape_string($con,$_POST['email']);
    $password=mysqli_real_escape_string($con,$_POST['password']);

    $res = mysqli_query($con,"select * from users 
    where email='$email'");

    if(mysqli_num_rows($res)>0){
       $row = mysqli_fetch_assoc($res);
       $verify = password_verify($password,$row['password']);
       if($verify==1){
            $_SESSION['IS_LOGIN'] = true;
            $_SESSION['UNAME'] = $row['name'];
            header("Location: Dashboard.php?msg=Successfully loggedin");
            die();
       }else{
        header("Location: index.php?msg=Please enter correct password!");
       }
    } else{
        header("Location: index.php?msg=Please enter correct email!");
    }
}

?>