<?php

    function emptyInputSignup($mail, $username, $password, $passwordRpt) {

        $result = true;

        if (empty($username) || empty($mail) || empty($password) || empty($passwordRpt)){
            $result = true;
        }
        else{
            $result = false;
        }

        return $result;
    }

    function invalidUid($username) {

        $result = true;

        if (!preg_match("/^[a-zA-Z0-9]*$/", $username)){
            $result = true;
        }
        else{
            $result = false;
        }

        return $result;
    }

    function invalidMail($mail) { 

        $result = true;

        if (!filter_var($mail, FILTER_VALIDATE_EMAIL)){ # si NO es correcto, se arrojara un valor TRUE que indicara el error. arriba 
                                                        # se hace de la misma forma en todas las funciones. 
            $result = true;
        }
        else{
            $result = false;
        }

        return $result;
    }

    function passMatch($password, $passwordRpt) { 

        $result = true;

        if ($password !== $passwordRpt){ 
            $result = true;
        }
        else{
            $result = false;
        }

        return $result;
    }


    function uidExists($conn, $username, $mail){
    
        $sql = "SELECT * FROM users WHERE usersName = ? OR usersMail = ?;";
        $stmt = mysqli_stmt_init($conn); # evita que se rompa con inputs de 'codigo
                                         # del usuario

        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("location: ../signup.php?error=stmtfail");
            exit();
        }

        mysqli_stmt_bind_param($stmt, "ss", $username, $mail);
        mysqli_stmt_execute($stmt);

        $resultData = mysqli_stmt_get_result($stmt); 

        if($row = mysqli_fetch_assoc($resultData)){
            return $row;

        }else{
            $result = false;
            return $result;
        }

        mysqli_stmt_close($stmt);
    }


    function createUser($conn, $mail, $password, $username){
    
        $sql = "INSERT INTO users (usersName, usersMail, usersPWD) VALUES (?, ?, ?);";
        $stmt = mysqli_stmt_init($conn); # evita que se rompa con inputs de 'codigo
                                         # del usuario

        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("location: ../signup.php?error=stmtfail");
            exit();
        }

        $hashedPwd = password_hash($password, PASSWORD_DEFAULT);

        mysqli_stmt_bind_param($stmt, "sss", $username, $mail, $hashedPwd);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt); 

        header("location: ../signup.php?error=none");

        exit();
    }

    function emptyInputLogin($username, $password) {

        $result = true;

        if (empty($username) || empty($password)){
            $result = true;
        }
        else{
            $result = false;
        }

        return $result;
    }

    function loginUser($conn, $username, $password){

        $uidExists = uidExists($conn, $username, $username); 
        //se inserta dos veces para que uno funcione como mail y otro como username
        //se hace de esta manera porque se requiere uno o el otro

        if($uidExists === false){
            header("location: ../login.php?error=wronglogin");
            exit();
        }

        $pwdHashed = $uidExists["usersPWD"];

        $checkPwd = password_verify($password, $pwdHashed);

        if($checkPwd === false){
            header("location: ../login.php?error=wronglogin");
            exit(); 
        }else if($checkPwd === true){
            
            if($username == 'admin'){
                header("location: ../crud/display-user.php"); 
                session_start();
                $_SESSION["usersid"] =  $uidExists["usersID"];
                $_SESSION["usersname"] =  $uidExists["usersName"];
                $_SESSION["usersmail"] = $uidExists["usersMail"];
                exit();

            }else{
                header("location: ../index.php");   
                session_start();
                $_SESSION["usersid"] =  $uidExists["usersID"];
                $_SESSION["usersname"] =  $uidExists["usersName"];
                $_SESSION["usersmail"] = $uidExists["usersMail"];
                exit();
            }
        
            
        }

    }




?>