<?php
include '../includes/dbh.inc.php';
if(isset($_GET['deleteid'])){
    $delete = $_GET['deleteid'];

    $sql = "DELETE FROM users WHERE usersID=$delete";
    $result = mysqli_query($conn, $sql);
    if($result){
        echo '<script>alert("User deleted.");</script>';
        header('location:display-user.php');
    }else{
        die(mysqli_error($conn));
    }
}

?>