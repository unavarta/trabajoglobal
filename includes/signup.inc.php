<?php

    if (isset($_POST["submit"])) {
        
        $mail = $_POST["mail"];
        $username = $_POST["user"];
        $password = $_POST["pass"];
        $passwordRpt = $_POST["passRepeat"];
        require_once 'dbh.inc.php';
        require_once 'functions.inc.php';

        if(emptyInputSignup($mail, $username, $password, $passwordRpt) !== false){
            header("location: ../signup.php?error=emptyinput");
            exit();
        }


        if(invalidUid($username) !== false){
            header("location: ../signup.php?error=invaliduid");
            exit();
        }

        if(invalidMail($mail) !== false){
            header("location: ../signup.php?error=invalidmail");
            exit();
        }
        
        if(passMatch($password, $passwordRpt) !== false){
            header("location: ../signup.php?error=passnomatch");
            exit();
        } 

        if(uidExists($conn ,$username, $mail) !== false){
            header("location: ../signup.php?error=usernametaken");
            exit();
        } 
        
        createUser($conn, $mail, $password, $username);

    }
    else{
        header("location: ../signup.php");
        exit();
    }







?>