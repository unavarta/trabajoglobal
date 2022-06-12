<?php 
  include '../includes/dbh.inc.php';
  $update = $_GET['updateid'];
    $sql = "SELECT * FROM users where usersID=$update";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);

if(isset($_POST['submit'])){
    
    $user = $_POST['username'];
    $email = $_POST['email'];
    $driver = $_POST['favDriver'];
    $team = $_POST['favTeam'];

    $sql = "UPDATE `users` SET usersID=$update, usersName='$user', usersMail='$email', favDriver='$driver', favTeam='$team' where usersID = $update";
    $result = mysqli_query($conn, $sql);
    if($result){
        echo '<script>alert("User updated.");</script>';
        header('location:display-user.php');
    }else{
        die(mysqli_error($conn));
    }
}
?>


<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">

    <title>User Update</title>
</head>

<body>
    <div class="container my-5">
        <form method="post">
            <div class="form-group">
                <label>Username</label>
                <input type="text" class="form-control" placeholder="Enter Username" name="username" autocomplete="off" value="<?php echo $row['usersName']?>">
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="email" class="form-control" placeholder="Enter Email" name="email" autocomplete="off" value="<?php echo $row['usersMail']?>">
            </div>
            <div class="form-group">
                <label>Favourite Driver</label>
                <input type="text" class="form-control" placeholder="Enter favourite driver" name="favDriver"
                    autocomplete="off" value="<?php echo $row['favDriver']?>">
            </div>
            <div class="form-group">
                <label>Favourite Team</label>
                <input type="text" class="form-control" placeholder="Enter favourite team" name="favTeam"
                    autocomplete="off" value="<?php echo $row['favTeam']?>">
            </div>
            <button type="submit" class="btn btn-primary" name="submit">Update</button>
        </form>
    </div>
</body>

</html>