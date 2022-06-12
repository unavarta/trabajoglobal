<?php 
  include '../includes/dbh.inc.php';
  $update = $_GET['updateid'];
    $sql = "SELECT * FROM users where usersID=$update";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);

if(isset($_POST['submit'])){
    $driver = $_POST['favDriver'];
    $team = $_POST['favTeam'];
    $image = $_FILES['my-image']['name'];
    $sql = "UPDATE `users` SET usersID=$update, favDriver='$driver', favTeam='$team', imgUrl='$image' where usersID = $update";
    $result = mysqli_query($conn, $sql);
    if($result){
        echo '<script>alert("User updated.");</script>';
        header('location:../profile.php?user='. $row['usersName'] .'');
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
        <form method="post" enctype="multipart/form-data">
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
            <div class="form-group">
                <input type="file" name="my-image">
            </div>
            <button type="submit" class="btn btn-primary" name="submit">Update</button>
        </form>
    </div>
</body>

</html>