<?php
if(isset($_POST["submit"])){
    $name = $_POST["name"];
    $email = $_POST["email"];
    $username = $_POST["uid"];
    $pwd = $_POST["pwd"];
    $pwdRepeat = $_POST["pwdrepeat"];

    
    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    //error handling

    if(emptyInputSignup($name, $email, $username, $pwd, $pwdRepeat) !== false){
        header ("Location: ../signup.php?error=emptyinput");
        exit(); //stops the skript from running 
    }

    if(invalidUid($username) !== false){
        header ("Location: ../signup.php?error=invaliduid");
        exit(); 
    }

    if(invalidEmail($email) !== false){
        header ("Location: ../signup.php?error=invalidemail");
        exit(); 
    }

    if(pwdMatch($pwd, $pwdRepeat) !== false){
        header ("Location: ../signup.php?error=passwordsdontmatch");
        exit(); 
    }

    if(uidExists($conn, $username, $email) !== false){
        header ("Location: ../signup.php?error=usernametaken");
        exit(); 
    }

    createUser($conn, $name, $email, $username, $pwd);

}
else{ //If users don't access the sigup page properly, go back to signup.php 
    header ("Location: ../signup.php");
    exit();
}