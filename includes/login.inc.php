<?php

if(isset($_POST["submit"])){
    $username = $_POST["uid"];
    $password = $_POST["pwd"];
    
    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    if(emptyInputLogin($username, $password) !== false){
        header("location: ../login.php?error=emptyinput");
        exit();
    }

    loginUser($conn, $username, $password);

    if (!empty($_POST['remember'])) {
        // Duración de la cookie: un día (86400 segundos)
        $expiration = time() + (86400);
        // Crear la cookie con el ID del usuario y la duración
        setcookie('user_id', $results['id'], $expiration, '/');
    }
}
else{
    header("location: ../login.php");
    exit();
}


?>