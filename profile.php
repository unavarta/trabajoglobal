<?php
    include './header.php';
    if(isset($_GET['user'])){

        require_once './includes/driverDB.inc.php';
        $ID = mysqli_real_escape_string($conn, $_GET['user']);
    
        $sql = "SELECT * FROM users WHERE usersName='$ID'";
        $result = mysqli_query($conn, $sql) or die();  
        $row = mysqli_fetch_array($result);
    
    }else{
        header('location: ./index.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./stylesheets/drivers.css"/>
    <title>My Profile</title>
</head>
<body>
<div class="dynamic-main">
        <div class="title-driver">
            <h1 class="driver-name"><?php echo $row['usersName']?></h1>
        </div>
        <div class="content-cont">
            <div class="stats">
                <p><strong>Mail: <?php echo $row["usersMail"]; ?></strong></p>
                <p><strong>Favourite Team: <?php echo $row["favTeam"]; ?></strong></p>
                <p><strong>Favourite Driver: <?php echo $row["favDriver"]; ?></strong></p>
                <button class="info-change" onclick="location.href='./crud/limit-up-user.php?updateid=<?php echo $row['usersID']?>'">Update Info</button>
            </div>
            
            <div>
                <div class="image-container">
                    <img class="driver-portrait" src="./images/profile/<?php echo $row['imgUrl']?>" alt="">
                </div>
            </div>
        </div> 
    </div>
</body>
</html>