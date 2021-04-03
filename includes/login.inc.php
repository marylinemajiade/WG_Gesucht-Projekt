<?php
if(isset($_POST["submit"])){
    $username = $_POST["uid"];
    $pwd = $_POST["pwd"];

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    //error handling

    if(emptyInputLogin($username, $pwd) !== false){
        header ("Location: ../login.php?error=emptyinput");
        exit();
    }

    loginUser($conn, $username, $pwd);
}
else{ //If users access the page incorrectly
    header ("Location: ../login.php");
    exit();
}