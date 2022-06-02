<?php
include_once 'header.php';

if(isset($_GET['ID'])){

    require_once './includes/driverDB.inc.php';
    $ID = mysqli_real_escape_string($conn, $_GET['ID']);

    $sql = "SELECT * FROM drivers WHERE driverID='$ID'";
    $result = mysqli_query($conn, $sql) or die();  
    $rowD = mysqli_fetch_array($result);

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
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"/>
    <link rel="stylesheet" href="./stylesheets/drivers.css"/>
    <title><?php echo $rowD['driverName']?></title>
</head>
<body>
    <div class="dynamic-main">
        <div>
            <h1 class="driver-name"><?php echo $rowD['driverName']?></h1>
        </div>
        <div class="content-cont">
            <div class="image-container">
                <img class="driver-portrait" src="./images/drivers/<?php echo $rowD['driverImg']?>" alt="">
            </div>
            <div class="stats">
                <p>Team: <?php echo $rowD['driverTeam']?></p>
                <p>Nationality: <?php echo $rowD['driverCountry']?></p>
                <p>Wins: <?php echo $rowD['driverWins']?></p>
                <p>Points: <?php echo $rowD['driverPts'] ?></p>
                <p>World Championships: <?php echo $rowD['driverChips']?></p>
                <p>Pole Positions: <?php echo $rowD['driverPoles']?></p>
                <p>First Race: <?php echo $rowD['driverFirst']?></p>
            </div>
        </div> 
    </div>
</body>
</html>

